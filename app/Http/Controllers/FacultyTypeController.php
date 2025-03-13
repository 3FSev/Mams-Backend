<?php

namespace App\Http\Controllers;

use App\Models\RFacultyType;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class FacultyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fields = $request->query('fields');
        $query = RFacultyType::query();

        $facultyTypes = $query->get();

        if ($fields) {
            $fieldsArray = explode(',', $fields);
            $facultyTypes = $facultyTypes->map(function ($facultyType) use ($fieldsArray) {
                $filteredData = $facultyType->only($fieldsArray);
                return $filteredData;
            });
        }

        return response()->json($facultyTypes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'description' => 'required|string',
                'maxUnitsPartTime' => 'required|integer',
                'maxUnitsRegular' => 'required|integer',
                'maxUnitsTemporaryLoad' => 'required|integer',
            ]);
        } catch (ValidationException $e) {
            $firstError = $e->validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $e->validator->errors(),
            ], 422);
        }

        try {
            $schoolfacultyType = RFacultyType::create([
                'DESCRIPTION' => $validatedData['description'],
                'MAXHR_REG_LOAD' => $validatedData['maxUnitsRegular'],
                'MAXHR_PART_LOAD' => $validatedData['maxUnitsPartTime'],
                'MAXHR_TEMP_LOAD' => $validatedData['maxUnitsTemporaryLoad'],
            ]);

            return response()->json([
                'message' => 'Faculty type created successfully',
                'data' => $schoolfacultyType,
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed to create faculty type',
            ], 500);
        } catch (\Exception $e) {
            // Catch any other general exceptions
            return response()->json([
                'message' => 'An unexpected error occurred',
            ], 500);
        }
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
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'description' => 'required|string',
            'maxUnitsPartTime' => 'required|integer',
            'maxUnitsRegular' => 'required|integer',
            'maxUnitsTemporaryLoad' => 'required|integer',
        ]);

        $facultyType = RFacultyType::where('ID', $validatedData['id'])->first();

        if (!$facultyType) {
            return response()->json(['message' => 'Faculty type not found'], 404);
        }

        $facultyType->DESCRIPTION = $validatedData['description'];
        $facultyType->MAXHR_REG_LOAD = $validatedData['maxUnitsRegular'];
        $facultyType->MAXHR_PART_LOAD = $validatedData['maxUnitsPartTime'];
        $facultyType->MAXHR_TEMP_LOAD = $validatedData['maxUnitsTemporaryLoad'];
        $facultyType->save();

        return response()->json(['message' => 'Faculty type updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $facultyTYpe = RFacultyType::where('ID', $id)->first();
        if (!$facultyTYpe) {
            return response()->json(['message' => 'Faculty type not found.'], 404);
        }
        $facultyTYpe->delete();
        return response()->json(['message' => 'Faculty type deleted successfully.'], 200);
    }
}
