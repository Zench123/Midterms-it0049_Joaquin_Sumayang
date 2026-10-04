<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/tasks">Tasks</a>
    <a href="/customers">Customers</a>
    <a href="/customers/new">Add Customer</a>
    <a href="/users">Users</a>
    <a href="/users/new">Add User</a>
    <a href="/profiles">Profile</a>
    <a href="/about">About</a>
</nav>



<form action="/users/<?= $user['id'] ?>/edit"
      method="post"
      enctype="multipart/form-data">
      
      <?= csrf_field()?>

<label for="">Username</label>
<input type="text" name = "username" value ="<?= esc($user['username'])?>">

<br>

<label for="">Full name</label>
<input type="text" name = "full_name" value ="<?= esc($user['full_name'])?>"><br>

<label for="">picture</label>
<input type="file" name = "avatar" accept =".jpeg,.jpg,.png" ?>
<br>
<button type = "submit">UPdate</button>
    </form>
</body>
</html>
