@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
            <p></p>
        </div>
    <a href="{{ route('admin.education.create')}}" class="btn btn-primary pull-right">Add Education</a>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12 col-sm-4 col-lg-12">
        <div class="tile">
                <div class="tile-body" style="width:100%;overflow:scroll;">
                    <table class="table table-hover table-bordered" id="sampleTable" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                         <tbody>
                            {{-- @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                   @if($item->image == NULL)
                                          Empty
                                    @else
                                        <img src="{{ asset('image/employee/'.$item->image)}}" width="80">
                                    @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>Civil</td>
                                    <td class="text-center">
                                        @if ($item->isActive == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Deactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.employee.profile', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-desktop" aria-hidden="true"></i></a>
                                            <a href="{{ route('admin.employee.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.employee.delete', $item->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
