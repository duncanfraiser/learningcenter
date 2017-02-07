@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #d9534f;">
        <h2>NEWS</h2>
        <img width="100%" style="margin-bottom: 2em; border: 2px solid black; box-shadow: 5px 5px 5px #000;" src="{{url('storage/pics/'.$news->img)}}">
    </div>  
@stop