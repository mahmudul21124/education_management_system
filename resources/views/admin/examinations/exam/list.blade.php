@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Exam List (Total : {{ $getRecord->total() }})</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a href="{{ route('exam.add') }}" class="btn btn-primary">Add new Exam</a>
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
                        <h3 class="card-title">Search Exam</h3>
                    </div>

                    <!-- form start -->
                    <form action="" method="get">
                        <div class="card-body">

                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label>Exam Name</label>
                                    <input type="text" name="name" value="{{ Request::get('name') }}"
                                        class="form-control" placeholder="Enter Exam">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Date</label>
                                    <input type="date" name="date" value="{{ Request::get('date') }}"
                                        class="form-control" placeholder="Enter email">
                                </div>

                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top: 30px">Search</button>
                                    <a href="{{ route('exam.list') }}" class="btn btn-success"
                                        style="margin-top: 30px">Reset</a>
                                </div>

                            </div>

                        </div>

                    </form>
                </div>
                <!-- /.card -->



                <div class="row">

                    <div class="col-md-12">
                        @include('_message')

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Exam List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Exam Name</th>
                                            <th>Note</th>
                                            <th>Created By</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->note }}</td>
                                                <td>{{ $value->created_name }}</td>
                                                <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                                                <td>
                                                    <a href="{{ route('exam.edit', $value->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('exam.delete', $value->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div style="padding: 10px; float: right">
                                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
