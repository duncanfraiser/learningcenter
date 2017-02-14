@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color:#ec971f">
      <h2>Photo Gallery</h2>
      <div class='col-md-12' style="padding-bottom: 2em">    
      {{Form::open(['action' => 'PhotoController@store', 'files' => true])}}
        <div class="form-group">
          {{Form::label('title', 'Picture Title:')}}
          {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Picture Title'])}}
          </div>
          <div class="form-group">
            {{ Form::label('picture', 'Upload Picture:')}}
          {{ Form::file('picture')}}
          </div>
          <div class="form-group" style="float: right">
          {{Form::submit('Upload Photo', ['class' => 'btn-primary formbtn'])}}
          </div>
      {{Form::close()}}
                <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>
      </div>
    </div>    
@stop

