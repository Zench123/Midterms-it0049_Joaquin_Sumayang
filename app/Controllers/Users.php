<?php

namespace App\Controllers;
use App\Models\UserModel;
class Users extends BaseController
{
   
public function index()
{




    $userModel = new UserModel();



    $users = $userModel->  where('is_archived',0)  ->findAll();

    return view('users/index', ['users' => $users]);
}

public function new(){

return view('users/new');
}

public function create(){



    $rules = [ 'username' => 'required|is_unique[users.username]',
    
   'full_name'=>'required',
   'password' => 'required',
   'email' => 'required|valid_email'
    ];



if(!$this->validate($rules)){
    return redirect()->back()->withinput();
}

$userModel= new UserModel();

// $password = $this->request->getPost('password');
// $hashPass = password_hash($password, PASSWORD_DEFAULT);


$password = $this->request->getPost('password');

// dd($password);

$hashPass = password_hash($password, PASSWORD_DEFAULT);


$data = [

'username' => $this->request->getPost('username'),
'full_name' => $this->request->getPost('full_name'),
'email' => $this->request->getPost('email'),
'password' => $hashPass,
'is_required' => 0

];




$avatar = $this->request->getFile('avatar');

if($avatar && $avatar -> isValid() && !$avatar -> hasMoved()){



$avatarRules = ['avatar' => ['rules' => [   'max_size[avatar,2048]', 'is_image[avatar]','mime_in[avatar,image/jpg,image/jpeg,image/png]'    ]]];




if (!$this->validate($avatarRules)) {
    return redirect()->back()->withInput();
}

$newName = $avatar ->getRandomName();

$avatar -> move(FCPATH .'uploads',$newName);

$data['avatar'] = $newName;

}

$userModel -> insert($data);
return redirect() -> to('/users');



}
public function update($id){
$userModel = new UserModel();



$rules = [ 'username' => "required|is_unique[user.username,id,$id]",
'full_name' => 'required','email'=>'required'

];

if(!$this -> validate($rules)){
    return redirect()->back()->withInput();
}


$data = [

'username' => $this->request->getPost('username'),
'full_name' => $this->request->getPost('full_name'),
'email' => $this->request->getPost('email'),
];
$password = $this->request->getPost('password');

if (!empty($password)) {
    $data['password'] = password_hash($password, PASSWORD_DEFAULT);
}


$avatar = $this->request->getFile('avatar');

if($avatar && $avatar -> isValid() && !$avatar -> hasMoved()){



$avatarRules = ['avatar' => ['rules' => [   'max_size[avatar,2048]', 'is_image[avatar]','mime_in[avatar,image/jpg,image/jpeg,image/png]'    ]]];




if (!$this->validate($avatarRules)) {
    return redirect()->back()->withInput();
}

$newName = $avatar ->getRandomName();

$avatar -> move(FCPATH .'uploads',$newName);

$data['avatar'] = $newName;

}

$userModel -> update($id,$data);



return redirect() -> to('/users');


}



public function edit($id){
$userModel = new UserModel();

$user = $userModel -> find($id);



return view('users/edit',['user'=>$user]);
}


//=========================

public function delete($id){
    $userModel = new UserModel();
  
$userModel ->update($id,['is_archived'=>1]);

return redirect()->to('/users');
}






}