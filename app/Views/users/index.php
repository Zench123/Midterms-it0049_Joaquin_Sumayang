<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>



<nav>
    <
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
<td>

</td>
    </tr>

    <?php endforeach; ?>


    </table>
</body>
