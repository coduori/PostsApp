
@extends('adminlte::page')

@section('title')
@section('content_header')
@include('.layouts/_flush_messages')
<div class="row" style="height:30px"></div>
@stop

@section('content')
     {!! Form::open(['route' => ['admin.posts.post',Auth::user()->id],'method' =>'POST']) !!}
  <div class="card shadow mb-4 col-8 ">
    <div class="card-header py-3 clearfix">
      <h6 class="m-0 font-weight-bold text-primary float-left">Your Thoughts</h6>

    </div>
    <div class="card-body">
<div class="row">
    <x-adminlte-input name="post_title" label="Post Title" placeholder="Post Title" label-class="text-lightblue"
        fgroup-class="col-md-8" disable-feedback/>
</div>
    <x-adminlte-textarea name="post_message" label="Post" rows=5 igroup-size="sm"
    label-class="text-primary" placeholder="Write your thoughts here..." disable-feedback>
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-lg fa-comment-dots text-primary"></i>
        </div>
    </x-slot>
    <x-slot name="appendSlot">
        <x-adminlte-button type="submit" theme="primary" icon="fas fa-paper-plane" label="Post"/>
    </x-slot>
</x-adminlte-textarea>
</div><!-- /.box -->
</div>
{!! Form::close() !!}

 @foreach ($posts as $post)
<x-adminlte-callout theme="success" title-class="text-success text-uppercase"
    icon="fas fa-lg fa-comment-dots" title="{{$post->title}}">
    <div class="row">
        <p class="col-10">{{$post->post}}</p>

        @if( $post->user_id == Auth::id())
        <div class="col-2 form-group row">
                        
            <div class="col-xs-6 mr-1">{!! Form::open(['route' => ['admin.posts.edit',$post->id],'method' =>'GET']) !!}
                <x-adminlte-button class="btn" type="submit" label="Edit Post" theme="outline-primary" icon="fas fa-lg fa-comment-dots"/>

                 {!! Form::close() !!}</div>  
                 <div class="col-xs-6">
                            <x-adminlte-button class="btn" type="submit" label="Delete Post" theme="outline-danger" icon="fas fa-lg fa-trash" id="alertbox" data-toggle="modal" data-target="#exampleModal"/>

                </div>
        </div>
        @endif


    </div>

</x-adminlte-callout>
 @endforeach 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::open(['route' => ['admin.posts.destroy',$post->id],'method' =>'DELETE']) !!}
        <button type="submit" class="btn btn-danger">Delete Post</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@stop
