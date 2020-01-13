@extends('admin.employee.create')
@section('membership')
<div class="tab-pane fade" id="membership" role="tabpanel" aria-labelledby="pills-profile-tab">
    <h3 class="tile-title">Membership</h3>
     <form action=" {{ route('admin.employee.membershipStore')}} " method="POST" role="form" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="emp_id" value="{{$empId}}">
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
 </div>
@endsection
