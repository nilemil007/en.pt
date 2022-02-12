@extends('main')

@section('itop-replace-menu-open') @endsection
@section('itop-replace-active')active @endsection
@section('itop-replace-menu-active')active @endsection

@push('title')
<title>Itop Replace | EN PT</title>
@endpush

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Itop Replace</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Itop Replace</li>
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
                    <h3 class="card-title">Replace Detail's</h3>
                    <a href="{{ route('itop-replace.create') }}">
                        <button class="btn btn-sm btn-primary ml-auto d-block"><i class="fas fa-plus"></i> Add
                            New</button>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table id="replace-tbl" class="table table-hover text-nowrap table-bordered table-striped mb-2">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>RSO Name</th>
                                <th>RSO Itop</th>
                                <th>Replace Itop</th>
                                <th>SWAP Serial</th>
                                <th>Status</th>
                                <th style="width: 107px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($itopReplaceCount > 0)
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($getData as $itopReplace)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $itopReplace->rso_name }}</td>
                                <td>{{ $itopReplace->rso_itop }}</td>
                                <td>{{ $itopReplace->rep_itop }}</td>
                                <td>{{ $itopReplace->ev_swap }}</td>
                                <td>
                                    @switch($itopReplace->status)
                                    @case(0)
                                    <span class="badge bg-warning">Processing</span>
                                    @break

                                    @case(1)
                                    <span class="badge bg-success">Paid</span>
                                    @break

                                    @case(2)
                                    <span class="badge bg-danger">Due</span>
                                    @break

                                    @default

                                    @endswitch
                                </td>
                                <td>
                                    <a href="{{ route('itop-replace.show', $itopReplace->id) }}">
                                        <button class="btn btn-sm btn-info">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="{{ route('itop-replace.edit', $itopReplace->id) }}">
                                        <button class="btn btn-sm btn-primary"><i class="far fa-edit"></i></button>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger deleteReplace">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                    {{-- <form class="ml-1" action="{{ route('itop-replace.destroy', $itopReplace->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    </form> --}}

                                </td>
                            </tr>
                            @endforeach

                            @else
                            <tr>
                                <td class="text-center" colspan="7">
                                  <h5>No data found</h5>
                                </td>
                              </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->

    <!-- / Modal -->
    @isset($itopReplace)
    <x-modal title="Delete Itop Replace Record" desc="Are you sure you want to delete this record?" action="{{route('itop-replace.destroy', $itopReplace->id)}}"/>
    @endisset
<!-- / End Modal -->
</section>
<!-- /.content -->
@endsection