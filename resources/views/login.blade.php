@extends('includes.Main')

@section('login')
<!-- Login Page -->
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <img src="{{ asset('assets/telkomedika-logo.png') }}" alt="" />
            <h1 class="text-5xl font-bold">E-Pakta Telko<span class="text-red-500">Medika</span></h1>
        </div>
        <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
            <form action="/login" method="POST" class="card-body">
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $item)
                    <ul>
                        <li>{{ $item }}</li>
                    </ul>
                    @endforeach
                </div>
                @endif
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">NIK</span>
                    </label>
                    <input type="nik" name="nik" placeholder="NIK" class="input input-bordered" required />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="password" class="input input-bordered w-full pr-10" required />
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600">
                            <i id="eye-icon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                    <label class="label">
                        <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                    </label>
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-error">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

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
@endsection