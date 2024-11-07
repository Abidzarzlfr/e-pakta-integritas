<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'name' => 'Abidzar',
                'nik' => 1203324,
                'jabatan' => 'IT Developer',
                'role' => 'user',
                'password' => bcrypt('12345678'),
                'unit_kerja' => 'Telkomedika Head Office',
            ],
            [
                'name' => 'Zulfa',
                'nik' => 3324023,
                'jabatan' => 'Manager Finance',
                'role' => 'user',
                'password' => bcrypt('12345678'),
                'unit_kerja' => 'Telkomedika Head Office',
            ],
            ];

            foreach ($usersData as $key => $val) {
                User::create($val);
            }
    }
}
