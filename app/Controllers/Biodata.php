<?php

namespace App\Controllers;

class biodata extends BaseController
{
    public function index()
    {
        return view('scientist/create_biodata', [
            "title" => "Kelengkapan"
        ]);
    }
}