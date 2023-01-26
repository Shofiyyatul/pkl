<?php namespace App\Controllers;
use App\Models\TugasakhirModel;

class Form3 extends BaseController
{
    public function index()
    {
        return view('tugasakhir/create_biodata', [
            "title" => "Kelengkapan"
        ]);
    }
    protected $tugasakhir;

    function __construct()
    {
        $this->tugasakhir = new TugasakhirModel();
    }

    // public function index()
    // {   
    //     $data['scientist'] = $this->scientist->findAll();
    //     return view('scientist/create_biodata', $data);
    // }
    
    public function create_biodata()
    {
        echo view('tugasakhir/create_biodata' ,
        [
            "title" => "Biodata"
        ]);
    }

    public function save()
    {
        $this->tugasakhir->insert([
            'nik'=> $this->request->getVar('nikku'),
            'nama'=> $this->request->getVar('namaku'),
            'nokk'=> $this->request->getVar('nokkku'),
            'tempatLahir'=> $this->request->getVar('tlku'),
            'tanggalLahir'=> $this->request->getVar('tglku'),
            'gender'=> $this->request->getVar('jkku'),
            'alamat'=> $this->request->getVar('alamatku'),
            'kecamatan'=> $this->request->getVar('kecamatanku'),
            'agama'=> $this->request->getVar('agamaku'),
            'email'=> $this->request->getVar('emailku'),
            'noHP'=> $this->request->getVar('hpku'),
            'jenispt'=> $this->request->getVar('jenisptku'),
            'universitas'=> $this->request->getVar('univku'),
            'nim'=> $this->request->getVar('nimku'),
            'fakultas'=> $this->request->getVar('fkku'),
            'prodi'=> $this->request->getVar('prodiku'),
            'semester'=> $this->request->getVar('smsku'),
            'jalur'=> $this->request->getVar('jalurku'),
            'tahun'=> $this->request->getVar('thnku'),
            'foto'=> $this->request->getVar('fotoku')
            'kepalakel'=> $this->request->getVar('kepalakelku'),
            'kk'=> $this->request->getVar('kkku'),
            'supermohon'=> $this->request->getVar('supermohonku'),
            'suketaktif'=> $this->request->getVar('suketaktifku'),
            'suketta'=> $this->request->getVar('sukettaku'),
            'ktm'=> $this->request->getVar('ktmku'),
            'kpm'=> $this->request->getVar('kpmu'),
            'sktm'=> $this->request->getVar('sktmku'),
            'ktp'=> $this->request->getVar('ktpku'),
            'supertidakbeasiswa'=> $this->request->getVar('supertidakbeasiswaku'),
            'rekening'=> $this->request->getVar('rekeningku')
        ]);
        return redirect ()->to('/user3');
    }
    
    
    public function edit($id_daftar)
    {
        $data['scientist']= $this->scientist->where('id_daftar',$id_daftar)->first();
        return view('scientist/create_univ',$data);
    }

    public function update_univ($id_daftar)
    {
        $this->scientist->update($id_daftar, [
            
        ]);
        return redirect()->to('/create_file');
    }
}
?>



