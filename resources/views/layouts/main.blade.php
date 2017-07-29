<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grupo de Conexión</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div class=" position-ref full-height">
            <div class="content">
                <center>
                    @yield('lyrics')
                </center>                
            </div>
            <div class="overlay"></div>
        </div>
    </body>
</html>
