@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #337ab7;">
        <h2>{{$about->title}}</h2>
        <h4>{!!$about->body!!}</h4>
    </div>  
@stop