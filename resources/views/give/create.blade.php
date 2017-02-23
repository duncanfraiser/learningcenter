@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #ec971f;">
      <h2>Create Giving Opportunity</h2>
      <div class='col-md-12' style="padding-bottom: 2em">    
			{{Form::open(['action' => 'GiveController@store', 'files' => true])}}
 				<div class="form-group">
					{{Form::label('title', 'File Title:')}}
					{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter File Title'])}}
  				</div>
  				<div class="form-group">
    				{{ Form::label('doc', 'Upload File:')}}
					{{ Form::file('doc')}}
  				</div>
  				<div class="form-group" style="float: right">
					{{Form::submit('Upload File', ['class' => 'btn-primary formbtn'])}}
  				</div>
			{{Form::close()}}
      <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>

      </div>
    </div>    
@stop
@section('scripts')
    @include('_includes.froala.froala-js')
  @include('_includes.froala.froala-options')
@stop
