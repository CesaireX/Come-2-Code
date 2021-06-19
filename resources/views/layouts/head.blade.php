<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Gestion-Ordure</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('projet') }}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('projet') }}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('projet') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('projet') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body style="background-image: url(../projet/img/theme/background1.jpg); background-size: cover; background-position: center top;">

@yield('content')

</body>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</html>
