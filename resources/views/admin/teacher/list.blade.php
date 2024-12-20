@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Teacher List (Total : {{ $getRecord->total() }})</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a href="{{ route('teacher.add') }}" class="btn btn-primary">Add new Teacher</a>
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
                        <h3 class="card-title">Search Teacher</h3>
                    </div>

                    <!-- form start -->
                    <form action="" method="get">
                        <div class="card-body">

                            <div class="row">

                                <div class="form-group col-md-2">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{Request::get('name')}}" class="form-control"
                                        placeholder="Enter Name">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="{{Request::get('last_name')}}" class="form-control"
                                        placeholder="Enter Last Name">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Email address</label>
                                    <input type="text" name="email" value="{{Request::get('email')}}" class="form-control"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="">Select One</option>
                                        <option {{ (Request::get('gender') == 'Male') ? 'selected' : ' '}} value="Male">Male</option>
                                        <option {{ (Request::get('gender') == 'Female') ? 'selected' : ' '}} value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Religion</label>
                                    <input type="text" name="religion" value="{{Request::get('religion')}}" class="form-control"
                                        placeholder="Enter Religion">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobile_number" value="{{Request::get('mobile_number')}}" class="form-control"
                                        placeholder="Enter Mobile Number">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Merital Status</label>
                                    <input type="text" name="merital_status" value="{{Request::get('merital_status')}}" class="form-control"
                                        placeholder="Enter Merital Status">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Current Address</label>
                                    <input type="text" name="address" value="{{Request::get('address')}}" class="form-control"
                                        placeholder="Enter Current Address">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">Select One</option>
                                        <option {{ (Request::get('status') == 100) ? 'selected' : ' '}} value="100">Active</option>
                                        <option {{ (Request::get('status') == 1) ? 'selected' : ' '}} value="1">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Date of Joining</label>
                                    <input type="date" name="admission_date" value="{{Request::get('admission_date')}}" class="form-control">
                                </div>
                                

                                <div class="form-group col-md-2">
                                    <label>Created Date</label>
                                    <input type="date" name="date" value="{{Request::get('date')}}" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top: 30px">Search</button>
                                    <a href="{{route('teacher.list')}}" class="btn btn-success" style="margin-top: 30px">Reset</a>
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
                                <h3 class="card-title">Teacher List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0" style="overflow: auto">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Profile Pic</th>
                                            <th>Teacher Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Date of Joining</th>
                                            <th>Religion</th>
                                            <th>Mobile Number</th>
                                            <th>Merital Status</th>
                                            <th>Current Address</th>
                                            <th>Permanent Address</th>
                                            <th>Qualification</th>
                                            <th>Work Experience</th>
                                            <th>Note</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if (!empty($value->getProfile()))
                                                        <img src="{{ $value->getProfile() }}"
                                                            style="height: 50; width: 50px; border-radius: 50px">
                                                    @endif
                                                </td>
                                                <td>{{ $value->name }} {{ $value->last_name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->gender }}</td>
                                                <td>
                                                    @if (!empty($value->date_of_birth))
                                                        {{ date('d-m-Y', strtotime($value->date_of_birth)) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (!empty($value->admission_date))
                                                        {{ date('d-m-Y', strtotime($value->admission_date)) }}
                                                    @endif
                                                </td>
                                                <td>{{ $value->religion }}</td>
                                                <td>{{ $value->mobile_number }}</td>
                                                <td>{{ $value->merital_status }}</td>
                                                <td>{{ $value->address }}</td>
                                                <td>{{ $value->permanent_address }}</td>
                                                <td>{{ $value->qualification }}</td>
                                                <td>{{ $value->work_experience }}</td>
                                                <td>{{ $value->note }}</td>
                                                <td>{{ $value->status == 0 ? 'Active' : 'Inactive' }}</td>

                                                <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                                                <td style="min-width: 150px">
                                                    <a href="{{ route('teacher.edit', $value->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="{{ route('teacher.delete', $value->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
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
