<?php

namespace App\Controllers;

use App\Models\DuasarjanaModel;

class Duasarjana extends BaseController
{

    protected $duasarjana;

    function __construct()
    {
        $this->duasarjana = new DuasarjanaModel();
    }

    public function index()
    {
        return view ('admin/index2', [
            "title" => 'nama',
            "duasarjana" => $this->duasarjana->findAll()
        ]);
    }

    public function detail($id_daftar)
    {
        return view ('detailadmin/index2', [
            "title" => 'detail2',
            "duasarjana" => $this->duasarjana->where('id_daftar',$id_daftar)->first()
        ]);
    }

    public function create()
    {
        return view('admin/create', [
            "title" => "Tambah Admin",
        ]);
    }

    public function insert()
    {
        $this->admin->insert([
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT)
        ]);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $this->admin->delete($id);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        return view('admin/edit', [
            "title" => "Edit Admin",
            "admin" => $this->admin->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->admin->update($id, [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'foto_profil' => $this->request->getPost('foto_profil')
        ]);
        return redirect()->to('/admin');
    }

    public function setting()
    {
        return view('admin/setting', [
            "title" => "Setting"
        ]);
    }
}
