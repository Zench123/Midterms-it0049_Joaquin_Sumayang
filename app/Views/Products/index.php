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

    <th>PRODUCT IMAGE</th>
    <th>ID</th>
    <th>PRODUCT NAME</th>
    <th>ITEM PRICE  </th>
<th>EDIT ITEM</th>
<th>DELETE ITEM</th>

    </tr>
       <?php foreach ($products as $product): ?>
    <tr>
    <td>
    <?php  if(!empty($product['image'])): ?>

    <img src="/uploads/<?= esc($product['image']) ?>" alt="products image"  width ="100" height ="100"  >
    <?php endif; ?>






    </td>

<td> <?= $product['id']?> </td>
<td> <?=  esc($product['name']);?> </td>

<td> <?= esc($product['price']);?> </td>
<td>
    <a href="/Products/<?= $product['id']?>/edit">Edit product</a>
</td>
<td>
    <a href="/Products/<?= $product['id']?>/delete">Delete products</a>
</td>





    </tr>



    <?php endforeach; ?>
    </table>

<button > <a href="/Products/new">ADD PRODUCTS</a></button>


</body>
