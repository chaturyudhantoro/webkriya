@extends('layouts.app')

@section('title', 'Pendaftaran PPDB Online 2026 - WebKriya Modern School')

@section('content')
<!-- Header Page -->
<section class="py-16 md:py-24 px-4 text-center border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <div class="max-w-3xl mx-auto space-y-4">
        <h1 class="text-3xl sm:text-5xl font-display font-black leading-none text-white">
            PPDB ONLINE 2026
        </h1>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed font-light">
            Bergabunglah bersama kami menjadi bagian dari generasi kreatif, inovatif, dan berkeahlian teknologi tinggi di era digital modern.
        </p>
    </div>
</section>

<!-- Form & Info section -->
<section class="max-w-6xl mx-auto px-4 py-20 grid grid-cols-1 lg:grid-cols-3 gap-12">
    <!-- Sidebar Guidelines -->
    <div class="space-y-6">
        <div class="glass-card p-6 border border-white/5 space-y-4">
            <h4 class="text-base font-display font-extrabold text-white">Jadwal PPDB 2026</h4>
            
            <div class="space-y-3 text-xs">
                <div class="pb-3 border-b border-white/5">
                    <span class="block text-cyan-400 font-semibold mb-1">Gelombang I (Jalur Prestasi)</span>
                    <span class="block text-slate-400">10 Juni - 30 Juni 2026</span>
                </div>
                <div class="pb-3 border-b border-white/5">
                    <span class="block text-purple-400 font-semibold mb-1">Gelombang II (Jalur Reguler)</span>
                    <span class="block text-slate-400">01 Juli - 20 Juli 2026</span>
                </div>
                <div>
                    <span class="block text-slate-500 font-semibold mb-1">Gelombang III (Jalur Mandiri)</span>
                    <span class="block text-slate-500">25 Juli - 10 Agustus 2026</span>
                </div>
            </div>
        </div>

        <div class="glass-card p-6 border border-white/5 space-y-4">
            <h4 class="text-base font-display font-extrabold text-white">Berkas Persyaratan</h4>
            
            <ul class="space-y-2 text-xs text-slate-400 leading-relaxed list-disc list-inside">
                <li>Ijazah SMP/MTs sederajat / Surat Keterangan Lulus (SKL)</li>
                <li>Kartu Keluarga (KK) yang masih berlaku</li>
                <li>Pas foto resmi terbaru dengan latar belakang merah/biru</li>
                <li>Masing-masing berkas diunggah dalam format PDF/JPG (Maks. 2MB)</li>
            </ul>
        </div>
    </div>

    <!-- Livewire Form Container -->
    <div class="lg:col-span-2">
        <livewire:ppdb-registration-form />
    </div>
</section>
@endsection
