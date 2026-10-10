<?php

namespace App\Controllers;
use App\Models\TaskModel;
class Tasks extends BaseController
{
   //list products
public function index()
{




    $taskModel = new TaskModel();


//only find !archived
    $tasks = $taskModel->where('is_archived',0)-> findAll();

    return view('Tasks/index', ['tasks' => $tasks]);
}


public function new(){

return view('Tasks/new');
}


public function create(){



    $rules = [
         'title' => 'required',
    
   'status'=>'required',
   'task_date' => 'required'
    ];



if(!$this->validate($rules)){
    return redirect()->back()->withinput();
}

$taskModel= new TaskModel();

// $password = $this->request->getPost('password');
// $hashPass = password_hash($password, PASSWORD_DEFAULT);



// dd($password);




$data = [

'title' => $this->request->getPost('title'),
'status' => $this->request->getPost('status'),
'task_date' => $this->request->getPost('task_date'),
'is_archived' => 0

];




// $image = $this->request->getFile('image');

// if($image && $image -> isValid() && !$image -> hasMoved()){



// $imageRules = ['image' => ['rules' => [   'max_size[image,2048]', 'is_image[image]','mime_in[image,image/jpg,image/jpeg,image/png]'    ]]];




// if (!$this->validate($imageRules)) {
//     return redirect()->back()->withInput();
// }

// $newName = $image ->getRandomName();

// $image -> move(FCPATH .'uploads',$newName);

// $data['image'] = $newName;

// }

$taskModel -> insert($data);
return redirect() -> to('/tasks');



}



//update
public function update($id){
$taskModel = new TaskModel();




    $rules = [ 'title' => 'required',
    
   'status'=>'required',
   'task_date' => 'required'


    ];

if(!$this -> validate($rules)){
    return redirect()->back()->withInput();
}








$data = [

'title' => $this->request->getPost('title'),
'status' => $this->request->getPost('status'),
'task_date' => $this->request->getPost('task_date')

];




// $password = $this->request->getPost('password');

// if (!empty($password)) {
//     $data['password'] = password_hash($password, PASSWORD_DEFAULT);
// }


// $image = $this->request->getFile('image');

// if($image && $image -> isValid() && !$image -> hasMoved()){



// $imageRules = ['image' => ['rules' => [   'max_size[image,2048]', 'is_image[image]','mime_in[image,image/jpg,image/jpeg,image/png]'    ]]];




// if (!$this->validate($imageRules)) {
//     return redirect()->back()->withInput();
// }

// $newName = $image ->getRandomName();

// $image -> move(FCPATH .'uploads',$newName);

// $data['image'] = $newName;

// }

$taskModel -> update($id,$data);



return redirect() -> to('/tasks');


}



public function edit($id){
$taskModel = new TaskModel();

$tasks = $taskModel -> find($id);



return view('Tasks/edit',['tasks'=>$tasks]);
}


//=========================

public function delete($id){
    $taskModel = new TaskModel();
  
$taskModel ->update($id,['is_archived' => 1]);

return redirect()->to('/tasks');
}






}