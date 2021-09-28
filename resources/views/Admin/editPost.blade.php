@extends('adminlte::page')

@section('title', 'Edit Post')

@section('content')
<section class="content">
      <div class="containter-fluid">
      <div class="row">
              <div class="col-md-5 mt-3">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">Edit {{$post->title}}</h3>
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fas fa-minus"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                              <i class="fas fa-times"></i></button>
                          </div>
                      </div>
                      <div class="card-body">
                          @if(isset($post->id))
                            {!! Form::model($post, ['route' => ['admin.post.update', $post->id],'method' =>'PUT']) !!}
                                @csrf
                                <div class="form-group">
                                    {!! Form::label('name', 'Post Title'); !!}
                                    {!! Form::text('title',$post->title,['required'=>'','class' => 'form-control']); !!}
                                </div> 

                                <div class="form-group">
                                    {!! Form::label('name', 'Post Message'); !!}
                                    {!! Form::textArea('post',$post->post,['required'=>'','class' => 'form-control']); !!}
                                </div> 

                                {!! Form::submit('Edit Post',['class' => 'btn btn-md btn-primary float-right'])!!}
                            {!! Form::close() !!}
                            @endif
                      </div>
                      <!-- /.card-body -->

                  </div>
              </div>
          </div>
      </div>
  </section>

@stop
