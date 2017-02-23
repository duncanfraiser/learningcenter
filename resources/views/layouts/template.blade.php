<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>St. Paul Early Learning Center</title>
        <link rel="icon" href="{{url('/img/logo.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        
        {{-- CDN BOOTSTRAP --}}
        {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
        
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}?3">
        @include('_includes.froala.froala-css')


        <!-- APPLE IOS WEB APP NECESSITIES -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="St. Paul Early Learning Center">
        <link rel="apple-touch-icon" href="/apple-touch-icon5.png">
        <link rel="apple-touch-startup-image" href="/apple-touch-icon5.png">
        <!-- By Default, Links open externally (in safari) on the IOS Web App after 'download'. This prevents internal links from opening externally. It still allows external links to open externally, though. -->
        <script type="text/javascript">
            if(("standalone" in window.navigator) && window.navigator.standalone){
                var noddy, remotes = false;
                document.addEventListener('click', function(event) {
                    noddy = event.target;
                    while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                    }
                    if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
                    {
                    event.preventDefault();
                    document.location.href = noddy.href;
                    }
                },false);
            }
        </script>



</head>
<body>
<div class="container">
    <div  class='col-md-12' style='margin-bottom: 0'>
        <div class='col-md-2' style="padding: 0">
          <a href="{{url('/')}}"><img class="logo" src="{{url('/img/lclogo.png')}}"></a>
        </div>
        <div class='col-md-10 namediv'>
          <h1 class="name"><center>St. Paul Early Learning Center</center></h1> 

        </div>
    </div>
    
    <div class="col-md-12 bigdiv">


 <div class="row">



<div class="col-md-10 col-md-push-2 mobilediv">
      <div class="col-md-12" style=" background-color: #1A8BCB; padding:0em; height: 100%">       
          @yield('content')
      </div>
      </div>

      <div class="col-md-2 col-md-pull-10 mobilediv">
      @include('_includes.pagebtns')
      </div>
    
</div>






    </div>
</div>
  @yield('scripts')
</body>
</html>
