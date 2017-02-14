@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #ec971f;">
      @if(\Auth::Check())
        <a href="{{url('/give/'.$give->id.'/edit')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
        <h2>Giving Opportunity</h2>
        <div>{!!$give->body!!}</div>
        <li style="margin-bottom: 5em"><a target="Blank" style="color:#fff" href="{{asset('storage/files/'.$give->doc)}}">{{$give->title}}</a>
    </div>  
@stop

