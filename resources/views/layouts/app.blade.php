<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
{{ Html::style('css/main.css') }}
<!-- Styles -->
    <style>
        html, body {
            font-family: 'Raleway', sans-serif;
            width: 100%;
        }
         label,h1, input{
             color: #bb1917;
         }
        body{

            color: #bb1917;
        }
    </style>
    <!-- Styles -->
    {{ Html::style('css/main.css') }}
    {{ Html::style('css/auth.css') }}
</head>
<body>
<div id="app">
    @include('layouts.header')

    <div style="padding-top: 10%;width: 100%;">
        @yield('content')
    </div>
    @include('layouts.footer')
</div>
</body>
</html>
