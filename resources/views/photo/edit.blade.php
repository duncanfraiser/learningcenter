@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color:#ec971f">
      <h2>Photo Gallery</h2>
      <div class='col-md-12' style="padding-bottom: 2em">    
      {{Form::model($photo, ['method' => 'PATCH','action' => ['PhotoController@update',$photo->id],'files' => true])}}
      
        <div class="form-group">
          {{Form::label('title', 'Picture Title:')}}
          {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Picture Title'])}}
          </div>
          <div class="form-group">
          {{ Form::label('handbook', 'Current Photo: '.$photo->pic )}}<br/>
            {{ Form::label('picture', 'Change Photo:')}}
          {{ Form::file('picture')}}
          </div>
          <div class="form-group" style="float: right">
          {{Form::submit('Update Photo', ['class' => 'btn-primary formbtn'])}}
          </div>
      {{Form::close()}}
          <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>
      <div class="form-group" style="float:right">
        {{Form::open(['method' => 'DELETE', 'route' => ['photos.destroy', $photo->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'btn-danger formbtn'])}}
        {{Form::close()}}
      </div>
      </div>
    </div>    
@stop
@section('scripts')
  <script>
  $(".delete").on("submit", function(){
    return confirm("Do you want to delete this item?");
  });
  </script>
@stop