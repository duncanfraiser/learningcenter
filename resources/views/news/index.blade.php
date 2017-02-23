@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #d9534f;">
      @if(\Auth::Check())
        <a href="{{url('/news/'.$news->id.'/edit')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
        <h2>NEWS</h2>
        <h3>{{$news->title}}</h3>
        <p>{!!$news->body!!}</p>
        <img width="100%" style="margin-bottom: 2em; border: 2px solid black; box-shadow: 5px 5px 5px #000;" src="{{url('storage/pics/'.$news->img)}}">
    </div>  
@stop