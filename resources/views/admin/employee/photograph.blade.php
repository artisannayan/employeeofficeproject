@extends('admin.employee.create')
@section('addphoto')
<div class="tab-pane fade" id="addphoto" role="tabpanel" aria-labelledby="pills-contact-tab">
    <h3 class="tile-title">Add Photograph</h3>
<form action="{{ route('admin.employee.phographStore')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" value="{{$empId}}">
        <div class="tile-body">
            <div class="form-group row">
                <div class=col-md-6>
                    <label class="control-label" for="image"> Add Your Photo<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" placeholder="Please Type " required/>
                    @error('image') {{ $message }} @enderror
                </div>
                {{-- <div class=col-md-6>
                    <label class="control-label" for="training_deuration">Your Signature<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('to') is-invalid @enderror" type="file" name="signature" id="position" placeholder="Please Type " required/>
                    @error('position') {{ $message }} @enderror
                </div> --}}
            </div>
        </div>

        <div class="tile-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        </div>
    </form>
  </div>

@endsection

