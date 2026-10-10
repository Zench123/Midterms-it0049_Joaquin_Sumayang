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
    <a href="/tasks">Tasks List</a>
     <a href="/about">About</a>  
    <a href="/about">About</a>  
     
<a href="/Products">PRODUCTS</a> 
<a href="/sales/history">SALES</a> <br>

<a href="/logout">Logout</a>

</nav>

<form action="/tasks/update/<?= $tasks['id'] ?>" method="post" >
      <?= csrf_field()?>

<label for="">Task</label>
<input type="text" name = "title" value ="<?= esc($tasks['title'])?>"required>

<br>

<label for="">Status</label>
<input type="text" name = "status" value ="<?= esc($tasks['status'])?>" required><br>
<br>
<label for="">task Date</label>
<input type="date" name = "task_date"  value ="<?= esc($tasks['task_date'])?>"required ><br>
<br>







<!-- 

<label for="">Password</label>
<input type="password" name = "password" ><br> -->





<br>


<button type = "submit">Update</button>





    </form>
</body>
</html>
