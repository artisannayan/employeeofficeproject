@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="tile">
                {{-- <h3 class="tile-title">{{ $subTitle }}</h3> --}}
                <form action="{{ route('admin.employee.update',$employee->id) }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name"> Name <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $employee->name}}"/>
                            @error('ctname') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="position">Position <span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position" value="{{ $employee->position}}" />
                            @error('position') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="father_name">Father's Name<span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('father_name') is-invalid @enderror" type="text" name="father_name" id="father_name" value="{{ $employee->father_name}}" />
                            @error('father_name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="mother_name">Mother's Name <span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('mother_name') is-invalid @enderror" type="text" name="mother_name" id="mother_name" value="{{ $employee->mother_name}}" />
                            @error('mother_name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="brother">Brother <span class="m-l-5 text-danger"> Optional</span></label>
                            <input class="form-control @error('brother') is-invalid @enderror" type="text" name="brother" id="brother" value="{{ $employee->brother}}"/>
                            @error('brother') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="sister">sister <span class="m-l-5 text-danger">  Optional</span></label>
                            <input class="form-control @error('sister') is-invalid @enderror" type="text" name="sister" id="sister" value="{{ $employee->sister}}" />
                            @error('sister') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dob">Date Of Birth <span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="dob"value="{{ $employee->dob}}" />
                            @error('dob') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="religion">Religion <span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('religion') is-invalid @enderror" type="text" name="religion" id="religion"value="{{ $employee->religion}}" />
                            @error('religion') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="NID">NID Number<span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('NID') is-invalid @enderror" type="number" name="NID" id="NID" value="{{ $employee->NID}}" />
                            @error('NID') {{ $message }} @enderror
                        </div><div class="form-group">
                            <label class="control-label" for="blood_group">Blood Group<span class="m-l-5 text-danger"> </span></label>
                            <input class="form-control @error('blood_group') is-invalid @enderror" type="text" name="blood_group" id="blood_group" value="{{ $employee->blood_group}}" />
                            @error('blood_group') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="persent_add">Present Address <span class="m-l-5 text-danger">  </span></label>
                            <textarea class=" form-control @error('persent_add') is-invalid @enderror" rows="20" cols="50" name="persent_add" id="editor"  value="{{ $employee->persent_add}}">
                                {!! $employee->persent_add !!}
                            </textarea>
                            @error('Description') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="permanent_add">Permanet Address <span class="m-l-5 text-danger"></span></label>
                            <textarea class=" form-control @error('permanent_add') is-invalid @enderror" rows="20" cols="50" name="permanent_add" id="editor2"  >
                              {!! $employee->permanent_add !!}
                            </textarea>
                            @error('Description') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="image"> Empolyee Image<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" placeholder="Please Type "/>
                            @error('image') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="IsActive" id="IsActive"  placeholder="Select Your Option" class="form-control @error('IsActive') is-invalid @enderror" required>
                                @if($employee->isActive == 1)
                                <option value="1" > Activated </option>
                                @endif
                                @if($employee->isActive == 0)
                                <option value="0" >Deactivate</option>
                                @endif
                                <option value="1"> Activate </option>
                                <option value="0"> Deactivate </option>
                            </select>
                            @error('IsActive') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.employee.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<!-- <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script> -->
 <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
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
    CKEDITOR.replace( 'editor1', options );
</script>
@endpush
