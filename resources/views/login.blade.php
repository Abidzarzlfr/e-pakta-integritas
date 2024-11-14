@extends('includes.Main')

@section('login')
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <img src="{{ asset('assets/telkomedika-logo.png') }}" alt="" />
            <h1 class="text-5xl font-bold">E-Pakta Telko<span class="text-red-500">Medika</span></h1>
        </div>
        <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
            <!-- Form Login -->
            <form action="/login" method="POST" class="card-body">
                <!-- Alert Error -->
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="list-disc list-outside pl-5">
                        @foreach ($errors->all() as $item)
                        <li class="text-red-500">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Form Input Login -->
                @csrf
                <div class="form-control">
                    <label class="label"><span class="label-text">NIK</span></label>
                    <input type="nik" name="nik" placeholder="NIK" class="input input-bordered" required />
                </div>
                <div class="form-control">
                    <label class="label"><span class="label-text">Password</span></label>
                    <div class="relative">
                        <input type="password" id="login-password" name="password" placeholder="password" class="input input-bordered w-full pr-10" required />
                        <button type="button" onclick="togglePassword('login-password', 'login-eye-icon')" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600">
                            <i id="login-eye-icon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                    <!-- Button Modal Forgot Password -->
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-error">Login</button>
                </div>
            </form>

            <!-- Modal Forgot Password -->
            

        </div>
    </div>
</div>

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
@endsection