<?php

namespace App\Controllers;

class homeduasarjana extends BaseController
{
    public function index()
    {
        return view('jenis/duasarjana', [
            "title" => "Dua Sarjana Per Desa"
        ]);
    }
}