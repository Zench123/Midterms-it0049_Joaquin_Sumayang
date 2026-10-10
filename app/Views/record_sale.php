<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Sale</title>
</head>
<body>
    

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

<h1>Records</h1>



    <?php if (session()->getFlashdata('error')): ?>
    
        <?= esc(session()->getFlashdata('error')) ?>
    
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
   
        <?= esc(session()->getFlashdata('success')) ?>
   
    <?php endif; ?>

<form action="/sales/new" method="post">
<?= csrf_field() ?>


<label for="prduct_id"> Select Product</label>
<select name="product_id" id="product_id" required> <?php foreach ($products as $product): ?>
        <option
            value="<?= esc($product['id']) ?>"
            <?= old('product_id') == $product['id'] ? 'selected' : '' ?>>
            <?= esc($product['name']) ?>
            - ₱<?= number_format((float) $product['price'], 2) ?>
            (Stock: <?= esc($product['stock_quantity']) ?>)
        </option>
        <?php endforeach; ?>
    </select>


<br>

<label for="quantity">quantity</label>
<input type="number" name = "quantity" id = "quantity" min ="1" required>

<button type="submit">Record SAle</button>




</form>



</body>
</html>