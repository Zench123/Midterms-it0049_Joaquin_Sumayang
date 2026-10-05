<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }


    public function authorize()
    {
        $password = $this->request->getPost('password');
        $username = $this->request->getPost('username');

        $userModel = new UserModel();

        $user = $userModel
            ->where('username', $username)
            ->first();

        if ($user) {
//============================
        //debug code
            // dd(
            //         $password,
            //         $user['password'],
            //         password_verify($password, $user['password'])
            //     );


//  dd([
//         'username_entered' => $username,
//         'user_found'       => $user['username'],
//         'hash_length'      => strlen($user['password']),
//         'password_matches' => password_verify($password, $user['password'])
//     ]);

            
//=========================
    
            if (password_verify($password, $user['password'])) {

                session()->set([
                    'user_id'   => $user['id'],
                    'username'  => $user['username'],
                    'logged_in' => true
                ]);

                return redirect()->to('/customers');

            } else {

                return redirect()->to('/login');
            }

        } else {

            return redirect()->to('/login');
        }
    }


    public function logout()
    {
        session()->destroy();//end session

        return redirect()->to('/login');//back to login
    }
}