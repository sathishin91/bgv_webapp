<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'first_name', 'last_name', 'mobile', 'email', 'dob', 'join_date', 'pan', 'aadhar', 'voter_id', 'driving_lic', 'is_pan', 'is_aadhar', 'is_voter_id', 'is_driving_lic', 'reinitiate', 'permission', 'days', 'created_at', 'updated_at']; // Fields that can be manipulated

    // Other model configuration options...

    public function isEmailUnique($email)
    {
        $result = $this->where('email', $email)
            ->countAllResults();

        return $result === 0; // Returns true if email is unique, false if it already exists
    }

    // public function findByEmail($email)
    // {
    //     return $this->where('email', $email)->find();
    // }


    public function panData()
    {
        return $this->whereIn('is_pan', [3, 4, 5])->find();
    }

    public function aadharData()
    {
        return $this->whereIn('is_aadhar', [3, 4, 5])->find();
    }

    public function voterIdData()
    {
        return $this->whereIn('is_voter_id', [3, 4, 5])->find();
    }

    public function licenseData()
    {
        return $this->whereIn('is_license', [3, 4, 5])->find();
    }

    public function countPanRecords()
    {
        return $this->whereIn('is_pan', [3, 4, 5])
            ->countAllResults(); // This counts all records in the table
    }

    public function countAadharRecords()
    {
        return $this->whereIn('is_aadhar', [3, 4, 5])
            ->countAllResults(); // This counts all records in the table
    }

    public function countVoterIdRecords()
    {
        return $this->whereIn('is_voter_id', [3, 4, 5])
            ->countAllResults(); // This counts all records in the table
    }

    public function countLicenseRecords()
    {
        return $this->whereIn('is_license', [3, 4, 5])
            ->countAllResults(); // This counts all records in the table
    }

    public function perPan($whereLicense)
    {
        $total = $this->countAll();
        $available = $this->where($whereLicense)
            ->countAllResults(); // This counts all records in the table

        // Calculate percentage
        $percentage = ($available / $total) * 100;

        return $percentage;
    }

    public function perAadhar($whereLicense)
    {
        $total = $this->countAll();
        $available = $this->where($whereLicense)
            ->countAllResults(); // This counts all records in the table

        // Calculate percentage
        $percentage = ($available / $total) * 100;

        return $percentage;
    }

    public function perVoterId($whereLicense)
    {
        $total = $this->countAll();
        $available = $this->where($whereLicense)
            ->countAllResults(); // This counts all records in the table

        // Calculate percentage
        $percentage = ($available / $total) * 100;

        return $percentage;
    }

    public function perLicense($whereLicense)
    {
        $total = $this->countAll();
        $available = $this->where($whereLicense)
            ->countAllResults(); // This counts all records in the table

        // Calculate percentage
        $percentage = ($available / $total) * 100;

        return $percentage;
    }

    public function getEmployeesById($id)
    {
        return $this->where('user_id', $id)->find();
    }

    public function filterDataPan($filter)
    {
        return $this->where('user_id', $filter)
            ->where('is_pan', 0)->find();
    }

    public function filterPanStatus($filter)
    {
        return $this->where('is_pan', $filter)->find();
    }

    public function filterAadharStatus($filter)
    {
        return $this->where('is_aadhar', $filter)->find();
    }
    public function filterVoterIdStatus($filter)
    {
        return $this->where('is_voter_id', $filter)->find();
    }
    public function filterLicenseStatus($filter)
    {
        return $this->where('is_license', $filter)->find();
    }

    public function filterDataAadhar($filter)
    {
        return $this->where('user_id', $filter)
            ->where('is_aadhar', 0)->find();
    }

    public function filterDataVoterId($filter)
    {
        return $this->where('user_id', $filter)
            ->where('is_voter_id', 0)->find();
    }

    public function filterDataLicense($filter)
    {
        return $this->where('user_id', $filter)
            ->where('is_license', 0)->find();
    }

    public function filterDataDelCheck($filter)
    {
        // return $this->where('user_id', $filter)->findAll();
        // Select columns from both tables
        $this->select('employee.*, client.name');

        // Specify the main table (posts) and the join table (users)
        $this->join('client', 'client.id = employee.user_id', 'left');

        // WHERE condition on the user ID
        $this->where('employee.user_id', $filter);

        // Get the result
        return $this->findAll();
    }

    public function getEmployeeDelCheckData($id)
    {
        return $this->where('id', $id)->find();
    }

    public function liveSearch($query, $doc)
    {
        // Query the database to retrieve search results based on the provided query
        return $this->whereIn($doc, [3, 4, 5])
            ->like('first_name', $query)
            ->orLike('last_name', $query)
            ->findAll();
    }

    public function liveSearchDelCheck($query)
    {
        // // Query the database to retrieve search results based on the provided query
        // return $this->like('first_name', $query)
        //     ->orLike('last_name', $query)
        //     ->findAll();

        // Select columns from both tables
        $this->select('employee.*, client.name');

        // Specify the main table (posts) and the join table (users)
        $this->join('client', 'client.id = employee.user_id', 'left');

        // WHERE condition on the user ID
        // $this->where('posts.user_id', $userId);

        // LIKE condition on the post title or content
        $this->like('employee.first_name', $query);
        $this->orLike('employee.last_name', $query);

        // Get the result
        return $this->findAll();
    }

    public  function firstClientData($firstRowId)
    {
        // return $this->where('user_id', $filter)->findAll();
        // Select columns from both tables
        $this->select('employee.*, client.name');

        // Specify the main table (posts) and the join table (users)
        $this->join('client', 'client.id = employee.user_id', 'left');

        // WHERE condition on the user ID
        $this->where('employee.user_id', $firstRowId);

        // Get the result
        return $this->find();
    }
}
