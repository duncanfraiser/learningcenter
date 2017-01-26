@extends('layouts.template')
@section('content')      
<div class="container">
        <div  class='col-md-12' style='margin-bottom: 0'>
            <div class='col-md-2' style="padding: 0">
            <a href="{{url('/')}}"><img style="width: 100%" src="{{url('/img/lclogo.png')}}"></a>
            </div>
            <div class='col-md-10'>
              <h1><center>St. Paul Learning Center</center></h1>  
            </div>
        </div>
       
    <div class="col-md-12" style="padding: 0; margin: 0; border: 0; border: 2px solid black; box-shadow: 10px 10px 5px #000; min-height: 25em; background-color: #1A8BCB">

      <div class="col-md-2" style="background-color: #1A8BCB; min-height: 25em; padding: 0; margin: 0; border: 0">   
		@include('_includes.pagebtns')
      </div>


        <div class="col-md-10" style=" background-color:#1A8BCB; height: 100%"> 
          <div class="col-md-11" style="color: #fff; background-color: #f0ad4e; min-height: 5em; border: 2px solid black; margin: 10px; box-shadow: 5px 5px 5px #000;">

			<h2>Photo Gallery</h2>
			
			{{Form::open(['action' => 'PhotoController@store', 'files' => true])}}
 				<div class="form-group">
					{{Form::label('title', 'Picture Title:')}}
					{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Picture Title'])}}
  				</div>
  				<div class="form-group">
    				{{ Form::label('picture', 'Upload Picture:')}}
					{{ Form::file('picture')}}
  				</div>
  				<div class="form-group" style="float: right">
  					<a class="btn btn-secondary" href="{{url('/')}}">Cancel</a>
					{{Form::submit('Upload Photo', ['class' => 'btn btn-primary'])}}
  				</div>
			{{Form::close()}}




        </div>

    </div>  
</div>
</div>
@stop