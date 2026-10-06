<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>


<nav>
    <!-- <a href="/">Home</a> -->
    <a href="/tasks">Tasks</a>
    <a href="/customers">Customers</a>
    <a href="/customers/new">Add Customer</a>
    <a href="/users">Users</a>
    <a href="/users/new">Add User</a>
    <a href="/profiles">Profile</a>
    <a href="/about">About</a>  
     <a href="/logout">Logout</a>
<a href="/Products">PRODUCTS</a> 
<a href="/Sales">SALES</a> 




</nav>


<form action="/customers/<?= $customer['id'] ?>/edit"method="post">
      
      <?= csrf_field()?>

<label for="">Email</label>
<input type="email" name = "email" value ="<?= esc($customer['email'])?>">

<br>
<label for="">phone</label>
<input type="text" name = "phone" value ="<?= esc($customer['phone'])?>">

<br>

<label for="">Full name</label>
<input type="text" name = "full_name" value ="<?= esc($customer['full_name'])?>"><br>

<br>
<button type = "submit">UPdate</button>

<button><a href="/customers/<?= $customer['id']?>/delete">Delete User</a></button>

 
    </form>


    
</body>
</html>
