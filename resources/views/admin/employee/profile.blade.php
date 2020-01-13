@extends('admin.app')
@section('title')  @endsection
@section('content')
@push('css')
<style>
    /* .A4Size{
        height: 842px;
        width: 595px;
         to centre page on screen
        margin-left: auto;
        margin-right: auto;
    } */
.personalMian{
     display: flex;
    }
.personla {
    float: left;
    width: 20%;
}
.personalContent {
    width: 50.5%;
}
.personalImage {
    float: right;
    width: 20.5%;
}
.membershipMain{
  display: flex;
}
.membership {
    float: left;
    width: 20%;
}

.membershipContent {
  width: 80%;
}
.educationmain{
    display: flex;
}
.education{
    float: left;
    width: 20%;
}

.educationContent{
  width: 80%;

}
.work{
    float: left;
    width: 20%;
}
.workContent{
    width: 80%;

}
.workflex{
    display: flex;
}
.work1{
    width: 20%;
}
.exprience{
    display: flex;
}
.exprience1{
    width: 20%;
}
.skillMain{
    display: flex;
}
.skillHeading{
    float: left;
    width: 20%;
}
.skillPoint{
    width: 20%;
}
.bestWork{
    display: flex;
}
.bestWork1{
    float: left;
    width: 20%;
}
.bestWork2{
    width: 80%;

}
</style>
  <link href="{{asset('backend/lightbox')}}/css/jquery.magnify.css" rel="stylesheet">
  <link href="{{asset('backend/lightbox')}}/css/snack.css" rel="stylesheet">
  <link href="{{asset('backend/lightbox')}}/css/snack-helper.css" rel="stylesheet">
  <link href="{{asset('backend/lightbox')}}/css/docs.css" rel="stylesheet">
  <script src="lib/jquery.js" type="text/javascript"></script>
