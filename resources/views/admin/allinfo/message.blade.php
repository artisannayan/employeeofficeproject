@if(Session()->has("msg"))
<div class="alert alert-success" role="alert">
   {{ Session()->get("msg") }}
</div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        	<button type="button" class="close" data-dismiss="alert">
                  <span aria-hidden="true">&times;</span>
                </button>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif