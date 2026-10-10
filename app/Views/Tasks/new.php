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
    <a href="/tasks">Tasks List</a>
     <a href="/about">About</a>  
    <a href="/about">About</a>  
     
<a href="/Products">PRODUCTS</a> 
<a href="/sales/history">SALES</a> <br>

<a href="/logout">Logout</a>

</nav>

<body>
<h1>Add Tasks section</h1>

<form action="/tasks/create" method ="post" > 

<?= csrf_field() ?>

<label for="title">To Do</label>
<input type="text" name = "title"
value="<?= old('title')?>">
<br>

<label for="statuts">Task Status</label>
<input type="text" name = "status"
value="<?= old('status')?>"><br>

<label for="task_date">Task Status</label>
<input type="date" name = "task_date"
value="<?= old('task_date')?>"><br>



<!-- <label for="image">ITEM IMAGE</label>
<input type="file" name = "image"> -->

<br>
<button type = "submit">ADD Task</button><br>
 
</form>



</body>
</html>