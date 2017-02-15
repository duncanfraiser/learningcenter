@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #46b8da;">
  	<h2>Employment Opportunity</h2>
  	<div class="col-md-10 col-md-offset-1" style=" margin-bottom: 5em">
  	  <h3>Thank You {{$employee->name}} for submiting your application.</h3>
  	  <p>Someone will be incontact with you soon.</p>
  	</div>
  </div>
@stop