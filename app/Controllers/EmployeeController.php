<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\ClientModel;

class EmployeeController extends BaseController
{
    public function index()
    {
        $id = $this->request->uri->getSegment(3); // Change the segment number based on your URL structure

        $model = new EmployeeModel();
        $data['records'] = $model->getEmployeesById($id);
        $data['user_id'] = $id;


        return view('pages/all-employee', $data);
    }

    public function todoIndex()
    {
        $model = new EmployeeModel();
        $wherePan = ['is_pan' => 0];
        $whereAadhar = ['is_aadhar' => 0];
        $whereVoterId = ['is_voter_id' => 0];
        $whereLicense = ['is_license' => 0];

        $data['panData'] = $model->countPanRecords($wherePan);
        $data['aadharData'] = $model->countAadharRecords($whereAadhar);
        $data['voterIdData'] = $model->countVoterIdRecords($whereVoterId);
        $data['licenseData'] = $model->countLicenseRecords($whereLicense);

        $data['panPer'] = $model->perPan($wherePan);
        $data['aadharPer'] = $model->perAadhar($whereAadhar);
        $data['voterIdPer'] = $model->perVoterId($whereVoterId);
        $data['licensePer'] = $model->perLicense($whereLicense);

        return view('pages/todo', $data);
    }

    public function showEmployeeModal()
    {
        // print_r($id);
        // die();
        $id = $_POST['id'];
        $model = new EmployeeModel();

        $data['record'] = $model->find($id);

        return view('pages/edit-employee', $data);
    }

    public function showAadharTodoModal()
    {
        // print_r($_POST['id']);
        // die();
        $id = $_POST['id'];
        $model = new EmployeeModel();

        $data['record'] = $model->find($id);

        return view('pages/edit-aadhartodo', $data);
    }

    public function showPanTodoModal()
    {
        // print_r($_POST['id']);
        // die();
        $id = $_POST['id'];
        $model = new EmployeeModel();

        $data['record'] = $model->find($id);

        return view('pages/edit-pantodo', $data);
    }

    public function showVoterIdTodoModal()
    {
        // print_r($_POST['id']);
        // die();
        $id = $_POST['id'];
        $model = new EmployeeModel();

        $data['record'] = $model->find($id);

        return view('pages/edit-voteridtodo', $data);
    }

    public function showLicenseTodoModal()
    {
        // print_r($_POST['id']);
        // die();
        $id = $_POST['id'];
        $model = new EmployeeModel();

        $data['record'] = $model->find($id);

        return view('pages/edit-licensetodo', $data);
    }

