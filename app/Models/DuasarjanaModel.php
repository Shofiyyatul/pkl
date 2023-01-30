<?php

namespace App\Models;

use CodeIgniter\Model;

class DuasarjanaModel extends Model
{
    protected $table = "duasarjana";
    protected $primaryKey = "id_daftar";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nik","nama","nokk", "tempatLahir",	"tanggalLahir",	"alamat", "foto",
    "universitas", "fakultas", "prodi","akreditasiprodi", "semester", "ipk", "ukt", "jalur", "tahun", "email", "noHP", "nim", "kartu",
    "kepalakel", "ibu","supermohon", "suketaktif", "kk","bukti kartu", "buktijalur","ktp","ktm","khs","supertidakbeasiswa","buktiukt","sertifiakreditasi",
    "supertdkbekerja","nilaus","buktiditerimapt","rekening","status","catatan","kelengkapan"
];
}
