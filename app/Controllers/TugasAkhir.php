<?php

namespace App\Controllers;

use App\Models\TugasakhirModel;

class Tugasakhir extends BaseController
{

    protected $tugasakhir;

    function __construct()
    {
        $this->tugasakhir = new TugasakhirModel();
    }

    public function index()
    {
        return view ('admin/index3', [
            "title" => 'nama',
            "tugasakhir" => $this->tugasakhir->findAll()
        ]);
    }

    public function detail($id_daftar)
    {
        return view ('detailadmin/index3', [
            "title" => 'detail3',
            "tugasakhir" => $this->tugasakhir->where('id_daftar',$id_daftar)->first()
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
