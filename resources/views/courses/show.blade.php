@extends('layouts.app')

@section('title', 'Detail Kursus')

@section('content')

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="container py-4">
    <!-- Header Judul dan Tombol -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1 fw-bold">Detail Kursus</h1>
            <p class="text-muted mb-0">{{ $course->code }} - {{ $course->name }}</p>
        </div>
        <div class="d-flex gap-2">
            <!-- Tombol Kembali -->
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Kembali</a>
            <!-- Tombol Edit (Warna Biru) -->
            <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
<div class="card shadow-sm border-0" style="background-color: #e0f2fe;">
    <!-- Kotak Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-4"> <!-- p-4 menambah padding agar tidak mepet -->
            <dl class="row mb-0">
                <dt class="col-sm-3 text-muted fw-normal">Kode</dt> <!-- text-muted membuat tulisan abu-abu -->
                <dd class="col-sm-9 fw-semibold">{{ $course->code }}</dd>

                <dt class="col-sm-3 text-muted fw-normal">Nama</dt>
                <dd class="col-sm-9 fw-semibold">{{ $course->name }}</dd>

                <dt class="col-sm-3 text-muted fw-normal">Deskripsi</dt>
                <dd class="col-sm-9">{{ $course->description ?: '-' }}</dd>

                <dt class="col-sm-3 text-muted fw-normal">Biaya</dt>
                <dd class="col-sm-9">Rp {{ number_format($course->fee, 0, ',', '.') }}</dd>

                <dt class="col-sm-3 text-muted fw-normal">Kuota</dt>
                <dd class="col-sm-9">{{ $course->quota }} peserta</dd>

                <dt class="col-sm-3 text-muted fw-normal">Tanggal Mulai</dt>
                <dd class="col-sm-9">{{ $course->start_date?->format('d-m-Y') }}</dd>

                <dt class="col-sm-3 text-muted fw-normal">Status</dt>
                <dd class="col-sm-9">{{ ucfirst($course->status) }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection