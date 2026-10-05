<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="/login" method ="post">

<?= csrf_field()?>

<label for="username">Username</label>
<input type="text" name ="username">
<br>

<label for="">password</label>
<input type="password" name ="password">

<br>
<button type = "submit">Login</button>
<br>

</form>




</body>
</html>