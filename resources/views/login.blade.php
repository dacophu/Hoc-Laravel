<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form action="" method="POST">
        @csrf
        email:<input type="text" name="email" placeholder="Nhập email">
        </br>
        password:<input type="password" name="password" placeholder="Nhập password">
        </br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>