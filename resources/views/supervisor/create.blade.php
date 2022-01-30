@extends('main')
@push('title')
<title>Add New Supervisor | EN PT</title>
@endpush

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add New</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('supervisor.index') }}">Supervisor</a></li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Add New Supervisor</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form action="{{ route('supervisor.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                
                                {{-- Supervisor Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sup_name">Supervisor Name</label>
                                        <input type="text" name="sup_name" value="{{ old('sup_name') }}" class="form-control" id="sup_name"
                                            placeholder="Enter Supervisor Name">
                                        @error('sup_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Postpaid Number --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sup_number">Postpaid Number</label>
                                        <input type="number" name="sup_number" value="{{ old('sup_number') }}" class="form-control" id="sup_number"
                                            placeholder="Enter Postpaid Number">
                                        @error('sup_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Personal Number --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="personal_number">Personal Number</label>
                                        <input type="number" name="personal_number" value="{{ old('personal_number') }}" class="form-control" id="personal_number"
                                            placeholder="Enter Personal Number">
                                        @error('personal_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Joining Date --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="joining_date">Joining Date</label>
                                        <input type="date" name="joining_date" value="{{ old('joining_date') }}" class="form-control" id="joining_date"
                                            placeholder="Enter Joining Date">
                                        @error('joining_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection
