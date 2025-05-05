<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <a href="">home</a>
    <a href="/index">index</a>
    <a href="/logou">logout</a>
    <div class="main">
    <form action="/new" method="post">
        @csrf
        <h2>Rgistration form</h2>
        <label>name</label><br><br>
        <input type="text" name="name"placeholder="enter your name" required><br><br>

        <labcvmdel>address</label><br><br>
        <input type="text" name="address"placeholder="enter your address" required><br><br>

        <label>email</label><br><br>
        <input type="email" name="email"placeholder="enter your email" required><br><br>

        <label>password</label><br><br>
        <input type="password" name="password"placeholder="enter your pass" required><br><br>
        <button type="submit" name="submit">send</button>

    </form>
    </div>
</body>
</html>
