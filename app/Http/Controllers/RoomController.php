<?php

namespace App\Http\Controllers;

use App\Models\RRoom;
use App\Models\RRoomCourse;
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
        $validator = Validator::make($request->all(), [
            'code' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'required|string',
            'campus' => 'required|int',
            'building' => 'required|int',
            'floor' => 'required|int',
            'scheduleConflict' => 'required',
            'roomType' => 'required|string',
            'capacity' => 'required|int',
        ]);

        if($validator->fails()) {
            $firstError = $validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $validator->errors(),
            ], 422);
        }

        $validatedData = $validator->validated();

        $room = RRoom::create([
            'CODE' => $validatedData['code'],
            'DESCRIPTION' => $validatedData['desc                  ription'],
            'BUILDING' => $validatedData['building'],
            'CAMPUS' => $validatedData['building'],
            'CAPACITY' => $validatedData['capacity'],
            'FLOOR' => $validatedData['floor'],
            'EXLUDE_CONFLICT' => $validatedData['scheduleConflict'],
            'IS_AIRCONDITIONED' => $validatedData['roomType'],
            'NO_OF_STUDENTS' => $validatedData['capacity'],
        ]);

        $roomCourse = RRoomCourse::create([
            
        ]);
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
        $room = RRoom::where('ID', $id)->first();
        $room_course = RRoomCourse::where('ROOM', $id);

        if(!$room) {
            return response()->json(['message' => 'Room not found!'], 404);
        }

        $room->delete();
        return response()->json(['message' => 'Room deleted successfully!'], 200);
    }
}
