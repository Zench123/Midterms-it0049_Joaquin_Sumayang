<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>

<nav>
    
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

<body>
<h1>Add Products section</h1>

<form action="/Products/new" method ="post" enctype = "multipart/form-data"> 

<?= csrf_field() ?>

<label for="name">PRODUCT Name</label>
<input type="text" name = "name"
value="<?= old('name')?>">



<br>
<label for="">ITEM PRICE</label>
<input type="text" name = "price"

value="<?= old('price')?>">

<br>

<label for="">ITEM QUANTITY</label>
<input type="num" name = "stock_quantity" value="<?= old('stock_quantity')?>">



<label for="image">ITEM IMAGE</label>
<input type="file" name = "image">

<br>
<button type = "submit">ADD PRODUCT</button><br>
<button > <a href="/Products">To PRODUCTS LIST</a></button>
</form>



</body>
</html>