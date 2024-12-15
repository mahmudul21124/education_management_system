@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> My Subject </h1>
                    </div>
                   
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                <!-- general form elements -->
                <!-- <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Search Subject</h3>
                    </div>

                   
                    <form action="" method="get">
                        <div class="card-body">

                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{Request::get('name')}}" class="form-control"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Subject Type</label>
                                        <select name="type" class="form-control">
                                            <option value="">Select One</option>
                                            <option {{(Request::get('type') == 'Theory') ? 'selected' : ''}} value="Theory">Theory</option>
                                            <option {{(Request::get('type') == 'Practical') ? 'selected' : ''}} value="Practical">Practical</option>
                                        </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Date</label>
                                    <input type="date" name="date" value="{{Request::get('date')}}" class="form-control"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top: 30px">Search</button>
                                    <a href="{{route('subject.list')}}" class="btn btn-success" style="margin-top: 30px">Reset</a>
                                </div>

                            </div>

                        </div>

                    </form>
                </div> -->
                <!-- /.card -->



                <div class="row">

                    <div class="col-md-12">
                        @include('_message')

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">My Subject</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>SN</th> -->
                                            <th>Subject Name</th>
                                            <th>Subject Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <!-- <td>{{ $loop->iteration }}</td> -->
                                                <td>{{ $value->subject_name }}</td>
                                                <td>{{ $value->subject_type }}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
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
