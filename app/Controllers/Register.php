<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    protected $user;

    function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        return view('pages/register', [
            "title" => "Register"
        ]);
    }
    public function create()
    {
        //echo ('mha/create');
        return view('pages/register');
    }

    public function save()
    {
        $session = session();
        $userModel = new UserModel();
        $email_user = $this->request->getVar('email');
        $password_user = $this->request->getVar('password');
        $konfirmasi_password_user = $this->request->getVar('konfirmasipassword');

        $dataUser = $userModel->where('email_user', $email_user)->first();

        if ($dataUser) {
            $session->setFlashdata('notFound', 'Email Anda Sudah Terdaftar :(');
            return redirect()->to(base_url("register"));

        } else {

            if ($password_user==$konfirmasi_password_user) {
                $this->user->insert([
                    'nama_user'=> $this->request->getVar('nama'),
                    'email_user'=> $this->request->getVar('email'),
                    'password_user'=> $this->request->getVar('password')
                ]);
                $session->setFlashdata('success', 'Selamat Anda sudah terdaftar :)');
                return redirect()->to(base_url("login"));
            } else {
                $session->setFlashdata('notFound', 'Password Anda Belum Benar :( Silahkan coba lagi');
                return redirect()->to(base_url("register"));
            }
        }

        return redirect ()->to('/register');
    }
    
}