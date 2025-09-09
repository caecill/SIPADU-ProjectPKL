<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/login.css') }}">
</head>
<body>
    <div class="card-login">
    <img src="{{ asset('images/logo_pemprov.png') }}" alt="Logo" class="logo"> 


    <div class="form-area">
        <h1 class="judul">Log In</h1>
         <form>
            <label for="uname">Username</label><br>
            <input type="text" id="uname" name="fname"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <br><input type="submit" name="submit" id="sumbit">
        </form>
        </div>
    </div>
    </div>
</body>
</html>