@extends('includes.Main')

@section('login')
<!-- Login Page -->
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <img src="{{ asset('assets/telkomedika-logo.png') }}" alt="" />
            <h1 class="text-5xl font-bold">E-Pakta Telko<span class="text-red-500">Medika</span></h1>
            <!-- <p class="py-6">
                    👈🏻 Login Here!
                </p> -->
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
                    <input type="password" name="password" placeholder="password" class="input input-bordered" required />
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
@endsection