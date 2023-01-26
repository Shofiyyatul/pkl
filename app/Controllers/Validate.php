<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UserModel;

class Validate extends BaseController
{
    // public function loginAuth()
    // {
    //     $session = session();
    //     $model = new UserModel();
    //     $email = $this->request->getVar('email');
    //     $password = $this->request->getVar('password');
    //     $data = $model->where('email_user', $email)->first();
    //     if($data){
    //         $verify_pass = password_verify($password, $data->password_user);
    //         if($verify_pass){
    //             $ses_data = [
    //                 'id_user'       => $data['id_user'],
    //                 'nama_user'     => $data['nama_user'],
    //                 'email_user'    => $data['email_user'],
    //                 'logged_in'     => TRUE
    //             ];
    //             $session->set($ses_data);
    //             return redirect()->to('/admin');
    //         }else{
    //             $session->setFlashdata('msg', 'Wrong Password');
    //             return redirect()->to('/login');
    //         }
    //     }else{
    //         $session->setFlashdata('msg', 'Email not Found');
    //         return redirect()->to('/login');
    //     }
    // }
    
    public function loginAuth()
    {
        $session = session();
        $adminModel = new AdminModel();
        $userModel = new UserModel();
        $email_user = $this->request->getVar('email');
        $password_user = $this->request->getVar('password');
        $email_admin = $this->request->getVar('email');
        $password_admin = $this->request->getVar('password');

        $dataAdmin = $adminModel->where('email_admin', $email_admin)->first();
        $dataUser = $userModel->where('email_user', $email_user)->first();

        if ($dataAdmin) {
            $authenticatePassword = password_verify($password_admin, $dataAdmin->password_admin);

            if ($authenticatePassword) {
                $ses_data = [
                    'password_admin' => $dataAdmin->password_admin,
                    'email_admin' => $dataAdmin->email_admin,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $session->setFlashdata('success', 'Selamat Datang di Dashboard Beasiswa :)');
                return redirect()->to(base_url("admin"));
            } else {
                $session->setFlashdata('failed', 'Password Anda Belum Benar :(');
                return redirect()->to(base_url("login"));
            }
        } else if ($dataUser) {
            $authenticatePassword = password_verify($password_user, $dataUser->password_user);

            if ($authenticatePassword) {
                $ses_data = [
                    'password_user' => $dataUser->password_user,
                    'email_user' => $dataUser->email_user,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $session->setFlashdata('success', 'Selamat Datang di Dashboard Beasiswa :)');
                return redirect()->to(base_url("belajar"));
            } else {
                $session->setFlashdata('failed', 'Password Anda Belum Benar :(');
                return redirect()->to(base_url("login"));
            }
        } else {
            $session->setFlashdata('notFound', 'Email Anda Tidak Ditemukan :(');
            return redirect()->to(base_url("register"));
        }
    }

    public function logout()
    {
        session()->remove('email_user');
        return redirect()->to(base_url("login"));
    }
}
