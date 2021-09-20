@if(Session::has('delete_post_success'))
<div  class="alert alert-success" role="alert"> 
	{{Session::pull('delete_post_success')}}
</div>
{{Session::forget('delete_post_success')}}
@endif
@if(Session::has('post_update_fail'))
<div  class="alert alert-danger" role="alert"> 
	{{Session::pull('post_update_fail')}}
</div>
{{Session::forget('post_update_fail')}}
@endif
 
@if(Session::has('post_update_success'))
@section('js')
    <script type="text/javascript">
        $(function() {
            Swal.fire({
                title: 'Success!',
                text: 'Your Post has been updated successfully!',
                type: 'success',
                confirmButtonText: 'Great!'
            })
        });
    </script>
@stop
{{Session::forget('post_update_success')}}
@endif
 
@if(Session::has('post_create_success'))
@section('js')
    <script type="text/javascript">
        $(function() {
            Swal.fire({
                title: 'Success!',
                text: 'Your Post has been Created successfully!',
                type: 'success',
                confirmButtonText: 'Great!'
            })
        });
    </script>
@stop
{{Session::forget('post_create_success')}}
@endif 

@if(Session::has('post_create_fail'))
<div  class="alert alert-danger" role="alert"> 
	{{Session::pull('post_create_fail')}}
</div>
{{Session::forget('post_create_fail')}}
@endif