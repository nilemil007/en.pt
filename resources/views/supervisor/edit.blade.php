@extends('main')
@push('title')
<title>Edit Supervisor | EN PT</title>
@endpush

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Supervisor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('supervisor.index') }}">Supervisor</a></li>
                    <li class="breadcrumb-item active">Edit Supervisor</li>
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
                        <h3 class="card-title">Supervisor Data</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form action="{{ route('supervisor.update', $editSupervisor->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">

                                {{-- Supervisor Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sup_name">Supervisor Name</label>
                                        <input type="text" name="sup_name" value="{{ $editSupervisor->sup_name }}" class="form-control" id="sup_name"
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
                                        <input type="number" name="sup_number" value="{{ $editSupervisor->sup_number }}"
                                            class="form-control" id="sup_number" placeholder="Enter Postpaid Number">
                                        @error('sup_number')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Personal Number --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="personal_number">Personal Number</label>
                                        <input type="number" name="personal_number" value="{{ $editSupervisor->personal_number }}"
                                            class="form-control" id="personal_number"
                                            placeholder="Enter Personal Number">
                                        @error('personal_number')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Father Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="father_name">Father Name</label>
                                        <input type="text" name="father_name" value="{{ $editSupervisor->father_name }}"
                                            class="form-control" id="father_name" placeholder="Enter Father Name">
                                        @error('father_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Mother Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="mother_name">Mother Name</label>
                                        <input type="text" name="mother_name" value="{{ $editSupervisor->mother_name }}"
                                            class="form-control" id="mother_name" placeholder="Enter Mother Name">
                                        @error('mother_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Address --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" value="{{ $editSupervisor->address }}"
                                            class="form-control" id="address" placeholder="Enter Address">
                                        @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- NID --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nid">NID Number</label>
                                        <input type="number" name="nid" value="{{ $editSupervisor->nid }}" class="form-control"
                                            id="nid" placeholder="Enter NID Number">
                                        @error('nid')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Date of birth --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="dob">Date Of Birth</label>
                                        <input type="date" name="dob" value="{{ $editSupervisor->dob }}" class="form-control"
                                            id="dob" placeholder="Enter Date Of Birth">
                                        @error('dob')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Joining Date --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="joining_date">Joining Date</label>
                                        <input type="date" name="joining_date" value="{{ $editSupervisor->joining_date }}"
                                            class="form-control" id="joining_date" placeholder="Enter Joining Date">
                                        @error('joining_date')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Status --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option {{ $editSupervisor->status===1 ? 'selected' : '' }} value="1">Active
                                            </option>
                                            <option {{ $editSupervisor->status===0 ? 'selected' : '' }} value="0">Inactive
                                            </option>
                                        </select>
                                        @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-retweet"></i> Update</button>
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
