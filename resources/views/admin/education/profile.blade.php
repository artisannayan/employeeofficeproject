@extends('admin.app')
{{-- @section('title') {{ $pageTitle }} @endsection --}}
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i>Personal  Infomation</h1>
            {{-- <p>{{ $subTitle }}</p> --}}
        </div>
    <a href="{{ route('admin.employee.edit',$employee->id) }}" class="btn btn-primary pull-right"> Edit</a>
    </div>
    {{-- @include('admin.partials.flash') --}}
    <div class="row">
        <div class="col-md-12 col-sm-4 col-lg-12">
        <div class="tile ">
                <div class="tile-body ">
                <div class="">
                 <h3>Employee Name: {{ $personal->name }}</h3>
                 {{-- <p><strong>Department Name:  {{ $profile->department->name }}</strong></p> --}}
                 <p><strong>Position       :  {{ $personal->position }}</strong></p>
                 <p><strong>Father's Name  :  {{ $personal->father_name }}</strong></p>
                 <p><strong>Mother's Name  :  {{ $personal->mother_name }}</strong></p>
                 <p><strong>Brother        :  {{ $personal->brother }}</strong></p>
                 <p><strong>Sister         :  {{ $personal->sister }}</strong></p>
                 <p><strong>Date Of Birth  :  {{ $personal->dob }}</strong></p>
                 <p><strong>Religion       :  {{ $personal->religion }}</strong></p>
                 <p><strong>Blood Group    :  {{ $personal->blood_group }}</strong></p>
                 <p><strong>National Id Card: {{ $personal->NID }}</strong></p>
                 <p><strong>Present Address : {{ $personal->persent_add }}</strong></p>
                 <p><strong>Permanet Address: {{ $personal->permanent_add }}</strong></p>
                </div>
                </div>

            </div>

        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
