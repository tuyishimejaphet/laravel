<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="main">
    <form action="/register" method="post">
        @csrf
        <h2>Rgistration form</h2>
        <label>name</label><br><br>
        <input type="text"name="name"placeholder="enter your name"><br><br>

        <labcvmdel>address</label><br><br>
        <input type="text"name="address"placeholder="enter your address"><br><br>

        <label>email</label><br><br>
        <input type="text"name="email"placeholder="enter your email"><br><br>

        <label>password</label><br><br>
        <input type="password"name="password"placeholder="enter your pass"><br><br>
        <button type="submit" name="submit">send</button>

    </form>
    </div>
</body>
</html>