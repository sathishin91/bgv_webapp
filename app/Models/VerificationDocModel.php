<?php

namespace App\Models;

use CodeIgniter\Model;

class VerificationDocModel extends Model
{

    protected $DBGroup = 'default';

    protected $table = 'verification_doc';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'is_active', 'created_at', 'updated_at']; // Fields that can be manipulated



    public function getById($id)
    {
        return $this->where('id', $id)->find();
    }

    // public function isEmailUnique($email)
    // {
    //     $result = $this->where('email', $email)
    //         ->countAllResults();

    //     return $result === 0; // Returns true if email is unique, false if it already exists
    // }
}
