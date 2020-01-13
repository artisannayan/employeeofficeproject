@extends('admin.employee.create')
@section('references')
<div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="pills-contact-tab">
    <h3 class="tile-title">References</h3>
      <form action="{{ route('admin.employee.refereceStore')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="emp_id" value="{{ $empId }}">
             <div class="tile-body">
                <div class="form-group row">
                    <div class=col-md-4>
                        <label class="control-label" for="trname">Company Name <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('ComName') is-invalid @enderror" type="text" name="ComName" id="ComName" placeholder="Please Type " required/>
                        @error('ComName') {{ $message }} @enderror
                    </div>
                    <div class=col-md-4>
                        <label class="control-label" for="training_deuration"> References Name<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('refname') is-invalid @enderror" type="text" name="refname" id="refname" placeholder="Please Type " required/>
                        @error('refname') {{ $message }} @enderror
                    </div>
                    <div class=col-md-4>
                        <label class="control-label" for="training_deuration">Position<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position" placeholder="Please Type " required/>
                        @error('position') {{ $message }} @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class=col-md-6>
                        <label class="control-label" for="contact">Comtact Number <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('contact') is-invalid @enderror" type="text" name="contact" id="contact" placeholder="Please Type " required/>
                        @error('contact') {{ $message }} @enderror
                    </div>
                    <div class=col-md-6>
                        <label class="control-label" for="training_deuration"> Address / Details<span class="m-l-5 text-danger"> *</span></label>
                        <textarea class="form-control @error('Details') is-invalid @enderror" name="Details" id="Details" rows="3"></textarea>
                        @error('Details') {{ $message }} @enderror
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
