<?php namespace App\Controllers;
use App\Models\DuasarjanaModel;

class User2 extends BaseController
{
    protected $scientist;

    function __construct()
    {
        $this->duasarjana = new DuasarjanaModel();
    }

    public function index()
    {
        return view ('user/index2', [
            "title" => 'user2',
            "duasarjana" => $this->duasarjana->findAll()
        ]);
    }

}
?>
