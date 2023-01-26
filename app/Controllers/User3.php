<?php namespace App\Controllers;
use App\Models\TugasakhirModel;

class User3 extends BaseController
{
    protected $tugasakhir;

    function __construct()
    {
        $this->tugasakhir = new TugasakhirModel();
    }

    public function index()
    {
        return view ('user/index3', [
            "title" => 'user3',
            "tugasakhir" => $this->tugasakhir->findAll()
        ]);
    }

}
?>
