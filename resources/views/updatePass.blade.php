@extends('layouts.master')
@section('title')
    Add Admin
@stop

@section('css')

@endsection

@section('page-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Password</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Update Password</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Form To Update Password</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('postPass') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Enter ..." readonly>
                                    @error('name')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter ...">
                                    @error('email')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">

                                    <label>Password</label>
                                    <input id="password"  type="password"
                                        name="password" class="form-control" placeholder="Enter ...">
                                    @error('password')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password" type="password"
                                        name="password_confirmation" class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
@endsection


@section('js')
