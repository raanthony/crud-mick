
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cover Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
    table
    {
        color: white;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Ecommerce Maivana</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="{{ route('addPr') }}">Add</a>
                <a class="nav-link" href="{{ route('listPr') }}">List</a>
                <a class="nav-link"  href="{{ route('logout') }}">logout</a>
                {{--<a class="nav-link" href="#">Contact</a>--}}
            </nav>
        </div>
    </header>
        @if(Auth::check())
            Welcome {{ Auth::User()->name }}
        @endif
        @if(Session::has('message'))
        <p class="alert alert-success">
            {{Session::get('message')}}

        </p>
        @endif

         @yield('content')

    <footer class="mt-auto text-white-50">
        <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">Mick Ram</a>.</p>
    </footer>
</div>



</body>
</html>
