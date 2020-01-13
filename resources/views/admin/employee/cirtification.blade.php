@extends('admin.employee.create')

@section('certification')
<div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="pills-contact-tab">
    <h3 class="tile-title">Certification</h3>
<form action="{{ route('admin.employee.cirtificationStore')}}" method="POST" role="form"  id="myform" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="emp_id" value="{{ $empId }}">
            <div class="tile-body">
                <div class="form-group row " id="dynamiclyfield">
                    <div class=col-md-6>
                        <label class="control-label" for="training_deuration"> Certificate Name<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('betwork') is-invalid @enderror" type="text" name="image" id="betwork" placeholder="Please Type " required/>
                        @error('betwork') {{ $message }} @enderror
                    </div>
                    <div class=col-md-6>
                        <label class="control-label" for="training_deuration">Upload File<span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('to') is-invalid @enderror" type="file" name="documention" id="position" placeholder="Please Type " required/>
                        @error('position') {{ $message }} @enderror
                    </div>
                </div>
            </div>
            {{-- <button type="submit" class="btn btn-success text-right" id="add">Add More</button> --}}
                                <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add More Certification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row " id="dynamiclyfield">
                        <div class=col-md-6>
                            <label class="control-label" for="training_deuration"> Certificate Name<span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('betwork') is-invalid @enderror" type="text" name="image" id="betwork" placeholder="Please Type " required/>
                            @error('betwork') {{ $message }} @enderror
                        </div>
                        <div class=col-md-6>
                            <label class="control-label" for="training_deuration">Upload File<span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('to') is-invalid @enderror" type="file" name="documention" id="position" placeholder="Please Type " required/>
                            @error('position') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
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
