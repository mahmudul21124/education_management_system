<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\ClassSubject;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassSubjectController extends Controller
{
    public function list()
    {
        $data['getRecord'] = ClassSubject::getRecord();

        $data['header_title'] = 'Assign Subject List';
        return view('admin.assign_subject.list', $data);
    }

    public function add()
    {
        $data['getClass'] = ClassModel::getClass();
        $data['getSubject'] = Subject::getSubject();
        $data['header_title'] = 'Add New Assign Subject';
        return view('admin.assign_subject.add', $data);
    }

    public function insert(Request $request)
    {
        if (!empty($request->subject_id)) {
            foreach ($request->subject_id as $subject_id) {
                $getAlreadyFirst = ClassSubject::getAlreadyFirst($request->class_id, $subject_id);
                if (!empty($getAlreadyFirst)) {
                    $getAlreadyFirst->status = $request->status;
                    $getAlreadyFirst->save();
                } else {
                    $save = new ClassSubject;
                    $save->class_id = $request->class_id;
                    $save->subject_id = $subject_id;
                    $save->status = $request->status;
                    $save->created_by = Auth::user()->id;
                    $save->save();
                }
            }
            return redirect('admin/assign_subject/list')->with('success', "Subject successfully Assign to Class");
        } else {
            return redirect()->back()->with('error', 'Due to some error please try again');
        }
    }

    public function edit($id)
    {
        $getRecord = ClassSubject::getSingle($id);
        if (!empty($getRecord)) {
            $data['getRecord'] = $getRecord;
            $data['getAssignSubjectId'] = ClassSubject::getAssignSubjectId($getRecord->class_id);
            $data['getClass'] = ClassModel::getClass();
            $data['getSubject'] = Subject::getSubject();
            $data['header_title'] = 'Edit Assign Subject';
            return view('admin.assign_subject.edit', $data);
        } else {
            abort(404);
        }
    }

    public function update(Request $request)
    {
        ClassSubject::deleteSubject($request->class_id);

        if (!empty($request->subject_id)) {
            foreach ($request->subject_id as $subject_id) {
                $getAlreadyFirst = ClassSubject::getAlreadyFirst($request->class_id, $subject_id);
                if (!empty($getAlreadyFirst)) {
                    $getAlreadyFirst->status = $request->status;
                    $getAlreadyFirst->save();
                } else {
                    $save = new ClassSubject;
                    $save->class_id = $request->class_id;
                    $save->subject_id = $subject_id;
                    $save->status = $request->status;
                    $save->created_by = Auth::user()->id;
                    $save->save();
                }
            }
        }

        return redirect('admin/assign_subject/list')->with('success', "Subject successfully Assign to Class");
    }

    public function delete($id)
    {
        $save = ClassSubject::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect('admin/assign_subject/list')->with('warning', "Record successfully Deleted");
    }

    public function edit_single($id)
    {
        $getRecord = ClassSubject::getSingle($id);
        if (!empty($getRecord)) {
            $data['getRecord'] = $getRecord;
            $data['getClass'] = ClassModel::getClass();
            $data['getSubject'] = Subject::getSubject();
            $data['header_title'] = 'Edit Assign Subject';
            return view('admin.assign_subject.edit_single', $data);
        } else {
            abort(404);
        }
    }

    public function update_single($id, Request $request)
    {
        $getAlreadyFirst = ClassSubject::getAlreadyFirst($request->class_id, $request->subject_id);
        if (!empty($getAlreadyFirst)) {

            $getAlreadyFirst->status = $request->status;
            $getAlreadyFirst->save();

            return redirect('admin/assign_subject/list')->with('success', "Status successfully Updated");
        } 
        else {
            $save = ClassSubject::getSingle($id);
            $save->class_id = $request->class_id;
            $save->subject_id = $request->subject_id;
            $save->status = $request->status;
            $save->save();

            return redirect('admin/assign_subject/list')->with('success', "Subject successfully Assign to Class");
        }
    }
}
