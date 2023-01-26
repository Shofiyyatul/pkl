<?php namespace App\Controllers;
use App\Models\ScientistModel;

class Form extends BaseController
{
    public function index()
    {
        return view('scientist/create_biodata', [
            "title" => "Kelengkapan"
        ]);
    }
    protected $scientist;

    function __construct()
    {
        $this->scientist = new ScientistModel();
    }

    // public function index()
    // {   
    //     $data['scientist'] = $this->scientist->findAll();
    //     return view('scientist/create_biodata', $data);
    // }
    
    public function create_biodata()
    {
        echo view('scientist/create_biodata' ,
        [
            "title" => "Biodata"
        ]);
    }

    public function save()
    {
        $this->scientist->insert([
            'nik'=> $this->request->getVar('nikku'),
            'nama'=> $this->request->getVar('namaku'),
            'nokk'=> $this->request->getVar('nokkku'),
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
            'foto'=> $this->request->getVar('fotoku'),
            'kepalakel'=> $this->request->getVar('kepalakelku'),
            'ibu'=> $this->request->getVar('ibuku'),
            'supermohon'=> $this->request->getVar('supermohonku'),
            'suketaktif'=> $this->request->getVar('suketaktifku'),
            'kk'=> $this->request->getVar('kkku'),
            'ktp'=> $this->request->getVar('ktpku'),
            'ktm'=> $this->request->getVar('ktmku'),
            'khs'=> $this->request->getVar('khsku'),
            'supertidakbeasiswa'=> $this->request->getVar('supertidakbeasiswaku'),
            'buktiukt'=> $this->request->getVar('buktiuktku'),
            'buktijalur'=> $this->request->getVar('buktijalurku'),
            'rekening'=> $this->request->getVar('rekeningku')
            //jumlahkolom:33
        ]);
        return redirect ()->to('/user');
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



