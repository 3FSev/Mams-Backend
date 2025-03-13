<?php

namespace App\Http\Controllers;

use App\Models\RSy;
use App\Models\TSySem;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class SySemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolYears = RSy::with('t_sy_sems')->get();
        return response()->json($schoolYears);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'schoolYear' => 'required|integer',
                'semester' => 'required|string',
                'code' => 'required|string|unique:t_sy_sem,CODE',
            ]);
        } catch (ValidationException $e) {
            $firstError = $e->validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $e->validator->errors(),
            ], 422);
        }

        try {
            $semester = TSySem::create([
                'CODE' => $validatedData['code'],
                'SY' => $validatedData['schoolYear'],
                'TERM' => $validatedData['semester'],
            ]);

            return response()->json([
                'message' => 'School semester created successfully',
                'data' => $semester,
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed to create school semester',
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schoolSem = TSySem::where('ID', $id)->first();

        if (!$schoolSem) {
            return response()->json(['message' => 'School semester not found.'], 404);
        }
        $schoolSem->delete();
        return response()->json(['message' => 'School semester deleted successfully.'], 200);
    }

    /**
     * Update status to present
     */
    public function makePresent(Request $request)
    {
        // Validate request data
        $request->validate([
            'id' => 'required|integer',
        ]);

        // Find the current "Present" record and update it to "Used"
        $presentRSy = TSySem::where('STATUS', 'Present')->first();

        if ($presentRSy) {
            $presentRSy->STATUS = 'Used';
            $presentRSy->save();
        }

        // Find the record with the provided code and update its status to "Present"
        $newPresentRSy = TSySem::where('ID', $request->id)->first();

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
