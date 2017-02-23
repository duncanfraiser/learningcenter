@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #337ab7;">
      <h2>Handbook & Forms</h2>
      <div class='col-md-12' style="padding-bottom: 2em">    
			{{Form::model($handbook, ['method' => 'PATCH','action' => ['HandbookController@update',$handbook->id],'files' => true])}}
 				<div class="form-group">
					{{Form::label('title', 'File Title:')}}
					{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter File Title'])}}
  				</div>
  				<div class="form-group">
          {{ Form::label('handbook', 'Current File: '.$handbook->handbook )}}<br/>
    			{{ Form::label('handbook', 'Change File:')}}
					{{ Form::file('handbook')}}
  				</div>
  				<div class="form-group" style="float: right">
  									{{Form::submit('Update File', ['class' => 'btn-primary formbtn'])}}
  				</div>
			{{Form::close()}}
            <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>

        <div class="form-group" style="float:right">
        {{Form::open(['method' => 'DELETE', 'route' => ['handbook.destroy', $handbook->id], 'class' => 'delete'])}}
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
