@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #337ab7;">
      @if(\Auth::Check())
        <a href="{{url('/handbook/create')}}"><button class="btn-danger adminbtn">Upload Form</button></a>
      @endif
      <h2>Handbook & Forms</h2>
      <p>Please note:  These form are only used after you have been notified about your child being accepted for enrollment.</p>
      <div class='col-md-12' style="padding-bottom: 2em"> 
      @foreach($handbooks as $handbook)
      <ul>
        <li><a target="Blank" style="color:#fff" href="{{asset('storage/files/'.$handbook->handbook)}}">{{$handbook->title}}</a>
@if(\Auth::Check())
<a style="color: red" href="{{url('/handbook/'.$handbook->id.'/edit')}}"> edit|delete</a>
   @endif
        </li>
      </ul>
      @endforeach   
      </div>
    </div>    
@stop