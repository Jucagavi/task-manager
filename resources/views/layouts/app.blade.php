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
    <div class="cabecera">
        @yield('cabecera')
        <h1>Task Manager</h1>
    </div>

    <div class="container">
        @yield('content')
    </div>
    
    {{-- <div class="contenido">
        @yield('content')
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>