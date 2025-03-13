<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SySemController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/**
 * School Year
 */
Route::prefix('school_year')->group(function () {
    Route::get('list', [SchoolYearController::class, 'index']);
    Route::post('create', [SchoolYearController::class, 'store']);
    Route::post('make-present', [SchoolYearController::class, 'makePresent']);
    Route::delete('delete/{code}', [SchoolYearController::class, 'destroy']);
    Route::put('edit', [SchoolYearController::class, 'update']);
});

/**
 * Create sem
 */
Route::prefix('create_sem')->group(function () {
    Route::get('list', [SySemController::class, 'index']);
    Route::post('create', [SySemController::class, 'store']);
    Route::post('make-present', [SySemController::class, 'makePresent']);
    Route::delete('delete/{id}', [SySemController::class, 'destroy']);
});

/**
 * Create sem
 */
Route::prefix('faculty_type')->group(function () {
    Route::get('list', [FacultyTypeController::class, 'index']);
    Route::post('create', [FacultyTypeController::class, 'store']);
    Route::put('edit', [FacultyTypeController::class, 'update']);
    Route::delete('delete/{code}', [FacultyTypeController::class, 'destroy']);
});

/** 
 * User account management
 */
Route::prefix('user')->group(function () {
    Route::get('list', [UserAccountController::class, 'index']);
    Route::post('create', [UserAccountController::class, 'store']);
    Route::put('edit/{userId}', [UserAccountController::class, 'update']);
    Route::put('deactivate/{userid}', [UserAccountController::class, 'deactivate']);
    Route::put('activate/{userid}', [UserAccountController::class, 'activate']);
    Route::post('assign/{id}', [UserAccountController::class, 'assign']);
    Route::post('change_pass/{id}', [UserAccountController::class, 'changePass']);
});

/**
 * Campus
 */
Route::prefix('campus')->group(function () {
    Route::get('list', [CampusController::class, 'index']);
    Route::post('create', [CampusController::class, 'store']);
    Route::put('edit', [CampusController::class, 'update']);
    Route::delete('delete/{id}', [CampusController::class, 'destroy']);
});

/**
 * Buildings
 */
Route::prefix('building')->group(function () {
    Route::get('list', [BuildingController::class, 'index']);
    Route::post('create', [BuildingController::class, 'store']);
    Route::put('edit', [BuildingController::class, 'update']);
    Route::delete('delete/{id}', [BuildingController::class, 'destroy']);
});

/**
 * Department
 */
Route::prefix('department')->group(function () {
    Route::get('list', [DepartmentController::class, 'index']);
});

/**
 * Rooms
 */
Route::prefix('room')->group(function () {
    Route::get('list', [RoomController::class, 'index']);
    Route::post('create', [RoomController::class, 'store']);
    Route::put('edit/{id}', [RoomController::class, 'update']);
    Route::delete('delete/{id}', [RoomController::class, 'destroy']);
});

/**
 * Course
 */
Route::prefix('course')->group(function () {
    Route::get('list', [CourseController::class, 'index']);
});
