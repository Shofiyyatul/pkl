<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasakhirModel extends Model
{
    protected $table = "tugasakhir";
    protected $primaryKey = "id_daftar";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nik","nama","nokk", "tempatLahir",	"tanggalLahir",	"gender", "alamat", "agama", "foto",
    "universitas", "fakultas", "prodi", "semester", "jalur", "tahun", "email", "noHP", "nim",
    "kk","kepalakel","supermohon","suketaktif","suketta","ktm","kpm","sktm","kkku","ktp","supertidakbeasiswa","rekening"
    ,"status","catatan","kelengkapan"
];
}
