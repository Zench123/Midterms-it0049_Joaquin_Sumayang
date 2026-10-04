<!DOCTYPE html>
<html lang="en">
<head>

    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
<p>Test</p>
<nav>
    <a href="/">Home</a>
    <a href="/tasks">Tasks</a>
    <a href="/customers">Customers</a>
    <a href="/customers/new">Add Customer</a>
    <a href="/users">Users</a>
    <a href="/users/new">Add User</a>
    <a href="/profiles">Profile</a>
    <a href="/about">About</a>
</nav>
<?php
foreach($tasks as $task):



?>
<p>

<?= $task['title']    ?>
<?= $task['status']    ?>
<?= $task['task_date']    ?>

</p>


<?php endforeach ; ?>


</body>
</html>