<?php

namespace App\Http\Controllers;

use App\Models\Pakta;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $outputPath = public_path("assets/" . Auth::user()->nik . "_generate_pakta_integritas.pdf");


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

        return response()->download($outputPath, Auth::user()->nik . "_generate_pakta_integritas.pdf");
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
        // Save PDF Pakta Integritas
        $file = $request->file('pakta_integritas');
        $user = Auth::user();
        // Path file
        $filePath = $file->store('pakta_integritas', 'public');
        // $filePath = 'uploads/' . Auth::id() . '_pakta_integritas.pdf';
        $filePath = Auth::user()->nik . '_upload_pakta_integritas.pdf';

        // Simpan file PDF yang diunggah
        Storage::put($filePath, file_get_contents($file));

        // Update upload_status column on table users
        $user = Auth::user();
        if ($user) {
            $user->upload_status = 'y';
            $user->save();
        }

        // Save the file path and user ID in the pakta table
        Pakta::create([
            'id_users' => $user->id,
            'pakta_integritas' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Anda berhasil upload Pakta Integritas!');
    }
}
