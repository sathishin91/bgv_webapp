<?php

namespace App\Controllers;


use App\Models\EmployeeModel;
use App\Controllers\BaseController;
use App\ThirdParty\TCPDF\TCPDF;



class DashboardController extends BaseController
{
    public function index()
    {
        // $model = new EmployeeModel();
        // $data['records'] = $model->findAll(); // Fetch all records

        return view('pages/dashboard');
    }

    // public function fetchData()
    // {
    //     // Fetch data from your model
    //     $model = new YourModel();
    //     $data = $model->getData(); // Your method to fetch data from the model

    //     // Return data as JSON response
    //     return $this->response->setJSON($data);
    // }

    public function generatePdf()
    {

        // Load the TCPDF library
        $pdf = new TCPDF();

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Your PDF Title');
        $pdf->SetSubject('Subject');
        $pdf->SetKeywords('Keywords');

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 12);

        // Add content
        $pdf->writeHTML('<h1>Hello, this is a TCPDF PDF!</h1>');

        // Output PDF to the browser
        $pdf->Output('output.pdf', 'I');
    }
}
