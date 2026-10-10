<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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


    <table>
<br>
    <tr>

    <th>task </th>
    <th>status</th>
    <th>task date</th>
 
    </tr>
       <?php foreach ($tasks as $task): ?>
    <tr>
    





  

<td> <?= $task['title']?> </td>
<td> <?=  esc($task['status']);?> </td>

<td> <?= esc($task['task_date']);?> </td>
<td> <a href="/tasks/edit/<?= $task['id'] ?>">Edit task</a> <form action="/tasks/delete/<?= $task['id'] ?>" method="post"> <?= csrf_field() ?> 
<button type="submit">Delete task</button> </form> </td>



    </tr>



    <?php endforeach; ?>
    </table>

<button > <a href="/tasks/new">ADD taskS</a></button>


</body>
