@extends('layouts.template')
@section('content')      
<div class="container">
        <div  class='col-md-12' style='margin-bottom: 0'>
            <div class='col-md-2' style="padding: 0">
                <img style="width: 100%" src="{{url('/img/lclogo.png')}}">
            </div>
            <div class='col-md-10'>
              <h1><center>St. Paul Learning Center</center></h1>  
            </div>
        </div>
       
    <div class="col-md-12" style="padding: 0; margin: 0; border: 0; border: 2px solid black; box-shadow: 10px 10px 5px #000; min-height: 25em; background-color: #1A8BCB">

      <div class="col-md-2" style="background-color: #1A8BCB; min-height: 25em; padding: 0; margin: 0; border: 0">   
        @include('_includes.pagebtns')
      </div>


        <div class="col-md-10" style=" background-color: #1A8BCB; height: 100%"> 
          <div class="col-md-11" style="background-color: yellow; min-height: 5em; border: 2px solid black; margin: 10px; box-shadow: 5px 5px 5px #000;">



            {{-- START Carousel Code --}}
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
                <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" style="margin: 1em; width: 96%; border: 2px solid black">
                        <div class="item active">
                            <img src="{{url('img/splcgroup.png')}}" alt="St Paul Learning Center">  
                        </div>
                        <div class="item">
                            <img src="{{url('img/splcgroup.png')}}" alt="St Paul Learning Center">     
                        </div>
                    </div>

                <!-- Left and right controls -->
                        <a class="left carousel-control" style="margin-left: .80em" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" style="margin-right: 1em" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                </div>
                {{-- END Carousel Code --}}





          </div>


           <div class="col-md-11" style="background-color: #337ab7; min-height: 5em; border: 2px solid black; margin: 10px; box-shadow: 5px 5px 5px #000;">
              <h4 style="color: #fff; margin: 2em; text-align: left"> <span style="font-size: 125%">Welcome to the St. Paul Early Learning Center.</span><br/><br/> We hope you will enjoy viewing our site and will want to come visit us. It would be our pleasure to schedule a time for you to tour the Learning Center and experience the happy learning in all of our classrooms.<br/><br/>Thank you for your interest in the St. Paul Early Learning Center and we look forward to meeting you soon.</h4><h4 style='color: #fff; text-align: right'>Jennifer Henry, Director<br/>Darlene Scanlon, Assistant Director</h4>
          </div>


        </div>

    </div>  
</div>
@stop
