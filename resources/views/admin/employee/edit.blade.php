@extends('admin.app')
@section('title')  @endsection
@push('css')

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<style>
    /* .A4Size{
        height: 842px;
        width: 595px;
         to centre page on screen
        margin-left: auto;
        margin-right: auto;
    } */

</style>
@endpush
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
            <!--Personal Details Section Start-->
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="pills-home-tab">
                        <h3 class="tile-title">Personal Details</h3>
                    <form action="{{ route('admin.employee.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <div class=col-md-4>
                                    <label class="control-label" for="eid">Employee ID <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('eid') is-invalid @enderror" type="text" name="eid" id="eid" value="{{ $data->eid }}"placeholder="Please Type " required/>
                                    @error('eid') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="position">Proposed Position for This Project <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position"  value="{{ $data->position }}" placeholder="Please Type " required/>
                                    @error('position') {{ $message }} @enderror
                                </div>
                                <div class=col-md-4>
                                    <label class="control-label" for="name">Stuff of Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $data->name }}" placeholder="Please Type " required/>
                                    @error('name') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="father_name">Father's Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text" name="father_name" id="father_name" value="{{ $data->father_name }}" placeholder="Please Type " required/>
                                    @error('father_name') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="mother_name">Mother's Name <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text" name="mother_name" id="mother_name" value="{{ $data->mother_name }}" placeholder="Please Type " required/>
                                    @error('mother_name') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="">Brother<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('brother') is-invalid @enderror" type="text" name="brother" id="brother" value="{{ $data->brother }}" placeholder="Please Type " required/>
                                    @error('brother') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="sister">Sister <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('sister') is-invalid @enderror" type="text" name="sister" id="sister" value="{{ $data->sister }}" placeholder="Please Type " required/>
                                    @error('sister') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=col-md-3>
                                    <label class="control-label">Language Name</label>
                                    <input class="form-control @error('LgName') is-invalid @enderror" type="text" name="LgName" id="LgName" value="{{ $data->LgName }}" placeholder="Please Type " required/>
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
                                    <label class="control-label" for="dob">Date Of Birth<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="dob" value="{{ $data->dob }}" placeholder="Please Type " required/>
                                    @error('dob') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label" for="religion">Religion <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('religion') is-invalid @enderror" type="text" name="religion" id="religion" value="{{ $data->religion }}" placeholder="Please Type " required/>
                                    @error('religion') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label" for="blood_group">Blood Group <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('blood_group') is-invalid @enderror" type="text" name="blood_group" id="blood_group" value="{{ $data->blood_group }}" placeholder="Please Type " required/>
                                    @error('blood_group') {{ $message }} @enderror
                                </div>
                                <div class=col-md-3>
                                    <label class="control-label" for="NID">National Id Card <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('NID') is-invalid @enderror" type="text" name="NID" id="NID" value="{{ $data->NID }}" placeholder="Please Type " required/>
                                    @error('NID') {{ $message }} @enderror
                                </div>
                             </div>
                             <div class="form-group row">
                                <div class=col-md-6>
                                    <label class="control-label" for="height">Height <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('height') is-invalid @enderror" type="text" name="height" id="height" value="{{ $data->height }}" placeholder="Please Type " required/>
                                    @error('height') {{ $message }} @enderror
                                </div>
                                <div class=col-md-6>
                                    <label class="control-label" for="nationality">Nationality<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('nationality') is-invalid @enderror" type="text" name="nationality" id="nationality" value="{{ $data->nationality }}" placeholder="Please Type " required/>
                                    @error('nationality') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class=col-md-6>
                                <label class="control-label" for="persent_add">Present Address<span class="m-l-5 text-danger"> *</span></label>
                                <textarea class="form-control @error('persent_add') is-invalid @enderror" name="persent_add" id="present_address" rows="3">
                                  {{ $data->persent_add }}
                                </textarea>
                                @error('persent_add') {{ $message }} @enderror
                            </div>
                            <div class=col-md-6>
                                <label class="control-label" for="permanent_add">Permanent Address<span class="m-l-5 text-danger"> *</span></label>
                                <textarea class="form-control @error('permanent_add') is-invalid @enderror" name="permanent_add" id="exampleFormControlTextarea1" rows="3">
                                  {{ $data->permanent_add }}
                                </textarea>
                                @error('permanent_add') {{ $message }} @enderror
                            </div>
                            </div>
                        <div class="tile-footer">
                         <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                           &nbsp;&nbsp;&nbsp;
                         <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                     </div>
                    </form>
                 </div>
              <!--Personal Details Section Start-->
              <!--Membership Section Start-->
                    <div class="tab-pane fade" id="membership" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <h3 class="tile-title">Membership</h3>
                        <form action=" {{ route('admin.employee.membershipStore')}} " method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="emp_id" value="{{ $eid }}">
                            <div class="tile-body">
                                <a action="#"></a>
                                <div class="form-group row">
                                    <div class=col-md-10>
                                    <label class="control-label" for="details"> MEMBERSHIP IN PROFESSIONAL SOCIETIES <span class="m-l-5 text-danger"> *</span></label>
                                    <textarea class="form-control @error('details') is-invalid @enderror" name="details" id="details" rows="3">@if(isset($data->Membership->details)){{ $data->Membership->details }}@endif</textarea>
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
                    </div>
                    <!--Membership Section Start-->

                    <!--Education Section Start-->
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <h3 class="tile-title">Education</h3>
                        <form action="{{ route('admin.employee.educationstore')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                           <input type="hidden" name="emp_id" value="{{ $eid }}">
                            <div class="tile-body">
                                {{-- <div class="form-group row">
                                    <div class=col-md-6>
                                        <label class="control-label" for="name"> Name of Exam <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('ExamName') is-invalid @enderror" type="text" name="ExamName" id="ExamName" @if(isset( $data->Education->ExamName)) value="{{ $data->Education->ExamName }}" @endif placeholder="Please Type " required/>
                                        @error('ExamName') {{ $message }} @enderror
                                    </div>
                                    <div class=col-md-6>
                                        <label class="control-label" for="board">Board / Univercity <span class="m-l-5 text-danger"> *</span></label>
                                        <input class="form-control @error('board') is-invalid @enderror" type="text" name="board" id="board" @if(isset( $data->Education->board)) value="{{ $data->Education->board }}" @endif placeholder="Please Type " required/>
                                        @error('board') {{ $message }} @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class=col-md-4>
                                        <label class="control-label" for="passing_year">Passing Year<span class="m-l-5 text-danger"> *</span></label>
                                        <input class="form-control @error('passing_year') is-invalid @enderror" type="text" name="passing_year" id="passing_year"  @if(isset( $data->Education->passing_year)) value="{{ $data->Education->passing_year }}" @endif placeholder="Please Type " required/>
                                        @error('passing_year') {{ $message }} @enderror
                                    </div>
                                    <div class=col-md-4>
                                        <label class="control-label" for="group">Group <span class="m-l-5 text-danger"> *</span></label>
                                        <input class="form-control @error('group') is-invalid @enderror" type="text" name="group" id="group" @if(isset( $data->Education->passing_year)) value="{{ $data->Education->group }}" @endif  placeholder="Please Type " required/>
                                        @error('group') {{ $message }} @enderror
                                    </div>
                                    <div class=col-md-4>
                                        <label class="control-label" for="CGPA">C.GPA <span class="m-l-5 text-danger"> *</span></label>
                                        <input class="form-control @error('CGPA') is-invalid @enderror" type="text" name="CGPA" id="CGPA" @if(isset( $data->Education->CGPA)) value="{{ $data->Education->CGPA }}" @endif placeholder="Please Type"/>
                                        @error('CGPA') {{ $message }} @enderror
                                    </div>
                                </div> --}}


                                <div class="tile-body">
                                    <div class="row clearfix">
                                        <div class="col-md-12 column">
                                            <table class="table table-bordered table-hover" id="tab_logic">
                                                <thead>
                                                    <tr >
                                                        <th class="text-center">
                                                           Name Of Exam
                                                        </th>
                                                        <th class="text-center">
                                                          Board Of Univercity
                                                        </th>
                                                        <th class="text-center">
                                                            Passing Year
                                                        </th>
                                                        <th class="text-center">
                                                           Group
                                                        </th>
                                                        <th class="text-center">
                                                          C.GPA
                                                         </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id='addr0'>
                                                        <td>
                                                          <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][ExamName]'  placeholder='Name of Training' class="form-control"/>
                                                        </td>
                                                        <td>
                                                          <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][board]' placeholder='Board / Univercity' class="form-control"/>
                                                        </td>
                                                        <td>
                                                            <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][passing_year]' placeholder='Passing Year' class="form-control"/>
                                                          </td>
                                                          <td>
                                                            <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][group]' placeholder='Group ' class="form-control"/>
                                                          </td>
                                                          <td>
                                                            <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][CGPA]' placeholder='CGPA ' class="form-control"/>
                                                          </td>
                                                    </tr>
                                                    <tr id='addr1'></tr>
                                                </tbody>
                                            </table>
                                            <a id="add_row" class="btn btn-primary ml-2 text-white">Add Row</a><a id='delete_row' class="btn btn-danger pull-right text-white">Delete Row</a>
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

                          <!--Education Section End-->
                    <!--Training Section Start-->

                        <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h3 class="tile-title">Training</h3>
                        <form action="{{ route('admin.employee.trainingStore')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="emp_id" value="{{ $eid }}">
                                <div class="tile-body">
                                        <div class="row clearfix">
                                            <div class="col-md-12 column">
                                                <table class="table table-bordered table-hover" id="training_tab">
                                                    <thead>
                                                        <tr >
                                                            <th class="text-center">
                                                                Name of Training
                                                            </th>
                                                            <th class="text-center">
                                                                Training Deuretion
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id='addr01'>
                                                            <td>
                                                                <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][name]'  placeholder='Name of Training' class="form-control"/>
                                                              </td>
                                                              <td>
                                                                <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][deration]' placeholder='Training of Deuration' class="form-control"/>
                                                              </td>
                                                        </tr>
                                                        <tr id='addr1'></tr>
                                                    </tbody>
                                                </table>
                                                <a id="addRow" class="btn btn-primary ml-2 text-white">Add Row</a><a id='delete_row2' class="btn btn-danger pull-right text-white">Delete Row</a>
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

                   <!--Training Section End-->
                   <!--Work Expereince Section Start-->

                    <div class="tab-pane fade" id="workexperince" role="tabpanel" aria-labelledby="pills-contact-tab">

                        <h3 class="tile-title">Work Experience</h3>
                        <form action="{{ route('admin.employee.expererinceStore')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="emp_id" value="{{ $eid }}">
                            <div class="tile-body">
                                <div class="row clearfix">
                                    <div class="col-md-12 column">
                                        <table class="table table-bordered table-hover" id="work_tab">
                                            <thead>
                                                <tr >
                                                    <th class="text-center">
                                                      Country Work
                                                    </th>
                                                    <th class="text-center">
                                                        Best Work
                                                    </th>
                                                    <th class="text-center">
                                                       Company Name
                                                     </th>
                                                    <th class="text-center">
                                                       Position
                                                    </th>
                                                    <th class="text-center">
                                                       Project Name
                                                    </th>
                                                    <th class="text-center">
                                                     Responsibility
                                                      </th>
                                                    <th class="text-center">
                                                      From
                                                    </th>
                                                    <th class="text-center">
                                                      To
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id='addr01'>

                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][country_work]'  placeholder='Country Work Experience' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][best_work]' placeholder='Best Work' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][company_name]' placeholder='Company Name' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][position]' placeholder='Position' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][project_name]' placeholder='Project Name' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][responcibility]' placeholder='Responsibility' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][from]' placeholder='From' class="form-control"/>
                                                      </td>
                                                      <td>
                                                        <input class="form-control @error('deration') is-invalid @enderror" type="text" name='rows[0][to]' placeholder='To' class="form-control"/>
                                                      </td>
                                                </tr>
                                                <tr id='addr1'></tr>
                                            </tbody>
                                        </table>
                                        <a id="addwork" class="btn btn-primary ml-2 text-white">Add Row</a><a id='delete_row3' class="btn btn-danger pull-right text-white">Delete Row</a>
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
           <!--Work Expereince Section End-->
           <!--Refercnes Section Start-->
                    <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <h3 class="tile-title">References</h3>
                          <form action="{{ route('admin.employee.refereceStore')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="emp_id" value="{{ $eid }}">
                                 <div class="tile-body">
                                    <div class="form-group row">
                                        <div class=col-md-4>
                                            <label class="control-label" for="trname">Company Name <span class="m-l-5 text-danger"> *</span></label>
                                            <input class="form-control @error('ComName') is-invalid @enderror" type="text" name="ComName" id="ComName" @if(isset( $data->References->ComName)) value="{{ $data->References->ComName }}"@endif placeholder="Please Type " required/>
                                            @error('ComName') {{ $message }} @enderror
                                        </div>
                                        <div class=col-md-4>
                                            <label class="control-label" for="training_deuration"> References Name<span class="m-l-5 text-danger"> *</span></label>
                                            <input class="form-control @error('refname') is-invalid @enderror" type="text" name="refname" id="refname" @if(isset( $data->References->refname)) value="{{ $data->References->refname }}"@endif placeholder="Please Type " required/>
                                            @error('refname') {{ $message }} @enderror
                                        </div>
                                        <div class=col-md-4>
                                            <label class="control-label" for="training_deuration">Position<span class="m-l-5 text-danger"> *</span></label>
                                            <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position" @if(isset( $data->References->position)) value="{{ $data->References->position }}"@endif placeholder="Please Type " required/>
                                            @error('position') {{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class=col-md-6>
                                            <label class="control-label" for="contact">Comtact Number <span class="m-l-5 text-danger"> *</span></label>
                                            <input class="form-control @error('contact') is-invalid @enderror" type="text" name="contact" id="contact" @if(isset( $data->References->contact)) value="{{ $data->References->contact }}" @endif placeholder="Please Type " required/>
                                            @error('contact') {{ $message }} @enderror
                                        </div>
                                        <div class=col-md-6>
                                            <label class="control-label" for="training_deuration"> Address / Details<span class="m-l-5 text-danger"> *</span></label>
                                        <textarea class="form-control @error('Details') is-invalid @enderror" name="Details" id="Details" rows="3">@if(isset( $data->References->Details)) {{ $data->References->Details }} @endif</textarea>
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
                        <!--Refercnes Section End-->

                        <!--Add Photo Section Start-->
                        <div class="tab-pane fade" id="addphoto" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h3 class="tile-title">Add Photograph</h3>
                        <form action="{{ route('admin.employee.phographStore')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="emp_id" value="{{ $eid }}">
                                <div class="tile-body">
                                    <div class="form-group row">
                                        <div class=col-md-6>
                                            <label class="control-label" for="image"> Add Your Photo<span class="m-l-5 text-danger"> *</span></label>
                                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" placeholder="Please Type " required/>
                                            @error('image') {{ $message }} @enderror
                                        </div>
                                       <div class=col-md-6>
                                            <label class="control-label" for="training_deuration">Your Signature<span class="m-l-5 text-danger"> *</span></label>
                                            <input class="form-control @error('to') is-invalid @enderror" type="file" name="signature" id="position" placeholder="Please Type " />
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
                          </div>
                   <!--Add Photo Section End-->

                   <!--Certification Section End-->
                          <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h3 class="tile-title">Certification</h3>
                        <form action="{{ route('admin.employee.cirtificationStore')}}" method="POST" role="form"  id="myform" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="emp_id" value="{{ $eid }}">
                                    <div class="tile-body">
                                        <div class="form-group row " id="dynamiclyfield">
                                            <div class=col-md-6>
                                                <label class="control-label" for="training_deuration"> Certificate Name<span class="m-l-5 text-danger"> *</span></label>
                                                <input class="form-control @error('image') is-invalid @enderror" type="text" name="image" id="image"  placeholder="Please Type " required/>
                                                @error('image') {{ $message }} @enderror
                                            </div>
                                            <div class=col-md-6>
                                                <label class="control-label" for="training_deuration">Upload File<span class="m-l-5 text-danger"> *</span></label>
                                                <input class="form-control @error('to') is-invalid @enderror" type="file" name="documention" id="documention"  placeholder="Please Type " required/>
                                                @error('documention') {{ $message }} @enderror
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
                                                    <input class="form-control @error('betwork') is-invalid @enderror" type="text" name="image" id="image"  placeholder="Please Type " required/>
                                                    @error('image') {{ $message }} @enderror
                                                </div>
                                                <div class=col-md-6>
                                                    <label class="control-label" for="documention">Upload File<span class="m-l-5 text-danger"> *</span></label>
                                                    <input class="form-control @error('to') is-invalid @enderror" type="file" name="documention" id="documention"  placeholder="Please Type " required/>
                                                    @error('documention') {{ $message }} @enderror
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
                     <!--Certification Section End-->
                        </div>
                    </div>
                </div>
                </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@push('scripts')
 <script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html('<td>'+
                    '<input type="text" name="rows[' + i +'][ExamName]" class="form-control input-md" placeholder="Name Of Exam"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][board]" class="form-control input-md" placeholder="board"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][passing_year]" class="form-control input-md" placeholder="passing year"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][group]" class="form-control input-md" placeholder="group"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][CGPA]" class="form-control input-md" placeholder="CGPA"/>'+
                '</td>');

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');


      i++;
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>

<script>
    $(document).ready(function(){
     var i=1;
    $("#addRow").click(function(){
     $('#addr'+i).html('<td>'+
                   '<input type="text" name="rows[' + i +'][name]" class="form-control input-md" placeholder="Name Of Training"/>'+
               '</td>'+
               '<td>'+
                   '<input type="text" name="rows[' + i +'][deration]" class="form-control input-md" placeholder="Duration Of Training"/>'+
               '</td>');

     $('#training_tab').append('<tr id="addr'+(i+1)+'"></tr>');


     i++;
 });
    $("#delete_row2").click(function(){
        if(i>1){
        $("#addr"+(i-1)).html('');
        i--;
        }
    });

});
</script>
<script>
    $(document).ready(function(){
     var i=1;
    $("#addwork").click(function(){
     $('#addr'+i).html('<td>'+
                      '<input type="text" name="rows[' + i +'][country_work]" class="form-control input-md" placeholder="Country Work Experience"/>'+
                   '</td>'+
                  '<td>'+
                    '<input type="text" name="rows[' + i +'][best_work]" class="form-control input-md" placeholder="Best Work"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][company_name]" class="form-control input-md" placeholder="Company Name"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][position]" class="form-control input-md" placeholder="Position"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][project_name]" class="form-control input-md" placeholder=" Project Name"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][responcibility]" class="form-control input-md" placeholder="Responsibility"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][from]" class="form-control input-md" placeholder="From"/>'+
                '</td>'+
                '<td>'+
                    '<input type="text" name="rows[' + i +'][to]" class="form-control input-md" placeholder="To"/>'+
                '</td>');

     $('#work_tab').append('<tr id="addr'+(i+1)+'"></tr>');


     i++;
 });
    $("#delete_row3").click(function(){
        if(i>1){
        $("#addr"+(i-1)).html('');
        i--;
        }
    });

});
</script>

    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
