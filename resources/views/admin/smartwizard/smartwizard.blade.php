@extends('admin.app')
@section('title','User Create')

@push('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('backend/smartwiard/css/smart_wizard.css') }}" rel="stylesheet" type="text/css" />

    <!-- Optional SmartWizard theme -->
    <link href="{{ asset('backend/smartwiard/css/smart_wizard_theme_circles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/smartwizard/css/smart_wizard_theme_arrows.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/smartwizard/css/smart_wizard_theme_dots.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i>User Create </h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="tile">
                <h3 class="tile-title">User Profile</h3>
                <br />
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">


            <!-- SmartWizard html -->
            <div id="smartwizard">
                <ul>
                    <li><a href="#step-1">প্রথম ধাপ<br /><small>স্কুলের তথ্য </small></a></li>
                    <li><a href="#step-2">দ্বিতীয় ধাপ<br /><small>ডিভাইসের তথ্য </small></a></li>
                    <li><a href="#step-3">তৃতীয় ধাপ<br /><small>ব্যবহারকারীর তথ্য</small></a></li>
                </ul>

                <div>
                    <div id="step-1">
                      {{--<h2>Your Email Address</h2>--}}
                        <div id="form-step-0" role="form" data-toggle="validator">


                        </div>

                    </div>
                    <div id="step-2">
                      sfhfgd fds
                    </div>
                    <div id="step-3">
                        <h2>Your Address</h2>
                        <div id="form-step-2" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script type="text/javascript" src="{{asset('backend/smartwizard/js/jquery.smartWizard.min.js')}}"></script>

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

