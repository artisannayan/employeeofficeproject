@extends('admin.app')
{{-- @section('title') {{ $pageTitle }} @endsection --}}
@section('content')
    <div class="app-title">
        <div>
        <h1><i class="fa fa-tags"></i>Edit Profile Of {{ $data->name }}</h1>
            <p></p>
        </div>
    <a href="{{ route('admin.education.create')}}" class="btn btn-primary pull-right"></a>
    </div>
    @include('admin.partials.flash')
     <h3 class="tile-title">Education</h3>
    <form action="{{ route('admin.employee.educationstore')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            {{-- <input type="hidden" name="emp_id" value="{{ $empId }}"> --}}
            <div class="tile-body">
                <div class="form-group row">
                    <div class=col-md-6>
                        <label class="control-label" for="name"> Name of Exam <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('ExamName') is-invalid @enderror" type="text" name="ExamName" id="ExamName" value="{{ $data->Education->ExamName}}"/>
                        @error('ExamName') {{ $message }} @enderror
                    </div>
                    <div class=col-md-6>
                        <label class="control-label" for="board">Board / Univercity <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('board') is-invalid @enderror" type="text" name="board" id="board" value="{{ $data->Education->board}}"/>
                        @error('board') {{ $message }} @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class=col-md-4>
                        <label class="control-label" for="passing_year">Passing Year<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('passing_year') is-invalid @enderror" type="text" name="passing_year" id="passing_year" value="{{ $data->Education->passing_year}}" />
                        @error('passing_year') {{ $message }} @enderror
                    </div>
                    <div class=col-md-4>
                        <label class="control-label" for="mother_name">Group <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('group') is-invalid @enderror" type="text" name="group" id="group" Value="{{ $data->Education->group}}" />
                        @error('group') {{ $message }} @enderror
                    </div>
                    <div class=col-md-4>
                        <label class="control-label" for="CGPA">C.GPA <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('CGPA') is-invalid @enderror" type="text" name="CGPA" id="CGPA" Value="{{ $data->Education->CGPA}}"/>
                        @error('CGPA') {{ $message }} @enderror
                    </div>
                </div>
            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                &nbsp;&nbsp;&nbsp;
                <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
        </form>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
