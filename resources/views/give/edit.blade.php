@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #ec971f;">
      <h2>Edit Giving Opportunity</h2>
      <div class='col-md-12' style="padding-bottom: 2em">    
      {{Form::model($give, ['method' => 'PATCH','action' => ['GiveController@update',$give->id],'files' => true])}}
 				<div class="form-group">
					{{Form::label('title', 'File Title:')}}
					{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter File Title'])}}
  				</div>
  				<div class="form-group">
          {{ Form::label('doc', 'Current File: '.$give->doc )}}<br/>
          {{ Form::label('doc', 'Change File:')}}
					{{ Form::file('doc')}}
  				</div>
  				<div class="form-group" style="float: right">
					{{Form::submit('Upload File', ['class' => 'btn-primary formbtn'])}}
  				</div>
			{{Form::close()}}
      <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>
              <div class="form-group" style="float:right">
        {{Form::open(['method' => 'DELETE', 'route' => ['give.destroy', $give->id], 'class' => 'delete'])}}
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
    @include('_includes.froala.froala-js')
  @include('_includes.froala.froala-options')
@stop
