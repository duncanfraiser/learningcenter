@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #f0ad4e;">
      <h2>Photo Gallery</h2>
        <img width='100%' style="border: 2px solid black; margin-bottom: 2em; box-shadow: 5px 5px 5px #000"" src="{{url('storage/pics/'.$photo->pic)}}">
    </div>
@stop