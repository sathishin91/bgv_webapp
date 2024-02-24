<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{

    protected $DBGroup = 'default';

    // protected $table = 'client';
    // protected $primaryKey = 'id';

    // protected $userAutoIncrement = true;

    // protected $returnType = 'object';
    // protected $userSoftDeletes = true;

    // protected $allowedFields  = ['name', 'description', 'is_starred', 'created_at', 'updated_at'];

    // protected $userTimeStamps = false;
    // protected $createdField   = "created_at";
    // protected $updatedField   = "updated_at";
    // protected $deletedField   = "deleted_at";

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;


    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'name', 'description', 'contact_person', 'location', 'add_address', 'role', 'documents', 'is_starred', 'created_at', 'updated_at', 'deleted_at']; // Fields that can be manipulated

    public function getStarredRecords()
    {
        return $this->where('is_starred', 1)->findAll();
    }

    public function getClientById($id)
    {
        return $this->where('id', $id)->find();
    }

    public function getDropdownData()
    {
        return $this->findAll(); // Modify this based on your table structure
    }
    // public function isEmailUnique($email)
    // {
    //     $result = $this->where('email', $email)
    //         ->countAllResults();

    //     return $result === 0; // Returns true if email is unique, false if it already exists
    // }
    public function firstRow()
    {
        return $this->get()->getFirstRow();
    }
}
