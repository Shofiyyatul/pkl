<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nama_user", "email_user", "password_user"];
}
