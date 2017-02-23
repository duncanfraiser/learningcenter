@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #46b8da;">
    <h2>Submitted Applications</h2>
    <div class='col-md-10 col-md-offset-1' style="padding-bottom: 2em"> 
    	<ul>
    	@foreach($employees as $employee)
			<li><a style="color: #fff" href="{{url('employment/'.$employee->id)}}">{{$employee->name}}</a></li>
    	@endforeach
    	</ul>
    </div>
  </div>
@stop