    public function editStatus()
    {
        $model = new EmployeeModel();
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('attachment');
        $newName = $file->getRandomName();

        if (!empty($id)) {
            $updatedData  = [
                'is_aadhar' => $this->request->getPost('status'),
                'feedback_doc' => $newName,
            ];

            $res = $model->update($id, $updatedData);

            if ($res) {
                $msg = 'Status Changes Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
        }

        // return filterDataAadhar();
        return redirect()->to('/EmployeeController/aadharView');
    }

    public function editPanStatus()
    {
        // echo "<pre>";
        // print_r($_POST);
        // print_r($_FILES);
        // die();
        $model = new EmployeeModel();
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('attachment');
        $newName = $file->getRandomName();

        if (!empty($id)) {
            $updatedData  = [
                'is_pan' => $this->request->getPost('status'),
                'feedback_doc' => $newName
            ];
            // echo "<pre>";
            // print_r($id);
            // print_r($updatedData);
            // die();

            // if (!empty($file)) {
            //     $file->move(base_url() . '/public/assets/uploads', $newName);
            // }

            $res = $model->update($id, $updatedData);

            if ($res) {
                $msg = 'Status Changes Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
        }

        return redirect()->to('/EmployeeController/panView');
    }

    public function editVoterIdStatus()
    {
        $model = new EmployeeModel();
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('attachment');
        $newName = $file->getRandomName();

        if (!empty($id)) {
            $updatedData  = [
                'is_voter_id' => $this->request->getPost('status'),
                'feedback_doc' => $newName,
            ];

            $res = $model->update($id, $updatedData);

            if ($res) {
                $msg = 'Status Changes Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
        }

        // return filterDataAadhar();
        return redirect()->to('/EmployeeController/voterIdView');
    }

    public function editLicenseStatus()
    {
        $model = new EmployeeModel();
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('attachment');
        $newName = $file->getRandomName();


        if (!empty($id)) {
            $updatedData  = [
                'is_license' => $this->request->getPost('status'),
                'feedback_doc' => $newName,
            ];
            // print_r($id);
            // die();

            $res = $model->update(array('id' => $id), $updatedData);

            if ($res) {
                $msg = 'Status Changes Successfully.';
                session()->setFlashdata('success_msg',  $msg);
            }
        }

        // return filterDataAadhar();
        return redirect()->to('/EmployeeController/licenseView');
    }

    public function editEmployee()
    {

        return redirect()->to('/all-employee');
    }


    public function panView()
    {
        $clientModel = new ClientModel();
        $model = new EmployeeModel();

        $data['dropdown_data'] = $clientModel->getDropdownData();
        $data['records'] = $model->panData();
        $data['count'] = $model->countPanRecords();

        // return view('your_view', $data);

        return view('pages/pan-view', $data);
    }

    public function aadharView()
    {
        $clientModel = new ClientModel();
        $model = new EmployeeModel();

        $data['dropdown_data'] = $clientModel->getDropdownData();
        $data['records'] = $model->aadharData();
        $data['count'] = $model->countAadharRecords();


        // return view('your_view', $data);
        // $data['records'] = $model->findAll();

        return view('pages/aadhar-view', $data);
    }

    public function voterIdView()
    {
        $clientModel = new ClientModel();
        $model = new EmployeeModel();

        $data['dropdown_data'] = $clientModel->getDropdownData();
        $data['records'] = $model->voterIdData();
        $data['count'] = $model->countVoterIdRecords();

        // return view('your_view', $data);
        // $data['records'] = $model->findAll();

        return view('pages/voter-view', $data);
    }

    public function licenseView()
    {
        $clientModel = new ClientModel();
        $model = new EmployeeModel();

        $data['dropdown_data'] = $clientModel->getDropdownData();
        $data['records'] = $model->licenseData();
        $data['count'] = $model->countLicenseRecords();

        // return view('your_view', $data);
        // $data['records'] = $model->findAll();

        return view('pages/license-view', $data);
    }

    public function filterDataPan()
    {
        $model = new EmployeeModel();

        $filter = $this->request->getPost('filter'); // Adjust based on your frontend implementation
        $filteredData = $model->filterDataPan($filter); // Create this method in your UserModel

        return $this->response->setJSON(['data' => $filteredData]);
    }

    public function filterPanStatus()
    {

        $model = new EmployeeModel();

        $filterStatus = $this->request->getPost('filter'); // Adjust based on your frontend implementation

        $filteredData = $model->filterPanStatus($filterStatus); // Create this method in your UserModel

        return $this->response->setJSON(['data' => $filteredData]);
    }


    public function filterDataAadhar()
    {
        $model = new EmployeeModel();

        $filter = $this->request->getPost('filter'); // Adjust based on your frontend implementation
        $filteredData = $model->filterDataAadhar($filter); // Create this method in your UserModel

        return $this->response->setJSON(['data' => $filteredData]);
    }

    public function filterDataVoterId()
    {
        $model = new EmployeeModel();

        $filter = $this->request->getPost('filter'); // Adjust based on your frontend implementation
        $filteredData = $model->filterDataVoterId($filter); // Create this method in your UserModel

        return $this->response->setJSON(['data' => $filteredData]);
    }

    public function filterDataLicense()
    {
        $model = new EmployeeModel();

        $filter = $this->request->getPost('filter'); // Adjust based on your frontend implementation
        $filteredData = $model->filterDataLicense($filter); // Create this method in your UserModel

        return $this->response->setJSON(['data' => $filteredData]);
    }

    public function delCheck()
    {
        $clientModel = new ClientModel();
        $model = new EmployeeModel();

        $data['dropdown_data'] = $clientModel->getDropdownData();
        // $data['records'] = $model->panData();

        // return view('your_view', $data);

        return view('pages/del-check', $data);
    }

    public function filterDataDelCheck()
    {
        $model = new EmployeeModel();

        $filter = $this->request->getPost('filter'); // Adjust based on your frontend implementation
        $filteredData = $model->filterDataDelCheck($filter); // Create this method in your UserModel

        return $this->response->setJSON(['data' => $filteredData]);
    }

    public function getEmployeeDelCheck()
    {
        $model = new EmployeeModel();

        $id = $_GET['id']; // Adjust based on your frontend implementation

        $employeeData = $model->getEmployeeDelCheckData($id); // Create this method in your UserModel


        return $this->response->setJSON(['data' => $employeeData]);
    }

    public function updateDelCheck()
    {
        $model = new EmployeeModel();
        $id = $this->request->getPost('id');
        if (!empty($id)) {
            $msg = 'Deleted Successfully.';
            session()->setFlashdata('success_msg',  $msg);
        }

        return redirect()->to('/del-check');
        // print_r($_POST);
        // die();
    }

    public function liveSearch()
    {
        // Load the model
        $model = new EmployeeModel();

        // Get the search query from the AJAX request
        $query = $this->request->getVar('query');

        // Call a method in the model to perform the live search
        $searchResults = $model->liveSearch($query);

        // Return the search results as JSON
        // return $this->response->setJSON($searchResults);
        return $this->response->setJSON(['data' => $searchResults]);
    }

    public function panDashboard()
    {

        // Retrieve the ID from the query parameters or POST data
        $id = $this->request->getVar('id');

        // Use the ID as needed
        echo 'Received ID: ' . $id;
        die();
    }

    public function aadharDashboard()
    {

        // Retrieve the ID from the query parameters or POST data
        $id = $this->request->getVar('id');

        // Use the ID as needed
        echo 'Received ID: ' . $id;
        die();
    }
}
