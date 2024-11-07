@extends('includes.Main')

@section('home')
<div class="home bg-base-200">
    <!-- Navbar -->
    <div class="navbar bg-red-400 rounded-xl mt-5 sticky top-0">
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
                        <summary>NIK</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="logout">Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

    <!-- Hero -->
    <div class="hero bg-base-200 min-h-screen">
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
</div>
@endsection