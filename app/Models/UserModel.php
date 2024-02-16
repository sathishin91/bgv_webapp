<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $DBGroup = 'default';

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'created_at', 'updated_at','deleted_at']; // Fields that can be manipulated

}
