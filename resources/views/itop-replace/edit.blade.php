@extends('main')
@push('title')
<title>Edit Replace Data | EN PT</title>
@endpush

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('itop-replace.index') }}">Itop Replace</a></li>
                    <li class="breadcrumb-item active">Edit Data</li>
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
                        <h3 class="card-title">Edit Replace Data</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form action="{{ route('itop-replace.update', $editData->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                {{-- RSO Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="rso_name">RSO Name</label>
                                        <input type="text" name="rso_name" value="{{ $editData->rso_name }}" class="form-control" id="rso_name"
                                            placeholder="Enter RSO Name">
                                        @error('rso_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- RSO Itop Number --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="rso_itop">RSO Itop Number</label>
                                        <input type="number" name="rso_itop" value="{{ $editData->rso_itop }}" class="form-control" id="rso_itop"
                                            placeholder="Enter RSO Itop Number">
                                        @error('rso_itop')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Replace Itop Number --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="rep_itop">Replace Itop Number</label>
                                        <input type="number" name="rep_itop" value="{{ $editData->rep_itop }}" class="form-control" id="rep_itop"
                                            placeholder="Enter Replace Itop Number">
                                        @error('rep_itop')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- EV SWAP Number --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="ev_swap">EV SWAP Number</label>
                                        <input type="number" name="ev_swap" value="{{ $editData->ev_swap }}" class="form-control" id="ev_swap"
                                            placeholder="Enter EV SWAP Number">
                                        @error('ev_swap')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Balance --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="balance">Balance</label>
                                        <input type="number" name="balance" value="{{ $editData->balance }}" class="form-control" id="balance"
                                            placeholder="Enter Balance">
                                        @error('balance')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Status --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option {{ $editData->status===0 ? 'selected' : '' }} value="0">Processing</option>
                                            <option {{ $editData->status===1 ? 'selected' : '' }} value="1">Paid</option>
                                            <option {{ $editData->status===2 ? 'selected' : '' }} value="2">Due</option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Replace Reason --}}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="rep_reason">Replace Reason</label>
                                        <textarea class="form-control" name="rep_reason" id="rep_reason" cols="30" rows="4" placeholder="Why you replace this number?">{{ $editData->rep_reason }}</textarea>
                                        @error('rep_reason')
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
