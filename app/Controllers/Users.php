<?php

namespace App\Controllers;
use App\Models\UserModel;
class Users extends BaseController
{
   
public function index()
{
    $userModel = new UserModel();

    $users = $userModel->findAll();

    return view('users/index', ['users' => $users]);
}

public function new(){

return view('users/new');
}

public function create(){
    $rules = [ 'username' => 'required|is_unique[users.username]',
    
   'full_name'=>'required'
    ];



if(!$this->validate($rules)){
    return redirect()->back()->withinput();
}

$UsersModel= new UserModel();

$UsersModel -> insert ([

'username' => $this->request->getPost('username'),
'full_name' => $this->request->getPost('full_name'),

]);

return redirect() -> to('/users');



}
public function update($id){
$usersModel = new UserModel();


$rules = [ 'username' => 'required',
'full_name' => 'required'
];

if(!$this -> validate($rules)){
    return redirect()->back()->withInput();
}


$data = [

'username' => $this->request->getPost('username'),
'full_name' => $this->request->getPost('full_name'),
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

$usersModel -> update($id,$data);



return redirect() -> to('/users');


}



public function edit($id){
$userModel = new UserModel();

$user = $userModel -> find($id);



return view('users/edit',['user'=>$user]);
}




}