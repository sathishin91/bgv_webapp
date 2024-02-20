<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\EmployeeModel;
use App\Models\ProfileModel;
use App\Models\VerificationDocModel;
use App\Models\VerificationModel;
use CodeIgniter\I18n\Time;


class ClientController extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $model = new ClientModel();
        $data['records'] = $model->findAll();
        $data['starredRecords'] = $model->getStarredRecords();

        return view('pages/all-client', $data);
    }

    public function index2()
    {
        $id = $this->request->uri->getSegment(3); // Change the segment number based on your URL structure

        $model = new ClientModel();
        $data['clientRecord'] = $model->getClientById($id);

        return view('pages/all-client-next', $data);
    }

    public function index3()
    {
        $id = $this->request->uri->getSegment(3); // Change the segment number based on your URL structure

        $model = new ClientModel();
        $data['clientRecord'] = $model->getClientById($id);

        return view('pages/edit-client', $data);
    }

    public function addEmployeeId()
    {
        $id = $this->request->uri->getSegment(3); // Change the segment number based on your URL structure

        $model = new ClientModel();
        $data['clientRecord'] = $model->getClientById($id);

        return view('pages/add-employee', $data);
    }

    public function verify()
    {
        $id = $this->request->uri->getSegment(3); // Change the segment number based on your URL structure

        $clientModel = new ClientModel();
        $model = new VerificationDocModel();

        $data['clientRecord'] = $clientModel->getClientById($id);
        $data['records'] = $model->findAll();

        return view('pages/verify', $data);
    }


    public function addEmployee()
    {
        $model = new EmployeeModel();
        $ProfileModel = new ProfileModel();

        $id = $this->request->getPost('id');
        $myTime = new Time('now', 'Asia/Kolkata', 'en_US');

        // Load the form helper and validation library
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        // Set validation rules
        $validationRules = $this->validate([
            // 'pan' => 'required|regex_match[[A-Z]{3}[ABCFGHLJPTF]{1}[A-Z]{1}[0-9]{4}[A-Z]{1}]',
            // 'aadhar' => 'required|regex_match[^[0-9]{4}[ -]?[0-9]{4}[ -]?[0-9]{4}$]',
        ]);

        // Check if the form data passes validation
        // if ($validationRules) {
        if (!empty($id)) {
            // Get the existing data
            $existingData = $model->find($id);

            if (empty($existingData)) {
                // Handle the case where the record with the given ID is not found
                $msg = 'No record found.';
                session()->setFlashdata('error_msg',  $msg);
                return redirect()->to('/all-employee');
            }

            $updatedData = [
                'id' => $id,
                'email' => $this->request->getPost('email'),
                'first_name' => $this->request->getPost('first_name'),
                'last_name' => $this->request->getPost('last_name'),
                'mobile' => $this->request->getPost('mobile'),
                'email' => $this->request->getPost('email'),
                'dob' => $this->request->getPost('dob'),
                'join_date' => $this->request->getPost('join_date'),
                'updated_at' => $myTime
            ];

            // Update the data
            $res = $model->update($id, $updatedData);

            // Redirect or perform other actions as needed
            if ($res) {
                $msg = 'Employee Updated Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
            return redirect()->to('/all-employee');
        } else {
            // print_r($_POST);
            // die();

            $email = $this->request->getPost('email');

            if ($model->isEmailUnique($email)) {
                // Email is unique, proceed with saving data
                $data = [
                    'email' => $email,
                    'user_id' => $this->request->getPost('user_id'),
                    'first_name' => $this->request->getPost('first_name'),
                    'last_name' => $this->request->getPost('last_name'),
                    'father_name' => $this->request->getPost('father_name'),
                    'mobile' => $this->request->getPost('mobile'),
                    'alt_mobile' => $this->request->getPost('alt_mobile'),
                    'email' => $this->request->getPost('email'),
                    'dob' => $this->request->getPost('dob'),
                    'join_date' => $this->request->getPost('join_date'),

                    'pan' => $this->request->getPost('pan'),
                    'aadhar' => $this->request->getPost('aadhar'),
                    'voter_id' => $this->request->getPost('voter_id'),
                    'driving_lic' => $this->request->getPost('driving_lic'),
                    'created_at' => $myTime
                ];
                $res = $model->insert($data);

                if ($res) {
                    $employee = $model->where('email', $email)->first(); // find user by email
                    $data = [
                        'emp_id' => $employee['id'],
                        'pan' => $this->request->getPost('pan'),
                        'pan_ftn' => $this->request->getPost('pan_ftn'),
                        'pan_dob' => $this->request->getPost('pan_dob'),

                        'aadhar' => $this->request->getPost('aadhar'),
                        'aadhar_ftn' => $this->request->getPost('aadhar_ftn'),
                        'aadhar_dob' => $this->request->getPost('aadhar_dob'),

                        'voter_id' => $this->request->getPost('voter_id'),
                        'voter_ftn' => $this->request->getPost('voter_ftn'),
                        'voter_dob' => $this->request->getPost('voter_dob'),

                        'driving_lic' => $this->request->getPost('driving_lic'),
                        'dl_ftn' => $this->request->getPost('dl_ftn'),
                        'dl_dob' => $this->request->getPost('dl_dob'),

                        'high_edu' => $this->request->getPost('high_edu'),
                        'college_name' => $this->request->getPost('college_name'),
                        'college_comp_date' => $this->request->getPost('college_comp_date'),
                        'degree_name' => $this->request->getPost('degree_name'),

                        'prev_comp_name' => $this->request->getPost('prev_comp_name'),
                        'prev_comp_city' => $this->request->getPost('prev_comp_city'),
                        'prev_comp_jd' => $this->request->getPost('prev_comp_jd'),
                        'prev_comp_ed' => $this->request->getPost('prev_comp_ed'),
                        'curr_comp_name' => $this->request->getPost('curr_comp_name'),
                        'curr_comp_jd' => $this->request->getPost('curr_comp_jd'),
                        'created_at' => $myTime
                    ];

                    $res_emp = $ProfileModel->insert($data);

                    if ($res_emp) {
                        $data = ['status' => 1000];
                        // $msg = 'Employee Added Successfully.';
                        // session()->setFlashdata('success_msg',  $msg);
                    } else {
                        $data = ['status' => 1001];
                        // $msg = 'Employee Not Found!';
                        // session()->setFlashdata('danger_msg',  $msg);
                    }
                } else {
                    $data = ['status' => 1002];
                    // $msg = 'Employee Not Added!';
                    // session()->setFlashdata('danger_msg',  $msg);
                }
                return $this->response->setJSON($data);
            } else {
                // Email already exists, handle the duplicate case (e.g., show an error message)
                $data = ['status' => 1003];
                // $msg = 'Email already exists!';
                // session()->setFlashdata('error_msg',  $msg);
                return $this->response->setJSON($data);

                // return redirect()->to('/all-client');
            }
        }
        // } else {
        //     // Validation failed, load the form view with validation errors
        //     $msg = 'Please enter valid PAN number or Aadhar number!';
        //     session()->setFlashdata('error_msg',  $msg);

        //     return redirect()->to('/all-client');
        // }
    }

    public function addClient()
    {

        $model = new ClientModel();
        $id = $this->request->getPost('id');
        $myTime = new Time('now', 'Asia/Kolkata', 'en_US');

        if (!empty($id)) {
            // Get the existing data
            $existingData = $model->find($id);

            if (empty($existingData)) {
                // Handle the case where the record with the given ID is not found
                $msg = 'No record found.';
                session()->setFlashdata('error_msg',  $msg);
                // return redirect()->to('/ClientController/index3');
            }

            $updatedData = [
                'id' => $id,
                'name' => $this->request->getPost('name'),
                'contact_person' => $this->request->getPost('contact_person'),
                'location' => $this->request->getPost('location'),
                // 'add_address' => $this->request->getPost('add_address'),
                // 'documents' => $this->request->getPost('documents'),
                'role' => $this->request->getPost('role'),
                'updated_at' => $myTime
            ];

            // Update the data
            $res = $model->update($id, $updatedData);

            // Redirect or perform other actions as needed
            if ($res) {
                $msg = 'Client Updated Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
            // return redirect()->to('ClientController/index3');

            $data['clientRecord'] = $model->getClientById($id);
            return view('pages/edit-client', $data);
        } else {

            // Email is unique, proceed with saving data
            $data = [
                'name' => $this->request->getPost('name'),
                'contact_person' => $this->request->getPost('contact_person'),
                'location' => $this->request->getPost('location'),
                'description' => $this->request->getPost('description'),
                // 'add_address' => $this->request->getPost('add_address'),
                // 'documents' => $this->request->getPost('documents'),
                'role' => $this->request->getPost('role'),
                'created_at' => $myTime
            ];

            $res = $model->insert($data);

            // Redirect or perform other actions as needed
            if ($res) {
                $msg = 'Client Added Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
            return redirect()->to('/add-client');
        }
    }

    public function toggleStar($id)
    {

        $model = new ClientModel();
        $record = $model->find($id);
        // print_r($record);
        // die();

        if ($record) {
            $isStarred = !$record['is_starred'];
            $model->update($id, ['is_starred' => $isStarred]);

            return $this->response->setJSON(['isStarred' => $isStarred]);
        }

        return $this->response->setStatusCode(404)->setJSON(['error' => 'Record not found']);
    }



    public function verification()
    {
        $model = new VerificationModel();
        $myTime = new Time('now', 'Asia/Kolkata', 'en_US');
        // echo "<pre>";
        // print_r($_POST['details']);
        // die();

        $dataArray = json_decode($_POST['details'], true);

        foreach ($dataArray as $serviceData) {
            // Ensure service_id is unique before inserting
            $existingRecord = $model->find(array('service_id' => $serviceData['service_id'], 'client_id' => $_POST['id']));

            $serviceData['client_id']  = $_POST['id'];
            $serviceData['created_at'] = $myTime;
            if (!$existingRecord) {
                // Service_id is unique, insert the record
                $res = $model->insert($serviceData);
                if ($res) {
                    $data = ['status' => 1000];
                    $msg = 'Verified Successfully.';
                    session()->setFlashdata('success_msg',  $msg);
                } else {
                    $data = ['status' => 1001];
                    $msg = 'Not Verified Successfully!';
                    session()->setFlashdata('danger_msg',  $msg);
                }
            } else {
                // Service_id already exists, you may handle this case as needed
                // For example, update the existing record or log an error
                // In this example, we'll skip the insertion and log a message
                echo "Service with ID {$serviceData['service_id']} already exists. Skipped insertion.<br>";
            }
        }

        // } else {
        //     $data = ['status' => 1001];
        //     $msg = 'Employee Not Added!';
        //     session()->setFlashdata('danger_msg',  $msg);
        // }


        // foreach ($_POST['details'] as $details) {
        //     $details     =   json_decode($details);
        //     // echo '<pre>';
        //     // print_r($details);
        //     // die();
        //     // // $days = $det->days;
        //     foreach ($details as $det) {
        //         $data = [
        //             'client_id' => $id,
        //             // 'service_id' => $det->service_id,
        //             // 'reinitiate' => ($det->reinitiate) ? $det->reinitiate : 0,
        //             // 'permission' => ($det->permission) ? $det->permission : 1,
        //             // 'exp_days' => $det->days,
        //             // 'created_at' => $myTime
        //         ];
        //         $res =  $model->insert($data);
        //     }
        // }
        return $this->response->setJSON($data);
        // return redirect()->to('/all-client');
    }
}
