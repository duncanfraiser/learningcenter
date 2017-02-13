@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #337ab7;">
      @if(\Auth::Check())
        <a href="{{url('/handbook/create')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
      <h2>Handbook & Forms</h2>
      <div class='col-md-12' style="padding-bottom: 2em">        
      </div>
    </div>    
@stop