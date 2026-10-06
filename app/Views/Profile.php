<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile list</title>
</head>
<body>
    <h1>profile</h1>

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


<table>
    <tr>
<th>ID</th>
<th>Username</th>
<th>Full Name</th>
<th>Email</th> 
</tr>



<tr>
    
<td><?= $profile['id']?>   </td>
<td><?= $profile['username']?>   </td>
<td><?= $profile['full_name']?>   </td>
<td><?= $profile['email']?>   </td>
</tr>



</table>

</body>
</html>