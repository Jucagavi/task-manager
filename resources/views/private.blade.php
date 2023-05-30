<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Private</title>
</head>
<body>
    <h1>Enhorabuena, has llegado aquí:
    @auth
        {{ Auth::user()->name }}
    @endauth</h1>
    <br><br>
    <a href="{{ route('logout') }}"><input type="button" value="Exit"/></a>
</body>
</html>