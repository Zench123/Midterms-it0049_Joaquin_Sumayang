<?php

namespace App\Controllers;
use App\Models\ProductModel;
class products extends BaseController
{
   //list products
public function index()
{




    $productsModel = new ProductModel();


//only find !archived
    $products = $productsModel->where('is_archived',0)-> findAll();

    return view('Products/index', ['products' => $products]);
}


public function new(){

return view('Products/new');
}


public function create(){



    $rules = [
         'name' => 'required',
    
   'price'=>'required|decimal',
   'stock_quantity' => 'required|integer'
    ];



if(!$this->validate($rules)){
    return redirect()->back()->withinput();
}

$productsModel= new ProductModel();

// $password = $this->request->getPost('password');
// $hashPass = password_hash($password, PASSWORD_DEFAULT);



// dd($password);




$data = [

'name' => $this->request->getPost('name'),
'price' => $this->request->getPost('price'),
'stock_quantity' => $this->request->getPost('stock_quantity'),
'is_archived' => 0

];




$image = $this->request->getFile('image');

if($image && $image -> isValid() && !$image -> hasMoved()){



$imageRules = ['image' => ['rules' => [   'max_size[image,2048]', 'is_image[image]','mime_in[image,image/jpg,image/jpeg,image/png]'    ]]];




if (!$this->validate($imageRules)) {
    return redirect()->back()->withInput();
}

$newName = $image ->getRandomName();

$image -> move(FCPATH .'uploads',$newName);

$data['image'] = $newName;

}

$productsModel -> insert($data);
return redirect() -> to('/Products');



}



//update
public function update($id){
$productsModel = new ProductModel();




    $rules = [ 'name' => 'required',
    
   'price'=>'required',
   'stock_quantity' => 'required'


    ];

if(!$this -> validate($rules)){
    return redirect()->back()->withInput();
}








$data = [

'name' => $this->request->getPost('name'),
'price' => $this->request->getPost('price'),
'stock_quantity' => $this->request->getPost('stock_quantity')

];




// $password = $this->request->getPost('password');

// if (!empty($password)) {
//     $data['password'] = password_hash($password, PASSWORD_DEFAULT);
// }


$image = $this->request->getFile('image');

if($image && $image -> isValid() && !$image -> hasMoved()){



$imageRules = ['image' => ['rules' => [   'max_size[image,2048]', 'is_image[image]','mime_in[image,image/jpg,image/jpeg,image/png]'    ]]];




if (!$this->validate($imageRules)) {
    return redirect()->back()->withInput();
}

$newName = $image ->getRandomName();

$image -> move(FCPATH .'uploads',$newName);

$data['image'] = $newName;

}

$productsModel -> update($id,$data);



return redirect() -> to('/Products');


}



public function edit($id){
$productsModel = new ProductModel();

$products = $productsModel -> find($id);



return view('Products/edit',['products'=>$products]);
}


//=========================

public function delete($id){
    $productsModel = new ProductModel();
  
$productsModel ->update($id,['is_archived' => 1]);

return redirect()->to('/Products');
}






}