@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #ec971f;">
      @if(\Auth::Check())
        <a href="{{url('/give/create')}}"><button class="btn-danger adminbtn">Upload Form</button></a>
      @endif
        <h2>Giving Opportunity</h2>
        <p>Annual Giving Campaign Fund</p>
      
      <div class='col-md-12' style="padding-bottom: 2em"> 
      @foreach($gives as $give)
      <ul>
        <li><a target="Blank" style="color:#fff" href="{{asset('storage/files/'.$give->doc)}}">{{$give->title}}</a>
			@if(\Auth::Check())
			  <a style="color: red" href="{{url('/give/'.$give->id.'/edit')}}"> edit|delete</a>
   			@endif
        </li>
      </ul>
      @endforeach   
      </div>
    </div>  
@stop

