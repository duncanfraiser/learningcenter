@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #5cb85c;">
      <h3>Upload News Page Content</h3>
        {{Form::open(['action' => 'CalendarController@store', 'files' => true])}}
          <div class="form-group">
            {{ Form::label('picture', 'Upload Calendar Image:')}}
          {{ Form::file('picture')}}
          </div>
          <div class="form-group" style="float: right">
            <a  href="{{url('/')}}"><BUTTON class="btn btn-secondary">Cancel</BUTTON></a>
          {{Form::submit('Upload Photo', ['class' => 'btn btn-primary'])}}
          </div>
      {{Form::close()}}
  </div>  
@stop
