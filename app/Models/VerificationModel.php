<?php

namespace App\Models;

use CodeIgniter\Model;

class VerificationModel extends Model
{

    protected $DBGroup = 'default';

    protected $table = 'verification';
    protected $primaryKey = 'id';
    protected $allowedFields = ['client_id', 'doc_id', 'reinitiate', 'permission', 'days', 'created_at', 'updated_at']; // Fields that can be manipulated

    public function findClient($id)
    {
        return $this->where('client_id', $id)->find();
    }
}
