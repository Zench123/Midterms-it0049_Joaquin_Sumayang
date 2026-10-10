<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\ProductModel;
use App\Models\SaleModel;

class Sales extends BaseController
{
    public function history()
    {
        $saleModel = new SaleModel();

        $sales = $saleModel
            ->select(
                'sales.id,
                 products.name AS product_name,
                 customers.full_name AS customer_name,
                 users.full_name AS staff_name,
                 sales.quantity,
                 sales.total_price,
                 sales.created_at'
            )
            ->join('products', 'products.id = sales.product_id')
            ->join('customers', 'customers.id = sales.customer_id', 'left')
            ->join('users', 'users.id = sales.user_id')
            ->orderBy('sales.created_at', 'DESC')
            ->findAll();

        return view('sales_history', [
            'sales' => $sales
        ]);
    }



public function new(){
    $productModel = new \App\Models\ProductModel(   );
 
  $productModel = new \App\Models\ProductModel();
$customerModel = new \App\Models\CustomerModel();

$customers = $customerModel->where('is_archived', 0)->findAll();
 $product = $productModel->where('is_archived', 0)->findAll();
return view('record_sale',['products' => $product,'customers' => $customers]);
    }



public function create(){

 $productId = $this->request->getPost('product_id');
    $customerId = $this->request->getPost('customer_id');
    $quantity = $this->request->getPost('quantity');



    if(!is_numeric($productId) || (int) $productId<1|| !ctype_digit((string)$quantity)|| (int)$quantity < 1){
        return redirect()->back()->withInput();
    }

$quantity =(int) $quantity;
$customerId = ($customerId === '')? null : $customerId;

$db = \Config\Database::connect();

$productModel = new \App\Models\ProductModel();
$saleModel = new \App\Models\SaleModel();

//process
$db -> transBegin();
$product = $db->query(
    'SELECT * FROM products WHERE id = ? AND is_archived = 0 FOR UPDATE',
    [(int) $productId]
)->getRowArray();

if(!$product){
    $db ->transRollback();
    return redirect()-> back()->withInput();

}


$stock = (int) $product['stock_quantity'];


if($quantity >$stock){
    $db -> transRollback();

    return redirect()-> withInput();
}


//calculation
$total = (float) $product ['price']* $quantity;

$saleData = [
        'product_id' => (int) $productId,
        'customer_id' => $customerId,
        'user_id' => session()->get('user_id'),
        'quantity' => $quantity,
        'total_price' => $total
];
if(!$saleModel ->insert($saleData)){

$db ->transRollback();
return redirect()->withInput();
}


//devcrease stock


$newStock = $stock - $quantity;
$productModel -> update((int)$productId,['stock_quantity' => $newStock]);


$db ->transCommit();
return redirect() -> to('/sales/history');



}



}