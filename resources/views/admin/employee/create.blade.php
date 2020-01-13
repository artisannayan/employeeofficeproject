@extends('admin.app')
@section('title')  @endsection
@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-tags">Add Employee</i></h1>
      <p></p>
  </div>
{{-- <a href="{{ route('admin.education.create')}}" class="btn btn-primary pull-right"></a> --}}
</div>
@include('admin.allinfo.message')
<div class="row">
    <div class="col-md-12 col-sm-4 col-lg-12">
    <div class="tile">
     <div class="tile-body">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
              @csrf
                <div class="tile-body">
                    <div class="form-group row">
                      <div class=col-md-6>
                         <label class="control-label" for="lgname">Department Name<span class="m-l-5 text-danger"> *</span></label>
                         <input class="form-control @error('lgname') is-invalid @enderror" type="text" name="lgname" id="lgname" placeholder="Please Type " required/>
                          @error('lgname') {{ $message }} @enderror
                    </div>
                        <div class=col-md-6>
                        <label class="control-label">Status</label>
                        <select name="department_id" id="department_id" placeholder="Select Your Department" class="form-control @error('IsActive') is-invalid @enderror" required>
                           <option>Select Your Department</option>
                           <option value="speak">Permanent</option>
                           <option value="speak">Non Permanent</option>
                        </select>
                              @error('bestWork') {{ $message }} @enderror
                    </div>
              </form>
          </div>
      </div>
  </div>
    <div class="col-md-12 col-sm-4 col-lg-12">

            <div class="tile-body">
                <ul class="text-center nav nav-pills mb-3"  id="pills-tab" role="tablist">
                    <li class="nav-item text-center">
                      <a class=" text-center nav-link active" id="pills-home-tab" data-toggle="pill" href="#personal" role="tab" aria-controls="pills-home" aria-selected="true">Personal Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#membership" role="tab" aria-controls="pills-profile" aria-selected="false">Membership</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#education" role="tab" aria-controls="pills-contact" aria-selected="false">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#training" role="tab" aria-controls="pills-contact" aria-selected="false">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#workexperince" role="tab" aria-controls="pills-contact" aria-selected="false">Workexperince</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#references" role="tab" aria-controls="pills-contact" aria-selected="false">References</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#addphoto" role="tab" aria-controls="pills-contact" aria-selected="false">Add Photograph</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#certification" role="tab" aria-controls="pills-contact" aria-selected="false">Certification</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="pills-home-tab">
                        <h3 class="tile-title">Personal Details</h3>
                    <form action="{{ route('admin.employee.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <div class=col-md-4>
                                    <label class="control-label" for="eid">Employee ID <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('eid') is-invalid @enderror" type="text" name="eid" id="eid" placeholder="Please Type " required/>
                                    @error('eid') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="position">Proposed Position for This Project <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position" placeholder="Please Type " required/>
                                    @error('position') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="name">Stuff of Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Please Type " required/>
                                    @error('name') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="father_name">Father's Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text" name="father_name" id="father_name" placeholder="Please Type " required/>
                                    @error('father_name') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="mother_name">Mother's Name <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text" name="mother_name" id="mother_name" placeholder="Please Type " required/>
                                    @error('mother_name') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="">Brother<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('brother') is-invalid @enderror" type="text" name="brother" id="brother" placeholder="Please Type " required/>
                                    @error('brother') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="sister">Sister <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('sister') is-invalid @enderror" type="text" name="sister" id="sister" placeholder="Please Type " required/>
                                    @error('sister') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-3>
                                    <label class="control-label">Language Name</label>
                                    <input class="form-control @error('LgName') is-invalid @enderror" type="text" name="LgName" id="LgName" placeholder="Please Type " required/>
                                    @error('LgName') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label">Reading</label>
                                    <select name="reading" id="reading" placeholder="Select Your Department" class="form-control @error('IsActive') is-invalid @enderror" required>
                                        <option>Select Your Type</option>
                                        <option value="Good">Good</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Medium">High</option>
                                    </select>
                                    @error('em_id') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label">Speaking</label>
                                    <select name="speaking" id="speaking" placeholder="Select Your Department" class="form-control @error('IsActive') is-invalid @enderror" required>
                                        <option>Select Your Type</option>
                                        <option value="Good">Good</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                    @error('lgname') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label">Writing</label>
                                    <select name="writing" id="writing" placeholder="Select Your Department" class="form-control @error('IsActive') is-invalid @enderror" required>   <option>Select Your Type</option>
                                        <option value="Good">Good</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                    @error('name') {{ $message }} @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class=col-md-3>
                                    <label class="control-label" for="NId">Date Of Birth<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="dob" placeholder="Please Type " required/>
                                    @error('dob') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label" for="religion">Religion <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('blood_group') is-invalid @enderror" type="text" name="religion" id="blood_group" placeholder="Please Type " required/>
                                    @error('religion') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label" for="blood_group">Blood Group <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('blood_group') is-invalid @enderror" type="text" name="blood_group" id="blood_group" placeholder="Please Type " required/>
                                    @error('blood_group') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label" for="NID">National Id Card <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('NID') is-invalid @enderror" type="text" name="NID" id="NID" placeholder="Please Type " required/>
                                    @error('NID') {{ $message }} @enderror
                                </div>
                             </div>
                             <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="height">Height <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('height') is-invalid @enderror" type="text" name="height" id="height" placeholder="Please Type " required/>
                                    @error('height') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="nationality">Nationality<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('nationality') is-invalid @enderror" type="text" name="nationality" id="nationality" placeholder="Please Type " required/>
                                    @error('nationality') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class=col-md-6>
                                <label class="control-label" for="present_address">Present Address<span class="m-l-5 text-danger"> *</span></label>
                                <textarea class="form-control @error('present_address') is-invalid @enderror" name="persent_add" id="present_address" rows="3"></textarea>
                                @error('present_address') {{ $message }} @enderror
                            </div>
                            <div class=col-md-6>
                                <label class="control-label" for="permanent_address">Permanent Address<span class="m-l-5 text-danger"> *</span></label>
                                <textarea class="form-control @error('permanent_address') is-invalid @enderror" name="permanent_add" id="exampleFormControlTextarea1" rows="3"></textarea>
                                @error('permanent_address') {{ $message }} @enderror
                            </div>
                            </div>
                        <div class="tile-footer">
                         <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                           &nbsp;&nbsp;&nbsp;
                         <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                     </div>
                    </form>
                 </div>
                  @yield('membership')
                  @yield('education')
                  @yield('trianing')
                  @yield('workexperience')
                  @yield('references')
                  @yield('addphoto')
                  @yield('certification')
                  {{-- @include('admin.employee.membership') --}}
              {{-- <div class="tab-pane fade" id="membership" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h3 class="tile-title">Membership</h3>
                     <form action=" {{ route('admin.membership.store')}} " method="POST" role="form" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="EmployeeId" value="{{$empId}}">

                        <div class="tile-body">
                            <a action="#"></a>
                            <div class="form-group row">
                                <div class=col-md-10>
                                <label class="control-label" for="details"> MEMBERSHIP IN PROFESSIONAL SOCIETIES <span class="m-l-5 text-danger"> *</span></label>
                                <textarea class="form-control @error('details') is-invalid @enderror" name="details" id="details" rows="3"></textarea>
                                @error('details') {{ $message }} @enderror
                            </div>
                        </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                 </div> --}}


                {{-- <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h3 class="tile-title">Education</h3>
                <form action="{{ route('admin.membership.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="name"> Name of Exam <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('ExamName') is-invalid @enderror" type="text" name="ExamName" id="ExamName" placeholder="Please Type " required/>
                                    @error('ExamName') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="board">Board / Univercity <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('board') is-invalid @enderror" type="text" name="board" id="board" placeholder="Please Type " required/>
                                    @error('board') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-4>
                                    <label class="control-label" for="passing_year">Passing Year<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('passing_year') is-invalid @enderror" type="text" name="passing_year" id="passing_year" placeholder="Please Type " required/>
                                    @error('passing_year') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="mother_name">Group <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('group') is-invalid @enderror" type="text" name="group" id="group" placeholder="Please Type " required/>
                                    @error('group') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="CGPA">C.GPA <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('CGPA') is-invalid @enderror" type="text" name="CGPA" id="CGPA" placeholder="Please Type"/>
                                    @error('CGPA') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
               </div> --}}


               {{-- <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="tile-title">Training</h3>
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group row">
                            <div class=col-md-6>
                                <label class="control-label" for="trname"> Name of Training <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('trname') is-invalid @enderror" type="text" name="trname" id="trname" placeholder="Please Type " required/>
                                @error('trname') {{ $message }} @enderror
                            </div>
                            <div class=col-md-6>
                                <label class="control-label" for="training_deuration"> Training Deuretion<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('training_deuration') is-invalid @enderror" type="text" name="training_deuration" id="training_deuration" placeholder="Please Type " required/>
                                @error('training_deuration') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
              </div> --}}

