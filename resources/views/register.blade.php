<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register  page</title>
</head>
<body>

<form action="/log" method="post">
    @csrf
<h2>Rgistration form</h2>
        <label>name</label><br><br>
        <input type="text"name="name"placeholder="enter your name"><br><br>

        <label>address</label><br><br>
        <input type="text"name="address"placeholder="enter your address"><br><br>

        <label>email</label><br><br>
        <input type="text"name="email"placeholder="enter your email"><br><br>

        <label>password</label><br><br>
        <input type="password"name="password"placeholder="enter your pass"><br><br>
        <button type="submit" name="submit">submit</button>
</form>
    
</body>
</html>