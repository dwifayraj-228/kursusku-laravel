<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EnrollmentController extends Controller
{
    /**
     * Menampilkan laporan enrollment (PDF Hal 16)
     */
    public function index()
    {
        $enrollments = Enrollment::with(['participant', 'course'])
            ->latest()
            ->get();
            
        return view('enrollments.index', compact('enrollments'));
    }

    /**
     * Menampilkan form tambah enrollment (PDF Hal 13)
     */
    public function create()
    {
        $participants = Participant::orderBy('name')->get();
        // PERUBAHAN DI SINI: 'active' diubah menjadi 'open'
        $courses = Course::where('status', 'open') 
            ->orderBy('name')
            ->get();

        return view('enrollments.create', compact('participants', 'courses'));
    }

    /**
     * Menyimpan data enrollment baru (PDF Hal 13 & 15)
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'participant_id' => ['required', 'exists:participants,id'],
            'course_id' => [
                'required',
                'exists:courses,id',
                // Validasi Composite Unique: Mencegah 1 peserta daftar 2x di course yang sama
                Rule::unique('enrollments')->where(
                    fn ($query) => $query->where('participant_id', $request->participant_id)
                ),
            ],
        ], [
            // Pesan error custom jika duplikat
            'course_id.unique' => 'Participant ini sudah terdaftar pada course tersebut.',
        ]);

        $data['status'] = 'registered';
        Enrollment::create($data);

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment berhasil disimpan.');
    }
}