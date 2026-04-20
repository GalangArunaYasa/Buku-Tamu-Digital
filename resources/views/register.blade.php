<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h2>Registrasi Aplikasi</h2>
    <form action="/register/submit" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name">

    <label for="">email</label>
    <input type="email" name="email">

    <label for="">Password</label>
    <input type="password" name="password">

    <button>Submit</button>
    </form>
</body>
</html>
