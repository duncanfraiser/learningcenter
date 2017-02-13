<div class="col-md-12" style=" padding: 0">   
  <div class="col-md-12 " style="background-color: #1A8BCB; padding: 10px; margin: 0; border: 0"> 
  <a href="{{url('/')}}"><button class="btn-primary homebtn">Home</button></a>
  <a href="{{url('/news')}}"><button class="btn-danger homebtn">News</button></a>
  <a href="{{url('/calendar')}}"><button class="btn-success homebtn">Calendar</button></a>   
  <a href="{{url('/meals')}}"><button class="btn-info homebtn">Meal Menu</button></a>
  <a href="{{url('/photos')}}"><button class="btn-warning homebtn">Photo Gallery</button></a>
  <a href="{{url('/handbook')}}"><button class="btn-primary homebtn">Handbook/Forms</button></a>
  <a href="{{url('/admission')}}"><button class="btn-danger homebtn">Admission/Tuition</button></a>
  <a href="{{url('/curriculum')}}"><button class="btn-success homebtn">Curriculum</button></a>
  <a href="{{url('/employment')}}"><button class="btn-info homebtn">Employment Opportuninity</button></a>
  <a href="{{url('/give')}}"><button class="btn-warning homebtn">Giving Opportunity</button></a>
  <a href="{{url('/about')}}"><button class="btn-primary homebtn">About Us</button></a>  
  <!-- Authentication Links -->
    @if (Auth::guest())
      <a href="{{ url('/login') }}"><button class="btn-danger homebtn">Login</button></a>
    @else 
      <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <button class="btn-danger homebtn">Logout</button>
      </a>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    @endif
  </div>
</div>