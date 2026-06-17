@extends('layouts.app')

@section('title', $major->name . ' - WebKriya Modern School')
@section('meta_description', $major->meta_description)

@section('content')
<!-- Major Hero Header -->
<section class="relative py-24 md:py-32 px-4 overflow-hidden border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <!-- Ambient Accent Glow -->
    <div class="absolute w-[40rem] h-[40rem] rounded-full blur-[140px] opacity-15 pointer-events-none -top-20 -left-20" style="background-color: {{ $major->accent_color }};"></div>
    <div class="absolute w-[30rem] h-[30rem] rounded-full blur-[120px] opacity-10 pointer-events-none bottom-0 right-0" style="background-color: {{ $major->accent_color }};"></div>

    <div class="max-w-5xl mx-auto relative z-10 space-y-6">
        <a href="/" class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-slate-500 hover:text-amber-600 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>

        <div class="inline-flex items-center gap-3 px-3 py-1.5 rounded-full bg-amber-500/5 border border-amber-500/15 text-xs font-semibold" style="color: {{ $major->accent_color }}">
            <span class="w-2 h-2 rounded-full" style="background-color: {{ $major->accent_color }}"></span>
            Program Keahlian Unggulan
        </div>

        <h1 class="text-3xl sm:text-5xl md:text-6xl font-display font-black leading-tight text-white">
            {{ $major->name }}
        </h1>

        <p class="max-w-3xl text-slate-400 text-base sm:text-lg leading-relaxed font-light">
            {{ $major->description }}
        </p>
    </div>
</section>

<!-- Curriculum & Structure -->
<section class="max-w-5xl mx-auto px-4 py-20 space-y-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <!-- Sidebar Quick Info -->
        <div class="space-y-6">
            <h3 class="text-xl font-display font-extrabold text-white">
                Informasi Program
            </h3>
            
            <div class="space-y-4 text-sm">
                <div class="p-4 rounded-xl bg-white border border-[#3d2b1f]/10 shadow-[0_4px_12px_rgba(61,43,31,0.02)]">
                    <span class="block text-slate-500 text-xs uppercase tracking-wider">Lama Studi</span>
                    <span class="block font-semibold text-white mt-1">3 Tahun (Pendidikan Menengah Kejuruan)</span>
                </div>
                <div class="p-4 rounded-xl bg-white border border-[#3d2b1f]/10 shadow-[0_4px_12px_rgba(61,43,31,0.02)]">
                    <span class="block text-slate-500 text-xs uppercase tracking-wider">Akreditasi</span>
                    <span class="block font-semibold text-white mt-1">A (Unggul)</span>
                </div>
                <div class="p-4 rounded-xl bg-white border border-[#3d2b1f]/10 shadow-[0_4px_12px_rgba(61,43,31,0.02)]">
                    <span class="block text-slate-500 text-xs uppercase tracking-wider">Mitra DUDI</span>
                    <span class="block font-semibold text-white mt-1">PT. Nusantara Kreatif, Mikrotik Academy, Astra Motor</span>
                </div>
            </div>
        </div>

        <!-- Curriculum List -->
        <div class="md:col-span-2 space-y-6">
            <h3 class="text-xl font-display font-extrabold text-white">
                Materi & Kurikulum Inti
            </h3>

            @if($major->curriculum)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($major->curriculum as $subject)
                        <div class="p-5 rounded-2xl bg-white border border-[#3d2b1f]/10 hover:border-amber-600/30 transition-all hover:translate-y-[-2px] shadow-[0_4px_12px_rgba(61,43,31,0.02)] hover:shadow-[0_8px_20px_rgba(197,160,89,0.06)] flex items-start gap-4">
                            <span class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold font-display" style="background-color: {{ $major->accent_color }}15; color: {{ $major->accent_color }}">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>
                            <div>
                                <span class="font-semibold text-white block text-sm">{{ $subject }}</span>
                                <span class="text-xs text-slate-400 block mt-1">Kompetensi Inti & Produktif</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-sm text-slate-500">Materi kurikulum belum ditambahkan oleh administrator.</p>
            @endif
        </div>
    </div>

    <!-- CTA Box -->
    <div class="p-8 md:p-12 rounded-3xl relative overflow-hidden text-center md:text-left flex flex-col md:flex-row md:items-center justify-between gap-8"
         style="background: linear-gradient(135deg, {{ $major->accent_color }}10, rgba(251,250,247,0.95)); border: 1px solid {{ $major->accent_color }}33; box-shadow: 0 10px 30px rgba(61,43,31,0.03);">
        
        <div class="space-y-2">
            <h3 class="text-2xl font-display font-extrabold text-white">
                Siap Bergabung dengan Kami?
            </h3>
            <p class="text-sm text-slate-400 max-w-xl font-light">
                Mulailah perjalanan karir profesional Anda di bidang {{ str_replace('Kriya Kreatif ', '', $major->name) }} dengan mendaftar di portal PPDB online.
            </p>
        </div>

        <div>
            <a href="/ppdb?major={{ $major->id }}" class="inline-block px-8 py-4 rounded-full font-bold text-sm transition-all hover:scale-105" 
               style="background-color: {{ $major->accent_color }}; color: #ffffff; box-shadow: 0 0 20px {{ $major->accent_color }}33;">
                Daftar Jurusan Ini
            </a>
        </div>
    </div>
</section>
@endsection
