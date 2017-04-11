<!DOCTYPE html>
<html>
<head>

    <title>
        @yield("title", "Lunch Out!")
    </title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    @stack('head')

</head>

<body>
    <div class="container-fluid" id="top">
        <header>
            <h1>LUNCH OUT!</h1>
            <img id="topImage" src="{{asset('/images/out_to_lunch.jpg')}}" alt="Out to Lunch"/>
        </header>

        <section>
            @yield('content')
        </section>

    </div>
    @stack('body')

</body>
</html>
