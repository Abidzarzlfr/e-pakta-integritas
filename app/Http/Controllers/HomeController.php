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
        // Path ke PDF asli
        $filePath = public_path('assets/pakta-integritas-2025.pdf');
        $outputPath = public_path("assets/" . Auth::user()->nik . "_generate_pakta_integritas.pdf");

        // Ambil data pengguna
        $user = Auth::user();
        $name = $user->name;
        $nik = $user->nik;
        $jabatan = $user->jabatan;
        $kota = $request->input('kota'); // Asumsi kota diinput pengguna

        // Inisialisasi FPDI
        $pdf = new Fpdi();

        // Ambil jumlah halaman dalam PDF asli
        $pageCount = $pdf->setSourceFile($filePath);

        // Loop untuk memproses setiap halaman
        for ($pageNumber = 1; $pageNumber <= $pageCount; $pageNumber++) {
            // Tambahkan halaman baru
            $pdf->AddPage();

            // Impor halaman saat ini
            $templateId = $pdf->importPage($pageNumber);
            $pdf->useTemplate($templateId);

            // Tambahkan teks hanya pada halaman pertama
            if ($pageNumber === 1) {
                $pdf->SetFont('Arial', '', 9);
                $pdf->SetTextColor(0, 0, 0);

                // Posisi teks di halaman pertama (sesuaikan koordinat jika perlu)
                $pdf->SetXY(50, 47.7);
                $pdf->Write(0, $name);

                $pdf->SetXY(50, 52.7);
                $pdf->Write(0, $nik);

                $pdf->SetXY(50, 57.7);
                $pdf->Write(0, $jabatan);
            }
            if ($pageNumber === 2) {
                $pdf->SetFont('Arial', 'B', 9); // Bold untuk $kota
                $pdf->SetTextColor(0, 0, 0);

                $pdf->SetXY(24.5, 170);
                $pdf->Write(0, $kota); // Cetak kota dalam bold

                $pdf->SetFont('Arial', '', 9); // Kembali ke font normal
                $pdf->Write(0, ', .......................'); // Cetak titik tanpa bold

                $pdf->SetXY(31, 202.05);
                $pdf->Write(0, $nik);
            }
        }

        // Simpan PDF hasil edit
        $pdf->Output($outputPath, 'F');

        // Kembalikan file yang telah dimodifikasi ke pengguna
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
