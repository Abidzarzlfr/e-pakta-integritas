<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        return view('layouts.Home');
    }

    public function updatePdf(Request $request)
    {
        // Path to the original PDF
        $filePath = public_path('assets/pakta-integritas.pdf');
        $outputPath = public_path('assets/updated-pakta-integritas.pdf');

        // Get user data
        $user = Auth::user();
        $name = $user->name;
        $nik = $user->nik;
        $jabatan = $user->jabatan;
        $kota = $request->input('kota'); // Assume the city is input by the user

        // Initialize FPDI
        $pdf = new Fpdi();
        $pdf->AddPage();

        // Import the first page of the existing PDF
        $pdf->setSourceFile($filePath);
        $templateId = $pdf->importPage(1);
        $pdf->useTemplate($templateId);

        // Set font and add user details
        $pdf->SetFont('Arial', '', 9);
        $pdf->SetTextColor(0, 0, 0);

        // Position the text on the PDF (adjust coordinates as needed)
        $pdf->SetXY(60, 60);
        $pdf->Write(0, $name);

        $pdf->SetXY(60, 65);
        $pdf->Write(0, $nik);

        $pdf->SetXY(60, 70);
        $pdf->Write(0, $jabatan);

        $pdf->SetXY(37, 240);
        $pdf->Write(0, $kota);

        // Save the modified PDF
        $pdf->Output($outputPath, 'F');

        return response()->download($outputPath, 'updated-pakta-integritas.pdf');
    }
}
