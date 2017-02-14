@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #337ab7;">
      <h2>Handbook & Forms</h2>
      <div class='col-md-12' style="padding-bottom: 2em">    
			{{Form::open(['action' => 'HandbookController@store', 'files' => true])}}
 				<div class="form-group">
					{{Form::label('title', 'File Title:')}}
					{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter File Title'])}}
  				</div>
  				<div class="form-group">
    				{{ Form::label('handbook', 'Upload File:')}}
					{{ Form::file('handbook')}}
  				</div>
  				<div class="form-group" style="float: right">
  					<a class="btn-secondary formbtn" href="{{url('/')}}">Cancel</a>
					{{Form::submit('Upload File', ['class' => 'btn-primary formbtn'])}}
  				</div>
			{{Form::close()}}

      </div>
    </div>    
@stop