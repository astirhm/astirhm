
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: royalblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 50px;
            border-radius: 8px;
            background: white;
            box-shadow: royalblue;
        }
        .login-header {
            margin-bottom: 30px;
        }
        .login-header h2 {
            margin: 0;
            font-size: 30px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: white;
        }
    </style>
</head>
<body>
    <form action="/user" method="get">
        @csrf
        <div class="login-container">
            <div class="login-header text-center">
                <h2>Login</h2>
            </div>
            
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <a href="#">Forgot your password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
           
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
 