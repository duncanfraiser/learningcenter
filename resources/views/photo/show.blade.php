@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata text-center" style=" background-color: #ec971f;">
          @if(\Auth::Check())
        <a href="{{url('/photos/'.$photo->id.'/edit')}}"><button class="btn-danger adminbtn">Edit Photo</button></a>
      @endif
      <h2 style="float: left">Photo Gallery</h2>
    
        <img width='100%' style="border: 2px solid black; margin-bottom: 2em; box-shadow: 5px 5px 5px #000"" src="{{url('storage/pics/'.$photo->pic)}}"> 
        	<h3>{{$photo->title}}</h3>
          <a  href="{{ URL::previous() }}"><BUTTON class="btn-success homebtn" style="margin-bottom: 5em; max-width:10em">Back to Photos</BUTTON></a>
    
    </div>
@stop