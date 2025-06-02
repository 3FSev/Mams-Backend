<?php

namespace App\Http\Controllers;

use App\Models\RCampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fields = $request->query('fields');
        $includeRUSer = $request->query('include_r_user', false);
        $rUserFields = $request->query('r_user_fields');

        $query = RCampus::query();

        if ($includeRUSer === 'true') {
            $query->with('r_user');
        }

        $campuses = $query->get();

        $campuses = $campuses->map(function ($campus) use ($fields, $rUserFields) {
    $filteredUser = [];

    if ($fields) {
        $fieldsArray = explode(',', $fields);
        $filteredUser = $campus->only($fieldsArray);
    } else {
        $filteredUser = $campus->toArray();
    }

    if ($campus->relationLoaded('r_user') && $campus->r_user) {
        if ($rUserFields) {
            $rUserFieldsArray = explode(',', $rUserFields);
            $filteredUser['r_user'] = $campus->r_user->only($rUserFieldsArray);
        } else {
            $filteredUser['r_user'] = $campus->r_user;
        }
    } elseif ($campus->relationLoaded('r_user')) {
        $filteredUser['r_user'] = null;
    }

    return $filteredUser;
});



        return response()->json($campuses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'campusCode' => 'required|string',
            'campusName' => 'required|string',
            'address' => 'required|string',
            'phone' => 'string',
            'director' => 'required|int'
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $validator->errors(),
            ], 422);
        }

        $validatedData = $validator->validated();

        $campus = RCampus::create([
            'CODE' => $validatedData['campusCode'],
            'NAME' => $validatedData['campusName'],
            'ADDRESS' => $validatedData['address'],
            'TELEPHONE' => $validatedData['phone'],
            'DIRECTOR' => $validatedData['director'],
        ]);

        return response()->json(['message' => 'Campus created successfully!'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|int',
            'campusCode' => 'required|string',
            'campusName' => 'required|string',
            'address' => 'required|string',
            'phone' => 'string',
            'director' => 'required|int'
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $validator->errors(),
            ], 422);
        }

        $campus = RCampus::findOrdFail($request->input('id'));
        $campus->CODE = $request->input('campusCode');
        $campus->NAME = $request->input('campusName');
        $campus->ADDRESS = $request->input('address');
        $campus->TELEPHONE = $request->input('phone');
        $campus->DIRECTOR = $request->input('director');
        $campus->save();

        return response()->json(['message' => 'Campus updated successfully!'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campus = RCampus::where('ID', $id)->first();

        if (!$campus) {
            return response()->json(['message' => 'Campus not found'], 404);
        }

        $campus->delete();
        return response()->json(['message' => 'Campus deleted successfully!'], 200);
    }
}
