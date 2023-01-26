<?php

namespace App\Controllers;

class homescientist extends BaseController
{
    public function index()
    {
        return view('jenis/scientist', [
            "title" => "Scientist"
        ]);
    }
}