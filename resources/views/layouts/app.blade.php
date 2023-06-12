<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>

    {{-- <style>
        .cabecera {
            text-align: center;
            font-size: x-large;
            margin-bottom: 100px;
            background-color: orchid;
        }
        
        .contenido {
            width: 700px;
            margin: 0 auto;
            background-color: #632432;
        }

        /* .contenido table {
            border: ;
            background-color: aquamarine
        } */
        
    </style> --}}
</head>

<body class="bg-dark text-white">
    <div class="container text-center">
        @yield('cabecera')
        <h1>Task Manager</h1>
    </div>

    <div class="container align-center p-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid container">
                
                <a class="navbar-brand" href="#">Task Manager</a>
                <button class="navbar-toggler" type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#nav" >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>  
              <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ('user.index') }}">USERS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">EXIT</a>
                  </li>
                </ul>
            </div>
        </nav>
        <br>
        
        @yield('content')
    </div>
    
    {{-- <div class="contenido">
        @yield('content')
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>