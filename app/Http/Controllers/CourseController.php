<?php

namespace App\Http\Controllers;

use App\Models\RCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fields = $request->query('fields');
        $includeCollege = $request->query('include_college', false);
        $includeDepartment = $request->query('include_department', false);
        $collegeFields = $request->query('college_fields');
        $departmentFields = $request->query('department_fields');

        $query = RCourse::query();

        if ($includeCollege === 'true') {
            $query->with('r_college');
        }

        if ($includeDepartment === 'true') {
            $query->with('r_department');
        }

        $courses = $query->get();

        $courses = $courses->map(function ($course) use ($fields, $collegeFields, $departmentFields) {
            $filteredData = [];
            if ($fields) {
                $fieldsArray = explode(',', $fields);
                $filteredData = $course->only($fieldsArray);
            } else {
                $filteredData = $course->toArray();
            }

            if ($course->relationLoaded('r_college') && $collegeFields) {
                $collegeArray = explode(',', $collegeFields);
                $filteredData['r_college'] = $course->r_college->only($collegeArray);
            } elseif ($course->relationLoaded('r_college')) {
                $filteredData['r_building'] = $course->r_college;
            }

            if ($course->relationLoaded('r_department') && $departmentFields) {
                $deparmentArray = explode(',', $departmentFields);
                $filteredData['r_department'] = $course->r_department->only($deparmentArray);
            } elseif ($course->relationLoaded('r_department')) {
                $filteredData['r_department'] = $course->r_department;
            }

            return $filteredData;
        });

        return response()->json($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
