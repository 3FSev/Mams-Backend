<?php

namespace App\Http\Controllers;

use App\Models\RBuilding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fields = $request->query('fields');
        $includeCampus = $request->query('include_campus', false);
        $campusFields = $request->query('campus_fields');

        $query = RBuilding::query();

        if ($includeCampus === 'true') {
            $query->with('r_campus');
        }

        $buildings = $query->get();

        $buildings = $buildings->map(function ($building) use ($fields, $campusFields) {
            $filteredData = [];

            if ($fields) {
                $fieldsArray = explode(',', $fields);
                $filteredData = $building->only($fieldsArray);
            } else {
                $filteredData = $building->toArray();
            }

            if ($building->relationLoaded('r_campus') && $campusFields) {
                $campusFieldsArray = explode(',', $campusFields);
                $filteredData['r_campus'] = $building->r_campus->only($campusFieldsArray);
            } elseif ($building->relationLoaded('r_campus')) {
                $filteredData['r_campus'] = $building->r_campus;
            }

            return $filteredData;
        });


        return response()->json($buildings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string',
            'description' => 'required|string',
            'campus' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'error' => $validator->errors(),
            ], 422);
        }

        RBuilding::create([
            'CODE' => $request->input('code'),
            'NAME' => $request->input('description'),
            'CAMPUS' => $request->input('campus'),
        ]);

        return response()->json(['message' => 'Building created successfully!'], 200);
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric',
            'code' => 'required|string',
            'description' => 'required|string',
            'campus' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'error' => $validator->errors(),
            ], 422);
        }

        $building = RBuilding::findOrFail($request->input('id'));
        $building->CODE = $request->input('code');
        $building->NAME = $request->input('description');
        $building->CAMPUS = $request->input('campus');
        $building->save();

        return response()->json(['message' => 'Building updated successfully!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $building = RBuilding::findOrFail($id);
        $building->delete();

        return response()->json(['message' => 'Building deleted successfully!'], 200);
    }
}
