@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #5cb85c;">
      @if(\Auth::Check())
        <a href="{{url('/calendar/create')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
        <h2>Calendar</h2>
        <img width="100%" style="margin-bottom: 2em; border: 2px solid black; box-shadow: 5px 5px 5px #000;" src="{{url('storage/pics/'.$calendar->img)}}">
    </div>  
@stop




      
