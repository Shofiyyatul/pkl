<?php

namespace App\Models;

use CodeIgniter\Model;

class ScientistModel extends Model
{
    protected $table = "scientist";
    protected $primaryKey = "id_daftar";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nik","nama","nokk", "tempatLahir",	"tanggalLahir",	"gender", "alamat", "agama", "foto",
    "universitas", "fakultas", "prodi", "semester",	"ipk", "ukt", "jalur", "tahun", "email", "noHP", "nim",
    "kepalakel","ibu","supermohon","suketaktif","kk","ktp","ktm","khs","supertidakbeasiswa","buktiukt","buktijalur","rekening",
    "kelengkapan", "catatan","status"
];

    // public function getDaftar($id_daftar = false)
    // {
    //     if (id_daftar == false){
    //         return $this->findAll();
    //     }

    //     return $this->where(['id_daftar' => $id_daftar])->first();
    // }

}


