<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>


<nav>
    <!-- <a href="/">Home</a> -->

    <a href="/customers">Customers</a>
    <a href="/customers/new">Add Customer</a>
    <a href="/users">Users</a>
    <a href="/users/new">Add User</a>
    
    <a href="/about">About</a>  
     <a href="/logout">Logout</a>
<a href="/Products">PRODUCTS</a> 
<a href="/sales/history">SALES</a> 


</nav>
<body>
<h1>Add User section</h1>

<form action="/users/new" method ="post" enctype = "multipart/form-data"> 

<?= csrf_field() ?>

<label for="name">Full Name</label>
<input type="text" name = "full_name"
value="<?= old('full_name')?>">



<br>
<label for="username">username</label>
<input type="text" name = "username"

value="<?= old('username')?>">

<br>


<label for="avatar">Avatar</label>
<input type="file" name = "avatar">


<button type = "submit"> add user</button>
</form>



</body>
</html>