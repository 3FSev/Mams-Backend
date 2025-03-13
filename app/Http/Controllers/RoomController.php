<?php

namespace App\Http\Controllers;

use App\Models\RRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fields = $request->query('fields');
        $includeBuilding = $request->query('include_building', false);
        $buildingFields = $request->query('building_fields');
        $includeCourses = $request->query('include_courses', false);
        $courseFields = $request->query('course_fields');

        $query = RRoom::query();

        // Conditionally include the building and courses relationships
        if ($includeBuilding === 'true') {
            $query->with('r_building');
        }

        if ($includeCourses === 'true') {
            $query->with('courses');
        }

        $rooms = $query->get();

        $rooms = $rooms->map(function ($room) use ($fields, $buildingFields, $courseFields) {
            $filteredRoom = [];
            if ($fields) {
                $fieldsArray = explode(',', $fields);
                $filteredRoom = $room->only($fieldsArray);
            } else {
                $filteredRoom = $room->toArray();
            }

            if ($room->relationLoaded('r_building') && $buildingFields) {
                $buildingFieldsArray = explode(',', $buildingFields);
                $filteredRoom['r_building'] = $room->r_building->only($buildingFieldsArray);
            } elseif ($room->relationLoaded('r_building')) {
                $filteredRoom['r_building'] = $room->r_building;
            }

            if ($room->relationLoaded('courses') && $courseFields) {
                $courseFieldsArray = explode(',', $courseFields);
                $filteredRoom['courses'] = $room->courses->map(function ($course) use ($courseFieldsArray) {
                    return $course->only($courseFieldsArray);
                });
            } elseif ($room->relationLoaded('courses')) {
                $filteredRoom['courses'] = $room->courses;
            }

            return $filteredRoom;
        });


        return response()->json($rooms);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), []);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
