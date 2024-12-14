<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Subject::getRecord();

        $data['header_title'] = 'Subject List';
        return view('admin.subject.list', $data);
    }

    public function add()
    {

        $data['header_title'] = 'Add New Subject';
        return view('admin.subject.add', $data);
    }

    public function insert(Request $request)
    {
        //dd($request->all());
        // request()->validate([
        //     'email' => 'required|email|unique:users',
        // ]);

        $save = new Subject();
        $save->name = $request->name;
        $save->status = $request->status;
        $save->type = $request->type;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/subject/list')->with('success', "Subject successfully created");
    }

    public function edit($id)
    {
        $data['getRecord'] = Subject::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'Edit Subject';
            return view('admin.subject.edit', $data);
        } else {
            abort(404);
        }
    }

    public function update($id, Request $request){
        //dd($request->all());

        // request()->validate([
        //     'email' => 'required|email|unique:users,email,'.$id,
        // ]);

        $save = Subject::getSingle($id);
        $save->name = $request->name;
        $save->status = $request->status;
        $save->type = $request->type;
        $save->save();

        return redirect('admin/subject/list')->with('success', "Subject successfully Updated");
    }

    public function delete($id){
        $save = Subject::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect('admin/subject/list')->with('warning', "Subject successfully Deleted");
    }
}
