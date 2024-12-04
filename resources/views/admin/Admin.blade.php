@extends('includes.Main')

@section('DashboardAdmin')
<!-- Navbar -->
<div class="navbar bg-cyan-600 rounded-xl mt-5 sticky top-0 z-40 container mx-auto">
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
                <li><a href="#tableUser">Table User</a></li>
                <li><a href="#generate">Generate</a></li>
                <li><a href="#upload">Upload</a></li>
            </ul>
        </div>
        <img class="h-10 w-12" src="{{ asset('assets/telkomedika-logo.png') }}" alt="" />
        <a class="btn btn-ghost text-xl" href="#about">CMS E-Pakta</a>
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
                    <summary>{{ Auth::user()->name }}</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a href="#" onclick="my_modal_5.showModal()">Change Password</a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </details>
            </li>
        </ul>
        <!-- Modal Change Password -->
        <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
                <h3 class="text-lg font-bold">Change Password</h3>
                <form action="{{ route('change-password') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label"><span class="label-text">NIK</span></label>
                        <input type="text" name="nik" placeholder="{{Auth::user()->nik}}" class="input input-bordered" required disabled />
                        @error('nik')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label class="label"><span class="label-text">New Password</span></label>
                        <div class="relative">
                            <input type="password" id="new-password" name="new_password" placeholder="New password" class="input input-bordered w-full pr-10" required />
                            <button type="button" onclick="togglePassword('new-password', 'new-eye-icon')" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600">
                                <i id="new-eye-icon" class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                        @error('new_password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label class="label"><span class="label-text">Confirmation Password</span></label>
                        <div class="relative">
                            <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm password" class="input input-bordered w-full pr-10" required />
                            <button type="button" onclick="togglePassword('confirm-password', 'confirm-eye-icon')" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600">
                                <i id="confirm-eye-icon" class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                        @error('confirm_password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="modal-action">
                        <button type="button" class="btn" onclick="document.getElementById('my_modal_5').close()">Close</button>
                        <button type="submit" class="btn btn-error">Submit</button>
                    </div>
                </form>
            </div>
        </dialog>
        <!-- Login Transparancy Password -->
        <script>
            function togglePassword(inputId, iconId) {
                const passwordField = document.getElementById(inputId);
                const eyeIcon = document.getElementById(iconId);

                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    passwordField.type = 'password';
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            }
        </script>
    </div>
</div>

<!-- Table Section -->
<div class="hero min-h-screen">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold">Table User</h1>
        </div>
    </div>
</div>


@endsection