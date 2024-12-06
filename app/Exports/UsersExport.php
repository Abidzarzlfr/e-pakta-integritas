<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    protected $uploadStatus;

    public function __construct($uploadStatus)
    {
        $this->uploadStatus = $uploadStatus;
    }

    public function collection()
    {
        // Mengambil data user berdasarkan upload_status
        if ($this->uploadStatus == 'y') {
            return User::where('upload_status', 'y')->get(['name', 'nik', 'jabatan', 'upload_status', 'unit_kerja']);
        } elseif ($this->uploadStatus == 'n') {
            return User::where('upload_status', 'n')->get(['name', 'nik', 'jabatan', 'upload_status', 'unit_kerja']);
        } else {
            return User::all(['name', 'nik', 'jabatan', 'upload_status', 'unit_kerja']);
        }
    }

    public function headings(): array
    {
        return [
            'Name',
            'NIK',
            'Jabatan',
            'Upload Status',
            'Unit Kerja',
        ];
    }
}
