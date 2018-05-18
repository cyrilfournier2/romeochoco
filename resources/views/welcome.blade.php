<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    {{ Html::style('css/style.css') }}
<!-- Styles -->
    <style>
        html, body {
            font-family: 'Raleway', sans-serif;
            background-image: url('img/fond.png');
            background-repeat: repeat-x;
        }
    </style>
    <!-- Styles -->
    {{ Html::style('css/main.css') }}
</head>
<body>
    @include('layouts.headerFrontPage')
    <div id="corps">
        <section data-role="section" id="section-section1" class="section-scroll">
            @include('pages.page1')
        </section>
        <section data-role="section" id="section-section2" class="section-scroll">
            @include('pages.page2')
        </section>
        <section data-role="section" id="section-section3" class="section-scroll">
            @include('pages.page3')
        </section>
        <section data-role="section" id="section-section4" class="section-scroll">
            @include('pages.page4')
        </section>
        <section data-role="section" id="section-section5" class="section-scroll">
            @include('pages.page5')
        </section>
        <section data-role="section" id="section-section6" class="section-scroll">
            @include('pages.page6')
        </section>
        <div class="horizon-prev"><img src="img/l-arrow.png"></div>
        <div class="horizon-next"><img src="img/r-arrow.png"></div>
    </div>


<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