{{--
              <div class="tab-pane fade" id="workexperince" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="tile-title">Work Experience</h3>
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group row">
                            <div class=col-md-6>
                                <label class="control-label" for="trname">Countries Of Work Experience <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('coutrywork') is-invalid @enderror" type="text" name="coutrywork" id="coutrywork" placeholder="Please Type " required/>
                                @error('trname') {{ $message }} @enderror
                            </div>
                            <div class=col-md-6>
                                <label class="control-label" for="training_deuration">WORK UNDERTAKEN THAT BEST ILLUSTRATES COMPANY TO HANDEL THIS ASSIGNMENT<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('betwork') is-invalid @enderror" type="text" name="betwork" id="betwork" placeholder="Please Type " required/>
                                @error('betwork') {{ $message }} @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=col-md-6>
                                <label class="control-label" for="cm_name">Company Name <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('cm_name') is-invalid @enderror" type="text" name="cm_name" id="cm_name" placeholder="Please Type " required/>
                                @error('cm_name') {{ $message }} @enderror
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
                                <input class="form-control @error('projct_name') is-invalid @enderror" type="text" name="projct_name" id="projct_name" placeholder="Please Type " required/>
                                @error('projct_name') {{ $message }} @enderror
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
              </div> --}}


              {{-- <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="tile-title">References</h3>
                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="tile-body">
                            <div class="form-group row">
                                <div class=col-md-4>
                                    <label class="control-label" for="trname">Company Name <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('coutrywork') is-invalid @enderror" type="text" name="coutrywork" id="coutrywork" placeholder="Please Type " required/>
                                    @error('trname') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="training_deuration"> References Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('betwork') is-invalid @enderror" type="text" name="betwork" id="betwork" placeholder="Please Type " required/>
                                    @error('betwork') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="training_deuration">Position<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('to') is-invalid @enderror" type="text" name="position" id="position" placeholder="Please Type " required/>
                                    @error('position') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="cm_name">Comtact Number <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('cm_name') is-invalid @enderror" type="text" name="cm_name" id="cm_name" placeholder="Please Type " required/>
                                    @error('cm_name') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="training_deuration"> Address / Details<span class="m-l-5 text-danger"> *</span></label>
                                    <textarea class="form-control @error('blood_group') is-invalid @enderror" name="permanent_address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    @error('position') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                            &nbsp;&nbsp;&nbsp;
                            <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
              </div> --}}

              {{-- <div class="tab-pane fade" id="addphoto" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="tile-title">Add Photograph</h3>
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group row">
                            <div class=col-md-6>
                                <label class="control-label" for="training_deuration"> Add Your Photo<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('betwork') is-invalid @enderror" type="file" name="image" id="betwork" placeholder="Please Type " required/>
                                @error('betwork') {{ $message }} @enderror
                            </div>
                            <div class=col-md-6>
                                <label class="control-label" for="training_deuration">Your Signature<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('to') is-invalid @enderror" type="file" name="signature" id="position" placeholder="Please Type " required/>
                                @error('position') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
              </div> --}}


              {{-- <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="tile-title">Certification</h3>
                    <form action="" method="POST" role="form"  id="myform" enctype="multipart/form-data">
                        @csrf
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
                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                </div> --}}

             </div>
          </div>
       </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    var i = 1;
    $("#add").click(function(){
       i++;
     $("#dynamiclyfield")
    });
  });
</script>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
