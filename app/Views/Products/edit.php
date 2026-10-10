<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>

<!-- <nav>
    <a href="/">Home</a>
    <a href="/tasks">Tasks</a>
    <a href="/customers">Customers</a>
    <a href="/customers/new">Add Customer</a>
    <a href="/users">Users</a>
    <a href="/users/new">Add User</a>
    <a href="/profiles">Profile</a>
    <a href="/about">About</a>   <a href="/logout">Logout</a>
</nav> -->

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

<form action="/Products/<?= $products['id'] ?>/edit" method="post" enctype="multipart/form-data">
      <?= csrf_field()?>

<label for="">product name</label>
<input type="text" name = "name" value ="<?= esc($products['name'])?>">

<br>

<label for="">Price</label>
<input type="text" name = "price" value ="<?= esc($products['price'])?>"><br>
<br>
<label for="">Product image</label>
<input type="file" name = "image" accept =".jpeg,.jpg,.png" >
<br>


<label for="">Available stock</label>
<input type="text" name = "stock_quantity" value ="<?= esc($products['stock_quantity'])?>"><br>





<!-- 

<label for="">Password</label>
<input type="password" name = "password" ><br> -->





<br>


<button type = "submit">Update</button>





    </form>
</body>
</html>
