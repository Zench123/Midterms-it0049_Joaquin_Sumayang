<!DOCTYPE html>
<html>
<head>
    <title>Sales History - POS System</title>
</head>
<body>

<h1>Sales History</h1>

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
<br>

<table border="1" cellpadding="8">
    <tr>
        <th>Product</th>
        <th>Customer</th>
        <th>Staff</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Sale Date</th>
    </tr>

    <?php if (empty($sales)): ?>
        <tr>
            <td colspan="6">No sales recorded yet.</td>
        </tr>
    <?php else: ?>
        <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= esc($sale['product_name']) ?></td>

                <td>
                    <?= esc($sale['customer_name'] ?? 'Walk-in Customer') ?>
                </td>

                <td><?= esc($sale['staff_name']) ?></td>

                <td><?= esc($sale['quantity']) ?></td>

                <td>
                    ₱<?= number_format((float) $sale['total_price'], 2) ?>
                </td>

                <td><?= esc($sale['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
<a href="/sales/new">add data</a>
</body>
</html>

