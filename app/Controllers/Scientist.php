<?php

namespace App\Controllers;

use App\Models\ScientistModel;

class Scientist extends BaseController
{

    protected $scientist;

    function __construct()
    {
        $this->scientist = new ScientistModel();
    }

    public function index()
    {
        return view ('admin/index', [
            "title" => 'nama',
            "scientist" => $this->scientist->findAll()
        ]);
    }

    public function detail($id_daftar)
    {
        return view ('detailadmin/index', [
            "title" => 'detail',
            "scientist" => $this->scientist->where('id_daftar',$id_daftar)->first()
        ]);
    }

    public function detail_proses()
    {
        $this->scientist->update([
            'nik'=> $this->request->getVar('nikku'),
            'nama'=> $this->request->getVar('namaku'),
            'kk'=> $this->request->getVar('kkku'),
            'tempatLahir'=> $this->request->getVar('tlku'),
            'tanggalLahir'=> $this->request->getVar('tglku'),
            'gender'=> $this->request->getVar('jkku'),
            'alamat'=> $this->request->getVar('alamatku'),
            'agama'=> $this->request->getVar('agamaku'),
            'email'=> $this->request->getVar('emailku'),
            'noHP'=> $this->request->getVar('hpku'),
            'universitas'=> $this->request->getVar('univku'),
            'nim'=> $this->request->getVar('nimku'),
            'fakultas'=> $this->request->getVar('fkku'),
            'prodi'=> $this->request->getVar('prodiku'),
            'semester'=> $this->request->getVar('smsku'),
            'jalur'=> $this->request->getVar('jalurku'),
            'tahun'=> $this->request->getVar('thnku'),
            'ukt'=> $this->request->getVar('uktku'),
            'ipk'=> $this->request->getVar('ipkku'),
            'file'=> $this->request->getVar('fileku'),
            'foto'=> $this->request->getVar('fotoku'),
            'kelengkapan'=> $this->request->getVar('kelengkapanku'),
            'catatan'=> $this->request->getVar('catatanku'),
            'status'=> $this->request->getVar('statusku')
        ]);

        return redirect()->to('/scientist');
    }
}
