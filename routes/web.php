<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



Route::get('/students',function() {
    return view('students');
});

Route::get('students','StudentController@index')-> name('student.index');

Route::get('students/create','StudentController@create')-> name('students.create');

Route::post('students','StudentController@store')-> name('students.store');

// Route::resource('students','StudentController');

//route for faculty
Route::resource('faculty','FacultyController');

//route for semester
Route::resource('semester','SemesterController');

//route for batch
Route::resource('batch','BatchController');
*/
Route::get('/', function () {
    return view('welcome');
});


Route::resource('students','StudentController');
Route::resource('eduinfos','EducationInfoController');
Route::get('student/{student_id}/edu-info/create','EducationInfoController@createEducationInfo')
    ->name('student-eduinfo.create');
Route::resource('faculties','FacultyController');
Route::resource('batches','BatchController');
Route::resource('semesters','SemesterController');
Route::resource('collegeinfos','CollegeInfoController');
Route::get('student/{student_id}/family-info/create','FamilyInfoController@createFamilyInfo')
->name('student-familyinfo.create');
Route::get('student/{student_id}/college-info/create','CollegeInfoController@createCollegeInfo')
->name('student-collegeinfo.create');