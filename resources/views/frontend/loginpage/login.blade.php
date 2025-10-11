@extends('frontend.layouts.main')

@section('content')
    <div class="formlogin">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card shadow-lg border-0" style="max-width: 400px; width: 100%;">
    <div class="card-body p-4 text-center">
      <h3 class="mb-4 text-primary fw-bold">Login</h3>

      <!-- Form Login -->
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3 text-start">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input type="email" name="email" id="email" class="form-control border-primary" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3 text-start">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input type="password" name="password" id="password" class="form-control border-primary" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Login</button>
      </form>

      <div class="mt-4">
        <p class="mb-0">Belum punya akun?
          <a href="{{ route('register') }}" class="text-decoration-none text-primary fw-semibold">Daftar Sekarang</a>
        </p>
      </div>
    </div>
  </div>
</div>
    </div>
@endsection