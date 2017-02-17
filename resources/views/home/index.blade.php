@extends('layouts.template')
@section('content')      
@include('_includes.carousel')
  <div class="col-md-11 pagedata" style=" background-color: #337ab7" >
  @if(\Auth::Check())
    <a href="{{url('/home/'.$home->id.'/edit')}}"><button class="btn-danger adminbtn">Edit</button></a>
  @endif
    <h3>{{$home->title}}</h3><br/>
    <h4>{!!$home->body!!}</h4>
  </div> 
@stop