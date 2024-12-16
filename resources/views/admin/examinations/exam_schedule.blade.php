@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Exam Schedule</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Exam Schedule</h3>
                    </div>

                    <!-- form start -->
                    <form method="get" action="">
                        <div class="card-body">

                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label>Exam</label>
                                    <select class="form-control getSubject" name="exam_id" required>
                                        <option value="">Select</option>
                                       
                                            @foreach ($getExam as $exam)
                                                <option
                                                    {{ Request::get('exam_id') == $exam->id ? 'selected' : '' }}
                                                    value="{{ $exam->id }}">{{ $exam->name }}</option>
                                            @endforeach
                                       
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Class</label>
                                    <select class="form-control getClass" name="class_id" required>
                                        <option value="">Select</option>
                                        @foreach ($getClass as $class)
                                            <option {{ Request::get('class_id') == $class->id ? 'selected' : '' }}
                                                value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top: 30px">Search</button>
                                    <a href="{{ route('exam_schedule') }}" class="btn btn-success"
                                        style="margin-top: 30px">Reset</a>
                                </div>

                            </div>

                        </div>

                    </form>
                </div>
                <!-- /.card -->

                @include('_message')

                @if (!empty($getRecord))
                    <form action="{{ url('admin/examinations/exam_schedule_insert') }}" method="post">
                        @csrf

                        <input type="hidden" name="exam_id" value="{{ Request::get('exam_id') }}">
                        <input type="hidden" name="class_id" value="{{ Request::get('class_id') }}">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Exam Schedule</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Subject Name</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Room Number</th>
                                            <th>Full Marks</th>
                                            <th>Passing Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="schedule[{{ $i }}][subject_id]"
                                                        value="{{ $value['subject_id'] }}">
                                                    {{ $value['subject_name'] }}
                                                </td>
                                                <td>
                                                    <input type="date" value="{{ $value['subject_id'] }}" name="schedule[{{ $i }}][subject_id]"
                                                    class="form-control">
                                                </td>
                                                <td>
                                                    <input type="time" value="{{ $value['subject_id'] }}" name="schedule[{{ $i }}][subject_id]"
                                                         class="form-control">
                                                </td>
                                                <td>
                                                    <input type="time" value="{{ $value['subject_id'] }}" name="schedule[{{ $i }}][subject_id]"
                                                         class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" style="width: 200px" value="{{ $value['room_number'] }}"
                                                        name="schedule[{{ $i }}][room_number]"
                                                         class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="{{ $value['full_marks'] }}" name="schedule[{{ $i }}][full_marks]"
                                                    >
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="{{ $value['passing_mark'] }}" name="schedule[{{ $i }}][passing_mark]"
                                                    >
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>

                                <div style="text-align: center; padding: 20px">
                                    <button class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>
                @endif

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection


@section('js')
    {{-- <script type="text/javascript">
        $('.getClass').change(function() {
            var class_id = $(this).val();
            console.log(class_id);

            $.ajax({
                url: "{{ url('admin/class_timetable/get_subject') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    class_id: class_id,
                },
                dataType: "json",
                success: function(response) {
                    $('.getSubject').html(response.html);
                },
            });


        });
    </script> --}}
@endsection
