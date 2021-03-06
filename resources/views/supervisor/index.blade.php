@extends('main')

@section('supervisor-menu-open') @endsection
@section('supervisor-active')active @endsection
@section('supervisor-menu-active')active @endsection

@push('title')
    <title>Supervisor | EN PT</title>
@endpush

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Supervisor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Supervisor</li>
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
                <div class="col-12 card pb-2">
                    <div class="card-header mb-3">
                        <h3 class="card-title">Supervisor List</h3>
                        <a href="{{ route('supervisor.create') }}">
                            <button class="btn btn-sm btn-primary ml-auto d-block"><i class="fas fa-plus"></i> Add New
                            </button>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table id="supervisor-tbl" class="table table-hover text-nowrap table-bordered table-striped mb-2">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Supervisor Name</th>
                                <th>Postpaid Number</th>
                                <th>Personal Number</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                                <th style="width: 107px">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if ($supervisorCount < 1)
                                <tr>
                                    <td class="text-center" colspan="7">
                                        <h5>No supervisor assigned</h5>
                                    </td>
                                </tr>
                            @else

                                @php
                                    $i = 1
                                @endphp
                                @foreach ($supervisors as $supervisor)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $supervisor->sup_name }}</td>
                                        <td>{{ $supervisor->sup_number }}</td>
                                        <td>{{ $supervisor->personal_number }}</td>
                                        <td>{{ $supervisor->joining_date }}</td>
                                        <td>
                                            @switch($supervisor->status)
                                                @case(1)
                                                <span class="badge bg-success">Active</span>
                                                @break

                                                @case(0)
                                                <span class="badge bg-danger">Inactive</span>
                                                @break

                                                @default

                                            @endswitch
                                        </td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('supervisor.edit', $supervisor->id) }}">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger deleteSupervisor">
                                                <i class="far fa-trash-alt"></i>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->

        <!-- / Modal -->
        @isset($supervisor)
            <x-modal title="Delete Supervisor Record" desc="Are you sure you want to delete this record?"
                     action="{{route('supervisor.destroy', $supervisor->id)}}"/>
    @endisset
    <!-- / End Modal -->
    </section>
    <!-- /.content -->
@endsection
