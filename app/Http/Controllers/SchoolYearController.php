<?php

namespace App\Http\Controllers;

use App\Models\RSy;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class SchoolYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(RSy::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'code' => 'required|integer|unique:r_sy,code',
                'description' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            $firstError = $e->validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $e->validator->errors(),
            ], 422);
        }


        try {
            $schoolYear = RSy::create([
                'CODE' => $validatedData['code'],
                'DESCRIPTION' => $validatedData['description'],
            ]);

            // Return success response
            return response()->json([
                'message' => 'School year created successfully',
                'data' => $schoolYear,
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed to create school year',
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
            'code' => 'required|integer',
            'description' => 'required|string|max:255',
        ]);

        $schoolYear = RSy::where('CODE', $validatedData['code'])->first();

        if (!$schoolYear) {
            return response()->json(['message' => 'School year not found'], 404);
        }

        $schoolYear->CODE = $validatedData['code'];
        $schoolYear->DESCRIPTION = $validatedData['description'];
        $schoolYear->save();

        return response()->json(['message' => 'School year updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $code)
    {
        $schoolYear = RSy::where('code', $code)->first();
        if (!$schoolYear) {
            return response()->json(['message' => 'School year not found.'], 404);
        }
        $schoolYear->delete();
        return response()->json(['message' => 'School year deleted successfully.'], 200);
    }

    /**
     * Update status to present
     */
    public function makePresent(Request $request)
    {
        // Validate request data
        $request->validate([
            'code' => 'required|integer',
        ]);

        // Find the current "Present" record and update it to "Used"
        $presentRSy = RSy::where('STATUS', 'Present')->first();

        if ($presentRSy) {
            $presentRSy->STATUS = 'Used';
            $presentRSy->save();
        }

        // Find the record with the provided code and update its status to "Present"
        $newPresentRSy = RSy::where('CODE', $request->code)->first();

        if ($newPresentRSy) {
            $newPresentRSy->STATUS = 'Present';
            $newPresentRSy->save();

            return response()->json([
                'message' => 'Status updated successfully.',
                'updated_code' => $newPresentRSy->CODE,
            ], 200);
        }

        return response()->json([
            'message' => 'RSy with the given code not found.',
        ], 404);
    }
}
