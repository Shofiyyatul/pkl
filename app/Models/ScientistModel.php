<?php

namespace App\Models;

use CodeIgniter\Model;

class ScientistModel extends Model
{
    protected $table = "scientist";
    protected $primaryKey = "id_daftar";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nik","nama","nokk", "tempatLahir", "alamat",
    "universitas", "fakultas", "prodi", "semester",	"ipk", "ukt", "jalur","ips1", "ips2","ips3","ips4","ips5","ips6","ips7","ips8","noHP", "nim",
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


