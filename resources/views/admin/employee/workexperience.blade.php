@extends('admin.employee.create')
@section('workexperience')
<div class="tab-pane fade" id="workexperince" role="tabpanel" aria-labelledby="pills-contact-tab">
    <h3 class="tile-title">Work Experience</h3>
<form action="{{ route('admin.employee.expererinceStore')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" value="{{ $empId }}">
        <div class="tile-body">
            <div class="form-group row">
                <div class=col-md-6>
                    <label class="control-label" for="trname">Countries Of Work Experience <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('coutrywork') is-invalid @enderror" type="text" name="country_work" id="coutrywork" placeholder="Please Type " required/>
                    @error('trname') {{ $message }} @enderror
                </div>
                <div class=col-md-6>
                    <label class="control-label" for="training_deuration">WORK UNDERTAKEN THAT BEST ILLUSTRATES COMPANY TO HANDEL THIS ASSIGNMENT<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('best_work') is-invalid @enderror" type="text" name="best_work" id="best_work" placeholder="Please Type " required/>
                    @error('best_work') {{ $message }} @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class=col-md-6>
                    <label class="control-label" for="company_name">Company Name <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('cm_name') is-invalid @enderror" type="text" name="company_name" id="company_name" placeholder="Please Type " required/>
                    @error('company_name') {{ $message }} @enderror
                </div>
                <div class=col-md-6>
                    <label class="control-label" for="training_deuration"> Position<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('to') is-invalid @enderror" type="text" name="position" id="position" placeholder="Please Type " required/>
                    @error('position') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class=col-md-6>
                    <label class="control-label" for="from">Project Name <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('project_name') is-invalid @enderror" type="text" name="project_name" id="project_name" placeholder="Please Type " required/>
                    @error('project_name') {{ $message }} @enderror
                </div>
                <div class=col-md-6>
                    <label class="control-label" for="training_deuration">My Responsibility<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('to') is-invalid @enderror" type="text" name="responsibility" id="responsibility" placeholder="Please Type " required/>
                    @error('responsibility') {{ $message }} @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class=col-md-6>
                    <label class="control-label" for="from">From <span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('from') is-invalid @enderror" type="text" name="from" id="from" placeholder="Please Type " required/>
                    @error('from') {{ $message }} @enderror
                </div>
                <div class=col-md-6>
                    <label class="control-label" for="training_deuration"> To<span class="m-l-5 text-danger"> *</span></label>
                    <input class="form-control @error('to') is-invalid @enderror" type="text" name="to" id="to" placeholder="Please Type " required/>
                    @error('to') {{ $message }} @enderror
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
