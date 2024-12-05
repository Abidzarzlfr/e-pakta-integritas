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

<!-- Table Users -->
<section class="bg-white dark:bg-gray-900 z-0">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <!-- Heading Table Users -->
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">User Table</h1>
        <!-- Search Button -->
        <div class="pb-4 bg-white dark:bg-gray-900">
            <form method="GET" action="{{ route('users.search') }}">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search" name="search" value="{{ request()->query('search') }}" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                </div>
            </form>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <!-- Users Table -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Num
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Upload Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Unit Kerja
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key=>$item )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $users->firstItem() + $key }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->nik }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->jabatan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->upload_status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->unit_kerja }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Showing pagination info -->
            <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">
                    Showing <span class="font-semibold text-gray-900 dark:text-white">{{ $users->firstItem() }}-{{ $users->lastItem() }}</span> of
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $users->total() }}</span>
                </span>

                <!-- Pagination Links -->
                <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                    <li>
                        {{ $users->links('pagination::tailwind') }}
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>

<!-- Refresh Scroll -->
<script>
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual'; // Mengatur manual scroll restoration
    }

    // Jika pengguna berpindah ke halaman lain (misal, setelah paginasi), 
    // kita dapat menjaga scroll posisi
    window.onload = function() {
        window.scrollTo(0, sessionStorage.getItem("scrollPosition") || 0);
    };

    // Menyimpan posisi scroll ketika halaman berpindah
    window.onbeforeunload = function() {
        sessionStorage.setItem("scrollPosition", window.scrollY);
    };
</script>



@endsection