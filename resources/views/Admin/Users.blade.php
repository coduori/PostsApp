@extends('adminlte::page')

@section('title')
@section('content_header')
    <h1 class="m-5 text-dark"></h1>
@stop

@section('content')
     
  <div class="card shadow mb-4 col-8 ">
    <div class="card-header py-3 clearfix">
      <h6 class="m-0 font-weight-bold text-primary float-left">Staff Members</h6>

    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
         <tr>
          <th >No.</th>
          <th >Full Name</th>
          <th >Email</th>
          <th >ID Number</th>
          <th >Phone Number</th>
          <th >Action</th>
        </tr>
      </thead>
      <tbody>
        @php $rank = 1;$i=0; @endphp
        @if(! empty($users))
        @foreach ($users as $user)
        <tr>
          <td>{{$rank}}</td>
          <td>{{$user['name']}}</td>
          <td>{{$user['email']}}</td>
          <td>{{$user['national_id']}}</td>
          <td>{{$user['msisdn']}}</td>
          <td >
                {{-- Edit User --}}
                {!! Form::open(['route' => ['admin.users.edit',$user->id],'method' =>'GET']) !!}
                <div class="float-left">
                    <button type="submit" class= "btn btn-xs btn-primary ">Edit</button>
                </div>
                {!! Form::close() !!}
                {{-- Delete User --}}
                {!! Form::open(['route' => ['admin.users.destroy',$user->id],'method' =>'DELETE']) !!}
                <div class="float-left">
                    <button type="submit" class= "ml-3 btn btn-xs btn-danger ">Delete</button>
                </div>
                {!! Form::close() !!}
          </td>
        </tr>
        @php $rank++;$i++; @endphp
        @endforeach  
        @endif
      </tbody>
    </table>
</div><!-- /.box -->
</div>
@stop
