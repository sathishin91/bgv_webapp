<?php

namespace App\Controllers;

use CodeIgniter\Controller;

// Load the mPDF library
require APPPATH . 'libraries/html2pdf/html2fpdf.php';

class PdfController extends BaseController
{
    public function generatePdf()
    {
        // Create FPDF object
        $pdf = new \FPDF();

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('Arial', 'B', 16);

        // Add content to the PDF
        $pdf->Cell(40, 10, 'Hello, FPDF!');

        // Output the PDF to the browser
        $pdf->Output();
    }

    public function downloadPdf()
    {
        // Create HTML2FPDF object
        $pdf = new \HTML2FPDF();

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('Arial', 'B', 16);

        // HTML content to convert
        $htmlContent = '<h1>Hello, HTML2FPDF!</h1>';

        // Convert HTML to PDF
        $pdf->WriteHTML($htmlContent);

        // Output the PDF to the browser
        $pdf->Output('example.pdf', 'D');
    }
}
