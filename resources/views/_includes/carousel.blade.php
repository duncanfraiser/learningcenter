          <div id="slidder" class="col-md-11" style="background-color: yellow; min-height: 5em; border: 2px solid black; margin: 2em 2em 0em 2em; box-shadow: 5px 5px 5px #000;">
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