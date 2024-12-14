@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Teacher</h1>
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
                                <h3 class="card-title">Edit Teacher</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>First Name <span style="color: red">*</span></label>
                                            <input type="text" name="name" value="{{old('name', $getRecord->name)}}" required class="form-control"
                                                placeholder="Enter First Name">
                                                <div style="color: red">{{$errors->first('name')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Last Name <span style="color: red">*</span></label>
                                            <input type="text" name="last_name" value="{{old('last_name', $getRecord->last_name)}}" required class="form-control"
                                                placeholder="Enter Last Name">
                                                <div style="color: red">{{$errors->first('last_name')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Gender <span style="color: red">*</span></label>
                                            <select name="gender" required class="form-control">
                                                <option value="">Select One</option>
                                                <option {{ (old('gender', $getRecord->gender) == 'Male') ? 'selected' : ' '}} value="Male">Male</option>
                                                <option {{ (old('gender', $getRecord->gender) == 'Female') ? 'selected' : ' '}} value="Female">Female</option>
                                            </select>
                                            <div style="color: red">{{$errors->first('gender')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Date of birth <span style="color: red">*</span></label>
                                            <input type="date" name="date_of_birth" value="{{old('date_of_birth', $getRecord->date_of_birth)}}" required class="form-control">
                                            <div style="color: red">{{$errors->first('date_of_birth')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Date of Joining<span style="color: red">*</span></label>
                                            <input type="date" name="admission_date" value="{{old('admission_date', $getRecord->admission_date)}}" required class="form-control">
                                            <div style="color: red">{{$errors->first('admission_date')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Religion <span style="color: red"></span></label>
                                            <input type="text" name="religion" value="{{old('religion', $getRecord->religion)}}" required class="form-control"
                                                placeholder="Enter Religion">
                                                <div style="color: red">{{$errors->first('religion')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Mobile number <span style="color: red"></span></label>
                                            <input type="text" name="mobile_number" value="{{old('mobile_number', $getRecord->mobile_number)}}" required class="form-control"
                                                placeholder="Enter Mobile Number">
                                                <div style="color: red">{{$errors->first('mobile_number')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Merital Status <span style="color: red"></span></label>
                                            <input type="text" name="merital_status" value="{{old('merital_status', $getRecord->merital_status)}}" required class="form-control"
                                                placeholder="Enter Mobile Number">
                                                <div style="color: red">{{$errors->first('merital_status')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Profile Pic <span style="color: red"></span></label>
                                            <input type="file" name="profile_pic" class="form-control">
                                            <div style="color: red">{{$errors->first('profile_pic')}}</div>
                                            @if (!empty($getRecord->getProfile()))
                                                <img src="{{ $getRecord->getProfile() }}" style="width: auto; height: 50px;">
                                                
                                            @endif
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Current Address <span style="color: red">*</span></label>
                                            <textarea name="address" required class="form-control"
                                                placeholder="Enter Current Address">{{old('address', $getRecord->address)}}</textarea>
                                                <div style="color: red">{{$errors->first('address')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Permanent Address <span style="color: red"></span></label>
                                            <textarea name="permanent_address" required class="form-control"
                                                placeholder="Enter Permanent Address">{{old('permanent_address', $getRecord->permanent_address)}}</textarea>
                                                <div style="color: red">{{$errors->first('permanent_address')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Qualification <span style="color: red"></span></label>
                                            <textarea name="qualification" required class="form-control"
                                                placeholder="Enter Qualification">{{old('qualification', $getRecord->qualification)}}</textarea>
                                                <div style="color: red">{{$errors->first('qualification')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Work Experience <span style="color: red"></span></label>
                                            <textarea name="work_experience" required class="form-control"
                                                placeholder="Enter Work Experience">{{old('work_experience', $getRecord->work_experience)}}</textarea>
                                                <div style="color: red">{{$errors->first('work_experience')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Note <span style="color: red"></span></label>
                                            <textarea name="note" required class="form-control"
                                                placeholder="Enter Note">{{old('note', $getRecord->note)}}</textarea>
                                                <div style="color: red">{{$errors->first('note')}}</div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Status <span style="color: red">*</span></label>
                                            <select name="status" required class="form-control">
                                                <option value="">Select One</option>
                                                <option {{ (old('status', $getRecord->status) == 0) ? 'selected' : ' '}} value="0">Active</option>
                                                <option {{ (old('status', $getRecord->status) == 1) ? 'selected' : ' '}} value="1">Inactive</option>
                                            </select>
                                            <div style="color: red">{{$errors->first('status')}}</div>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label>Email address <span style="color: red">*</span></label>
                                        <input type="email" name="email"
                                            value="{{ old('email', $getRecord->email) }}" required class="form-control"
                                            placeholder="Enter email">
                                        <div style="color: red">{{ $errors->first('email') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label>Password <span style="color: red"></span></label>
                                        <input type="text" name="password" class="form-control"
                                            placeholder="Password">
                                        <p>Do you wat to change password so please add new password</p>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
