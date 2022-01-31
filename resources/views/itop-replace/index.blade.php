@extends('main')
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
            <div class="col-12 card">
                <div class="card-header">
                    <h3 class="card-title">Replace Detail's</h3>
                    <a href="{{ route('itop-replace.create') }}">
                        <button class="btn btn-sm btn-primary ml-auto d-block"><i class="fas fa-plus"></i> Add
                            New</button>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-hover text-nowrap table-bordered table-striped mb-2">
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
                            @foreach ($getData as $itopReplace)
                            <tr>
                                <td>{{ $itopReplace->id }}</td>
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

                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#delModal"><i class="far fa-trash-alt"></i></button>

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
                                  <h4>No data found</h4>
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
    <!-- Button trigger modal -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            @isset($itopReplace)
            <form action="{{ route('itop-replace.destroy', $itopReplace->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Itop Replace Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Confirm delete it?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
                    </div>
                </div>
            </form>
            @endisset
        </div>
    </div>
    <!-- End Delete Modal -->
</section>
<!-- /.content -->
@endsection
