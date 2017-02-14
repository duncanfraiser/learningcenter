@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color:  #d9534f;">
    @if(\Auth::Check())
      <a href="{{url('/admission/'.$admission->id.'/edit')}}"><button class="btn-danger adminbtn">Edit</button></a>
    @endif
 	<h2>{{$admission->title}}</h2>
 	<div style="margin-bottom: 3em">
 	  {!!$admission->body!!}
 	</div>
  </div>
@stop