@endpush
<div class="app-title">
  <div>
  <h1><i class="fa fa-tags">Profile of {{ $data->name }}</i></h1>
      <p></p>
  </div>
{{-- <a href="{{ route('admin.education.create')}}" class="btn btn-primary pull-right"></a> --}}
</div>
@include('admin.partials.flash')
<div class="row">
   <div class="col-md-12 col-sm-4 col-lg-12">
     <div class="tile">
        <div class="tile-body">
        <h4 class="text-center">ID:#EM{{ $data->eid}} <span>Curriculum Vitea(CV)for Each Personal Professional Staff</span></h4>
            <div class="card-body border">
              <div class="A4Size">
                <!--PersonalInfo Section-->
                <section>
                    <article>
                    <div class="personalMian">
                        <div class="personla">
                            <p><strong>PROPOSED POSITION<br> FOR THIS PROJECT</strong></p>
                            <p><strong>NAME OF STAFF</strong></p>
                            <p><strong>DATE OF BIRTH</strong></p>
                            <p><strong>NATIONALITY</strong></p>
                        </div>


                        <div class="personalContent">
                        <p class="mt-3">{{ $data->position }}</p>
                        <p>{{ $data->name }}</p>

                        <p>{{ $data->dob }}</p>
                            <p>Bangladeshi</p>
                        </div>

                        {{-- @foreach ($photos as $photo ) --}}
                         <div class="personalImage">
                    @if(isset($data->Phograph->image))
                            <a data-magnify="gallery" data-src="" data-caption="{{ $data->name}}" data-group="a"
                              href="{{ asset('image/photograph/'.$data->Phograph->image)}}">
                             <img src="{{ asset('image/photograph/'.$data->Phograph->image)}}" class="rounded  img-thumbnail" alt="..." width="130"alt="">
                          </a>
                     @else
                     {{ "No Image Fond" }}
                     @endif
                         </div>
                        {{-- @endforeach --}}
                    </div>
                </article>
                <div class="clear"></div>
                </section>
                <!--PersonalInfo Section End-->
                <!--Section Membership Start-->
                <section>
                <article>
                    <div class="membershipMain">
                        <div class="membership">
                            <p>MEMBERSHIP <br>PROFESSIONAL <br>SOCIETIES</p>
                        </div>
                        <div class="membershipContent">
                        <p>IN <strong>
                            @if(isset($data->Membership->details))
                            {{ $data->Membership->details }}
                            @endif
                        </strong></p>
                        </div>
                    </div>
                </article>
                <div class="clear"></div>
                </section>
                <!--Section Membership End-->
                <!--Section Education Start-->
                <section>
                <article>
                    <div class="educationmain">
                        <div class="education">
                            <p>EDUCATION</p>
                        </div>

                        <div class="educationContent">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">Name of Exam</th>
                                    <th scope="col">Board/Univercity</th>
                                    <th scope="col">Year of Passing</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">C.GPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                            @foreach ($data as $datas )
                                    <tr>
                                        <td>
                                            @if(isset($datas->Education->ExamName))
                                              {{ $datas->Education->ExamName }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($datas->Education->board))
                                            {{ $datas->Education->board }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($datas->Education->passing_year))
                                            {{ $datas->Education->passing_year }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($datas->Education->group))
                                            {{ $datas->Education->group }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($datas->Education->CGPA))
                                            {{ $datas->Education->CGPA }}
                                            @endif
                                        </td>
                                    </tr>
                              @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </article>
                <div class="clear"></div>
                </section>
                <!--Section Education end-->
                <!--Section Training Start-->
                <section>
                    <article>
                        <div class="educationmain">
                            <div class="education">
                                <p>OTHER TRAINING</p>
                            </div>

                            <div class="educationContent">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Training Name</th>
                                        <th scope="col">Training Duration</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     <tr>
                                        <td>
                                            @if(isset($data->Training->name))
                                            {{ $data->Training->name }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($data->Training->deration))
                                            {{ $data->Training->deration }}
                                            @endif
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </section>
                <!--Section Training End-->
                <!--Section Language Start-->
                <section>
                    <article>
                        <div class="educationmain">
                            <div class="education">
                                <p>LANGUAGES & <br>DEGREE OF <br>PROFICIENCY</p>
                            </div>

                            <div class="educationContent">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Language</th>
                                        <th scope="col">Speaking</th>
                                        <th scope="col">Reading</th>
                                        <th scope="col">Writing</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                        <td>{{ $data->LgName }}</td>
                                        <td>{{ $data->reading }}</td>
                                        <td>{{ $data->speaking }}</td>
                                        <td>{{ $data->writing }}</td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </section>
                <!--Section Language End-->
                <!--Section Work Experience Start-->
                    <section>
                        <article>
                            <div class="educationmain">
                                <div class="work">
                                    <p>COUNTRIES OF <br> WORK EXPERIENCE </p>
                                </div>
                                <div class="workContent">
                                    <p><strong>Bangladesh Only</strong></p>
                                </div>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </section>
                    <section>
                        <article>
                            <div class="educationmain">
                                <div class="work">
                                    <p>EMPLOYEMENT RECORDS</p>
                                </div>
                                <div class="workContent">
                                    <div class="workflex">
                                    <div class="work1">
                                        <p><strong>Company Name</strong></p>
                                        <span> Position: Developer</span>
                                    </div>
                                    <div class="work1">
                                    <p><strong>From</strong></p>
                                    <p>4 April 2017</p>
                                    </div>
                                    <div class="work1">
                                        <p><strong>To</strong></p>
                                        <p>Continue</p>
                                    </div>
                                </div>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Project Name</th>
                                            <th scope="col">My Responsibility</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Emprofile</td>
                                            <td>Full Project</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                   <div class="exprience">
                                      <div class="exprience1">
                                        <p> <strong>Maatrik Architect</strong></p>
                                        <p>Psition:Developer</p>
                                      </div>
                                      <div class="exprience1">
                                       <p>From</p>
                                       <p>1 January 2019</p>
                                    </div>
                                    <div class="exprience1">
                                        <p>To</p>
                                        <p>15 April 2018</p>
                                     </div>
                                   </div>
                                </div>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </section>
                    <section>
                        <article>
                            <diV class="skillMain">
                                 <div class="skillHeading">
                                   <p>COMPUTER SKILL</p>
                                 </div>
                                 <div class="skillPoint">
                                   <p>
                                      Office:MS Word.Power Point.Excel<br>
                                      Graphics:Corel Draw.Photosjop
                                    <p>
                                </div>
                            </diV>
                            <div class="bestWork">
                                <div class="bestWork1">
                                    <p>WORK UNDERTAKEN THAT BEST ILLUSTRATES YOUR CAPABILITY<br> TO HANDEL THIS ASSIGNMENT</p>
                                </div>
                                <div class="bestWork2">
                                   <p><strong>Architectural 2D Drawing.3D Modeling</strong><br>
                                     <strong> Power Point Presentation.</strong>
                                   </p>
                                </div>
                            </div>
                        </article>
                    </section>

                <!--Section Work Experience Start-->
                <!--Personal Deatils Section Start -->
                    <section>
                        <article>
                            <div class="educationmain pb-2">
                                <div class="education">
                                    <P><strong>Personal Details for Admin</strong></P>
                                </div>

                                <div class="educationContent border pl-2">
                                    <p>Name <span style="padding-left:84px;">:        </span> {{ $data->name }}</p>
                                    <p>Father<span style="padding-left:82px;">:       </span> {{ $data->father_name }}</p>
                                    <p>Mother<span style="padding-left:77px;">:       </span> {{ $data->mother_name }}</p>
                                    <p>Brother<span style="padding-left:77px;">:      </span> {{ $data->brother }}</p>
                                    <p>Sister<span style="padding-left:90px;">:       </span> {{ $data->sister }}</p>
                                    <p>Date of Birth<span style="padding-left:48px;">: </span> {{ $data->dob }}</p>
                                    <p>Height<span style="padding-left:88px;">:        </span> {{ $data->name }}</p>
                                    <p>Blood Group <span style="padding-left:50px;">:   </span> {{ $data->blood_group }}</p>
                                    <p>National ID Card No <span style="padding-left:4px;">: </span> {{ $data->NID }}</p>
                                    <p>Permanent Address <span style="padding-left:7px;">:   </span> {{ $data->permanent_add }}</p>
                                    <p>Present Address <span style="padding-left:27px;">:    </span> {{ $data->persent_add }}</p>
                                    </table>
                                </div>

                            </div>
                        </article>
                        <div class="clear"></div>
                    </section>
                 <!--References Section Start -->
                    <section>
                        <article>
                            <div class="educationmain">
                                <div class="education">
                                    <P><strong>Reference Details</strong></P>
                                </div>
                                <div class="educationContent border pl-2">
                                        <p>Reference Name <span style="padding-left:30px;">: </span> <strong>{{ $data->refname }}</strong></p>
                                        <p>Company Name<span style="padding-left:33px;">: </span> <strong>{{ $data->ComName }}</strong></p>
                                        <p>Position<span style="padding-left:82px;">: </span> {{ $data->position }}</p>
                                        <p>Contact Number<span style="padding-left:30px;">: </span> {{ $data->contact }}</p>
                                        <p>Address / Details<span style="padding-left:30px;">: </span> {{ $data->Details }}</p>
                                </div>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </section>
                <!--References Section End -->
              </div>
           </div>
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

 <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')
  </script>
    <script src="{{asset('backend/lightbox')}}/js/jquery.magnify.js"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
