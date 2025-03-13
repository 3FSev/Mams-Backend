<?php

namespace App\Http\Controllers;

use App\Models\RAccount;
use App\Models\RFacultyCampusAssignment;
use App\Models\RUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get query parameters for filtering fields
        $fields = $request->query('fields');
        $includeRAccount = $request->query('include_r_account', false);
        $rAccountFields = $request->query('r_account_fields');

        // Create the query for fetching users
        $query = RUser::query();

        // If 'include_r_account' is true, eager load the 'r_account' relationship
        if ($includeRAccount === 'true') {
            $query->with('r_account');
        }

        // Fetch users
        $users = $query->get();

        // If specific fields are requested, filter the user data
        $users = $users->map(function ($user) use ($fields, $rAccountFields) {
            $filteredUser = [];

            if ($fields) {
                $fieldsArray = explode(',', $fields);
                $filteredUser = $user->only($fieldsArray);
            } else {
                $filteredUser = $user->toArray();
            }

            if ($user->relationLoaded('r_account') && $rAccountFields) {
                $rAccountFieldsArray = explode(',', $rAccountFields);
                $filteredUser['r_account'] = $user->r_account->only($rAccountFieldsArray);
            } elseif ($user->relationLoaded('r_account')) {
                $filteredUser['r_account'] = $user->r_account;
            }

            return $filteredUser;
        });


        return response()->json($users);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Separate validation rules for user and account
        $validator = Validator::make($request->all(), [
            // RUser validation rules
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'dob' => 'required|date',
            'placeOfBirth' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'civilStatus' => 'required|string|in:Single,Married,Widowed',
            'nationality' => 'required|string|max:255',
            'presentAddress.region' => 'required|string|max:255',
            'presentAddress.province' => 'required|string|max:255',
            'presentAddress.municipality' => 'required|string|max:255',
            'presentAddress.address' => 'required|string|max:255',
            'presentAddress.zipCode' => 'nullable|string|max:255',
            'permanentAddress.region' => 'required|string|max:255',
            'permanentAddress.province' => 'required|string|max:255',
            'permanentAddress.municipality' => 'required|string|max:255',
            'permanentAddress.address' => 'required|string|max:255',
            'permanentAddress.zipCode' => 'nullable|string|max:255',
            'contactNo' => 'required|string|max:20',
            'email' => 'nullable|email|unique:users,email',
            'religion' => 'nullable|string|max:255',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'bloodType' => 'nullable|string|in:A,B,AB,O',
            'avatarUrl' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3145728',

            // RAccount validation rules
            'position' => 'required|string|in:Administrator,Registrar,Dean,Accountant,Faculty,Cashier',
            'username' => 'required|string|max:255|unique:r_account,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Return validation errors if any
        if ($validator->fails()) {
            $firstError = $validator->errors()->first();

            return response()->json([
                'message' => $firstError,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Create user
        $userData = [
            'FNAME' => $request->input('firstName'),
            'MNAME' => $request->input('middleName'),
            'LNAME' => $request->input('lastName'),
            'DOB' => $request->input('dob'),
            'PLACEOFBIRTH' => $request->input('placeOfBirth'),
            'GENDER' => $request->input('gender'),
            'CIVILSTATUS' => $request->input('civilStatus'),
            'NATIONALITY' => $request->input('nationality'),
            'RESIDENT_REGION' => $request->input('presentAddress.region'),
            'RESIDENT_PROVINCE' => $request->input('presentAddress.province'),
            'RESIDENT_MUNICIPALITY' => $request->input('presentAddress.municipality'),
            'RESIDENT_ADDRESS' => $request->input('presentAddress.address'),
            'RESIDENT_ZIPCODE' => $request->input('presentAddress.zipCode'),
            'PERMANENT_REGION' => $request->input('permanentAddress.region'),
            'PERMANENT_PROVINCE' => $request->input('permanentAddress.province'),
            'PERMANENT_MUNICIPALITY' => $request->input('permanentAddress.municipality'),
            'PERMANENT_ADDRESS' => $request->input('permanentAddress.address'),
            'PERMANENT_ZIPCODE' => $request->input('permanentAddress.zipCode'),
            'CONTACT_NUM' => $request->input('contactNo'),
            'HEIGHT' => $request->input('height'),
            'WEIGHT' => $request->input('weight'),
            'EMAIL' => $request->input('email'),
            'RELIGION' => $request->input('religion'),
            'BLOOD_TYPE' => $request->input('bloodType'),
            'PROFILEPIC' => $request->input('avatarUrl'),
            'DATE_REGISTERED' => now(),
        ];

        $user = RUser::create($userData);

        $accountData = [
            'userid' => $user->ID,
            'usertype' => $request->input('position'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'date_registered' => now(),
        ];
        RAccount::create($accountData);

        return response()->json([
            'message' => 'User and account created successfully',
        ], 201);
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
        // Find the associated account
        $account = RAccount::where('userid', $id)->firstOrFail();
        $user = RUser::where('ID', $id)->firstOrFail();

        $validator = Validator::make($request->all(), [
            // RUser validation rules
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'dob' => 'required|date',
            'placeOfBirth' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'civilStatus' => 'required|string|in:Single,Married,Widowed',
            'nationality' => 'required|string|max:255',
            'presentAddress.region' => 'required|string|max:255',
            'presentAddress.province' => 'required|string|max:255',
            'presentAddress.municipality' => 'required|string|max:255',
            'presentAddress.address' => 'required|string|max:255',
            'presentAddress.zipCode' => 'nullable|string|max:255',
            'permanentAddress.region' => 'required|string|max:255',
            'permanentAddress.province' => 'required|string|max:255',
            'permanentAddress.municipality' => 'required|string|max:255',
            'permanentAddress.address' => 'required|string|max:255',
            'permanentAddress.zipCode' => 'nullable|string|max:255',
            'contactNo' => 'required|string|max:20',
            'email' => 'nullable|email|unique:users,email,' . $user->ID,
            'religion' => 'nullable|string|max:255',
            'height' => 'nullable|string',
            'weight' => 'nullable|string',
            'bloodType' => 'nullable|string|in:A,B,AB,O',
            'avatarUrl' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:3145728',

            // RAccount validation rules
            'position' => 'required|string|in:Administrator,Registrar,Dean,Accountant,Faculty,Cashier',
            'username' => 'required|string|max:255|unique:r_account,username,' . $account->userid . ',userid',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        // Return validation errors if any
        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return response()->json([
                'message' => $firstError,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Update user data
        $userData = [
            'FNAME' => $request->input('firstName'),
            'MNAME' => $request->input('middleName'),
            'LNAME' => $request->input('lastName'),
            'DOB' => $request->input('dob'),
            'PLACEOFBIRTH' => $request->input('placeOfBirth'),
            'GENDER' => $request->input('gender'),
            'CIVILSTATUS' => $request->input('civilStatus'),
            'NATIONALITY' => $request->input('nationality'),
            'RESIDENT_REGION' => $request->input('presentAddress.region'),
            'RESIDENT_PROVINCE' => $request->input('presentAddress.province'),
            'RESIDENT_MUNICIPALITY' => $request->input('presentAddress.municipality'),
            'RESIDENT_ADDRESS' => $request->input('presentAddress.address'),
            'RESIDENT_ZIPCODE' => $request->input('presentAddress.zipCode'),
            'PERMANENT_REGION' => $request->input('permanentAddress.region'),
            'PERMANENT_PROVINCE' => $request->input('permanentAddress.province'),
            'PERMANENT_MUNICIPALITY' => $request->input('permanentAddress.municipality'),
            'PERMANENT_ADDRESS' => $request->input('permanentAddress.address'),
            'PERMANENT_ZIPCODE' => $request->input('permanentAddress.zipCode'),
            'CONTACT_NUM' => $request->input('contactNo'),
            'HEIGHT' => $request->input('height'),
            'WEIGHT' => $request->input('weight'),
            'EMAIL' => $request->input('email'),
            'RELIGION' => $request->input('religion'),
            'BLOOD_TYPE' => $request->input('bloodType'),
            'PROFILEPIC' => $request->input('avatarUrl'),
            'DATE_UPDATED' => now(), // Assuming you want to log when it was updated
        ];


        // Prepare account data
        $accountData = [
            'usertype' => $request->input('position'),
            'username' => $request->input('username'),
        ];

        // Update password only if provided
        if ($request->input('password')) {
            $accountData['password'] = bcrypt($request->input('password'));
        }

        // Update records
        $user->update($userData);
        $account->update($accountData);

        return response()->json([
            'message' => 'User and account updated successfully',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Deactivate user
     */
    public function deactivate(string $userid)
    {
        $account = RAccount::where('userid', $userid)->first();
        if (!$account) {
            return response()->json(['message' => 'Account not found.'], 404);
        }

        $account->status = 'Inactive';
        $account->save();

        return response()->json(['message' => 'Account disabled successfully'], 200);
    }

    /**
     * Activate user
     */
    public function activate(string $userid)
    {
        $account = RAccount::where('userid', $userid)->first();
        if (!$account) {
            return response()->json(['message' => 'Account not found.'], 404);
        }

        $account->status = 'Active';
        $account->save();

        return response()->json(['message' => 'Account enabled successfully'], 200);
    }

    /**
     * Assign faculty
     */
    public function assign(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'campus' => 'required|integer',
            'department' => 'required|integer',
            'facultyType' => 'required|integer',
            'overrideMax' => 'required|boolean',
            'programType' => 'required|string',
            'dateAssigned' => 'required|date',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return response()->json([
                'message' => $firstError,
                'error' => $validator->errors(),
            ], 422);
        }
        $facultyAssigment = new RFacultyCampusAssignment();
        $facultyAssigment->faculty = $id;
        $facultyAssigment->campus = $request->input('campus');
        $facultyAssigment->faculty_type = $request->input('facultyType');
        $facultyAssigment->date_assigned = $request->input('dateAssigned');
        $facultyAssigment->program_type = $request->input('programType');
        $facultyAssigment->emp_status = 0;
        $override = $request->input('overrideMax');
        if ($override === true) {
            $facultyAssigment->conflict_override = 'yes';
        } else {
            $facultyAssigment->conflict_override = 'no';
        }
        $facultyAssigment->save();

        return response()->json(['message' => 'Faculty assignment successfull!'], 200);
    }

    /**
     * Change password
     */
    public function changePass(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string',
            'confirmPassword' => 'required|string|same:password',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return response()->json([
                'message' => $firstError,
                'error' => $validator->errors(),
            ], 422);
        }

        $account = RAccount::findOrFail($id);
        $account->password = bcrypt($request->input('password'));
        $account->save();

        return response()->json(['messsage' => 'Password changed successfully!'], 200);
    }
}
