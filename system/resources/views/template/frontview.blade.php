<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Home</title>

    <link href="{{ url('public') }}/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('public') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('public') }}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/nouislider.css">
    <link id="switcher" href="{{ url('public') }}/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="{{ url('public') }}/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <link href="{{ url('public') }}/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>


    @include('section.front.header')

    @yield('content')

    @include('section.front.footer')
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ url('public') }}/js/bootstrap.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/jquery.smartmenus.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/jquery.smartmenus.bootstrap.js"></script>
    <script src="{{ url('public') }}/js/sequence.js"></script>
    <script src="{{ url('public') }}/js/sequence-theme.modern-slide-in.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/jquery.simpleLens.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/slick.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/nouislider.js"></script>
    <script src="{{ url('public') }}/js/custom.js"></script>

</body>

</html>
