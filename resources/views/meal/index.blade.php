@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #5bc0de;">
      @if(\Auth::Check())
        <a href="{{url('/meals/create')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
        <h2>Meal Menu</h2>
        <img width="100%" style="margin-bottom: 2em; border: 2px solid black; box-shadow: 5px 5px 5px #000;" src="{{url('storage/pics/'.$meal->img)}}">
    </div>  
@stop