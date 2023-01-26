<?php namespace App\Controllers;
use App\Models\ScientistModel;

class User extends BaseController
{
    protected $scientist;

    function __construct()
    {
        $this->scientist = new ScientistModel();
    }

    public function index()
    {
        return view ('user/index', [
            "title" => 'user',
            "scientist" => $this->scientist->findAll()
        ]);
    }
}
?>
