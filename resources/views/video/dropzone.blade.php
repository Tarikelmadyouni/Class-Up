<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dropzone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">

        </style>
    </head>
    <body>

        <div class='flex-center position-ref full-height' id="app">

            <example-component></example-component>

            </div>

            <script src="{{mix('/js/app.js')}}">


            </script>

    </body>

</html>