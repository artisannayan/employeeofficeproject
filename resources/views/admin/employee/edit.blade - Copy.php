@extends('admin.app')
@section('title')  @endsection
@push('css')
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

                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!--Personal Info Section Start-->
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="personalInfo">
                                <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsePersonalInfo" aria-expanded="true" aria-controls="collapseOne">
                                    Personal Info
                                  </button>
                                </h2>
                              </div>
                              <div id="collapsePersonalInfo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 offset-1">
                                            <div class="">
                                              <label>Name</label>
                                            <p><strong>{{ $data->name }}</strong></p>
                                              <label>Position</label>
                                            <p><strong>{{ $data->position}}</strong></p>
                                              <label>Father's Name</label>
                                            <p><strong>{{ $data->father_name }}</strong></p>
                                              <label>Mother's Name</label>
                                            <p><strong>{{ $data->mother_name }}</strong></p>
                                              <label>Brother</label>
                                            <p><strong> {{ $data->brother }}</strong></p>
                                              <label>Sister</label>
                                            <p><strong>{{ $data->sister }}</strong></p>
                                              <label>height</label>
                                            <p><strong>{{ $data->height}}</strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4  offset-1 col-sm-8">
                                         <label>Datte Of Birth</label>
                                        <p><strong>{{ $data->dob }}</strong></p>
                                         <label>Religion</label>
                                        <p><strong>{{ $data->religion }}</strong></p>
                                         <label>Blood group</label>
                                        <p><strong>{{ $data->blood_group }}</strong></p>
                                         <label>National Id Card Number</label>
                                        <p><strong>{{ $data->NID }}</strong></p>
                                         <label>Nationality</label>
                                        <p><strong>{{ $data->nationality }}</strong></p>
                                        </div>
                                      </div>
                                </div>
                              </div>
                            </div>
                   <!--Personal Info Section End-->
                   <!--Language Section Start-->
                            <div class="card">
                              <div class="card-header" id="language">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLanguage" aria-expanded="false" aria-controls="collapseTwo">
                                     Lanuage proficiency
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseLanguage" class="collapse" aria-labelledby="language" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6  offset-2 col-sm-8">
                                         <label>Language Name</label>
                                        <p><strong>{{ $data->LgName }}</strong></p>
                                         <label>Reading</label>
                                        <p><strong>{{ $data->reading }}</strong></p>
                                         <label>Speaking</label>
                                         <p><strong>{{ $data->speaking }}</strong></p>
                                         <label>writing</label>
                                        <p><strong>{{ $data->writing }}</strong></p>
                                        </div>
                                      </div>
                                </div>
                              </div>
                            </div>
                    <!--Language Section End-->
                    <!--Address Section Start-->
                            <div class="card">
                              <div class="card-header" id="address">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAddress" aria-expanded="false" aria-controls="collapseThree">
                                     Address Details
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseAddress" class="collapse" aria-labelledby="address" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 offset-1">
                                            <div class="">
                                              <label>Present Address</label>
                                            <p><strong>{{ $data->persent_add }}</strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4  offset-1 col-sm-8">
                                         <label>Permanent Address</label>
                                        <p><strong>{{ $data->permanent_add }}</strong></p>
                                        </div>
                                      </div>
                                </div>
                              </div>
                            </div>
                    <!--Address Section End-->
                     </div>

                 </div>
                  {{-- @yield('membership')
                  @yield('education') --}}
                  {{-- @yield('trianing') --}}
                  {{-- @yield('workexperience') --}}
                  {{-- @yield('references') --}}
                  @yield('addphoto')
                  @yield('certification')
                  {{-- @include('admin.employee.membership') --}}
            <!--Membership Section Start-->
                <div class="tab-pane fade" id="membership" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="membership">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseMembership" aria-expanded="true" aria-controls="collapseOne">
                                Membership
                              </button>
                            </h2>
                          </div>

                          <div id="collapseMembership" class="collapse show" aria-labelledby="membership" data-parent="#accordionExample">
                            <div class="card-body ">
                                <div class="col-md-8 offset-2">
                                    <h3>Applied MemberShip</h3>
                                    <a href="#" class="btn btn-primary">   <i class="fa fa-plus" aria-hidden="true"></i>Add Membership (If Required)</a>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingThree">

                        </div>
                      </div>
                 </div>
                </div>
            <!--Membership Section Start-->
            <!--Education Section Start-->
                        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       Academic Summary
                                    </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 offset-1">
                                                <div class="">
                                                  <label>Exam Of Name</label>
                                                  <p><strong>ExamName</strong></p>
                                                  <label>board</label>
                                                  <p><strong>Developer</strong></p>
                                                  <label>Passing Year</label>
                                                  <p><strong>passing_year</strong></p>
                                                </div>
                                                <a href="" class="btn btn-primary">   <i class="fa fa-plus" aria-hidden="true"></i> Add Education Summary (If Required)</a>
                                            </div>
                                            <div class="col-md-4  offset-1 col-sm-8">
                                             <label>Passing Year</label>
                                             <p><strong>group</strong></p>
                                             <label>Religion</label>
                                             <p><strong>CGPA</strong></p>
                                            </div>
                                        <a href="{{ route('admin.employee.educationEdit',    $data->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> EDIT</a>
                                           <a href="#" class="text-danger ml-3"c><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</a>
                                          </div>
                                    </div>
                                </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!--Education Section Start-->
                        <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                <div class="card-header" id="training">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTrainig" aria-expanded="true" aria-controls="collapseOne">
                                        Training
                                    </button>
                                    </h2>
                                </div>
                                    <div id="collapseTrainig" class="collapse show" aria-labelledby="training" data-parent="#accordionExample">
                                    <div class="card-body ">
                                        <div class="row">
                                          <div class="col-md-4">
                                           <label>Training Name</label>
                                            <p><strong>Web Developer</strong></p>
                                            <a href="#" class="btn btn-primary">   <i class="fa fa-plus" aria-hidden="true"></i>Add Membership (If Required)</a> 
                                          </div>
                                          <div class="col-md-4">
                                            <label>Training Duration</label>
                                            <p><strong>6 MOnths </strong></p>
                                          </div>
                                          <a href="{{ route('admin.employee.educationEdit',    $data->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> EDIT</a>
                                          <a href="#" class="text-danger ml-3"c><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</a>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="card">
                                <div class="card-header" id="headingThree">

                                </div>
                            </div>
                            </div>
                        </div>


                    <div class="tab-pane fade" id="workexperince" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                            <div class="card-header" id="work">
                                <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseWork" aria-expanded="true" aria-controls="collapseOne">
                                    Training
                                </button>
                                </h2>
                            </div>
                                <div id="collapseWork" class="collapse show" aria-labelledby="work" data-parent="#accordionExample">
                                <div class="card-body ">
                                    <div class="row">
                                    <div class="col-md-4">
                                    <label>Work Experince </label>
                                        <p><strong>Web Developer</strong></p>
                                        <a href="#" class="btn btn-primary">   <i class="fa fa-plus" aria-hidden="true"></i>Add Membership (If Required)</a> 
                                    </div>
                                    <div class="col-md-4">
                                        <label>Training Duration</label>
                                        <p><strong>6 MOnths </strong></p>
                                    </div>
                                    <a href="{{ route('admin.employee.educationEdit',    $data->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> EDIT</a>
                                    <a href="#" class="text-danger ml-3"c><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="card">
                            <div class="card-header" id="headingThree">

                            </div>
                        </div>
                        </div>
                    </div> 


                    <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                            <div class="card-header" id="references">
                                <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseReference" aria-expanded="true" aria-controls="collapseOne">
                                    References
                                </button>
                                </h2>
                            </div>
                                <div id="collapseReference" class="collapse show" aria-labelledby="references" data-parent="#accordionExample">
                                <div class="card-body ">
                                    <div class="row">
                                    <div class="col-md-4">
                                    <label>Work Experince </label>
                                        <p><strong>Web Developer</strong></p>
                                        <a href="#" class="btn btn-primary">   <i class="fa fa-plus" aria-hidden="true"></i>Add Membership (If Required)</a> 
                                    </div>
                                    <div class="col-md-4">
                                        <label>Training Duration</label>
                                        <p><strong>6 MOnths </strong></p>
                                    </div>
                                    <a href="{{ route('admin.employee.educationEdit',    $data->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i> EDIT</a>
                                    <a href="#" class="text-danger ml-3"c><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="card">
                            <div class="card-header" id="headingThree">

                            </div>
                        </div>
                        </div>
                    </div> 

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
