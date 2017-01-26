<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>St. Paul Learning Center</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
         <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
         <script src="{{ asset('js/jquery.min.js') }}"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            @include('_includes.froala.froala-css')
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Raleway', sans-serif;
            }
            h1 {
                font-size: 5em;
            }

            h2 {
              font-size: 3em;
            }

            .homebtn{
                box-shadow: 5px 5px 5px #000;
                 width: 90%;
                  height: 3.5em;
                  margin: .75em;
                  padding: 0;

            }
            .person {
                 border: 10px solid transparent;
                 margin-bottom: 25px;
                 width: 80%;
                 height: 80%;
                 opacity: 0.7;
              }
            
            .person:hover {
                 border-color: #f1f1f1;
              }

table {
 /*   font-family: arial, sans-serif;*/
    border-collapse: collapse;
    width: 100%;
     table-layout:fixed;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

       </style>
    </head>
    <body>

      @yield('content')
    @yield('scripts')

</body>
</html>
