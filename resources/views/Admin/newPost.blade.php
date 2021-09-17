
@extends('adminlte::page')

@section('title')
@section('content_header')
    <h1 class="m-5 text-dark"></h1>
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
    <i>{{$post->post}}</i>
</x-adminlte-callout>
 @endforeach 
@stop
