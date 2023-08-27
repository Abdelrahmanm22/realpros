@extends('layouts.master')
@section('title')
    Edit Plan
@stop

@section('css')

@endsection

@section('page-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Plan {{ $plan->name }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Plans</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Form To Update</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('update.Plan', $plan->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Name Of Plan</label>
                                    <input type="text" name="name" class="form-control" value="{{ $plan->name }}"
                                        placeholder="Enter ...">
                                    @error('name')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Description Of Plan</label>
                                    <textarea name="Description" class="form-control" rows="3" placeholder="Enter ...">{{ $plan->title }}</textarea>
                                    @error('Description')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-check"></i> Service 1</label>
                                    <input type="text" name="Service1" class="form-control is-valid"
                                        value="{{ $plan->service1 }}" placeholder="Enter ...">
                                    @error('Service1')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-check"></i> Service 2</label>
                                    <input type="text" name="Service2" class="form-control is-valid"
                                        value="{{ $plan->service2 }}" placeholder="Enter ...">
                                    @error('Service2')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-check"></i> Service 3</label>
                                    <input type="text" name="Service3" class="form-control is-valid"
                                        value="{{ $plan->service3 }}" placeholder="Enter ...">
                                    @error('Service3')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-check"></i> Service 4</label>
                                    <input type="text" name="Service4" class="form-control is-valid"
                                        value="{{ $plan->service4 }}" placeholder="Enter ...">
                                    @error('Service4')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-check"></i> Service 5</label>
                                    <input type="text" name="Service5" class="form-control is-valid"
                                        value="{{ $plan->service5 }}" placeholder="Enter ...">
                                    @error('Service5')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="fas fa-check"></i> Service 6</label>
                                    <input type="text" name="Service6" class="form-control is-valid"
                                        value="{{ $plan->service6 }}" placeholder="Enter ...">
                                    @error('Service6')
                                        <small class="form-txt text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label>Price</label>
                                <input type="text" value="{{ $plan->price }}" name="price" class="form-control"
                                    placeholder="Enter Price of Plan">
                                @error('price')
                                    <small class="form-txt text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label>Discount</label>
                                <input type="text" value="{{ $plan->discount }}" name="discount" class="form-control"
                                    placeholder="Enter Price of Plan">
                                @error('discount')
                                    <small class="form-txt text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label><i class="far fa-bell"></i> Price Period </label>
                                    <input type="text" class="form-control" name="period"
                                        value="{{ $plan->priceDesc }}" placeholder="Enter ...">
                                </div>
                                @error('period')
                                    <small class="form-txt text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Update</button>
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
