@extends('frontend.layouts.main')

@section('content')
    <!-- Main Content -->
<div class="container my-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold text-primary">Selamat Datang di Dashboard</h2>
    <p class="text-secondary">Halaman Dashboard Atmin</p>
  </div>

  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px; height:60px;">
            <i class="bi bi-person fs-4"></i>
          </div>
          <h5 class="mt-3 fw-bold text-primary">User</h5>
          <p class="text-secondary mb-0">Kelola data pengguna dengan mudah.</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px; height:60px;">
            <i class="bi bi-graph-up fs-4"></i>
          </div>
          <h5 class="mt-3 fw-bold text-primary">Statistik</h5>
          <p class="text-secondary mb-0">Lihat perkembangan data secara cepat.</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width:60px; height:60px;">
            <i class="bi bi-gear fs-4"></i>
          </div>
          <h5 class="mt-3 fw-bold text-primary">Pengaturan</h5>
          <p class="text-secondary mb-0">Atur preferensi dan konfigurasi sistem.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection