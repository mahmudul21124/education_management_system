<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignClassTeacherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ClassSubjectController;
use App\Http\Controllers\ClassTimetableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExaminationsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'AuthLogin'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('forgot-password', [AuthController::class, 'forgotpassword'])->name('forgot-password');
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword'])->name('post-forgot-password');
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'PostReset'])->name('PostReset');


// Middleware
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    
    Route::get('admin/admin/list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('admin/admin/add', [AdminController::class, 'add'])->name('admin.add');
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

    // Teacher 
    Route::get('admin/teacher/list', [TeacherController::class, 'list'])->name('teacher.list');
    Route::get('admin/teacher/add', [TeacherController::class, 'add'])->name('teacher.add');
    Route::post('admin/teacher/add', [TeacherController::class, 'insert']);
    Route::get('admin/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('admin/teacher/edit/{id}', [TeacherController::class, 'update']);
    Route::get('admin/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');

    // Student 
    Route::get('admin/student/list', [StudentController::class, 'list'])->name('student.list');
    Route::get('admin/student/add', [StudentController::class, 'add'])->name('student.add');
    Route::post('admin/student/add', [StudentController::class, 'insert']);
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('admin/student/edit/{id}', [StudentController::class, 'update']);
    Route::get('admin/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

    // Class Routes
    Route::get('admin/class/list', [ClassController::class, 'list'])->name('class.list');
    Route::get('admin/class/add', [ClassController::class, 'add'])->name('class.add');
    Route::post('admin/class/add', [ClassController::class, 'insert']);
    Route::get('admin/class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
    Route::post('admin/class/edit/{id}', [ClassController::class, 'update']);
    Route::get('admin/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');

    // Subject Routes
    Route::get('admin/subject/list', [SubjectController::class, 'list'])->name('subject.list');
    Route::get('admin/subject/add', [SubjectController::class, 'add'])->name('subject.add');
    Route::post('admin/subject/add', [SubjectController::class, 'insert']);
    Route::get('admin/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
    Route::post('admin/subject/edit/{id}', [SubjectController::class, 'update']);
    Route::get('admin/subject/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');

    // Assign_subject Routes
    Route::get('admin/assign_subject/list', [ClassSubjectController::class, 'list'])->name('assign_subject.list');
    Route::get('admin/assign_subject/add', [ClassSubjectController::class, 'add'])->name('assign_subject.add');
    Route::post('admin/assign_subject/add', [ClassSubjectController::class, 'insert']);
    Route::get('admin/assign_subject/edit/{id}', [ClassSubjectController::class, 'edit'])->name('assign_subject.edit');
    Route::post('admin/assign_subject/edit/{id}', [ClassSubjectController::class, 'update']);
    Route::get('admin/assign_subject/delete/{id}', [ClassSubjectController::class, 'delete'])->name('assign_subject.delete');
    Route::get('admin/assign_subject/edit_single/{id}', [ClassSubjectController::class, 'edit_single'])->name('assign_subject.edit_single');
    Route::post('admin/assign_subject/edit_single/{id}', [ClassSubjectController::class, 'update_single']);

    // Class Timetable Routes
    Route::get('admin/class_timetable/list', [ClassTimetableController::class, 'list'])->name('class_timetable.list');
    Route::post('admin/class_timetable/get_subject', [ClassTimetableController::class, 'get_subject']);
    Route::post('admin/class_timetable/add', [ClassTimetableController::class, 'insert_update']);
    

    
    // Assign Class Teacher Routes
    Route::get('admin/assign_class_teacher/list', [AssignClassTeacherController::class, 'list'])->name('assign_class_teacher.list');
    Route::get('admin/assign_class_teacher/add', [AssignClassTeacherController::class, 'add'])->name('assign_class_teacher.add');
    Route::post('admin/assign_class_teacher/add', [AssignClassTeacherController::class, 'insert']);
    Route::get('admin/assign_class_teacher/edit/{id}', [AssignClassTeacherController::class, 'edit'])->name('assign_class_teacher.edit');
    Route::post('admin/assign_class_teacher/edit/{id}', [AssignClassTeacherController::class, 'update']);
    Route::get('admin/assign_class_teacher/delete/{id}', [AssignClassTeacherController::class, 'delete'])->name('assign_class_teacher.delete');
    Route::get('admin/assign_class_teacher/edit_single/{id}', [AssignClassTeacherController::class, 'edit_single'])->name('assign_class_teacher.edit_single');
    Route::post('admin/assign_class_teacher/edit_single/{id}', [AssignClassTeacherController::class, 'update_single']);

    // Examination 
    Route::get('admin/examinations/exam/list', [ExaminationsController::class, 'exam_list'])->name('exam.list');
    Route::get('admin/examinations/exam/add', [ExaminationsController::class, 'exam_add'])->name('exam.add');
    Route::post('admin/examinations/exam/add', [ExaminationsController::class, 'exam_insert']);
    Route::get('admin/examinations/exam/edit/{id}', [ExaminationsController::class, 'exam_edit'])->name('exam.edit');
    Route::post('admin/examinations/exam/edit/{id}', [ExaminationsController::class, 'exam_update']);
    Route::get('admin/examinations/exam/delete/{id}', [ExaminationsController::class, 'exam_delete'])->name('exam.delete');

    Route::get('admin/examinations/exam_schedule', [ExaminationsController::class, 'exam_schedule'])->name('exam_schedule');
    Route::post('admin/examinations/exam_schedule_insert', [ExaminationsController::class, 'exam_schedule_insert']);
});

Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('teacher/my_class_subject', [AssignClassTeacherController::class, 'MyClassSubject']);
    Route::get('teacher/my_student', [StudentController::class, 'MyStudent']);
});

Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('student/my_subject', [SubjectController::class, 'MySubject']);
    Route::get('student/my_timetable', [ClassTimetableController::class, 'MyTimetable']);
    Route::get('student/my_exam_timetable', [ExaminationsController::class, 'MyExamTimetable']);
});

Route::group(['middleware' => 'parent'], function () {
    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
});
