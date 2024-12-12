@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Admin</h1>
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
                                <h3 class="card-title">Add New Admin</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{old('name')}}" required class="form-control"
                                            placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" value="{{old('email')}}" required class="form-control"
                                            placeholder="Enter email">
                                        <div style="color: red">{{$errors->first('email')}}</div>    
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
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
