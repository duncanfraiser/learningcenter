@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #d9534f;">
      <h3>Upload News Page Content</h3>
        {{Form::open(['action' => 'NewsController@store', 'files' => true])}}
          <div class="form-group">
            {{ Form::label('picture', 'Upload News Image:')}}
          {{ Form::file('picture')}}
          </div>
          <div class="form-group" style="float: right">       
          {{Form::submit('Upload Photo', ['class' => 'btn-primary formbtn'])}}
          </div>
      {{Form::close()}}
       <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>
  </div>  
@stop
