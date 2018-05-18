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
        html, body{
            font-family: 'Raleway', sans-serif;
            background-image: url('img/fond.png');
            background-repeat: repeat-x;
        }
        h1{

            font-family: 'Raleway', sans-serif;
            color : #bb1917;
            font-weight: bolder;
            font-size: 60px;
        }
        p{
            font-family: 'Raleway', sans-serif;
            color : black;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
    <!-- Styles -->
    {{ Html::style('css/main.css') }}
</head>
<body >
@include('layouts.secondheader')
<div  class=" panel panel-body" style="padding-top: 10%; width: 98%">
    <div class="col-md-6 ">
        <h1>Notre Histoire</h1>
        <p>
            Duplexque isdem diebus acciderat malum, quod et Theophilum
            insontem atrox interceperat casus, et Serenianus dignus
            exsecratione cunctorum, innoxius, modo non reclamante
            publico vigore, discessit.
        </p>
       <p>
           Latius iam disseminata licentia onerosus bonis omnibus Caesar
           nullum post haec adhibens modum orientis latera cuncta vexabat
           nec honoratis parcens nec urbium primatibus nec plebeiis.
        </p>
       <p>
           Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest,
           quod ex infinita societate generis humani, quam conciliavit ipsa
           natura, ita contracta res est et adducta in angustum ut omnis
           caritas aut inter duos aut inter paucos iungeretur.
           Duplexque isdem diebus acciderat malum, quod et Theophilum
           insontem atrox interceperat casus, et Serenianus dignus
           exsecratione cunctorum, innoxius, modo non reclamante
           publico vigore, discessit.
        </p>
       <p>
           Latius iam disseminata licentia onerosus bonis omnibus Caesar
           nullum post haec adhibens modum orientis latera cuncta vexabat
           nec honoratis parcens nec urbium primatibus nec plebeiis.
        </p>
       <p>
           Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest,
           quod ex infinita societate generis humani, quam conciliavit
           Duplexque isdem diebus acciderat malum, quod et Theophilum
           insontem atrox interceperat casus, et Serenianus dignus e
        </p>
    </div>
 <img src="{{ asset("img/imagehist1.JPG") }}" class="col-md-6">
 <img src="{{ asset("img/imagehist2.JPG") }}" class="col-md-6">
</div>


<footer>
    {{ Html::script('js/jquery-3.3.1.min.js') }}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</footer>
</body>
</html>
