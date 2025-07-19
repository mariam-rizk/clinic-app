@extends('layouts.website')

@section('title', 'Register')
@section('content')
<div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
                            @error('password')
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="password_confirmation">Confirm password</label>
                            <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                            @error('password_confirmation')
                            <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="{{ route('login') }}"> login</a>
                </div>
            </div>

        </div>
    </div>
@endsection