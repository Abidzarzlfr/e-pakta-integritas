@extends('includes.Main')

@section('home')
<div class="home">
    <!-- Navbar -->
    <div class="navbar bg-red-400 rounded-xl mt-5 sticky top-0 z-40 container mx-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <!-- Mobile Dropdown Menu -->
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="#about">About</a></li>
                    <li><a href="#generate">Generate</a></li>
                    <li><a href="#upload">Upload</a></li>
                </ul>
            </div>
            <img class="h-10 w-12" src="{{ asset('assets/telkomedika-logo.png') }}" alt="" />
            <a class="btn btn-ghost text-xl" href="#about">E-Pakta</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <!-- Desktop Menu -->
            <ul class="menu menu-horizontal px-1">
                <li><a href="#about">About</a></li>
                <li><a href="#generate">Generate</a></li>
                <li><a href="#upload">Upload</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary>{{ Auth::user()->nik }}</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="logout">Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <img src="{{ asset('assets/telkomedika-logo.png') }}" alt="" />
                <h1 class="text-5xl font-bold">E-Pakta Telko<span class="text-red-500">Medika</span></h1>
                <p class="py-6">
                    Website E-Pakta Telkomedika merupakan website untuk mencetak pakta
                    integritas secara otomatis. Klik tombol "Generate" untuk membuat Pakta
                    secara otomatis.
                </p>
                <a class="btn btn-base-400" href="#generate">Get Started</a>
            </div>
        </div>
    </div>

    <!-- Generate PDF Section -->
    <div id="generate" class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <!-- Text -->
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Generate Pakta Integritas</h1>
                <p class="py-6">
                    Isi form kosong untuk generate E-Pakta.
                </p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <!-- Form Generate Pakta PDF -->
                <form action="{{ route('update-pdf') }}" method="POST" class="card-body z-0">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Lengkap</span>
                        </label>
                        <input type="text" name="nama" placeholder="{{ Auth::user()->name }}" class="input input-bordered" required disabled />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">NIK</span>
                        </label>
                        <input type="text" name="nik" placeholder="{{ Auth::user()->nik }}" class="input input-bordered" required disabled />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Jabatan</span>
                        </label>
                        <input type="text" name="jabatan" placeholder="{{ Auth::user()->jabatan }}" class="input input-bordered" required disabled />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Unit Kerja</span>
                        </label>
                        <input type="text" name="unit_kerja" placeholder="{{ Auth::user()->unit_kerja }}" class="input input-bordered" required disabled />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kota</span>
                        </label>
                        <input type="text" name="kota" placeholder="Kota" class="input input-bordered" required />
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Generate PDF</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Upload Pakta Integritas Section -->
    <div id="upload" class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Upload Pakta Integritas</h1>
                <p class="py-6">
                    Upload pakta integritas anda yang sudah diberi materai dan tanda tangan,
                    dengan tipe file PDF, dan maksimal 5Mb.
                </p>

                <!-- Form for PDF Upload -->
                <form id="uploadForm" action="{{ route('upload-pdf') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="pakta_integritas" class="file-input file-input-bordered w-full max-w-xs" required />

                    <!-- Button to open modal instead of submitting the form -->
                    <!-- <button type="button" class="btn btn-primary mt-4" onclick="document.getElementById('my_modal_1').showModal()">
                        Upload
                    </button> -->
                    <button type="button" class="btn btn-primary mt-4" onclick="checkFileAndShowModal()">
                        Upload
                    </button>

                </form>
            </div>
        </div>
    </div>
    <!-- Modal for Confirmation -->
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold">Konfirmasi Upload</h3>
            <p class="py-4">Apakah Anda yakin ingin mengupload pakta integritas ini?</p>

            <!-- Pratinjau PDF Sementara -->
            <iframe id="pdfPreview" class="w-full h-96 mb-4" src="" type="application/pdf"></iframe>

            <p class="text-red-500 text-sm font-bold"><span class="font-bold text-black">Peringatan:</span><br>Pakta integritas yang sudah di upload hanya bisa dikirim sekali saja</p>

            <div class="modal-action">
                <!-- Close Button for the Modal -->
                <button class="btn" onclick="document.getElementById('my_modal_1').close()">Batal</button>

                <!-- Submit Button inside modal to confirm upload -->
                <button class="btn btn-primary" onclick="submitForm()">Ya, Upload</button>
            </div>
        </div>
    </dialog>

    <script>
        function checkFileAndShowModal() {
            const fileInput = document.querySelector('input[name="pakta_integritas"]');
            const alertContainer = document.getElementById('alert-error-size');
            const pdfPreview = document.getElementById('pdfPreview');

            // Hapus alert error jika ada
            if (alertContainer) {
                alertContainer.remove();
            }

            // Jika file belum dipilih, tampilkan alert
            if (fileInput.files.length === 0) {
                const alertDiv = document.createElement('div');
                alertDiv.id = 'alert-error-size';
                alertDiv.role = 'alert';
                alertDiv.className = 'alert alert-error fixed bottom-4 left-1/2 transform -translate-x-1/2 p-4 flex items-center space-x-2 w-96 shadow-lg rounded-lg z-40';

                // Tambahkan ikon SVG ke alert
                alertDiv.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>File belum dipilih</span>
            `;

                document.body.appendChild(alertDiv);

                setTimeout(() => {
                    alertDiv.remove();
                }, 3000); // 3 detik
            } else {
                // Buat URL sementara untuk pratinjau PDF
                const file = fileInput.files[0];
                const fileUrl = URL.createObjectURL(file);
                pdfPreview.src = fileUrl; // Setel sumber pratinjau PDF

                document.getElementById('my_modal_1').showModal();
            }
        }


        // Fungsi untuk submit form setelah konfirmasi
        function submitForm() {
            document.getElementById("uploadForm").submit();
        }

        // Fungsi untuk menghilangkan alert setelah 3 detik
        setTimeout(() => {
            const successAlert = document.getElementById('alert-success');
            const errorSizeAlert = document.getElementById('alert-error-size');
            const errorTypeAlert = document.getElementById('alert-error-type');

            if (successAlert) successAlert.style.display = 'none';
            if (errorSizeAlert) errorSizeAlert.style.display = 'none';
            if (errorTypeAlert) errorTypeAlert.style.display = 'none';
        }, 3000); // 3000 milidetik = 3
    </script>



    <!-- Success Alert -->
    @if(session('success'))
    <div id="alert-success" role="alert" class="alert alert-success fixed bottom-4 left-1/2 transform -translate-x-1/2 p-4 flex items-center space-x-2 w-96 shadow-lg rounded-lg z-40">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Anda berhasil upload Pakta Integritas!</span>
    </div>
    @endif

    <!-- Error Alert: File size exceeded -->
    @if($errors->first('pakta_integritas') == 'Mohon maaf, file anda melebihi 5Mb!')
    <div id="alert-error-size" role="alert" class="alert alert-error fixed bottom-4 left-1/2 transform -translate-x-1/2 p-4 flex items-center space-x-2 w-96 shadow-lg rounded-lg z-40">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Mohon maaf, file anda melebihi 5Mb</span>
    </div>
    @endif

    <!-- Error Alert: Incorrect file type -->
    @if($errors->first('pakta_integritas') == 'Mohon maaf, file harus pdf!')
    <div id="alert-error-type" role="alert" class="alert alert-error fixed bottom-4 left-1/2 transform -translate-x-1/2 p-4 flex items-center space-x-2 w-96 shadow-lg rounded-lg z-40">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Mohon maaf, file harus pdf!</span>
    </div>
    @endif
</div>

<script>
    // Fungsi untuk menghilangkan alert setelah 3 detik
    setTimeout(() => {
        const successAlert = document.getElementById('alert-success');
        const errorSizeAlert = document.getElementById('alert-error-size');
        const errorTypeAlert = document.getElementById('alert-error-type');

        if (successAlert) successAlert.style.display = 'none';
        if (errorSizeAlert) errorSizeAlert.style.display = 'none';
        if (errorTypeAlert) errorTypeAlert.style.display = 'none';
    }, 3000); // 3000 milidetik = 3 detik
</script>


<!-- Optional Smooth Scrolling -->
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection