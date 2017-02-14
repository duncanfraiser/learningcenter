@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #4cae4c;">
      @if(\Auth::Check())
        <a href="{{url('/curriculum/'.$curriculum->id.'/edit')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
  	<h2>{{$curriculum->title}}</h2>
 	<div style="margin-bottom: 3em">
 	  {!!$curriculum->body!!}
 	</div>

    </div>  
@stop
