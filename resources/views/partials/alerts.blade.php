@if(session()->has('error'))
    <div class="alert bg-teal alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{session()->get('error')}}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert bg-green alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{session()->get('success')}}
    </div>
@endif


