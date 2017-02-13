@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #f0ad4e;">
      @if(\Auth::Check())
        <a href="{{url('/photos/create')}}"><button class="btn-danger adminbtn">Add Photo</button></a>
      @endif
      <h2>Photo Gallery</h2>
      <div class='col-md-12' style="padding-bottom: 2em">
        @foreach ($photos as $photo)
        <div class="col-md-4" >
          <a href="{{url('/photos/'.$photo->id)}}"><img width='100%' style="border: 2px solid black; margin: 10px; box-shadow: 5px 5px 5px #000" src="{{url('storage/pics/'.$photo->pic)}}"></a>
        </div>
        @endforeach
      </div>
      <div class="text-center">
        {{$photos->links()}}
      </div>
    </div>    
@stop






