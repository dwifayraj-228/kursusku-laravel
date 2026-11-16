@extends('layouts.app')

@section('title', 'Tambah Enrollment')

@section('content')
<div class="container py-4" style="max-width: 760px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0 text-white">Tambah Enrollment</h1>
        <a href="{{ route('enrollments.index') }}" class="btn btn-outline-secondary">Kembali</a>
    </div>

    <form method="POST" action="{{ route('enrollments.store') }}" class="card custom-card p-4 shadow-lg">
        @csrf

        <div class="mb-3">
            <label class="form-label text-white" for="participant_id">Participant</label>
            <select name="participant_id" id="participant_id" class="form-select @error('participant_id') is-invalid @enderror" required>
                <option value="">-- Pilih Participant --</option>
                @foreach ($participants as $participant)
                    <option value="{{ $participant->id }}" @selected(old('participant_id') == $participant->id)>
                        {{ $participant->name }} - {{ $participant->email }}
                    </option>
                @endforeach
            </select>
            @error('participant_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label text-white" for="course_id">Course</label>
            <select name="course_id" id="course_id" class="form-select @error('course_id') is-invalid @enderror" required>
                <option value="">-- Pilih Course --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
            @error('course_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan Enrollment</button>
    </form>
</div>
@endsection