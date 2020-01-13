    @extends('admin.app')
    @section('title','User Create')

    @push('css')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset('backend/smartwiard/css/smart_wizard.css') }}" rel="stylesheet" type="text/css" />

        <!-- Optional SmartWizard theme -->
        <link href="{{ asset('backend/smartwiard/css/smart_wizard_theme_circles.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/smartwiard/css/smart_wizard_theme_arrows.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/smartwiard/css/smart_wizard_theme_dots.css') }}" rel="stylesheet" type="text/css" />
    @endpush

    @section('content')
        <div class="app-title">
            <div>
                <h1><i class="fa fa-tags"></i>User Create </h1>
            </div>
        </div>
        @include('admin.allinfo.message')
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="tile">
                    <h3 class="tile-title">User Profile</h3>
                    <br />
                <form action="{{ route('admin.perdatils.store')}}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
               @csrf
                 <input type=hidden name="user_id" value="{{ $user->id}}">
               {{-- @php
               echo "<pre>";
                //    print_r($user->id);
                  $user->id;

               @endphp --}}

                <!-- SmartWizard html -->
                <div id="smartwizard">
                    <ul>
                        <li><a href="#step-1">Step 1<br /><small>Personal Info</small></a></li>
                        <li><a href="#step-2">Step 2<br /><small>Education / Training</small></a></li>
                        <li><a href="#step-3">Step 3<br /><small>Other Info</small></a></li>
                    </ul>

                    <div>
                        <div id="step-1">
                        <h2>Personal Info</h2>
                        <div id="form-step-2" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Please Type "value="{{ $user->name}}" required/>
                                @error('name') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="father_name">Father's Name<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('father_name') is-invalid @enderror" type="text" name="father_name" id="father_name" placeholder="Please Type " required/>
                                @error('father_name') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="mother_name">Mother's Name <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('mother_name') is-invalid @enderror" type="text" name="mother_name" id="mother_name" placeholder="Please Type " required/>
                                @error('mother_name') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="brother">Brother <span class="m-l-5 text-danger"> Optional</span></label>
                                <input class="form-control @error('brother') is-invalid @enderror" type="text" name="brother" id="brother" placeholder="Please Type"/>
                                @error('brother') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="sister">sister <span class="m-l-5 text-danger">  Optional</span></label>
                                <input class="form-control @error('sister') is-invalid @enderror" type="text" name="sister" id="sister" placeholder="Please Type " />
                                @error('sister') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob">Date Of Birth <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="dob" placeholder="Please Type " required/>
                                @error('dob') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="religion">Religion <span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('religion') is-invalid @enderror" type="text" name="religion" id="religion" placeholder="Please Type " required/>
                                @error('religion') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="NID">NID Number<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('NID') is-invalid @enderror" type="number" name="NID" id="NID" placeholder="Please Type " required/>
                                @error('NID') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="blood_group">Blood Group<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('blood_group') is-invalid @enderror" type="text" name="blood_group" id="blood_group" placeholder="Please Type " required/>
                                @error('blood_group') {{ $message }} @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="blood_group">Nationality<span class="m-l-5 text-danger"> *</span></label>
                                <input class="form-control @error('nationality') is-invalid @enderror" type="text" name="nationality" id="nationality" placeholder="Please Type " required/>
                                @error('nationality') {{ $message }} @enderror
                            </div>
                        </div>
                        </div>
                        <div id="step-2">
                            <h2>Education / Training</h2>
                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label" for="name"> Name of Exam <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('NofExam') is-invalid @enderror" type="text" name="ExamName" id="ExamName" placeholder="Please Type " required/>
                                    @error('ExamName') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="board">Board / Univercity <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('position') is-invalid @enderror" type="text" name="board" id="board" placeholder="Please Type " required/>
                                    @error('board') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="passing_year">Passing Year<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('passing_year') is-invalid @enderror" type="text" name="passing_year" id="passing_year" placeholder="Please Type " required/>
                                    @error('passing_year') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="mother_name">Group <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('group') is-invalid @enderror" type="text" name="group" id="group" placeholder="Please Type " required/>
                                    @error('group') {{ $message }} @enderror
                                </div>
                                <!--Training Section Start-->
                                <div class="form-group">
                                    <label class="control-label" for="name">Training Name <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('group') is-invalid @enderror" type="text" name="name" id="name" placeholder="Please Type " required/>
                                    @error('name') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="deration">Training Deration <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('group') is-invalid @enderror" type="text" name="deration" id="group" placeholder="Please Type " required/>
                                    @error('deration') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="organisation">Organisation Name <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('organisation') is-invalid @enderror" type="text" name="organisation" id="organisation" placeholder="Please Type " required/>
                                    @error('organisation') {{ $message }} @enderror
                                </div>
                                <!--Training Section Start-->
                        </div>
                    </div>
                        <div id="step-3">
                            <h2>Other Info</h2>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label" for="countryWork"> Country of Work <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('countryWork') is-invalid @enderror" type="text" name="countryWork" id="countryWork" placeholder="Please Type " required/>
                                    @error('countryWork') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="memberShipp">Membership <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('memberShipp') is-invalid @enderror" type="text" name="memberShipp" id="memberShipp" placeholder="Please Type " required/>
                                    @error('memberShipp') {{ $message }} @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="bestWork">Best Work<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('bestWork') is-invalid @enderror" type="text" name="bestWork" id="bestWork" placeholder="Please Type " required/>
                                    @error('bestWork') {{ $message }} @enderror
                                </div>
                           <!--Language SEction Start-->
                                <div class="form-group row">
                                    <div class=col-md-6>
                                        <label class="control-label" for="lgname">Language Name<span class="m-l-5 text-danger"> *</span></label>
                                        <input class="form-control @error('lgname') is-invalid @enderror" type="text" name="lgname" id="lgname" placeholder="Please Type " required/>
                                        @error('lgname') {{ $message }} @enderror
                                    </div>
                                        <div class=col-md-6>
                                        <label class="control-label">Special</label>
                                        <select name="department_id" id="department_id" placeholder="Select Your Department" class="form-control @error('IsActive') is-invalid @enderror" required>
                                            <option>Select Your Department</option>
                                            <option value="speak">Speak</option>
                                            <option value="reading">Reading</option>
                                            <option value="writing">Writing</option>
                                        </select>
                                        @error('bestWork') {{ $message }} @enderror
                                     </div>
                                </div>
                                <!--Language SEction Start-->

                                <!--Skil SEction Start-->
                                 {{-- <div class="form-group">
                                    <label class="control-label" for="name">Skill Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Please Type " required/>
                                    @error('name') {{ $message }} @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label class="control-label" for="Description">Skill Description<span class="m-l-5 text-danger"> *</span></label>
                                    <textarea name="Description" id="" cols="30" rows="5" class="form-control" placeholder="Skill Description Sumarry" maxlength="200" style="font-size: 18px;font-family: 'Crimson Text', serif;"></textarea>
                                    @error('name') {{ $message }} @enderror
                                </div>
                                <!--Skil SEction Start-->
                            </div>
                        </div>
                        </div>




                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit" id='submitInfo'><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Catagory</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
        </div>
    @endsection

    @push('scripts')


    {{--     smart wizard related scripts--}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


        <!-- Include jQuery Validator plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


        <!-- Include SmartWizard JavaScript source -->
        <script type="text/javascript" src="{{asset('backend/smartwiard/js/jquery.smartWizard.min.js')}}"></script>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#download").hide();
                        $("#connect").click(function () {
                            $("#download").show();
                        });
                    });
                </script>

        <script type="text/javascript">
            $(document).ready(function(){

                // Toolbar extra buttons
                var btnFinish = $('<button></button>').text('Finish')
                    .addClass('btn btn-info')
                    .on('click', function(){
                        if( !$(this).hasClass('disabled')){
                            var elmForm = $("#myForm");
                            if(elmForm){
                                elmForm.validator('validate');
                                var elmErr = elmForm.find('.has-error');
                                if(elmErr && elmErr.length > 0){
                                    alert('Oops we still have error in the form');
                                    return false;
                                }else{
                                    alert('Great! we are ready to submit form');
                                    elmForm.submit();
                                    return false;
                                }
                            }
                        }
                    });
                var btnCancel = $('<button></button>').text('Cancel')
                    .addClass('btn btn-danger')
                    .on('click', function(){
                        $('#smartwizard').smartWizard("reset");
                        $('#myForm').find("input, textarea").val("");
                    });



                // Smart Wizard
                $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                        toolbarExtraButtons: [btnFinish, btnCancel]
                    },
                    anchorSettings: {
                        markDoneStep: true, // add done css
                        markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                        removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                        enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                    }
                });

                $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                    var elmForm = $("#form-step-" + stepNumber);
                    // stepDirection === 'forward' :- this condition allows to do the form validation
                    // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                    if(stepDirection === 'forward' && elmForm){
                        elmForm.validator('validate');
                        var elmErr = elmForm.children('.has-error');
                        if(elmErr && elmErr.length > 0){
                            // Form validation failed
                            return false;
                        }
                    }
                    return true;
                });

                $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                    // Enable finish button only on last step
                    if(stepNumber == 3){
                        $('.btn-finish').removeClass('disabled');
                    }else{
                        $('.btn-finish').addClass('disabled');
                    }
                });

            });
        </script>

    {{--        smart wizard related scripts end--}}





    @endpush

