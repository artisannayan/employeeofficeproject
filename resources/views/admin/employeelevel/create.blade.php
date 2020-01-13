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
            <form action="{{ route('admin.employeelevel.store')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Empoluyee Department</label>
                            <select name="department_id" id="department_id"  placeholder="Select Your Option" class="form-control @error('IsActive') is-invalid @enderror" required>
                                <option>Select Your Department</option>
                                @foreach ( $departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="position">Empolyee Position<span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position" placeholder="Please Type " required/>
                            @error('position') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select name="isActive" id="isActive"  placeholder="Select Your Option" class="form-control @error('isActive') is-invalid @enderror" required>
                            <option value="1">Permanent</option>
                            <option value="0">Non Permanent</option>
                        </select>
                        @error('isActive') {{ $message }} @enderror
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
