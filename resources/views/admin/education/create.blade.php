@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    {{-- @include('admin.partials.flash') --}}
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="tile">
                <h3 class="tile-title"></h3>
            <form action="{{ route('admin.education.store')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name"> Name of Exam <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('NofExam') is-invalid @enderror" type="text" name="NofExam" id="NofExam" placeholder="Please Type " required/>
                            @error('NofExam') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="board">Board / Univercity <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('position') is-invalid @enderror" type="text" name="board" id="board" placeholder="Please Type " required/>
                            @error('board') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="passing_year">Passing Year<span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('passing_year') is-invalid @enderror" type="text" name="passing_year" id="passing_year" placeholder="Please Type " required/>
                            @error('passing_year') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="mother_name">Group <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('group') is-invalid @enderror" type="text" name="group" id="group" placeholder="Please Type " required/>
                            @error('group') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="CGPA">C.GPA <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('brother') is-invalid @enderror" type="text" name="CGPA" id="CGPA" placeholder="Please Type"/>
                            @error('CGPA') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
 <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
 {{-- <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script> --}}
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
    CKEDITOR.replace( 'editor', options );
    CKEDITOR.replace( 'editor2', options );
</script>
@endpush
