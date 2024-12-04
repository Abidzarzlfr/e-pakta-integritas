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
        // $usersData = [
        //     [
        //         'name' => 'Admin',
        //         'nik' => '112233',
        //         'jabatan' => 'Admin',
        //         'role' => 'admin',
        //         'upload_status' => 'n',
        //         'password' => bcrypt("Adminepakta@2024#!"),
        //         'unit_kerja' => 'IT'
        //     ],
        // ];
        
        // $usersData = [
        //     [
        //         'name' => 'Arni Irawati Sam',
        //         'nik' => '21175067',
        //         'jabatan' => 'TTK',
        //         'role' => 'admin',
        //         'upload_status' => 'n',
        //         'password' => bcrypt("Telkomedika@2024#!"),
        //         'unit_kerja' => 'THC Manado'
        //     ],
        // ];
        $usersData = [
            [
                'name' => 'Cornelia Savitri Shintawati H',
                'nik' => '78423477',
                'jabatan' => 'General Manager Operation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Business Operation'
            ],
            [
                'name' => 'Niken Diah Arini',
                'nik' => '91058011',
                'jabatan' => 'Junior Officer Claim Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'dr. Kristian Ariya Sedayu',
                'nik' => '83003604',
                'jabatan' => 'Manager Layanan Kesehatan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Izzuddin Rahmat Naufal',
                'nik' => '96003639',
                'jabatan' => 'Officer Provider Relation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'dr. Irvandi Handana Suryana',
                'nik' => '92003640',
                'jabatan' => 'Officer Provider Relation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'dr. Putu Dayanthy Jawan Sampelan',
                'nik' => '94003627',
                'jabatan' => 'Officer Provider Relation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'dr. Diona Ossy Wahyuni',
                'nik' => '97003629',
                'jabatan' => 'Officer Provider Relation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Nadia Nurkhoerunnisa',
                'nik' => '91005560',
                'jabatan' => 'Staff Claim Administration',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Mujahidin',
                'nik' => '84029011',
                'jabatan' => 'Staff Claim Administration',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Ika Lulu Fatikah',
                'nik' => '96003606',
                'jabatan' => 'Staff Claim Administration',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Tiara Martha Prasticha',
                'nik' => '99005504',
                'jabatan' => 'Staff Claim Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Septiani Rusmawati',
                'nik' => '94005535',
                'jabatan' => 'Staff Claim Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'Muhammad Agiel Kamali',
                'nik' => '99003573',
                'jabatan' => 'Staff Claim Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Kesehatan'
            ],
            [
                'name' => 'dr. Restu Aritonang, MMRS',
                'nik' => '83002632',
                'jabatan' => 'Assistant Manager Layanan Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Puti Dwi Ginanti, Sp.OK',
                'nik' => '85002599',
                'jabatan' => 'Officer Operasional Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Prima Indah Fitrihani',
                'nik' => '99003581',
                'jabatan' => 'Officer Operasional Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Ranty Rizky Puspadewi',
                'nik' => '94003595',
                'jabatan' => 'Officer Operasional Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Claudia Clara Samantha',
                'nik' => '94323882',
                'jabatan' => 'Officer Operasional Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Verty Ratna Monika',
                'nik' => '97003621',
                'jabatan' => 'Officer Operasional Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Neny Nur Rifah',
                'nik' => '83002636',
                'jabatan' => 'Officer Operational Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'dr. Erpina Valentina',
                'nik' => '96003638',
                'jabatan' => 'Officer Operational Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'Seflina Chanifatul Mufarrocha',
                'nik' => '21005631',
                'jabatan' => 'Staff Operasional Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'Antri Mitarti',
                'nik' => '89325014',
                'jabatan' => 'Staff Operasional Klinik ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'Friska Marbun',
                'nik' => '92004563',
                'jabatan' => 'Staff Operasional Klinik ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Layanan Medis'
            ],
            [
                'name' => 'Novia Kasih Wardani',
                'nik' => '92003354',
                'jabatan' => 'Junior Supervisor Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Penunjang Medis'
            ],
            [
                'name' => 'dr. Dessy Ayu Pratiwi',
                'nik' => '89433073',
                'jabatan' => 'POH Manager Penunjang Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Penunjang Medis'
            ],
            [
                'name' => 'Ratu Pandu Winata Oktavia Askanta',
                'nik' => '87005456',
                'jabatan' => 'Staff Laboratorium & Non Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Penunjang Medis'
            ],
            [
                'name' => 'Gea Fitriani Effendi',
                'nik' => '96005509',
                'jabatan' => 'Staff Laboratorium & Non Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Penunjang Medis'
            ],
            [
                'name' => 'Desi Mustika',
                'nik' => '93003619',
                'jabatan' => 'Staff Penunjang Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Penunjang Medis'
            ],
            [
                'name' => 'Dinda Nadia Armi',
                'nik' => '98005590',
                'jabatan' => 'Staff Administrasi Penunjang Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Penunjang Medis '
            ],
            [
                'name' => 'Sumarni',
                'nik' => '91003414',
                'jabatan' => 'Officer Business Solution',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Product Management & Tarif'
            ],
            [
                'name' => 'Herry Priyanto',
                'nik' => '78025037',
                'jabatan' => 'Officer Business Solution',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Product Management & Tarif'
            ],
            [
                'name' => 'Kusto',
                'nik' => '91005527',
                'jabatan' => 'Specialis Product Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Product Management & Tarif'
            ],
            [
                'name' => 'Feri Hadianto',
                'nik' => '80023028',
                'jabatan' => 'Manager Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'dr. Radite Nusasenjaya, MKK, SPOK',
                'nik' => '75002598',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Yulinda Alva Eka Pratiwi',
                'nik' => '90125055',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'dr. Laras Asia Cheria',
                'nik' => '92003554',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Melani Lesnussa',
                'nik' => '94323484',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'dr. Kurnia Elsa Oktaviana',
                'nik' => '98003603',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'dr. Muhammad Irfan Ata Ul Awal',
                'nik' => '98003623',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Rengga Indarta Pratama',
                'nik' => '88023037',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Clara Ayu Rivayanti',
                'nik' => '95003488',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Anggi Dwi Prasetyo',
                'nik' => '99003566',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Nelawati Airunnisah',
                'nik' => '96003572',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Willy Ferdiantsyah',
                'nik' => '82003602',
                'jabatan' => 'POH General Manager Business Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Business Support'
            ],
            [
                'name' => 'Kartika Yufi Arumning Melati',
                'nik' => '93003036',
                'jabatan' => 'Assistant Manager HC Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Management'
            ],
            [
                'name' => 'Yogi Suryo Nugroho',
                'nik' => '88003597',
                'jabatan' => 'Officer Compensation & Benefit',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Management'
            ],
            [
                'name' => 'Fety Fatma Rahmadhani',
                'nik' => '95003374',
                'jabatan' => 'Staff Human Capital Administration',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Management'
            ],
            [
                'name' => 'Afifah Zuhriyyah',
                'nik' => '00005552',
                'jabatan' => 'Staff Human Capital Administration',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Management'
            ],
            [
                'name' => 'Achmad Wirman Maulana',
                'nik' => '96003447',
                'jabatan' => 'Staff Talent Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Management'
            ],
            [
                'name' => 'Fadjri Irfan Rusdian',
                'nik' => '86003589',
                'jabatan' => 'Officer Partnership',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership'
            ],
            [
                'name' => 'Divandra Flory Aisya Efendi',
                'nik' => '22003628',
                'jabatan' => 'Staff Partnership',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership'
            ],
            [
                'name' => 'Rizky Maula',
                'nik' => '94003612',
                'jabatan' => 'Specialist Partnership',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership '
            ],
            [
                'name' => 'Irvianola Arya Fitriani',
                'nik' => '97003605',
                'jabatan' => 'Staff Partnership',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership '
            ],
            [
                'name' => 'Amar Abdullah',
                'nik' => '99003547',
                'jabatan' => 'Staff General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Procurement & General Affair'
            ],
            [
                'name' => 'Hasna Zerlina Pusparani',
                'nik' => '99005515',
                'jabatan' => 'Staff Procurement',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Procurement & General Affair'
            ],
            [
                'name' => 'Rifda Adila',
                'nik' => '99003610',
                'jabatan' => 'Staff Procurement',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Procurement & General Affair'
            ],
            [
                'name' => 'Ahmad Faishol',
                'nik' => '82002569',
                'jabatan' => 'General Manager Corporate Office & Digital',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Office & Digital'
            ],
            [
                'name' => 'Yoga Citra Kurnianda',
                'nik' => '87002626',
                'jabatan' => 'Manager Corporate Planning',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Planning'
            ],
            [
                'name' => 'Saffa Nashita Puteri',
                'nik' => '21003596',
                'jabatan' => 'Staff Business Planning',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Planning'
            ],
            [
                'name' => 'Wilda Admiralty',
                'nik' => '99003622',
                'jabatan' => 'Corporate Secretary',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Secretary'
            ],
            [
                'name' => 'Mardhiyah Azzahrani',
                'nik' => '95003377',
                'jabatan' => 'PJ. Manager Corporate Secretary & Communication',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Secretary & Communication'
            ],
            [
                'name' => 'Fahriz Aziz',
                'nik' => '94003620',
                'jabatan' => 'IT Development Officer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Abidzar Zulfa Arifa Kusyono',
                'nik' => '21003645',
                'jabatan' => 'IT Development Officer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Fhajrin Mohamad Ramadhan',
                'nik' => '94003391',
                'jabatan' => 'Manager IT & Digital Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Iyan Supriatna',
                'nik' => '77013016',
                'jabatan' => 'Specialist IT Development',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Nana Irmanto',
                'nik' => '20008588',
                'jabatan' => 'Staff IT & Digital Services',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Cucu Rohmat Hidayat',
                'nik' => '94003525',
                'jabatan' => 'Staff IT Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Vini Tasyarani',
                'nik' => '99003523',
                'jabatan' => 'Staff IT Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Kukuh Herdiansyah',
                'nik' => '90003513',
                'jabatan' => 'Assistant Manager Legal & Regulatory',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Legal & Compliance'
            ],
            [
                'name' => 'Javier Adhani Idris',
                'nik' => '22003611',
                'jabatan' => 'Staff Accreditation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Legal & Compliance'
            ],
            [
                'name' => 'Shafira Shava Rahmanissa',
                'nik' => '21003624',
                'jabatan' => 'Staff Legal & Comliance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Legal & Compliance'
            ],
            [
                'name' => 'Inda Filia Anaconda',
                'nik' => '96004586',
                'jabatan' => 'Supervisor Accreditation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Legal & Compliance'
            ],
            [
                'name' => 'Sapta Lukman Nur Hakim ',
                'nik' => '84003630',
                'jabatan' => 'Manager Accounting & Budgeting ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Accounting & Budgeting'
            ],
            [
                'name' => 'Wita Ayuni',
                'nik' => '98005501',
                'jabatan' => 'Staff Accounting',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Accounting & Budgeting'
            ],
            [
                'name' => 'Ferdy Hilmi Muttaqien',
                'nik' => '99003594',
                'jabatan' => 'Staff Accounting',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Accounting & Budgeting'
            ],
            [
                'name' => 'Mohammad Farhansyah Panduwibowo',
                'nik' => '20003633',
                'jabatan' => 'Staff Accounting',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Accounting & Budgeting'
            ],
            [
                'name' => 'Fikri Muzakki',
                'nik' => '94018008',
                'jabatan' => 'Officer Billing & Payment',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Billing, Collection & Payment'
            ],
            [
                'name' => 'Nia Kurniasih',
                'nik' => '96005434',
                'jabatan' => 'Staff Billing & Payment',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Billing, Collection & Payment'
            ],
            [
                'name' => 'Mokhamad Fajar Saputro',
                'nik' => '96003036',
                'jabatan' => 'Staff Billing & Payment',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Billing, Collection & Payment'
            ],
            [
                'name' => 'Adinda Nurjaman',
                'nik' => '97005520',
                'jabatan' => 'Staff Billing & Payment',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Billing, Collection & Payment'
            ],
            [
                'name' => 'Rosita Delaila Manurung',
                'nik' => '76125002',
                'jabatan' => 'General Manager Finance ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Finance'
            ],
            [
                'name' => 'Chintya Larasati Erna Putri',
                'nik' => '93003582',
                'jabatan' => 'Assistant Manager Treasury ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Treasury & Tax'
            ],
            [
                'name' => 'Jazmi Luthfi Arham',
                'nik' => '95003634',
                'jabatan' => 'Officer Tax',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Treasury & Tax'
            ],
            [
                'name' => 'Hammaam Handama',
                'nik' => '97003635',
                'jabatan' => 'Officer Tax',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Treasury & Tax'
            ],
            [
                'name' => 'Haswin Tanjuarga',
                'nik' => '85228031',
                'jabatan' => 'Staff Treasury',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Treasury & Tax'
            ],
            [
                'name' => 'Wina Safira',
                'nik' => '98423777',
                'jabatan' => 'Staff Treasury',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Treasury & Tax'
            ],
            [
                'name' => 'dr. Monica Morratha Sihombing, MM ',
                'nik' => '77002422',
                'jabatan' => 'Direktur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Management'
            ],
            [
                'name' => 'Dicky Anfiadi',
                'nik' => '73002559',
                'jabatan' => 'Direktur Utama',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Management'
            ],
            [
                'name' => 'Nopi Candra S',
                'nik' => '84005363',
                'jabatan' => 'Officer Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of National AM'
            ],
            [
                'name' => 'Achmad Fauzi',
                'nik' => '96003491',
                'jabatan' => 'Officer Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of National AM'
            ],
            [
                'name' => 'Rina Karina Manurung',
                'nik' => '86432077',
                'jabatan' => 'Officer Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of National AM'
            ],
            [
                'name' => 'Asep Nandang',
                'nik' => '76003607',
                'jabatan' => 'Senior Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of National AM'
            ],
            [
                'name' => 'Herwandy W. Patongai',
                'nik' => '82023017',
                'jabatan' => 'Deputy General Manager Regional Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Marketing & Sales'
            ],
            [
                'name' => 'Novia Ayu Citra Fadina',
                'nik' => '95003637',
                'jabatan' => 'Officer Digital & Marketing',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Marketing & Sales Support'
            ],
            [
                'name' => "Muhammad Zein Mi'raj",
                'nik' => '98003551',
                'jabatan' => 'Staff Marketing  Communication',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Marketing & Sales Support'
            ],
            [
                'name' => 'Muhammad Raja Fadhilah',
                'nik' => '96003614',
                'jabatan' => 'Staff Marketing Communication',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Marketing & Sales Support'
            ],
            [
                'name' => 'Anindita Ayu Sukma',
                'nik' => '96003601',
                'jabatan' => 'Staff Sales & Marketing Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Marketing & Sales Support'
            ],
            [
                'name' => 'Reni Widya Daulay',
                'nik' => '81413021',
                'jabatan' => 'Regional Manager ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Muhammad Aidil Safitrah Siregar',
                'nik' => '00413045',
                'jabatan' => 'Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Dewi Suci',
                'nik' => '86225052',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Rika Wulandari',
                'nik' => '91415046',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Muhammad',
                'nik' => '75128013',
                'jabatan' => 'Staff General Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Kurnia Putri Pharmahersa',
                'nik' => '87123015',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 13'
            ],
            [
                'name' => 'Syefriyenti',
                'nik' => '73127048',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 13'
            ],
            [
                'name' => 'Fitriza Agustikarini',
                'nik' => '82123017',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 16'
            ],
            [
                'name' => 'Fifin Triana',
                'nik' => '91415006',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 16'
            ],
            [
                'name' => 'Achmadan',
                'nik' => '85126020',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 16'
            ],
            [
                'name' => 'Samira Khoiriah Pulungan',
                'nik' => '89123011',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 9'
            ],
            [
                'name' => 'Sri Eka Febriyana',
                'nik' => '20113063',
                'jabatan' => 'Apoteker Pendamping',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 9'
            ],
            [
                'name' => 'Juliana',
                'nik' => '75127022',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 9'
            ],
            [
                'name' => 'Siti Aisyah',
                'nik' => '84123011',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 9'
            ],
            [
                'name' => 'Erni Agustina',
                'nik' => '94215030',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Medan'
            ],
            [
                'name' => 'Febri Andriani',
                'nik' => '94215029',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'Dyah Rahmawati',
                'nik' => '93313095',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'dr. Rani Pratama Putri, S.Ked',
                'nik' => '95313051',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'Eni Murjiyawati',
                'nik' => '87323003',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'Nadhira Fitria Zulfa',
                'nik' => '97315034',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'dr. Arti Febriyani Hutasuhut',
                'nik' => '87313002',
                'jabatan' => 'UBM (Unit Business Manager)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'Akhyar Nasution',
                'nik' => '94315062',
                'jabatan' => 'Radiografer (PPR)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Medan'
            ],
            [
                'name' => 'Ayu Suherni',
                'nik' => '93225007',
                'jabatan' => 'Analis Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'Alam Budi Kusuma',
                'nik' => '95215012',
                'jabatan' => 'Analis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'dr. Jelita Siregar, Sp.PK.',
                'nik' => '78212009',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'dr. Dedy Dwi Putra, Sp.Rad.',
                'nik' => '77212017',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'dr. Aditya Azri Rizki',
                'nik' => '94313057',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'dr. Rahmawati, M.Ked (PD), Sp. PD',
                'nik' => '83313060',
                'jabatan' => 'Dokter Spesialis Penyakit Dalam',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'Elsa Afrilla',
                'nik' => '90225051',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'Bayu Dwi Anggara',
                'nik' => '94315053',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'Maruba Boni Soritua Sitorus',
                'nik' => '88315059',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'PT. Nippon Indosari Corpindo'
            ],
            [
                'name' => 'Mawadatul Ilaikha',
                'nik' => '96314055',
                'jabatan' => 'Bidan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Medan'
            ],
            [
                'name' => 'dr. Wenti Anggraeni',
                'nik' => '88313042',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Medan'
            ],
            [
                'name' => 'Suranto',
                'nik' => '95313056',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Medan'
            ],
            [
                'name' => 'Dika Aulia Arifin',
                'nik' => '21313058',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Medan'
            ],
            [
                'name' => 'Ricky Andreas S Hutagalung',
                'nik' => '82003585',
                'jabatan' => 'Regional Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Ditta Sagita Prameswara',
                'nik' => '85426942',
                'jabatan' => 'Deputy Regional Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Fikha Alievia',
                'nik' => '20423906',
                'jabatan' => 'Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Edi Mardiono',
                'nik' => '94327591',
                'jabatan' => 'Junior Supervisor Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Muhamad Azis',
                'nik' => '97003616',
                'jabatan' => 'Sraff Finance & Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Wulan Suci Ramadhia ',
                'nik' => '22423936',
                'jabatan' => 'Sraff Finance & Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Syarifuddin Fajri',
                'nik' => '99423900',
                'jabatan' => 'Staff Administrasi Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Adisti Ayu Madani',
                'nik' => '99423819',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'M. Rizq Ariq Athariq R',
                'nik' => '99423943',
                'jabatan' => 'Staff Finance & Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Muhammad Dhia Ulhaq.G',
                'nik' => '97323879',
                'jabatan' => 'Staff Finance & Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Muhammad Irfan',
                'nik' => '94228047',
                'jabatan' => 'Staff Logistik & Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Anis Siti Syarah',
                'nik' => '94323479',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 19'
            ],
            [
                'name' => 'Marliatin Nurhayati',
                'nik' => '82125036',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 19'
            ],
            [
                'name' => 'Roby Azzam Latif',
                'nik' => '98125697',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 19'
            ],
            [
                'name' => 'Esfia Pangaribuan',
                'nik' => '69327012',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 19'
            ],
            [
                'name' => 'Andi Sri Wahyuni Thamrin',
                'nik' => '98123907',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 21'
            ],
            [
                'name' => 'Annisa Avianti',
                'nik' => '94328007',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 21'
            ],
            [
                'name' => 'Charly Nur Mars Marlinda',
                'nik' => '94323628',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 21'
            ],
            [
                'name' => 'Baddriyasti',
                'nik' => '94123632',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Graha Merah Putih'
            ],
            [
                'name' => 'Hamidah',
                'nik' => '98125637',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Graha Merah Putih'
            ],
            [
                'name' => 'Indryanti',
                'nik' => '97123668',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Graha Merah Putih'
            ],
            [
                'name' => 'Nur Azizah',
                'nik' => '85127014',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Graha Merah Putih'
            ],
            [
                'name' => 'Amirullah Harahap',
                'nik' => '97123705',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Ayola Wanda Ulfa',
                'nik' => '97123693',
                'jabatan' => 'Apoteker Pendamping',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Nadhiffa Anisa',
                'nik' => '97123539',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Indri Apriyanti Putri',
                'nik' => '95123669',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Indriyani',
                'nik' => '99123677',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Nadhifa Pasyha Kurniawan',
                'nik' => '99125703',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Rima Zembi Apriyani',
                'nik' => '96123914',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Slipi'
            ],
            [
                'name' => 'Ira Aulia Sahara',
                'nik' => '99125573',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Slipi'
            ],
            [
                'name' => 'Syifa Mujarabi',
                'nik' => '94325517',
                'jabatan' => 'Perawat Homecare',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Homecare TelkoMedika'
            ],
            [
                'name' => 'Riesya Diah Astuti Putri',
                'nik' => '00325597',
                'jabatan' => 'Perawat Homecare',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Homecare TelkoMedika'
            ],
            [
                'name' => 'Lilis Eka Putri Sari',
                'nik' => '99325602',
                'jabatan' => 'Perawat Homecare',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Homecare TelkoMedika'
            ],
            [
                'name' => 'Khofifah Yuniati',
                'nik' => '20325688',
                'jabatan' => 'Perawat Homecare',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Homecare TelkoMedika'
            ],
            [
                'name' => 'Octavia Cahayu Chandra',
                'nik' => '97323885',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika BSD'
            ],
            [
                'name' => 'Dimas Saad Nursya’bani',
                'nik' => '97325934',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika BSD'
            ],
            [
                'name' => 'dr. Derianti Nur Hidayah',
                'nik' => '93325931',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika BSD'
            ],
            [
                'name' => 'Kharisma Ladynda',
                'nik' => '96323835',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika BSD'
            ],
            [
                'name' => 'dr. Syafira Adera Putri N',
                'nik' => '96325933',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Sigma'
            ],
            [
                'name' => 'Erna',
                'nik' => '79428023',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Sigma'
            ],
            [
                'name' => 'Nisfah Narda Adimar',
                'nik' => '98323896',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Monica Bunga Depazzi',
                'nik' => '96325930',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Esmeralda Lasmaria',
                'nik' => '99323940',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Supriyati Sinaga',
                'nik' => '86305397',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Dyah Ayu Mulyapatmasari',
                'nik' => '97323803',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Weti Restiana',
                'nik' => '96123598',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'dr. Eva Maria Christine, M.Gizi, SpGK',
                'nik' => '84322748',
                'jabatan' => 'Dokter Spesialis Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'dr. Thia Juniaty Manik M.Gizi Sp.GK',
                'nik' => '79322754',
                'jabatan' => 'Dokter Spesialis Gizi ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'dr. Lydia Theresia Purba, Sp. Rad',
                'nik' => '77322802',
                'jabatan' => 'Dokter Spesialis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'dr. Dixtrysan Patigor Purba',
                'nik' => '91003530',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'dr. Modest Ndemas',
                'nik' => '95003557',
                'jabatan' => 'Officer Provider Relation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Monafita Lelyana',
                'nik' => '79003356',
                'jabatan' => 'Perawat ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Yeni Fitriana',
                'nik' => '98323660',
                'jabatan' => 'Perawat Premium Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Devi Suhendar',
                'nik' => '98325749',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Poppy Nurul Affifah',
                'nik' => '23325895',
                'jabatan' => 'Radiografer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Rizka Ramdana Febriani',
                'nik' => '95325923',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Iriza Eraswati',
                'nik' => '91325932',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Kartika Cahyawati',
                'nik' => '20325834',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Neti Maryati',
                'nik' => '80225054',
                'jabatan' => 'Analis Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Iis Lillah Ismawati',
                'nik' => '83325067',
                'jabatan' => 'Assistant Koordinator Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Dessy Handayani',
                'nik' => '90003593',
                'jabatan' => 'Bidan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'dr. Freddy Ciptono, Sp.PK',
                'nik' => '76322563',
                'jabatan' => 'Dokter Spesialis Patologi Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'dr. Liem Arinuryanto Lios, Sp.Rad',
                'nik' => '85323679',
                'jabatan' => 'Dokter Spesialis Radiologi ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'dr. Faras Sabilla Kuswatim',
                'nik' => '98323917',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Ghizar Rizqiyyah',
                'nik' => '87003358',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Teni Isnaeni',
                'nik' => '92225065',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Ceny Widyastuti',
                'nik' => '97325596',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Fajriatunnisah',
                'nik' => '96325595',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Wella Oktavianika',
                'nik' => '97325805',
                'jabatan' => 'Radiografer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Gita Rindang Lestari',
                'nik' => '96324761',
                'jabatan' => 'Teknisi Elektromedis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Atiq Tri Kesumadewi',
                'nik' => '99323938',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Infomedia'
            ],
            [
                'name' => 'Alifia Nur Selina',
                'nik' => '21325929',
                'jabatan' => 'Tenaga Medis KCI',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Tiara Septi Listiani',
                'nik' => '22325927',
                'jabatan' => 'Tenaga Medis KCI',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ida Ayu Putu',
                'nik' => '99325720',
                'jabatan' => 'Tenaga Medis KCI Bekasi Timur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Mita Karmelia',
                'nik' => '99325784',
                'jabatan' => 'Tenaga Medis KCI Bekasi Timur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Shifaunnisa',
                'nik' => '98324916',
                'jabatan' => 'Tenaga Medis KCI Bekasi Timur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Robi’ah Albab',
                'nik' => '96325728',
                'jabatan' => 'Tenaga Medis KCI Bojong Gede',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Annisya Rachmawati',
                'nik' => '00325707',
                'jabatan' => 'Tenaga Medis KCI Bojong Gede',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Fajran Fitrah Zein',
                'nik' => '00325712',
                'jabatan' => 'Tenaga Medis KCI Bojong Gede',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Sindy Nurul Fajriani',
                'nik' => '98325755',
                'jabatan' => 'Tenaga Medis KCI Cakung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Lilis Suwanah',
                'nik' => '98324804',
                'jabatan' => 'Tenaga Medis KCI Cakung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Heris Ali Rusman',
                'nik' => '92325757',
                'jabatan' => 'Tenaga Medis KCI Cikini',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Syalsa Bella Nadia Aiko Ardana',
                'nik' => '21325771',
                'jabatan' => 'Tenaga Medis KCI Cikini',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Putri Ayu Sekarini',
                'nik' => '21325767',
                'jabatan' => 'Tenaga Medis KCI Cisauk',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Muhamad Rido Kamaludin',
                'nik' => '99325782',
                'jabatan' => 'Tenaga Medis KCI Cisauk',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Melia Arsya Subekti',
                'nik' => '21325884',
                'jabatan' => 'Tenaga Medis KCI Cisauk',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Nilam Permata Sari',
                'nik' => '97325737',
                'jabatan' => 'Tenaga Medis KCI Citayam',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Juan Gymnastiar ',
                'nik' => '01325742',
                'jabatan' => 'Tenaga Medis KCI Citayam',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Edila Tifriadi',
                'nik' => '98325760',
                'jabatan' => 'Tenaga Medis KCI Gondangdia',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Kartika Ayu Mutmainah',
                'nik' => '98325761',
                'jabatan' => 'Tenaga Medis KCI Gondangdia',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Anantha Athoriq',
                'nik' => '01325789',
                'jabatan' => 'Tenaga Medis KCI Gondangdia',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Faqi Rizal Fadillah',
                'nik' => '99325713',
                'jabatan' => 'Tenaga Medis KCI Kampung Bandan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Bramantyo Pambudi',
                'nik' => '96325787',
                'jabatan' => 'Tenaga Medis KCI Kampung Bandan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Sri Ariyanti',
                'nik' => '96325812',
                'jabatan' => 'Tenaga Medis KCI Kampung Bandan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Muhammad Alipudin',
                'nik' => '97325768',
                'jabatan' => 'Tenaga Medis KCI Kebayoran',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Fina Fadhillah Reja',
                'nik' => '99325791',
                'jabatan' => 'Tenaga Medis KCI Kebayoran',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Eka Agustini',
                'nik' => '98325796',
                'jabatan' => 'Tenaga Medis KCI Kebayoran',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ratih Anggiana',
                'nik' => '97325743',
                'jabatan' => 'Tenaga Medis KCI Klender',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ari Final Faruq',
                'nik' => '98325756',
                'jabatan' => 'Tenaga Medis KCI Klender',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Fathia Basma',
                'nik' => '91323717',
                'jabatan' => 'Tenaga Medis KCI Lenteng Agung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Renti Nasmawati',
                'nik' => '96325798',
                'jabatan' => 'Tenaga Medis KCI Lenteng Agung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Muhamad Rizalludin yusuf',
                'nik' => '98325783',
                'jabatan' => 'Tenaga Medis KCI Maja',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Annisa Luthfiyatul Himmah',
                'nik' => '97325735',
                'jabatan' => 'Tenaga Medis KCI Matraman',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Riki Pirmansyah',
                'nik' => '99325770',
                'jabatan' => 'Tenaga Medis KCI Matraman',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Fitri Herdiana Rahmadani',
                'nik' => '22325921',
                'jabatan' => 'Tenaga Medis KCI Matraman',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Afaf Nuraini',
                'nik' => '99325797',
                'jabatan' => 'Tenaga Medis KCI Palmerah',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Risal S',
                'nik' => '96323920',
                'jabatan' => 'Tenaga Medis KCI Palmerah',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Lulu Dwi Septiani',
                'nik' => '00325710',
                'jabatan' => 'Tenaga Medis KCI Pasar Minggu',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Roza Bangkit',
                'nik' => '97325723',
                'jabatan' => 'Tenaga Medis KCI Pasar Minggu',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Intan Mutia Pandini',
                'nik' => '99325724',
                'jabatan' => 'Tenaga Medis KCI Pasar Minggu',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Aldi Romadon',
                'nik' => '97325721',
                'jabatan' => 'Tenaga Medis KCI Pondok Ranji',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Muhammad Dwi Fitriana',
                'nik' => '96325781',
                'jabatan' => 'Tenaga Medis KCI Pondok Ranji',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Rudini Dinta Santosa Putri',
                'nik' => '97323794',
                'jabatan' => 'Tenaga Medis KCI Rawa Buaya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Aenun Rahmayanti',
                'nik' => '20325894',
                'jabatan' => 'Tenaga Medis KCI Stasiun Maja',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Yulia Kartika Rahmawati',
                'nik' => '21325892',
                'jabatan' => 'Tenaga Medis KCI Stasiun Rawa Buaya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Sufi Maulana',
                'nik' => '99323898',
                'jabatan' => 'Tenaga Medis KCI Stasiun Rawa Buaya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Zahra Nurul Fadhilah',
                'nik' => '20337521',
                'jabatan' => 'Tenaga Medis KCI Stasiun Sudirman',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ufti Nurul Fazriyah',
                'nik' => '99325719',
                'jabatan' => 'Tenaga Medis KCI Sudimara',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Saefullah Fattah',
                'nik' => '21325774',
                'jabatan' => 'Tenaga Medis KCI Sudimara',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Mutiara Rahmadina',
                'nik' => '96325738',
                'jabatan' => 'Tenaga Medis KCI Sudirman',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Wita Mulyana Setiya',
                'nik' => '95325758',
                'jabatan' => 'Tenaga Medis KCI Sudirman',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ijlal Muzhaffar Ramadhan',
                'nik' => '21325772',
                'jabatan' => 'Tenaga Medis KCI Sudirman Baru',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Amelya Dwiastuti',
                'nik' => '97325788',
                'jabatan' => 'Tenaga Medis KCI Sudirman Baru',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Istinafiah Dwi Yunita',
                'nik' => '97325741',
                'jabatan' => 'Tenaga Medis KCI Tebet',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Yumci Ledya Putri',
                'nik' => '91324848',
                'jabatan' => 'Tenaga Medis KCI Tebet',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Badrina Alvi Fadilah',
                'nik' => '98325734',
                'jabatan' => 'Tenaga Medis KCITelaga Murni',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Nada Kamilia',
                'nik' => '98323711',
                'jabatan' => 'Tenaga Medis KCITelaga Murni',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Rosichan Anwar',
                'nik' => '98323808',
                'jabatan' => 'Tenaga Medis LRT Harja Mukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Indra Nugraha',
                'nik' => '20325908',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Cilegon',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Moh. Raihan Ramadhan',
                'nik' => '99325909',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Cilegon',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ardian Hafid Afidah BM',
                'nik' => '97324910',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Cilegon',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Fakih Mustawan',
                'nik' => '22325911',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Serang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Cecep Pahruroji',
                'nik' => '20325912',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Serang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Wine Frida',
                'nik' => '97324941',
                'jabatan' => 'Tenaga Medis Stasiun Sudimara',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Husna Gayo',
                'nik' => '20323942',
                'jabatan' => 'Apoteker Stasiun Bekasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Dika Wahyu Hidayatul Arif',
                'nik' => '95323901',
                'jabatan' => 'Tenaga Medis  LRT Cawang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Diana Nur Afni',
                'nik' => '98324824',
                'jabatan' => 'Tenaga Medis Kantor Klinik Bekasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Fikri Roniansyah',
                'nik' => '20325818',
                'jabatan' => 'Tenaga Medis LRT Cawang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Intan Navyta Syifa Kusniar',
                'nik' => '97323828',
                'jabatan' => 'Tenaga Medis LRT Cawang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Rafika Aulia',
                'nik' => '97325820',
                'jabatan' => 'Tenaga Medis LRT Cawang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Riska Adeyana',
                'nik' => '20325832',
                'jabatan' => 'Tenaga Medis LRT Cawang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Muhamad Rafli',
                'nik' => '20325830',
                'jabatan' => 'Tenaga Medis LRT Dukuh Atas',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Muhammad Fajarudin',
                'nik' => '99325831',
                'jabatan' => 'Tenaga Medis LRT Dukuh Atas',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Nurdian Widyasati Sulawan',
                'nik' => '97325827',
                'jabatan' => 'Tenaga Medis LRT Dukuh Atas',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Indah Karuniasari',
                'nik' => '93325815',
                'jabatan' => 'Tenaga Medis LRT Dukuh Atas ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Dela Damayanti',
                'nik' => '98323823',
                'jabatan' => 'Tenaga Medis LRT Harja Mukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Ibnu Humam',
                'nik' => '21325829',
                'jabatan' => 'Tenaga Medis LRT Harja Mukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Dita Reza Aditya',
                'nik' => '98325816',
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Amanda Putri',
                'nik' => '21325821',
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Shinta Ardiyanti',
                'nik' => '98325825',
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Faishal Ibrahim',
                'nik' => '99323890',
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Sekar Ella Pradita',
                'nik' => '98323813',
                'jabatan' => 'Tenaga Medis LRT Kantor Depo Bekasi (OCC)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Nurulita Dwi Rahayu',
                'nik' => '20325817',
                'jabatan' => 'Tenaga Medis LRT Kantor Depo Bekasi (OCC)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Dayu Agustina Dewi Pratiwi ',
                'nik' => '97323822',
                'jabatan' => 'Tenaga Medis LRT Kantor Depo Bekasi (OCC)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Eka Nining Purwanti',
                'nik' => '97323826',
                'jabatan' => 'Tenaga Medis LRT Kantor Depo Bekasi (OCC)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Muhamad Nur Rifqi Arfah',
                'nik' => '99325891',
                'jabatan' => 'Tenaga Medis LRT Kantor Klinik Bekasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Deswita Maharani',
                'nik' => '97325928',
                'jabatan' => 'Tenaga Medis LRT Pos Kesehatan Harjamukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Annisa Rahayu Wijayanti',
                'nik' => '21325897',
                'jabatan' => 'Tenaga Medis LRT Stasiun Harja Mukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Puma Lydia',
                'nik' => '20325915',
                'jabatan' => 'Tenaga Medis MRT ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan MRT'
            ],
            [
                'name' => 'dr. Fadhila Amaliah Ramadhani',
                'nik' => '96323925',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area BSD'
            ],
            [
                'name' => 'dr. Yulistia Nazlina Siregar',
                'nik' => '97313061',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area Medan'
            ],
            [
                'name' => 'dr. Desti Oki Lestari',
                'nik' => '97323922',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Derryl Setya Wibhianto',
                'nik' => '97328759',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mohamad Alif',
                'nik' => '92328807',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Diki Priyono',
                'nik' => '91328523',
                'jabatan' => 'Driver Ambulance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Ayip Muhamad Solehudin',
                'nik' => '98328613',
                'jabatan' => 'Driver Ambulance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Rifqi Zakiya Rahmani',
                'nik' => '95423880',
                'jabatan' => 'OHIH Specialist',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Wahyuningtyas Pamintasih',
                'nik' => '98323913',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Farah Yandika Sari',
                'nik' => '21325926',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Teguh Azhary',
                'nik' => '98323935',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Puspita Amalia Besari',
                'nik' => '93325936',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Bernadetta Miranti Debora',
                'nik' => '94323482',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Desy Kurnia Dewi',
                'nik' => '94324485',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Yudhistira',
                'nik' => '95323504',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Septyani Nevy Mega Nurastam',
                'nik' => '95324503',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Bernika Mutiara Sari',
                'nik' => '93325567',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Dwita Wulan Sari',
                'nik' => '87325568',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Muhammad Aden Reihan Mansyuruddin',
                'nik' => '97325572',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mardiul Kuswa',
                'nik' => '97325589',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Jehan Latifah',
                'nik' => '98325629',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Tita Dwi Lestari',
                'nik' => '97325636',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mega Rahma Dani',
                'nik' => '98323671',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Niki Erista Ayudia',
                'nik' => '90323500',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Nur Adilla',
                'nik' => '94323700',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Grace Irin Julianty Samosir',
                'nik' => '93323763',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Hendro Prasetyo',
                'nik' => '98325777',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Yeni Puspitasari',
                'nik' => '91325809',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Dita Apriani',
                'nik' => '21325852',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Derisa Irawan',
                'nik' => '20325853',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Giri Permana',
                'nik' => '89325854',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Soleha ',
                'nik' => '99325855',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Ervina Nur Afridza',
                'nik' => '99325856',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Rizky Baskoro Siregar',
                'nik' => '95325857',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Putri Balqis Natasyrah',
                'nik' => '99325861',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Fiqih Ibnu Ansyah',
                'nik' => '96325862',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Dinda Margarettha',
                'nik' => '21325863',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Vinandio Distya Pahlevi Thasa',
                'nik' => '99325864',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Faris Amar Luthfi',
                'nik' => '97325865',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Ahmad Ghifari',
                'nik' => '95325867',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Dian Setianingsih',
                'nik' => '92325869',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Rexby Silalahi',
                'nik' => '97325870',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Armitha Amalia',
                'nik' => '95325871',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mariah Oktafiani',
                'nik' => '99325872',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Aqsal Bayu Handoko',
                'nik' => '20325876',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Fitria Salsabilah',
                'nik' => '20325875',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Nur Fathhuddin Islami',
                'nik' => '97323874',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Ryza Hajiandika Tanjung',
                'nik' => '95323873',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Ilham Abdurrahman',
                'nik' => '98325883',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Rizki Candra Setiawan',
                'nik' => '95323799',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mimi Samiyah ',
                'nik' => '96325902',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Putri Aptalia Ayu',
                'nik' => '89325850',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan Telkom University Jakarta'
            ],
            [
                'name' => 'Yogi Hidayatulloh',
                'nik' => '96325847',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan Telkom University Jakarta'
            ],
            [
                'name' => 'Feri Iskandar',
                'nik' => '79325006',
                'jabatan' => 'Perawat Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Bogor'
            ],
            [
                'name' => 'Nemi Avrinah',
                'nik' => '81325763',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Bogor'
            ],
            [
                'name' => 'dr. Raina Syah Fanissa',
                'nik' => '97003578',
                'jabatan' => 'UBM (Unit Business Manager)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Bogor'
            ],
            [
                'name' => 'dr. Kurnia Fitra Hasana',
                'nik' => '93003558',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Depok'
            ],
            [
                'name' => 'dr. Asri Ani Nurchasanah',
                'nik' => '95323936',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Depok'
            ],
            [
                'name' => 'Sri Lestari',
                'nik' => '91325554',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Depok'
            ],
            [
                'name' => 'Hentyanthy',
                'nik' => '94003407',
                'jabatan' => 'Staff Administrasi ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Depok'
            ],
            [
                'name' => 'Kuratul Aini',
                'nik' => '76326002',
                'jabatan' => 'Staff Administrasi Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Depok'
            ],
            [
                'name' => 'dr. Nandika Larasati',
                'nik' => '94333494',
                'jabatan' => 'Deputy Regional Manager ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Fatimah Mayang Jingga',
                'nik' => '87223025',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Sarry Lesmawati',
                'nik' => '93018024',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Citra Tya Ambari',
                'nik' => '86023041',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Hartini',
                'nik' => '92433044',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Iyang',
                'nik' => '77018014',
                'jabatan' => 'Staff General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Siti Aminah',
                'nik' => '69127003',
                'jabatan' => 'Staff Sales',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Erliana Fatmawati',
                'nik' => '94323476',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Shanti Noormawanti',
                'nik' => '89127037',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Ulfa Nur Rahmah',
                'nik' => '95128004',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Merry Maryani',
                'nik' => '95135467',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Nur Asiyah',
                'nik' => '78127001',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Sifa Nuramalina',
                'nik' => '95128003',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Refina Fadiyah',
                'nik' => '99137505',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 3'
            ],
            [
                'name' => 'Moch. Ryzal Mulya Salam',
                'nik' => '91135473',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 3'
            ],
            [
                'name' => 'Mala Dzikra Rahmat Alawi',
                'nik' => '97335476',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 3'
            ],
            [
                'name' => 'Fitri Hasanah Agusti',
                'nik' => '96135066',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 3'
            ],
            [
                'name' => 'Yeni Sari Putri',
                'nik' => '92133498',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Bayu Aji Prastiyo',
                'nik' => '96133500',
                'jabatan' => 'Apoteker Pendamping',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Desi Arianti',
                'nik' => '76133501',
                'jabatan' => 'Apoteker Pendamping',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Arief Rachman',
                'nik' => '90127034',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Farida Putri Kartika Sari',
                'nik' => '92135471',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Nugroho Adhi',
                'nik' => '94335490',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Indah Tri Lestari',
                'nik' => '94133492',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Ranti Anggraeni',
                'nik' => '99135496',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Wulan Sari',
                'nik' => '00135499',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Chica Ryanti Koswara',
                'nik' => '20136509',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Devy Yolanda',
                'nik' => '98136506',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Dimas Maulana',
                'nik' => '99136507',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Harry Taufiq Kurniawan',
                'nik' => '96328020',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Lauren Melisa Natalin',
                'nik' => '85133502',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Agung Ismail Kustiawan',
                'nik' => '91324029',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Fendi Setiawan',
                'nik' => '86325030',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Risna Heryaman',
                'nik' => '87335052',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Sofiana Oktaviani',
                'nik' => '98335495',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Nadhifa Aufiyazzahra Nurani',
                'nik' => '98335080',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Amelia Julianti',
                'nik' => '00135503',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Ayu Krishna Widya Utami Dewi',
                'nik' => '97337528',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'dr. Adiah Destri ',
                'nik' => '61333074',
                'jabatan' => 'Dokter Penanggung Jawab ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Anisa Fitria Rahayu',
                'nik' => '95333058',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Dedih Ramdhan Budiman',
                'nik' => '91335059',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Mutiari Nurlaeli Safitri',
                'nik' => '94333045',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Evi Novitasari',
                'nik' => '93333049',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Devia Liana',
                'nik' => '96337050',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Irjuni Susanti',
                'nik' => '72127043',
                'jabatan' => 'Staff Administrasi Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Dessy Susylawaty',
                'nik' => '86323022',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC UNIKOM'
            ],
            [
                'name' => 'Magdalena Nani Sudarni',
                'nik' => '81227011',
                'jabatan' => 'Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Aprilia Setiawati',
                'nik' => '90225030',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Uus Husnul Huluk',
                'nik' => '82223022',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Nurul Hasanah Fitriani',
                'nik' => '92235015',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Putri Sutaatmaja',
                'nik' => '97235482',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Silmi Astriami',
                'nik' => '89225053',
                'jabatan' => 'Analis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Talitha Ayu Puspitasari',
                'nik' => '97236504',
                'jabatan' => 'Analis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Rina Apriani Sundari',
                'nik' => '88325023',
                'jabatan' => 'Bidan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'dr. Susanna Maria Susianna, Sp.PK.',
                'nik' => '64232012',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'dr. Budianto, Sp.Rad.',
                'nik' => '64232013',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'dr. Pratiwi Yuliandari, Sp.M, ',
                'nik' => '66333474',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'dr. Fathya Nabila Gifani',
                'nik' => '96333531',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'dr. Nove Esra Tara varelisa Br. Pardede',
                'nik' => '95337512',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Jaka Priatna Nova',
                'nik' => '85225009',
                'jabatan' => 'Penanggung Jawab Administrasi dan Layanan Non Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Anastasia Pradina F.T',
                'nik' => '91223009',
                'jabatan' => 'Penanggung Jawab Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Hashifah',
                'nik' => '95335048',
                'jabatan' => 'Perawat Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Lestary Pebryanti Nuryatin',
                'nik' => '95335530',
                'jabatan' => 'Perawat Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Yohana Ayuanditha',
                'nik' => '96333078',
                'jabatan' => 'Perawat Homecare',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Wini Adawiyah',
                'nik' => '89325001',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Mirna Setia Djuhar Ningsih',
                'nik' => '82228018',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Suhandi',
                'nik' => '93238484',
                'jabatan' => 'Staff Administrasi Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Veni Andrianti Susangki',
                'nik' => '90323019',
                'jabatan' => 'Staff Administrasi THC Sentot Alibasyah',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Rizka Andriyani Pratiwi',
                'nik' => '96337051',
                'jabatan' => 'Staff Administrasi THC Sentot Alibasyah',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Nisa Rodiyatul Alawiyah',
                'nik' => '98333497',
                'jabatan' => 'Staff Administrasi THC Sentot Alibasyah',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Galuh Yulianita Hardyaning Pangestu',
                'nik' => '97335081',
                'jabatan' => 'Tenaga Medis KCI Rancaekek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Meitalia Puspasari',
                'nik' => '99335082',
                'jabatan' => 'Tenaga Medis KCI Rancaekek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Vamaura Ashabil Denisya',
                'nik' => '20335083',
                'jabatan' => 'Tenaga Medis KCI Rancaekek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Dede Ahmad Rizky',
                'nik' => '98337527',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Cicalengka',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Feby Febrianto Valen',
                'nik' => '98337526',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Cicalengka',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Eva Sovia Anaziah',
                'nik' => '89225008',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Buah Batu'
            ],
            [
                'name' => 'Hendra Mandhara',
                'nik' => '87003432',
                'jabatan' => 'Regional Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'Laras Budhi Nurani',
                'nik' => '21443076',
                'jabatan' => 'Account Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'dr. Hanum Maftukha Ahda',
                'nik' => '95342045',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'Pratiknyo',
                'nik' => '72126010',
                'jabatan' => 'Staff Administrasi Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'Shaffi Zahrotul Mawaddah',
                'nik' => '99443069',
                'jabatan' => 'Staff Finance & Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'Pujianto',
                'nik' => '78248025',
                'jabatan' => 'Staff Logistic',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'Nur Wahyuni',
                'nik' => '83323005',
                'jabatan' => 'Staff Sales',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Tengah & DIY'
            ],
            [
                'name' => 'Voni Cahyo Mintari',
                'nik' => '78127019',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 10'
            ],
            [
                'name' => 'Lisa Paramitha',
                'nik' => '97143039',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 10'
            ],
            [
                'name' => 'Alfiyah',
                'nik' => '74126009',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 10'
            ],
            [
                'name' => 'Rufi Andar Yekti',
                'nik' => '91143009',
                'jabatan' => 'Supervisor Operation Service ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 10'
            ],
            [
                'name' => 'Dewi Puspita Ekasari',
                'nik' => '81328006',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 22'
            ],
            [
                'name' => 'Lia Setiawati',
                'nik' => '89328007',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 22'
            ],
            [
                'name' => 'Eriana Septinawaty',
                'nik' => '88225042',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Semarang'
            ],
            [
                'name' => 'Dhias Ariyani Sukamto',
                'nik' => '90345054',
                'jabatan' => 'Analis Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Semarang'
            ],
            [
                'name' => 'Sabrina Ully Septiani',
                'nik' => '88225035',
                'jabatan' => 'Analis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Semarang'
            ],
            [
                'name' => 'Dyah Puji Astuti',
                'nik' => '80225041',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Semarang'
            ],
            [
                'name' => 'Nanik Tris Silawati',
                'nik' => '78225047',
                'jabatan' => 'Staff Administrasi Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Semarang'
            ],
            [
                'name' => 'Erma Margaretha Komiter',
                'nik' => '99343063',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC P3K Hotel Royal Ambarukmo'
            ],
            [
                'name' => 'dr. Arifianto',
                'nik' => '72343052',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC PT Santosa Jaya Abadi'
            ],
            [
                'name' => 'Suyudi Wiranata ',
                'nik' => '96345051',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC PT Santosa Jaya Abadi'
            ],
            [
                'name' => 'Fitrianti',
                'nik' => '95345049',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC PT Santosa Jaya Abadi'
            ],
            [
                'name' => 'Hannindita Dwi Romadhoni',
                'nik' => '98345080',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC PT Santosa Jaya Abadi'
            ],
            [
                'name' => 'dr. Chahyo Priambodo, ',
                'nik' => '91342019',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Purwokerto'
            ],
            [
                'name' => 'Rundi Winarni',
                'nik' => '83345017',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Purwokerto'
            ],
            [
                'name' => 'Puspa Pertiwi',
                'nik' => '98345053',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'Risky Prawita Sari',
                'nik' => '93345015',
                'jabatan' => 'Bidan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'Fita Sutanti',
                'nik' => '82325008',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'Ifan Gunawan',
                'nik' => '95345040',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'dr. Nunul Kristianti',
                'nik' => '72343001',
                'jabatan' => 'Quality Qontrol',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'Fitriana Nur Ika',
                'nik' => '86323004',
                'jabatan' => 'Staff Administrasi Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'dr. Muji Rahayu, M.si,. Med,. Sp.PK',
                'nik' => '70232037',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Health Center Semarang'
            ],
            [
                'name' => 'dr. Farah Hendara Ningrum,  Sp.Rad.',
                'nik' => '78243014',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Health Center Semarang'
            ],
            [
                'name' => 'dr. Ika Kartiyani, Sp.PD',
                'nik' => '84342061',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Health Center Semarang'
            ],
            [
                'name' => 'dr. Laela Apriliana',
                'nik' => '93343047',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Health Center Semarang'
            ],
            [
                'name' => 'Pawitro Eko Prasetio',
                'nik' => '88445013',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Health Center Semarang'
            ],
            [
                'name' => 'Rizki Aldila Oktavia Putri',
                'nik' => '91345022',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Health Center Semarang'
            ],
            [
                'name' => 'Vina Ayu Fitriani',
                'nik' => '99345074',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Semarang'
            ],
            [
                'name' => 'Muhamad Iqbal Nur',
                'nik' => '99345055',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Novia Dwi Nugrahani',
                'nik' => '98345056',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ganang Muh Shohib',
                'nik' => '99343057',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Rizert Thomas',
                'nik' => '97345064',
                'jabatan' => 'Tenaga Medis KCI Purwosari',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Sri Jati Permata Putri',
                'nik' => '97345066',
                'jabatan' => 'Tenaga Medis KCI Purwosari',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Afifudin Ibrahim',
                'nik' => '99345065',
                'jabatan' => 'Tenaga Medis KCI Purwosari',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Novia Ariani ',
                'nik' => '99343077',
                'jabatan' => 'Tenaga Medis KCI Stasiun Solo Jebres',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Adjeng Pradita Sari',
                'nik' => '99343078',
                'jabatan' => 'Tenaga Medis KCI Stasiun Solo Jebres',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Yenni Aulia Lestari',
                'nik' => '22345079',
                'jabatan' => 'Tenaga Medis KCI Stasiun Solo Jebres',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Falah Tinton Firdaus',
                'nik' => '99345070',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Palur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Titis Dwi Lestariningsih',
                'nik' => '21345071',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Palur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Elvana Deanovisa',
                'nik' => '22345072',
                'jabatan' => 'Tenaga Medis Pos Kesehatan KCI Stasiun Palur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Rahmilia Indri Hapsari',
                'nik' => '93443073',
                'jabatan' => 'Regional Manager Jawa Timur & Bali Nusra',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Yudha Pratama Andriansah',
                'nik' => '89325027',
                'jabatan' => 'Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Gibral Thoriqa Ibrahim',
                'nik' => '95453110',
                'jabatan' => 'Staff Account Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Austin',
                'nik' => '79123005',
                'jabatan' => 'Staff Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Iin Wahyu Oktavani',
                'nik' => '86453039',
                'jabatan' => 'Supervisor Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Anita Sintia Debby ',
                'nik' => '88153043',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 17'
            ],
            [
                'name' => 'Ririn Wijayanti',
                'nik' => '81155032',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 17'
            ],
            [
                'name' => 'Tirani Wulan Sari',
                'nik' => '92153082',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 18'
            ],
            [
                'name' => 'Susi Wijayanti',
                'nik' => '78323019',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 18'
            ],
            [
                'name' => 'Meilisa Indrawati',
                'nik' => '89123002',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 4'
            ],
            [
                'name' => 'Fani Pratiwi',
                'nik' => '90127016',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 4'
            ],
            [
                'name' => 'Zendy Dewanti Mutiarasari',
                'nik' => '87127013',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 4'
            ],
            [
                'name' => 'Lestari Agustina',
                'nik' => '87127012',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 4'
            ],
            [
                'name' => 'Thita Agitapradini',
                'nik' => '96155081',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 4'
            ],
            [
                'name' => 'Supriadi',
                'nik' => '78129004',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 4'
            ],
            [
                'name' => 'Jeniver Rany Chlaudia Awombo',
                'nik' => '96153101',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma Kembang Kuning'
            ],
            [
                'name' => 'Gufron',
                'nik' => '80129006',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma Kembang Kuning'
            ],
            [
                'name' => 'Ni Made Riza Angelita Monica Samba',
                'nik' => '98153111',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Denpasar'
            ],
            [
                'name' => 'I Gusti Agung Candra Adhikarana',
                'nik' => '99155073',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Denpasar'
            ],
            [
                'name' => 'Ni Ketut Estiani',
                'nik' => '92127018',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Denpasar'
            ],
            [
                'name' => 'Cindy Khartikasari',
                'nik' => '96254075',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Alifia Khusmayani',
                'nik' => '97325684',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Ayu Indah Puspitasari',
                'nik' => '99354114',
                'jabatan' => 'Analis Kesehatan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'drg. Lidya Permata Ningtyas',
                'nik' => '95352097',
                'jabatan' => 'Dokter Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'dr. Zulkarnain, Sp.PK',
                'nik' => '67353042',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'dr. Ni Putu Lucke Savitri Maharani, SpPD ',
                'nik' => '85352102',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'dr. Dyah Eka Kartika',
                'nik' => '92353070',
                'jabatan' => 'Dokter Penanggung Jawab Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'dr. Charles Wangsadjaja, Sp. Rad(K)',
                'nik' => '84352127',
                'jabatan' => 'Dokter Spesialis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'dr. Ike Setiowati',
                'nik' => '88353102',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Anjeliya Anggrala Kirana',
                'nik' => '21353129',
                'jabatan' => 'Front Office',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Wahlul Noval Husaeni',
                'nik' => '22355128',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Ajeng Puspaningtyas',
                'nik' => '90354105',
                'jabatan' => 'Radiografer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Nur Rimba Parwati Sacharini',
                'nik' => '97354109',
                'jabatan' => 'Radiografer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Wahyu Dwi Jayanti',
                'nik' => '20353129',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Puput Candra Ningtyas',
                'nik' => '21353125',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Suprapto',
                'nik' => '95355119',
                'jabatan' => 'Tenaga Medis KCI Stasiun Bojonegoro',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Siti Nur Alisa',
                'nik' => '20353120',
                'jabatan' => 'Tenaga Medis KCI Stasiun Bojonegoro',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Diva Ika Noviani',
                'nik' => '99353121',
                'jabatan' => 'Tenaga Medis KCI Stasiun Bojonegoro',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Muhammad David Saputro',
                'nik' => '98355116',
                'jabatan' => 'Tenaga Medis KCI Stasiun Jombang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Arif Wibowo',
                'nik' => '92355117',
                'jabatan' => 'Tenaga Medis KCI Stasiun Jombang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Ainur Rohmawati',
                'nik' => '91353118',
                'jabatan' => 'Tenaga Medis KCI Stasiun Jombang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Yustika Amalia',
                'nik' => '99353122',
                'jabatan' => 'Tenaga Medis KCI Stasiun Tulungagung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Della Kurnia Fauziah',
                'nik' => '99353123',
                'jabatan' => 'Tenaga Medis KCI Stasiun Tulungagung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'Aditya Chrisna Pratama',
                'nik' => '97355124',
                'jabatan' => 'Tenaga Medis KCI Stasiun Tulungagung',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan KCI'
            ],
            [
                'name' => 'dr. Orin Tasha Ryani Putri',
                'nik' => '99353115',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area Surabaya'
            ],
            [
                'name' => 'dr. Thyra Mega Vitasari',
                'nik' => '93353113',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Madiun'
            ],
            [
                'name' => 'Angga Handayani',
                'nik' => '95355046',
                'jabatan' => 'Penanggung Jawab Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Madiun'
            ],
            [
                'name' => 'M. Kun Nur Fatannafi',
                'nik' => '96253091',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Madiun'
            ],
            [
                'name' => 'Helvy Anitasari',
                'nik' => '96355072',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Malang'
            ],
            [
                'name' => 'dr. David Rajawali Yusuf',
                'nik' => '95353112',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Malang'
            ],
            [
                'name' => 'Mega Ayu Eva Kurniasari',
                'nik' => '92353125',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Malang'
            ],
            [
                'name' => 'Mardiana Riska Wulandari',
                'nik' => '89323023',
                'jabatan' => 'UBM (Unit Business Manager)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Malang'
            ],
            [
                'name' => 'Haryanto Suryadi',
                'nik' => '89323009',
                'jabatan' => 'Regional Manager ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Kalimantan'
            ],
            [
                'name' => 'Muhammad Ilham Redhani',
                'nik' => '96465002',
                'jabatan' => 'AM Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Kalimantan'
            ],
            [
                'name' => 'Adisti Rahmatiasari',
                'nik' => '99473062',
                'jabatan' => 'Staff Finance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Kalimantan'
            ],
            [
                'name' => 'Hadijah',
                'nik' => '95178028',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 24'
            ],
            [
                'name' => 'Norma Yoga Hastuti',
                'nik' => '88173027',
                'jabatan' => 'UBR (Unit Business Representative)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 24'
            ],
            [
                'name' => 'Annisa Nurul Fadhilla',
                'nik' => '21373065',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Banjarmasin'
            ],
            [
                'name' => 'Ayu Metasari BR PA',
                'nik' => '98373042',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika Banjarmasin'
            ],
            [
                'name' => 'Shela Putri Nabila',
                'nik' => '97373037',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika Banjarmasin'
            ],
            [
                'name' => 'Gazali Rahman ',
                'nik' => '213366001',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Banjarmasin'
            ],
            [
                'name' => 'dr. Muthia Anggraeni',
                'nik' => '93373036',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika Banjarmasin'
            ],
            [
                'name' => 'Muhammad Rahmatillah',
                'nik' => '96373045',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika Banjarmasin'
            ],
            [
                'name' => 'Nida Nurjannah',
                'nik' => '99375044',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika Banjarmasin'
            ],
            [
                'name' => 'Adam Damiri',
                'nik' => '22366002',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'PT. Nippon Indosari Corpindo,tbk'
            ],
            [
                'name' => 'Edy Agung Mulyono',
                'nik' => '83473058',
                'jabatan' => 'Regional Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'Sultan Radhi',
                'nik' => '90323002',
                'jabatan' => 'Junior Supervisor Finance & General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'Putri Handayani',
                'nik' => '96328008',
                'jabatan' => 'Junior Supervisor Sales',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'dr. Andi Fitria Aziz',
                'nik' => '88373032',
                'jabatan' => 'Supervisor Operation Service Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'Santi Raodah',
                'nik' => '74127024',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma'
            ],
            [
                'name' => 'Burhanuddin',
                'nik' => '73128009',
                'jabatan' => 'Staff Administrasi Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma'
            ],
            [
                'name' => 'Nurhidayah',
                'nik' => '84123008',
                'jabatan' => 'UBM (Unit Business Manager)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma'
            ],
            [
                'name' => 'Yunita Anastasya Pratama Damopoli',
                'nik' => '98173060',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Manado'
            ],
            [
                'name' => 'Deby Nataly Mongi',
                'nik' => '79323015',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Manado'
            ],
            [
                'name' => 'Irfandi',
                'nik' => '86225027',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
            ],
            [
                'name' => 'Bachtiar Rifai',
                'nik' => '83325001',
                'jabatan' => 'Analis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
            ],
            [
                'name' => 'dr. Irmayanti., Sp.Pk',
                'nik' => '82372033',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
            ],
            [
                'name' => 'Siswana Asis',
                'nik' => '90323030',
                'jabatan' => 'Staff Administrasi Laboratorium',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
            ],
            [
                'name' => 'Herlina',
                'nik' => '82225014',
                'jabatan' => 'UBM (Unit Business Manager)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
            ],
            [
                'name' => 'dr. Hasmyati Nur Gommo, ',
                'nik' => '67372014',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Manado'
            ],
            [
                'name' => 'dr. Nataly Christi Mait',
                'nik' => '74373053',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Manado'
            ],
            [
                'name' => 'Suzana Patreysia Wuysang',
                'nik' => '76128019',
                'jabatan' => 'Staff Administrasi Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Manado'
            ],
            [
                'name' => 'dr. Meutia Faradibah',
                'nik' => '95373066',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area Makassar'
            ],
            [
                'name' => 'Miftahul Fadli',
                'nik' => '98373063',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Santy La Ananila',
                'nik' => '91323005',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Nur Hadianty Tajuddin',
                'nik' => '96375048',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Agha Izha Fahiza',
                'nik' => '99375050',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'dr. Taufiqqulhidayat Ande, Sp.Rad',
                'nik' => '68272061',
                'jabatan' => 'Dokter Penanggung Jawab Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Al Amin',
                'nik' => '90323006',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Dewi Musfita Sari',
                'nik' => '92325007',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Muthia Permana Irwan',
                'nik' => '97374020',
                'jabatan' => 'Staff Administrasi Klinik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Poniman',
                'nik' => '89138483',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
            ],
            [
                'name' => 'Bambang Nugraha',
                'nik' => '89238485',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Jamaluddin',
                'nik' => '81358054',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Malang'
            ],
            [
                'name' => 'Teguh Kukuh Birowo Heriyanto',
                'nik' => '56418032',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Heri ',
                'nik' => '84338486',
                'jabatan' => 'Driver Ambulance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Erda Garlida',
                'nik' => '66333487',
                'jabatan' => 'Driver Ambulance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Nurudin',
                'nik' => '84008458',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Junia Anggraini',
                'nik' => '96008459',
                'jabatan' => 'Office Girl',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Mochamad Junianto',
                'nik' => '96328527',
                'jabatan' => 'Office Boy',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Burhanudin',
                'nik' => '72008484',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Yohanes Ponio',
                'nik' => '63008047',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Wahyudin',
                'nik' => '74008537',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Echen Maulana ',
                'nik' => '80009561',
                'jabatan' => 'Driver BOD',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Purwanto',
                'nik' => '81328640',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Siti Chairani Manurung',
                'nik' => 'TLH100401',
                'jabatan' => 'Freelance Admin Marketing',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Sumatera'
            ],
            [
                'name' => 'Betrix ',
                'nik' => 'TLH100302',
                'jabatan' => 'Admin Hasil',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'Hamidah Rizki ',
                'nik' => 'TLH100303',
                'jabatan' => 'Admin Hasil',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Medan'
            ],
            [
                'name' => 'Dr. Aditia Kelvianto',
                'nik' => 'TLH100305',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Medan'
            ],
            [
                'name' => 'Dr. Rani Pratama Putri',
                'nik' => 'TLH100306',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Lampung'
            ],
            [
                'name' => 'Winda Reza',
                'nik' => 'TLH100108',
                'jabatan' => 'Admin Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 13'
            ],
            [
                'name' => 'Syafitri',
                'nik' => 'TLH100109',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 13'
            ],
            [
                'name' => 'Kistono',
                'nik' => 'TLH200301',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Taslim Asnaksi',
                'nik' => 'TLH200302',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Depok'
            ],
            [
                'name' => 'Irma Dewi',
                'nik' => 'TLH300301',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Saepudin Sutisna',
                'nik' => 'TLH300302',
                'jabatan' => 'Office Boy',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Tanti Nugrahati',
                'nik' => 'TLH300303',
                'jabatan' => 'Bidan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Telkom University'
            ],
            [
                'name' => 'Ahmad Wildan',
                'nik' => 'TLH300104',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 2'
            ],
            [
                'name' => 'Robbi Jimmy C',
                'nik' => 'TLH300305',
                'jabatan' => 'Office Boy',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Sentot'
            ],
            [
                'name' => 'Restin Widiana',
                'nik' => 'TLH300306',
                'jabatan' => 'Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Fisioterapi Sentot Alibasyah'
            ],
            [
                'name' => 'Dadang Haerudin',
                'nik' => 'TLH300407',
                'jabatan' => 'Driver',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Barat'
            ],
            [
                'name' => 'Purwanto',
                'nik' => 'TLH400301',
                'jabatan' => 'OB',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Yogyakarta'
            ],
            [
                'name' => 'Herdiansyah Andrianto',
                'nik' => 'TLH500401',
                'jabatan' => 'Cleaning Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Tiara Puspita Anggraeni',
                'nik' => 'TLH500402',
                'jabatan' => 'Administrasi Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Nimas Ayu Lestari',
                'nik' => 'TLH500107',
                'jabatan' => 'Staf Pelayanan Apotek',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma Kembang Kuning'
            ],
            [
                'name' => 'Nurul Komariyah',
                'nik' => 'TLH500108',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma Kembang Kuning'
            ],
            [
                'name' => 'Anggie Puspita Anggraini',
                'nik' => 'TLH500309',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area Surabaya'
            ],
            [
                'name' => 'Desak Made Tariani',
                'nik' => 'TLH500113',
                'jabatan' => 'Cleaning Service',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika Denpasar'
            ],
            [
                'name' => 'Muhlisah Rahmat',
                'nik' => 'TLH700301',
                'jabatan' => 'Officer Finance',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'Rahmat Ikramullah',
                'nik' => 'TLH700303',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Amriadi Azis',
                'nik' => 'TLH700304',
                'jabatan' => 'Perawat Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'NUR LATIFAH N',
                'nik' => 'TLH700205',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
            ],
            [
                'name' => 'Alexander Edwin',
                'nik' => 'TLH700306',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Ridwan Bethan',
                'nik' => 'TLH700307',
                'jabatan' => 'Kurir',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'Siti Fatimah',
                'nik' => 'TLH700108',
                'jabatan' => 'Admin',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Makassar'
            ],
            [
                'name' => 'dr. Terence Alexander Wangko',
                'nik' => 'TLH700309',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Manado'
            ],
            [
                'name' => 'drg. Randa Syafitra Mokoginta',
                'nik' => 'TLH700310',
                'jabatan' => 'Dokter Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Manado'
            ]
        ];

        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}
