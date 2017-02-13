@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #46b8da;">
      @if(\Auth::Check())
        <a href="{{url('/news/create')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
      <h2>Employment Opportunity</h2>
    </div>  
@stop