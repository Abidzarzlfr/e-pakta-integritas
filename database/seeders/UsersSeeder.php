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
                'name' => 'Admin',
                'nik' => '112233',
                'jabatan' => 'Admin',
                'role' => 'admin',
                'upload_status' => 'n',
                'password' => bcrypt("Adminepakta@2024#!"),
                'unit_kerja' => 'IT'
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
                'name' => 'dr. Monica Morratha Sihombing, MM ',
                'nik' => '77002422',
                'jabatan' => 'Direktur',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Management'
            ],
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
                'name' => 'dr. Restu Aritonang, MMRS',
                'nik' => '83002632',
                'jabatan' => 'Assistant Manager Layanan Medis',
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
                'name' => 'dr. Diona Ossy Wahyuni',
                'nik' => '97003629',
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
                'name' => 'dr. Verty Ratna Monika',
                'nik' => '97003621',
                'jabatan' => 'Officer Operasional Klinik',
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
                'name' => 'dr. Attika Dini Ardiana',
                'nik' => '92003649',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
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
                'name' => 'dr. Radite Nusasenjaya, MKK, SPOK',
                'nik' => '75002598',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Service Delivery'
            ],
            [
                'name' => 'Kartika Yufi Arumning Melati',
                'nik' => '93003036',
                'jabatan' => 'PJ. Manager Human Capital Operation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Operation'
            ],
            [
                'name' => 'Yogi Suryo Nugroho',
                'nik' => '88003597',
                'jabatan' => 'Officer Compensation & Benefit',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Operation'
            ],
            [
                'name' => 'Fety Fatma Rahmadhani',
                'nik' => '95003374',
                'jabatan' => 'Staff Human Capital Administration',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Human Capital Operation'
            ],
            [
                'name' => 'Afifah Zuhriyyah',
                'nik' => '5552',
                'jabatan' => 'Staff General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership & Procurement'
            ],
            [
                'name' => 'Cindy Widya Pratiwi',
                'nik' => '86003641',
                'jabatan' => 'Assistant Manager Talent Acquisition and Development',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'HC Strategic & Development'
            ],
            [
                'name' => 'Samuel Silitonga',
                'nik' => '84002644',
                'jabatan' => 'General Manager Business Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Business Support'
            ],
            [
                'name' => 'Fadjri Irfan Rusdian',
                'nik' => '86003589',
                'jabatan' => 'Staff Partnership',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership & Procurement'
            ],
            [
                'name' => 'Rizky Maula',
                'nik' => '94003612',
                'jabatan' => 'PJ. Manager Partnership & Procurement',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership & Procurement'
            ],
            [
                'name' => 'Divandra Flory Aisya Efendi',
                'nik' => '22003628',
                'jabatan' => 'Staff Partnership',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership & Procurement'
            ],
            [
                'name' => 'Amar Abdullah',
                'nik' => '99003547',
                'jabatan' => 'Staff General Affair',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Partnership & Procurement'
            ],
            [
                'name' => 'Rifda Adila',
                'nik' => '99003610',
                'jabatan' => 'Staff Recruitment',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'HC Strategic & Development'
            ],
            [
                'name' => 'Kusto',
                'nik' => '91005527',
                'jabatan' => 'Specialis Product Management',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
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
                'name' => 'Niken Diah Arini',
                'nik' => '91058011',
                'jabatan' => 'Account Solution',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of Account Solution'
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
                'name' => 'dr. Putu Dayanthy Jawan Sampelan',
                'nik' => '94003627',
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
                'jabatan' => 'Account Solution',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of Account Solution'
            ],
            [
                'name' => 'Sumarni',
                'nik' => '91003414',
                'jabatan' => 'Officer Business Solution',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'dr. Claudia Clara Samantha',
                'nik' => '94323882',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'Feri Hadianto',
                'nik' => '80023028',
                'jabatan' => 'PJ Deputy General Manager Captive Management & Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Captive Management & Delivery'
            ],
            [
                'name' => 'Yulinda Alva Eka Pratiwi',
                'nik' => '90125055',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'dr. Laras Asia Cheria',
                'nik' => '92003554',
                'jabatan' => 'Officer Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'Rengga Indarta Pratama',
                'nik' => '88023037',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'Clara Ayu Rivayanti',
                'nik' => '95003488',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'Anggi Dwi Prasetyo',
                'nik' => '99003566',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
            ],
            [
                'name' => 'Nelawati Airunnisah',
                'nik' => '96003572',
                'jabatan' => 'Staff Service Delivery',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Solution & Delivery'
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
                'jabatan' => 'Staff Corporate Secretary & Communication',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Secretary & Communication'
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
                'name' => 'Didik Jumanto',
                'nik' => '90003642',
                'jabatan' => 'AM National',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Planning'
            ],
            [
                'name' => 'Abidzar Zulfa Arifa Kusyono',
                'nik' => '21003645',
                'jabatan' => 'Officer IT Development',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IT & Digital Service'
            ],
            [
                'name' => 'Syarifuddin Fajri',
                'nik' => '99423900',
                'jabatan' => 'Staff Administrasi Support',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Secretary & Communication'
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
                'name' => 'Hasna Zerlina Pusparani',
                'nik' => '99005515',
                'jabatan' => 'Staff Corporate Secretary & Communication',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Corporate Secretary & Communication'
            ],
            [
                'name' => 'Nana Irmanto',
                'nik' => '20003648',
                'jabatan' => 'Staff IT & Digital Services',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
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
                'name' => 'Sapta Lukman Nur Hakim ',
                'nik' => '84003630',
                'jabatan' => 'Manager Accounting & Budgeting ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Accounting & Budgeting'
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
                'name' => 'Mohammad Farhansyah Panduwibowo',
                'nik' => '20003633',
                'jabatan' => 'Staff Accounting',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Accounting & Budgeting'
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
                'name' => 'William Kanggo',
                'nik' => '91003647',
                'jabatan' => 'HC Strategic & Development Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'dr. Marco Ariono Nainggolan, SpKO',
                'nik' => '89322945',
                'jabatan' => 'Spesialis Kedokteran dan Olahraga',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Dede Kurniati',
                'nik' => '83002646',
                'jabatan' => 'Manager Keperawatan',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
            ],
            [
                'name' => 'Novia Ayu Citra Fadina',
                'nik' => '95003637',
                'jabatan' => 'AM National',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Marketing & Sales'
            ],
            [
                'name' => 'Nopi Candra S',
                'nik' => '84005363',
                'jabatan' => 'AM National',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group Of National AM'
            ],
            [
                'name' => 'Achmad Fauzi',
                'nik' => '96003491',
                'jabatan' => 'AM National',
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
                'name' => 'Fitri Agustiningrum',
                'nik' => '80005643',
                'jabatan' => 'AM National',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Group of National AM'
            ],
            [
                'name' => 'Muhammad Zein Miraj',
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
                'name' => 'Herwandy W. Patongai',
                'nik' => '82023017',
                'jabatan' => 'Senior Advisor',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Senior Advisor'
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
                'jabatan' => 'Staff Administrasi',
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
                'name' => 'Roby Azzam Latif',
                'nik' => '98125697',
                'jabatan' => 'Asisten Apoteker',
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
                'nik' => '325597',
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
                'name' => 'Ricky Andreas S Hutagalung',
                'nik' => '82003585',
                'jabatan' => 'Regional Manager Jakarta II',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Nisfah Narda Adimar',
                'nik' => '98323896',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Ditta Sagita Prameswara',
                'nik' => '85426942',
                'jabatan' => 'AM Regional',
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
                'name' => 'Wulan Suci Ramadhia ',
                'nik' => '22423936',
                'jabatan' => 'Sraff Finance & Support',
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
                'name' => 'M. Rizq Ariq Athariq R',
                'nik' => '99423943',
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
                'name' => 'Haryanto Suryadi',
                'nik' => '89323009',
                'jabatan' => 'Regional Manager Jakarta I',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jakarta'
            ],
            [
                'name' => 'Herry Priyanto',
                'nik' => '78025037',
                'jabatan' => 'Sales Referral',
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
                'jabatan' => 'Koordinator Unit Bisnis ',
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
                'name' => 'Cindarwati',
                'nik' => '83323949',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika BSD'
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
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Sigma'
            ],
            [
                'name' => 'dr. Mellisa, Sp.PD',
                'nik' => '84322953',
                'jabatan' => 'Dokter Spesialis Dalam',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center'
            ],
            [
                'name' => 'Eriana Septinawaty',
                'nik' => '88225042',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
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
                'name' => 'dr. Asri Ani Nurchasanah',
                'nik' => '95323936',
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
                'jabatan' => 'Koordinator Unit Bisnis ',
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
                'name' => 'dr. Ade Rahmawati, Sp.PD',
                'nik' => '88322955',
                'jabatan' => 'Dokter Spesialis Penyakit Dalam',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'Gea Fitriani Effendi',
                'nik' => '96005509',
                'jabatan' => 'Staff Administrasi Klinik',
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
                'name' => 'Melani Lesnussa',
                'nik' => '94323484',
                'jabatan' => 'Koordinator MCU',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Percetakan Negara'
            ],
            [
                'name' => 'dr. Erpina Valentina',
                'nik' => '96003638',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Monica Bunga Depazzi',
                'nik' => '96325930',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Esmeralda Lasmaria',
                'nik' => '99323940',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Supriyati Sinaga',
                'nik' => '86305397',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Dyah Ayu Mulyapatmasari',
                'nik' => '97323803',
                'jabatan' => 'Apoteker Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Weti Restiana',
                'nik' => '96123598',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'dr. Modest Ndemas',
                'nik' => '95003557',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'dr. Muhammad Irfan Ata Ul Awal',
                'nik' => '98003623',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Monafita Lelyana',
                'nik' => '79003356',
                'jabatan' => 'Perawat ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Devi Suhendar',
                'nik' => '98325749',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Poppy Nurul Affifah',
                'nik' => '23325895',
                'jabatan' => 'Radiografer',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Rizka Ramdana Febriani',
                'nik' => '95325923',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Iriza Eraswati',
                'nik' => '91325932',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Selva Mahlinasha Arindani',
                'nik' => '99323966',
                'jabatan' => 'Ahli Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
            ],
            [
                'name' => 'dr. Maryam, Sp. GK',
                'nik' => '99322973',
                'jabatan' => 'Spesialis Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama THC Telkom Landmark Tower'
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
                'jabatan' => 'Tenaga Medis LRT Cawang',
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
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Deswita Maharani',
                'nik' => '97325928',
                'jabatan' => 'Tenaga Medis LRT Harjamukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Annisa Rahayu Wijayanti',
                'nik' => '21325897',
                'jabatan' => 'Tenaga Medis LRT Harjamukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Mutiara Rahmadina',
                'nik' => '96325959',
                'jabatan' => 'Tenaga Medis LRT Kantor Depo Bekasi (OCC)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Yumci Ledya Putri',
                'nik' => '91323960',
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Renti Nasmawati',
                'nik' => '96324963',
                'jabatan' => 'Tenaga Medis LRT Dukuh Atas ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Syalsa Bella Nadia Aiko Ardana',
                'nik' => '21325965',
                'jabatan' => 'Tenaga Medis LRT Dukuh Atas ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Wita Mulyana Setiya',
                'nik' => '95325962',
                'jabatan' => 'Tenaga Medis LRT Cawang',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Zahra Nurul Fadhilah',
                'nik' => '20325961',
                'jabatan' => 'Tenaga Medis LRT Harjamukti',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Saufia Amira',
                'nik' => '94323958',
                'jabatan' => 'Apoteker LRT Kantor Depo Bekasi (OCC)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Muhammad Ihsan Taufik',
                'nik' => '96325964',
                'jabatan' => 'Tenaga Medis LRT Jati Mulya',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan LRT'
            ],
            [
                'name' => 'Etika Agnes Sejati',
                'nik' => '85325947',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan PNRI'
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
                'name' => 'dr. Intan Purnamasari',
                'nik' => '94323956',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area TSO'
            ],
            [
                'name' => 'Puma Lydia',
                'nik' => '20325915',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
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
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Farah Yandika Sari',
                'nik' => '21325926',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Teguh Azhary',
                'nik' => '98323935',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Puspita Amalia Besari',
                'nik' => '93325936',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Bernadetta Miranti Debora',
                'nik' => '94323482',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Desy Kurnia Dewi',
                'nik' => '94324485',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Yudhistira',
                'nik' => '95323504',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Septyani Nevy Mega Nurastam',
                'nik' => '95324503',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Bernika Mutiara Sari',
                'nik' => '93325567',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Dwita Wulan Sari',
                'nik' => '87325568',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mardiul Kuswa',
                'nik' => '97325589',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Jehan Latifah',
                'nik' => '98325629',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Tita Dwi Lestari',
                'nik' => '97325636',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Mega Rahma Dani',
                'nik' => '98323671',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Niki Erista Ayudia',
                'nik' => '90323500',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Nur Adilla',
                'nik' => '94323700',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'dr. Grace Irin Julianty Samosir',
                'nik' => '93323763',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Hendro Prasetyo',
                'nik' => '98325777',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Yeni Puspitasari',
                'nik' => '91325809',
                'jabatan' => 'Perawat',
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
                'name' => 'Ervina Nur Afridza',
                'nik' => '99325856',
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
                'name' => 'Mimi Samiyah ',
                'nik' => '96325902',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Dewi Apriliyani',
                'nik' => '96323947',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Zahratul Izza',
                'nik' => '22325951',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Fhazri Reza Nurmajid',
                'nik' => '93323952',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Andi Muhammad Rasyad',
                'nik' => '22325948',
                'jabatan' => 'Tenaga Medis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Nada Kamilia',
                'nik' => '99323969',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Vamaura Ashabil Denisya',
                'nik' => '21325971',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Sufi Maulana',
                'nik' => '99325972',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Citra Putri Fitria Sari',
                'nik' => '99325967',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Salsabila Febiana',
                'nik' => '99325968',
                'jabatan' => 'Perawat',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Pelayanan Kesehatan MRT'
            ],
            [
                'name' => 'Harnofi',
                'nik' => '99329970',
                'jabatan' => 'Driver Ambulance',
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
                'jabatan' => 'Koordinator Unit Bisnis ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Bogor'
            ],
            [
                'name' => 'dr. Raina Syah Fanissa',
                'nik' => '97003578',
                'jabatan' => 'Koordinator Unit Bisnis ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Bogor'
            ],
            [
                'name' => 'dr. Kurnia Fitra Hasana',
                'nik' => '93003558',
                'jabatan' => 'Koordinator Unit Bisnis ',
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
                'name' => 'dr. Eva Maria Christine, M.Gizi, SpGK',
                'nik' => '84322748',
                'jabatan' => 'Dokter Spesialis Gizi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Telkom Landmark Tower'
            ],
            [
                'name' => 'dr. Thia Juniaty Manik M.Gizi Sp.GK',
                'nik' => '79322754',
                'jabatan' => 'Dokter Spesialis Gizi ',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Telkom Landmark Tower'
            ],
            [
                'name' => 'dr. Lydia Theresia Purba, Sp. Rad',
                'nik' => '77322802',
                'jabatan' => 'Dokter Spesialis Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Telkom Landmark Tower'
            ],
            [
                'name' => 'Adisti Ayu Madani',
                'nik' => '99423819',
                'jabatan' => 'Staff Provider Relation',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Pusat Jakarta'
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
                'name' => 'Adrian Permana Hisa Dilaga',
                'nik' => '92133532',
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
                'nik' => '135499',
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
                'jabatan' => 'Koordinator Unit Bisnis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telkomedika'
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
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'name' => 'Irjuni Susanti',
                'nik' => '72127043',
                'jabatan' => 'Staff Administrasi Klinik',
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
                'name' => 'Dessy Susylawaty',
                'nik' => '86323022',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC UNIKOM'
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
                'name' => 'Magdalena Nani Sudarni',
                'nik' => '81227011',
                'jabatan' => 'AM Regional',
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
                'name' => 'Agung Ismail Kustiawan',
                'nik' => '91324029',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'Fendi Setiawan',
                'nik' => '86325030',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'Risna Heryaman',
                'nik' => '87335052',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'Sofiana Oktaviani',
                'nik' => '98335495',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'Nadhifa Aufiyazzahra Nurani',
                'nik' => '98335080',
                'jabatan' => 'Fisioterapi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'Amelia Julianti',
                'nik' => '135503',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'dr. Susanna Maria Susianna, Sp.PK.',
                'nik' => '64232012',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'dr. Budianto, Sp.Rad.',
                'nik' => '64232013',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
            ],
            [
                'name' => 'dr. Pratiwi Yuliandari, Sp.M, ',
                'nik' => '66333474',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telemedika Health Center'
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
                'name' => 'dr. Nove Esra Tara varelisa Br. Pardede',
                'nik' => '95337512',
                'jabatan' => 'Dokter Umum',
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
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'name' => 'Eva Sovia Anaziah',
                'nik' => '89225008',
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Buah Batu'
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
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'name' => 'Wanda Fauziyah',
                'nik' => '21343081',
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
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC PT Santosa Jaya Abadi'
            ],
            [
                'name' => 'Fitrianti',
                'nik' => '95345049',
                'jabatan' => 'Perawat Umum',
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
                'jabatan' => 'Perawat Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'IHC Purwokerto'
            ],
            [
                'name' => 'Kiki Waluyo Wahyu Ningsih',
                'nik' => '98343083',
                'jabatan' => 'Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'KAI Mediska Kroya'
            ],
            [
                'name' => 'drg. Marina Rosyana',
                'nik' => '94343082',
                'jabatan' => 'Dokter Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'KAI Mediska Kutoarjo'
            ],
            [
                'name' => 'Shinta Jannati Wahyuningrum',
                'nik' => '20343084',
                'jabatan' => 'Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'KAI Mediska Kutoarjo'
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
                'name' => 'dr. Hanum Maftukha Ahda',
                'nik' => '95342045',
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'name' => 'Rizki Aldila Oktavia Putri',
                'nik' => '91345022',
                'jabatan' => 'Fisioterapi',
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
                'name' => 'Vina Ayu Fitriani',
                'nik' => '99345074',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Semarang'
            ],
            [
                'name' => 'dr. Afrina Yanti Sp. T.H.T.B.K.L.',
                'nik' => '82342085',
                'jabatan' => 'Spesialis THT',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Semarang'
            ],
            [
                'name' => 'dr. Erika Sandra Nor Hanifah',
                'nik' => '98343085',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'THC Semarang'
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
                'jabatan' => 'Staff Logistic & Support',
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
                'name' => 'Rahmilia Indri Hapsari',
                'nik' => '93443073',
                'jabatan' => 'Regional Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Jawa Timur & Bali'
            ],
            [
                'name' => 'Yudha Pratama Andriansah',
                'nik' => '89325027',
                'jabatan' => 'AM Regional',
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
                'name' => 'drg. Lidya Permata Ningtyas',
                'nik' => '95352097',
                'jabatan' => 'Dokter Gigi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama THC Surabaya'
            ],
            [
                'name' => 'dr. David Rajawali Yusuf',
                'nik' => '95353112',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Rawat Jalan Telemedika Health Center Malang'
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
                'name' => 'Puput Candra Ningtyas',
                'nik' => '21353125',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
            ],
            [
                'name' => 'Cindy Khartikasari',
                'nik' => '96254075',
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'name' => 'dr. Ike Setiowati',
                'nik' => '88353102',
                'jabatan' => 'Dokter Umum',
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
                'name' => 'dr. Charles Wangsadjaja, Sp. Rad(K)',
                'nik' => '84352127',
                'jabatan' => 'Dokter Spesialis Radiologi',
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
                'name' => 'Wahyu Dwi Jayanti',
                'nik' => '20353129',
                'jabatan' => 'Staff Administrasi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Telkomedika Surabaya'
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
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'name' => 'Mardiana Riska Wulandari',
                'nik' => '89323023',
                'jabatan' => 'Koordinator Unit Bisnis',
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
                'jabatan' => 'POH Regional Manager',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Apotek Telemedika Farma 24'
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
                'name' => 'Muhammad Ilham Redhani',
                'nik' => '96465002',
                'jabatan' => 'AM Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional Kalimantan'
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
                'jabatan' => 'Koordinator Unit Bisnis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama TelkoMedika Banjarmasin'
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
                'name' => 'Gazali Rahman ',
                'nik' => '213366001',
                'jabatan' => 'Asisten Apoteker',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Pratama Telkomedika Banjarmasin'
            ],
            [
                'name' => 'Saufia Maulini',
                'nik' => '23375068',
                'jabatan' => 'Asisten Apoteker',
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
                'jabatan' => 'Apoteker Penanggung Jawab',
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
                'name' => 'Arni Irawati Sam',
                'nik' => '21175067',
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
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'e-Labs Makassar'
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
                'jabatan' => 'AM Regional',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'dr. Andi Fitria Aziz',
                'nik' => '88373032',
                'jabatan' => 'Koordinator Unit Bisnis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
            ],
            [
                'name' => 'Al Amin',
                'nik' => '90323006',
                'jabatan' => 'Staff Logistik',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Kantor Regional KTI'
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
                'name' => 'dr. Hasmyati Nur Gommo, ',
                'nik' => '67372014',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Health Center Manado'
            ],
            [
                'name' => 'dr. Taufiqqulhidayat Ande, Sp.Rad',
                'nik' => '68272061',
                'jabatan' => 'Dokter Penanggung Jawab Radiologi',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Telkomedika Makassar'
            ],
            [
                'name' => 'dr. Irmayanti., Sp.Pk',
                'nik' => '82372033',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Laboratorium Telkomedika Makassar'
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
                'nik' => '413045',
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
                'jabatan' => 'Koordinator Unit Bisnis ',
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
                'unit_kerja' => 'Klinik Telkomedika Health Center Lampung'
            ],
            [
                'name' => 'Akhyar Nasution',
                'nik' => '94315062',
                'jabatan' => 'Radiografer (PPR)',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Rawat Jalan Telkomedika Medan'
            ],
            [
                'name' => 'dr. Jelita Siregar, Sp.PK.',
                'nik' => '78212009',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Rawat Jalan Telkomedika Medan'
            ],
            [
                'name' => 'dr. Dedy Dwi Putra, Sp.Rad.',
                'nik' => '77212017',
                'jabatan' => 'Dokter Penanggung Jawab',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Rawat Jalan Telkomedika Medan'
            ],
            [
                'name' => 'dr. Rahmawati, M.Ked (PD), Sp. PD',
                'nik' => '83313060',
                'jabatan' => 'Dokter Spesialis Penyakit Dalam',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Rawat Jalan Telkomedika Medan'
            ],
            [
                'name' => 'Erni Agustina',
                'nik' => '94215030',
                'jabatan' => 'Analis',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Klinik Utama Rawat Jalan Telkomedika Medan'
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
                'name' => 'dr. Yulistia Nazlina Siregar',
                'nik' => '97313061',
                'jabatan' => 'Dokter Umum',
                'role' => 'user',
                'upload_status' => 'n',
                'password' => bcrypt("Telkomedika@2024#!"),
                'unit_kerja' => 'Pos Kesehatan Telkomsel Area Medan'
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
                'jabatan' => 'Koordinator Unit Bisnis ',
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
            ]
        ];
        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}
