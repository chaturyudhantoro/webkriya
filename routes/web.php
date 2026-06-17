<?php

use App\Models\Major;
use App\Models\News;
use App\Models\TracerStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Beranda / Landing Page
Route::get('/', function () {
    $majors = Major::all();
    $news = News::where('status', 'published')->latest()->take(3)->get();
    return view('welcome', compact('majors', 'news'));
});

// Detail Jurusan
Route::get('/jurusan/{slug}', function ($slug) {
    $major = Major::where('slug', $slug)->firstOrFail();
    return view('major-detail', compact('major'));
});

// Portal PPDB
Route::get('/ppdb', function () {
    return view('ppdb');
});

// Kabar Berita List
Route::get('/berita', function () {
    $news = News::where('status', 'published')->latest()->get();
    return view('news.index', compact('news'));
});

// Detail Kabar Berita
Route::get('/berita/{slug}', function ($slug) {
    $item = News::where('slug', $slug)->firstOrFail();
    return view('news.show', compact('item'));
});

// Tracer Study (View & Post)
Route::get('/tracer-study', function () {
    $majors = Major::all();
    return view('tracer-study', compact('majors'));
});

Route::post('/tracer-study', function (Request $request) {
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'graduation_year' => 'required|integer|min:2000|max:' . date('Y'),
        'major_id' => 'required|exists:majors,id',
        'status' => 'required|in:bekerja,kuliah,wirausaha,mencari_kerja',
        'institution' => 'nullable|string|max:255',
        'position' => 'nullable|string|max:255',
        'testimonials' => 'nullable|string|max:1000',
    ]);

    // Format details JSON
    $details = [
        'institution' => $request->input('institution'),
        'position' => $request->input('position'),
    ];

    TracerStudy::create([
        'full_name' => $validated['full_name'],
        'graduation_year' => $validated['graduation_year'],
        'major_id' => $validated['major_id'],
        'status' => $validated['status'],
        'details' => $details,
        'testimonials' => $validated['testimonials'],
    ]);

    return redirect()->back()->with('success', 'Terima kasih! Data tracer study Anda berhasil dikirim.');
});

// Guru & Staf
Route::get('/tentang/guru', function () {
    $teachers = \App\Models\Teacher::with('major')->orderBy('nip')->get();
    return view('teachers', compact('teachers'));
});

// Prestasi Sekolah
Route::get('/prestasi', function () {
    $achievements = \App\Models\Achievement::orderByDesc('date')->get();
    return view('achievements', compact('achievements'));
});

// Agenda/Event Sekolah
Route::get('/agenda', function () {
    $events = \App\Models\Event::orderBy('event_date')->get();
    return view('events', compact('events'));
});
