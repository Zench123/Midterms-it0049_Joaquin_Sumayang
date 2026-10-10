<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER index</title>
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

    <tr>

    <th>Avatar</th>
    <th>ID</th>
    <th>Username</th>
    <th>Full name</th>
<th>Edit user</th>
<th>Delete user</th>

    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
    <td>
    <?php  if(!empty($user['avatar'])): ?>

    <img src="/uploads/<?= esc($user['avatar']) ?>" alt="user Avatar"  width ="100" height ="100"  >
    <?php endif; ?>






    </td>

<td> <?= $user['id']?> </td>
<td> <?=  esc($user['username']);?> </td>

<td> <?= esc($user['full_name']);?> </td>
<td>
    <a href="/users/<?= $user['id']?>/edit">Edit list</a>
</td>

  

    </tr>

    <?php endforeach; ?>


    </table>
    
    <br>
    <button><a href="/users/new">Add User</a></button>
</body>
