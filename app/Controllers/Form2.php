<?php namespace App\Controllers;
use App\Models\DuasarjanaModel;

class Form2 extends BaseController
{
    public function index()
    {
        return view('duasarjana/create_biodata', [
            "title" => "Kelengkapan"
        ]);
    }
    protected $duasarjana;

    function __construct()
    {
        $this->duasarjana = new DuasarjanaModel();
    }

    // public function index()
    // {   
    //     $data['scientist'] = $this->scientist->findAll();
    //     return view('scientist/create_biodata', $data);
    // }
    
    public function create_biodata()
    {
        echo view('duasarjana/create_biodata' ,
        [
            "title" => "Biodata"
        ]);
    }

    public function save()
    {
        $this->duasarjana->insert([
            'nik'=> $this->request->getVar('nikku'),
            'nama'=> $this->request->getVar('namaku'),
            'nokk'=> $this->request->getVar('nokkku'),
            'tempatLahir'=> $this->request->getVar('tlku'),
            'tanggalLahir'=> $this->request->getVar('tglku'),
            'usia'=> $this->request->getVar('usiaku'),
            'alamat'=> $this->request->getVar('alamatku'),
            'kecamatan'=> $this->request->getVar('kecamatanku'),
            'email'=> $this->request->getVar('emailku'),
            'noHP'=> $this->request->getVar('hpku'),
            'jeniskartu'=> $this->request->getVar('jeniskartuku'),
            'universitas'=> $this->request->getVar('univku'),
            'nim'=> $this->request->getVar('nimku'),
            'fakultas'=> $this->request->getVar('fkku'),
            'prodi'=> $this->request->getVar('prodiku'),
            'akreditasiprodi'=> $this->request->getVar('akreditasipku'),
            'semester'=> $this->request->getVar('smsku'),
            'jalur'=> $this->request->getVar('jalurku'),
            'tahun'=> $this->request->getVar('thnku'),
            'ukt'=> $this->request->getVar('uktku'),
            'ipk'=> $this->request->getVar('ipkku'),
            'foto'=> $this->request->getVar('fotoku'),
            'kartu'=> $this->request->getVar('kartuku')
            'kepalakel'=> $this->request->getVar('kepalakelku'),
            'ibu'=> $this->request->getVar('ibuku'),
            'supermohon'=> $this->request->getVar('supermohonku'),
            'suketaktif'=> $this->request->getVar('suketaktif'),
            'kk'=> $this->request->getVar('kkku'),
            'buktijalur'=> $this->request->getVar('buktijalurku'),
            'ktp'=> $this->request->getVar('ktpku'),
            'ktm'=> $this->request->getVar('ktmku'),
            'khs'=> $this->request->getVar('khsku'),
            'supertidakbeasiswa'=> $this->request->getVar('supertidakbeasiswa'),
            'buktiukt'=> $this->request->getVar('buktiuktku'),
            'sertifakreditasi'=> $this->request->getVar('sertifakreditasiku'),
            'supertdkbekerja'=> $this->request->getVar('supertdkbekerjaku'),
            'nilaus'=> $this->request->getVar('nilaiusku'),
            'buktiditerimapt'=> $this->request->getVar('buktiditerimaptku'),
            'rekening'=> $this->request->getVar('rekeningku')
        ]);
        return redirect ()->to('/user2');
    }
    
    public function edit($id_daftar)
    {
        $data['duasarjana']= $this->duasarjana->where('id_daftar',$id_daftar)->first();
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



