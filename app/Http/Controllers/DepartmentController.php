<?php

namespace App\Http\Controllers;

use App\Models\RCollege;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fields = $request->query('fields');
        $includeCampus = $request->query('include_campus', false);
        $campusFields = $request->query('campus_fields');
        $includeUser = $request->query('include_user', false);
        $userFields = $request->query('user_fields');

        $query = RCollege::query();

        if ($includeCampus === 'true') {
            $query->with('r_campus');
        }

        if ($includeUser === 'true') {
            $query->with('r_user');
        }

        $departments = $query->get();

        $departments = $departments->map(function ($department) use ($fields, $campusFields, $userFields) {
            $filteredData = [];

            if ($fields) {
                $fieldsArray = explode(',', $fields);
                $filteredData = $department->only($fieldsArray);
            } else {
                $filteredData = $department->toArray();
            }

            if ($department->relationLoaded('r_campus') && $campusFields) {
                $campusFieldsArray = explode(',', $campusFields);
                $filteredData['r_campus'] = $department->r_campus->only($campusFieldsArray);
            } elseif ($department->relationLoaded('r_campus')) {
                $filteredData['r_campus'] = $department->r_campus;
            }

            if ($department->relationLoaded('r_user') && $userFields) {
                $userFieldsArray = explode(',', $userFields);
                $filteredData['r_user'] = $department->r_user->only($userFieldsArray);
            } elseif ($department->relationLoaded('r_user')) {
                $filteredData['r_user'] = $department->r_user;
            }

            return $filteredData;
        });

        return response()->json($departments);
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
