<?php

namespace App\Http\Controllers;

use App\Models\Pakta;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
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

    public function uploadPdf(Request $request)
    {
        $request->validate([
            'pakta_integritas' => 'required|file|mimes:pdf|max:5120'
        ], [
            'pakta_integritas.required' => 'Maaf file harus pdf, dan file tidak boleh melebihi 5Mb!',
            'pakta_integritas.mimes' => 'Mohon maaf, file harus pdf!',
            'pakta_integritas.max' => 'Mohon maaf, file anda melebihi 5Mb!',
        ]);

        // Get the uploaded file
        $file = $request->file('pakta_integritas');
        $user = Auth::user();

        // Store the PDF file in the 'pakta_integritas' directory
        $filePath = $file->store('pakta_integritas', 'public');

        // Save the file path and user ID in the pakta table
        Pakta::create([
            'id_users' => $user->id,
            'pakta_integritas' => $filePath,
        ]);

        // Return back with a success message
        return redirect()->back()->with('success', 'Anda berhasil upload Pakta Integritas!');
    }
}
