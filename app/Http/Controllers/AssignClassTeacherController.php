<?php

namespace App\Http\Controllers;

use App\Models\AssignClassTeacher;
use App\Models\ClassModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignClassTeacherController extends Controller
{
    public function list(Request $request)
    {
        $data['getRecord'] = AssignClassTeacher::getRecord();
        $data['header_title'] = 'Assign Class Teacher';
        return view('admin.assign_class_teacher.list', $data);
    }

    public function add()
    {
        $data['getClass'] = ClassModel::getClass();
        $data['getTeacher'] = User::getTeacherClass();
        $data['header_title'] = 'Add Assign Class Teacher';
        return view('admin.assign_class_teacher.add', $data);
    }

    public function insert(Request $request)
    {
        if (!empty($request->teacher_id)) {
            foreach ($request->teacher_id as $teacher_id) {
                $getAlreadyFirst = AssignClassTeacher::getAlreadyFirst($request->class_id, $teacher_id);
                if (!empty($getAlreadyFirst)) {
                    $getAlreadyFirst->status = $request->status;
                    $getAlreadyFirst->save();
                } else {
                    $save = new AssignClassTeacher;
                    $save->class_id = $request->class_id;
                    $save->teacher_id = $teacher_id;
                    $save->status = $request->status;
                    $save->created_by = Auth::user()->id;
                    $save->save();
                }
            }
            return redirect('admin/assign_class_teacher/list')->with('success', "Assign Class to Teacher successfully");
        } else {
            return redirect()->back()->with('error', 'Due to some error please try again');
        }
    }

    public function edit($id)
    {
        $getRecord = AssignClassTeacher::getSingle($id);
        if (!empty($getRecord)) {
            $data['getRecord'] = $getRecord;
            $data['getAssignTeacherId'] = AssignClassTeacher::getAssignTeacherId($getRecord->class_id);
            $data['getClass'] = ClassModel::getClass();
            $data['getTeacher'] = User::getTeacherClass();
            $data['header_title'] = 'Edit Assign Class Teacher';
            return view('admin.assign_class_teacher.edit', $data);
        } else {
            abort(404);
        }
    }

    public function update($id, Request $request)
    {
        AssignClassTeacher::deleteTeacher($request->class_id);

        if (!empty($request->teacher_id)) {
            foreach ($request->teacher_id as $teacher_id) {
                $getAlreadyFirst = AssignClassTeacher::getAlreadyFirst($request->class_id, $teacher_id);
                if (!empty($getAlreadyFirst)) {
                    $getAlreadyFirst->status = $request->status;
                    $getAlreadyFirst->save();
                } else {
                    $save = new AssignClassTeacher;
                    $save->class_id = $request->class_id;
                    $save->teacher_id = $teacher_id;
                    $save->status = $request->status;
                    $save->created_by = Auth::user()->id;
                    $save->save();
                }
            }
        }
        return redirect('admin/assign_class_teacher/list')->with('success', "Assign Class to Teacher successfully");
    }

    public function edit_single($id)
    {
        $getRecord = AssignClassTeacher::getSingle($id);
        if (!empty($getRecord)) {
            $data['getRecord'] = $getRecord;
            $data['getClass'] = ClassModel::getClass();
            $data['getTeacher'] = User::getTeacherClass();
            $data['header_title'] = 'Edit Assign Class Teacher';
            return view('admin.assign_class_teacher.edit_single', $data);
        } else {
            abort(404);
        }
    }

    public function update_single($id, Request $request)
    {
        $getAlreadyFirst = AssignClassTeacher::getAlreadyFirst($request->class_id, $request->teacher_id);
        if (!empty($getAlreadyFirst)) {

            $getAlreadyFirst->status = $request->status;
            $getAlreadyFirst->save();

            return redirect('admin/assign_class_teacher/list')->with('success', "Status successfully Updated");
        } else {
            $save = AssignClassTeacher::getSingle($id);
            $save->class_id = $request->class_id;
            $save->teacher_id = $request->teacher_id;
            $save->status = $request->status;
            $save->save();

            return redirect('admin/assign_class_teacher/list')->with('success', "Assign Class to Teacher successfully Updated");
        }
    }

    public function delete($id)
    {
        $save = AssignClassTeacher::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect('admin/assign_class_teacher/list')->with('warning', "Record successfully Deleted");
    }


    // Teacher Side Work

    public function MyClassSubject(){
        $data['getRecord'] = AssignClassTeacher::getMyClassSubject(Auth::user()->id);
        $data['header_title'] = 'My Class & Subject';
        return view('teacher.my_class_subject', $data);
    }
}
