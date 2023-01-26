<?php

namespace App\Controllers;

class Hometugasakhir extends BaseController
{
    public function index()
    {
        return view('jenis/tugasakhir', [
            "title" => "Bantuan Tugas Akhir"
        ]);
    }
}