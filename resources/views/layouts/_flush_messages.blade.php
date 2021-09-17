 
@if(Session::has('delete_post_success'))
<div class="alert alert-success"> 
	{{Session::pull('delete_post_success')}}
</div>
@endif
@if(Session::has('post_update_fail'))
<div class="alert alert-danger"> 
	{{Session::pull('post_update_fail')}}
</div>
@endif
 
@if(Session::has('post_update_success'))
<div class="alert alert-success"> 
	{{Session::pull('post_update_success')}}
</div>
@endif
 
@if(Session::has('post_create_success'))
<div class="alert alert-success"> 
	{{Session::pull('post_create_success')}}
</div>
@endif 

@if(Session::has('post_create_fail'))
<div class="alert alert-danger"> 
	{{Session::pull('post_create_fail')}}
</div>
@endif