@extends('includes.Main')

@section('home')
<div class="home">
    <!-- Navbar -->
    <div class="navbar bg-red-400 rounded-xl mt-5 sticky top-0 z-40">
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
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Preview PDF</a></li>
                    <li><a>Input Data</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">E-Pakta</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Preview PDF</a></li>
                <li><a>Input Data</a></li>
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
    <!-- Hero -->
    <div class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">E-Pakta On-progress</h1>
                <p class="py-6">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
    <!-- Generate PDF -->
    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Generate Elektronik Pakta Integritas</h1>
                <p class="py-6">
                    Isi form kosong disamping.
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
</div>
@endsection