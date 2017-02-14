{{-- <div id="slidder" class="col-md-11" style="background-color: yellow; min-height: 5em; border: 2px solid black; margin: 2em 2em 0em 2em; box-shadow: 5px 5px 5px #000;"> --}}
<div id="slidder" class="col-md-11 slidderdiv">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="margin: 0em; width: 100%;">
      <div class="item active">
        <img width="100%" src="{{url('img/family.jpeg')}}" alt="St Paul Learning Center">  
      </div>
      <div class="item">
        <img width="100%" src="{{url('img/bryant.jpeg')}}" alt="St Paul Learning Center">     
      </div>
      <div class="item">
        <img width="100%" src="{{url('img/breast-cancer.jpeg')}}" alt="St Paul Learning Center">   
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" style="margin-left: 0" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" style="margin-right: 0" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>