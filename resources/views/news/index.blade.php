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
          <div class="col-md-11" style="color: #fff; background-color: #d9534f; min-height: 5em; border: 2px solid black; margin: 10px; box-shadow: 5px 5px 5px #000;">

			<h2>News</h2>
			

        </div>

    </div>  
</div>
@stop