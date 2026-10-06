<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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


    <table>

    <tr>



    <th>ID</th>
    <th>Email</th>
    <th>Full name</th>
    <th>Phone</th>
    <th>Action</th>

    </tr>
    <?php foreach ($customers as $customer): ?>
    <tr>
    
<td> <?= $customer['id']?> </td>
<td> <?=  esc($customer['email']);?> </td>

<td> <?= esc($customer['full_name']);?> </td>

<td> <?= esc($customer['phone']);?> </td>
<td>
    <a href="/customers/<?= $customer['id']?>/edit">Edit list</a>
</td>

    </tr>

    <?php endforeach; ?>


    </table>
</body>
