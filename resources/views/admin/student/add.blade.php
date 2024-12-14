@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Student</h1>
                    </div>
                    
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New Student</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>First Name <span style="color: red">*</span></label>
                                            <input type="text" name="name" value="{{old('name')}}" required class="form-control"
                                                placeholder="Enter First Name">
                                                <div style="color: red">{{$errors->first('name')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Last Name <span style="color: red">*</span></label>
                                            <input type="text" name="last_name" value="{{old('last_name')}}" required class="form-control"
                                                placeholder="Enter Last Name">
                                                <div style="color: red">{{$errors->first('last_name')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Admission Number <span style="color: red">*</span></label>
                                            <input type="text" name="admission_number" value="{{old('admission_number')}}" required class="form-control"
                                                placeholder="Enter Admission number">
                                                <div style="color: red">{{$errors->first('admission_number')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Roll Number <span style="color: red">*</span></label>
                                            <input type="text" name="roll_number" value="{{old('roll_number')}}" class="form-control"
                                                placeholder="Enter Roll number">
                                                <div style="color: red">{{$errors->first('roll_number')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Class <span style="color: red">*</span></label>
                                            <select name="class_id" required class="form-control">
                                                <option value="">Select One</option>
                                                @foreach ($getClass as $class)
                                                <option {{ (old('class_id') == $class->id) ? 'selected' : ' '}} value="{{$class->id}}">{{$class->name}}</option>
                                                @endforeach
                                            </select>
                                            <div style="color: red">{{$errors->first('class_id')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Gender <span style="color: red">*</span></label>
                                            <select name="gender" required class="form-control">
                                                <option value="">Select One</option>
                                                <option {{ (old('gender') == 'Male') ? 'selected' : ' '}} value="Male">Male</option>
                                                <option {{ (old('gender') == 'Female') ? 'selected' : ' '}} value="Female">Female</option>
                                            </select>
                                            <div style="color: red">{{$errors->first('gender')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Date of birth <span style="color: red">*</span></label>
                                            <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}" required class="form-control">
                                            <div style="color: red">{{$errors->first('date_of_birth')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Religion <span style="color: red"></span></label>
                                            <input type="text" name="religion" value="{{old('religion')}}" required class="form-control"
                                                placeholder="Enter Religion">
                                                <div style="color: red">{{$errors->first('religion')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Mobile number <span style="color: red"></span></label>
                                            <input type="text" name="mobile_number" value="{{old('mobile_number')}}" required class="form-control"
                                                placeholder="Enter Mobile Number">
                                                <div style="color: red">{{$errors->first('mobile_number')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Admission Date <span style="color: red">*</span></label>
                                            <input type="date" name="admission_date" value="{{old('admission_date')}}" required class="form-control">
                                            <div style="color: red">{{$errors->first('admission_date')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Profile Pic <span style="color: red"></span></label>
                                            <input type="file" name="profile_pic" class="form-control">
                                            <div style="color: red">{{$errors->first('profile_pic')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Blood Group <span style="color: red"></span></label>
                                            <input type="text" name="blood_group" value="{{old('blood_group')}}" required class="form-control"
                                                placeholder="Enter Blood Group">
                                                <div style="color: red">{{$errors->first('blood_group')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Status <span style="color: red">*</span></label>
                                            <select name="status" required class="form-control">
                                                <option value="">Select One</option>
                                                <option {{ (old('status') == 0) ? 'selected' : ' '}} value="0">Active</option>
                                                <option {{ (old('status') == 1) ? 'selected' : ' '}} value="1">Inactive</option>
                                            </select>
                                            <div style="color: red">{{$errors->first('status')}}</div>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label>Email address <span style="color: red">*</span></label>
                                        <input type="email" name="email" value="{{old('email')}}" required class="form-control"
                                            placeholder="Enter email">
                                        <div style="color: red">{{$errors->first('email')}}</div>    
                                    </div>

                                    <div class="form-group">
                                        <label>Password <span style="color: red">*</span></label>
                                        <input type="password" name="password" required class="form-control"
                                            placeholder="Password">
                                    </div>
                                    
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                       
                    </div>
                    
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
