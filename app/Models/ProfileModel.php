<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
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


    protected $table = 'emp_profile';
    protected $primaryKey = 'id';
    protected $allowedFields = ['emp_id', 'pan', 'pan_ftn', 'pan_dob', 'aadhar', 'aadhar_ftn', 'aadhar_dob', 'voter_id', 'voter_ftn', 'voter_dob', 'driving_lic', 'dl_ftn', 'dl_dob', 'high_edu', 'college_name', 'college_comp_date', 'degree_name', 'prev_comp_name', 'prev_comp_city', 'prev_comp_jd', 'prev_comp_ed', 'curr_comp_name', 'curr_comp_jd', 'created_at', 'updated_at']; // Fields that can be manipulated
}
