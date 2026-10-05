<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add customer</title>
</head>

<nav>
    <a href="/">Home</a>
    <a href="/tasks">Tasks</a>
    <a href="/customers">Customers</a>
    <a href="/customers/new">Add Customer</a>
    <a href="/users">Users</a>
    <a href="/users/new">Add User</a>
    <a href="/profiles">Profile</a>
    <a href="/about">About</a>   <a href="/logout">Logout</a>
</nav>

<body>
<h1>Add customer section</h1>

<form action="/customers/new" method ="post"> 

<?= csrf_field() ?>

<label for="name">Full Name</label>
<input type="text" name = "full_name"
value="<?= old('full_name')?>">



<br>
<label for="email">Email</label>
<input type="email" name = "email"

value="<?= old('email')?>">

<br>


<label for="phone">Phone</label>
<input type="text" name = "phone">


<button type = "submit"> add customer</button>
</form>



</body>
</html>