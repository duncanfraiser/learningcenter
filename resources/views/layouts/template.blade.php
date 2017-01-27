<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>St. Paul Early Learning Center</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
         <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
         <script src="{{ asset('js/jquery.min.js') }}"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">
         @include('_includes.froala.froala-css')
</head>
<body>
<div class="container">
    <div  class='col-md-12' style='margin-bottom: 0'>
        <div class='col-md-2' style="padding: 0">
          <a href="{{url('/')}}"><img style="width: 100%" src="{{url('/img/lclogo.png')}}"></a>
        </div>
        <div class='col-md-10' style="padding-top: 3em">
          <h1 style="font-size: 4em"><center>St. Paul Learning Early Center</center></h1>  
        </div>
    </div>
    <div class="col-md-12" style="padding: 0; margin: 0; border: 2px solid black; box-shadow: 10px 10px 5px #000; min-height: 25em; background-color: #1A8BCB">
      @include('_includes.pagebtns')
      <div class="col-md-10" style=" background-color: #1A8BCB; padding:0em; height: 100%"> 
          @yield('content')
      </div>
    </div>
</div>
  @yield('scripts')
</body>
</html>
