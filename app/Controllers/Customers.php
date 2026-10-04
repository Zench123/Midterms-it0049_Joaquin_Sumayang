<?php

namespace App\Controllers;
use App\Models\customerModel;
class Customers extends BaseController
{
   
public function new(){
return view('customers/new');

}
public function edit($id)
{
    $userModel = new UserModel();

    $user = $userModel->find($id);

    return view('users/edit', ['user' => $user]);
}

public function create(){
    $rules = [ 'full_name' => 'required',
    
    'email' => 'required|valid_email'
    ];



if(!$this->validate($rules)){
    return redirect()->back()->withinput();
}

$customerModel= new CustomerModel();

$customerModel -> insert ([

'full_name' => $this->request->getPost('full_name'),
'email' => $this->request->getPost('email'),
'phone' => $this->request->getPost('phone'),
]);

return redirect() -> to('/customers');



}

public function update($id){
$customerModel = new CustomerModel();


$rules = [ 
'full_name' => 'required',

   'email' => 'required|valid_email'


];

if(!$this -> validate($rules)){
    return redirect()->back()->withInput();
}


$customerModel -> update ($id,[


'full_name' => $this->request->getPost('full_name'),
'email' => $this->request->getPost('email'),
'phone' => $this->request->getPost('phone'),
]);

return redirect() -> to('/customers');


}



}