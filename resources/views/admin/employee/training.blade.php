@extends('admin.employee.create')
@section('trianing')
<div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="pills-contact-tab">
    <h3 class="tile-title">Training</h3>
<form action="{{ route('admin.employee.trainingStore')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" value="{{ $empId }}">
        <div class="tile-body">
            <div class="form-group row">
                <div class=col-md-6>
                    <label class="control-label" for="trname"> Name of Training <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Please Type " required/>
                    @error('trname') {{ $message }} @enderror
                </div>
                <div class=col-md-6>
                    <label class="control-label" for="deration"> Training Deuretion<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('deration') is-invalid @enderror" type="text" name="deration" id="deration" placeholder="Please Type " required/>
                    @error('deration') {{ $message }} @enderror
                </div>
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
