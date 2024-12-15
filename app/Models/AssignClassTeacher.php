<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class AssignClassTeacher extends Model
{
    use HasFactory;

    protected $table = 'assign_class_teacher';

    static public function getSingle($id){
        return self::find($id);
    }

    static public function getRecord()
    {
        $return = self::select('assign_class_teacher.*', 'class.name as class_name', 'teacher.name as teacher_name', 'users.name as created_by_name')
            ->join('users as teacher', 'teacher.id', '=', 'assign_class_teacher.teacher_id')
            ->join('class', 'class.id', '=', 'assign_class_teacher.class_id')
            ->join('users', 'users.id', '=', 'assign_class_teacher.created_by');
        $return = $return->where('assign_class_teacher.is_delete', '=', 0)
            ->orderBy('assign_class_teacher.id', 'desc')
            ->paginate(5);

        return $return;
    }

    static public function getAlreadyFirst($class_id, $teacher_id)
    {
        return self::where('class_id', '=', $class_id)->where('teacher_id', '=', $teacher_id)->first();
    }

    static public function getAssignTeacherId($class_id){
        return self::where('class_id', '=', $class_id)->where('is_delete', '=', 0)->get();
    }

    static public function deleteTeacher($class_id){
        return self::where('class_id', '=', $class_id)->delete();
    }

    static public function getMyClassSubject($teacher_id){
        return self::select('assign_class_teacher.*', 'class.name as class_name', 'subject.name as subject_name', 'subject.type as subject_type')
        ->join('class', 'class.id', '=', 'assign_class_teacher.class_id')
        ->join('class_subject', 'class_subject.class_id', '=', 'class.id')
        ->join('subject', 'subject.id', '=', 'class_subject.subject_id')
        ->where('assign_class_teacher.is_delete', '=', 0)
        ->where('assign_class_teacher.status', '=', 0)
        ->where('assign_class_teacher.teacher_id', '=', $teacher_id)
        ->where('subject.is_delete', '=', 0)
        ->where('subject.status', '=', 0)
        ->where('class_subject.is_delete', '=', 0)
        ->where('class_subject.status', '=', 0)
        ->get();
    }
}
