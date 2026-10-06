<?php

namespace App\Controllers;
use App\Models\SalesModel;
class Sales extends BaseController
{
   //list products
public function index()
{




    $SalesModel = new SalesModel();



    $Sales = $SalesModel->findAll();

    return view('Sales/index', ['Sales' => $Sales]);
}

public function new(){

return view('Sales/new');
}

public function create(){



    $rules = [ 'product_id' => 'required',
    
   'customer_id'=>'required',
   'sold_by' => 'required',
   'quantity' =>'required',
   'total_price' =>'required'

    ];



if(!$this->validate($rules)){
    return redirect()->back()->withinput();
}

$SalesModel= new SalesModel();

// $password = $this->request->getPost('password');
// $hashPass = password_hash($password, PASSWORD_DEFAULT);



// dd($password);




$data = [

'product_id' => $this->request->getPost('product_id'),
'customer_id' => $this->request->getPost('customer_id'),
'sold_by' => $this->request->getPost('sold_by'),
'quantity' => $this->request->getPost('quantity'),
'total_price' => $this->request->getPost('total_price')

];




// $avatar = $this->request->getFile('avatar');

// if($avatar && $avatar -> isValid() && !$avatar -> hasMoved()){



// $avatarRules = ['avatar' => ['rules' => [   'max_size[avatar,2048]', 'is_image[avatar]','mime_in[avatar,image/jpg,image/jpeg,image/png]'    ]]];




// if (!$this->validate($avatarRules)) {
//     return redirect()->back()->withInput();
// }

// $newName = $avatar ->getRandomName();

// $avatar -> move(FCPATH .'uploads',$newName);

// $data['avatar'] = $newName;

// }

$SalesModel -> insert($data);
return redirect() -> to('/Sales');



}



//update
public function update($id){
$SalesModel = new SalesModel();




    $rules = [ 'product_id' => 'required',
    
   'customer_id'=>'required',
   'sold_by' => 'required',
   'quantity' =>'required',
   'total_price' =>'required'

    ];

if(!$this -> validate($rules)){
    return redirect()->back()->withInput();
}








$data = [

'product_id' => $this->request->getPost('product_id'),
'customer_id' => $this->request->getPost('customer_id'),
'sold_by' => $this->request->getPost('sold_by'),
'quantity' => $this->request->getPost('quantity'),
'total_price' => $this->request->getPost('total_price'),

];




// $password = $this->request->getPost('password');

// if (!empty($password)) {
//     $data['password'] = password_hash($password, PASSWORD_DEFAULT);
// }


// $avatar = $this->request->getFile('avatar');

// if($avatar && $avatar -> isValid() && !$avatar -> hasMoved()){



// $avatarRules = ['avatar' => ['rules' => [   'max_size[avatar,2048]', 'is_image[avatar]','mime_in[avatar,image/jpg,image/jpeg,image/png]'    ]]];




// if (!$this->validate($avatarRules)) {
//     return redirect()->back()->withInput();
// }

// $newName = $avatar ->getRandomName();

// $avatar -> move(FCPATH .'uploads',$newName);

// $data['avatar'] = $newName;

// }

$SalesModel -> update($id,$data);



return redirect() -> to('/Sales');


}



public function edit($id){
$SalesModel = new SalesModel();

$Sales = $SalesModel -> find($id);



return view('Sales/edit',['Sales'=>$Sales]);
}


//=========================

public function delete($id){
    $SalesModel = new SalesModel();
  
$SalesModel ->delete($id);

return redirect()->to('/Sales');
}






}