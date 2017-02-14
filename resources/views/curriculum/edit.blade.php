@extends('layouts.template')
@section('content')
  <div class="col-md-11 pagedata" style=" background-color:#4cae4c;">
      <h3>Edit Curriculum Page Content</h3>
      {{Form::model($curriculum, ['method' => 'PATCH', 'action' => ['CurriculumController@update', $curriculum->id]])}}
    	  <div class="form-group">
			{{Form::label('title', 'Page Header:')}}
			{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Page Header'])}}
  		  </div>
  		  <div class="form-group">
			{{Form::label('body', 'Page Content:')}}
			{{Form::textarea('body', null, ['class' => 'form-control'])}}
  		  </div>
	      <div class="form-group" style="float: right">
       		<button class="btn-default formbtn">Cancel<a href="/"></a></button>
            {{Form::submit('Update', ['class' => 'btn-primary formbtn'])}}
          </div>
	    {{Form::close()}}
  </div>
@stop
@section('scripts')
    @include('_includes.froala.froala-js')
	@include('_includes.froala.froala-options')
@stop