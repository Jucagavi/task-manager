<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
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
        
    </style>
</head>
<body>
    <div class="cabecera">
        @yield('cabecera')
        <h1>Task Manager</h1>
    </div>
    <div class="contenido">
        @yield('content')
    </div>
</body>
</html>