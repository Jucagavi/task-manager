<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0d6efd;
        }
        
        .login {
            width: 360px;
            height: min-content;
            padding: 20px;
            border-radius: 12px;
            background: #ffffff;
        }
        
        .login h1 {
            font-size: 36px;
            margin-bottom: 25px;
        }
        
        .login form {
            font-size: 20px;
        }
        
        .login form .form-group {
            margin-bottom: 12px;
        }
        
        .login form input[type="submit"] {
            font-size: 20px;
            margin-top: 15px;
        }
        </style>

</head>

<body>

    <div class="login">

        <h1 class="text-center">Project Manager</h1>
        
        <form method="POST" action="{{ route('init-session') }}">
            @csrf
            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" name="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            {{-- <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div> --}}
            <input class="btn btn-success w-100" type="submit" value="SIGN IN">
        </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>