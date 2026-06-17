@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan | WebKriya')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center px-4 relative overflow-hidden">
    <!-- Ambient Background Light -->
    <div class="absolute w-[30rem] h-[30rem] rounded-full bg-cyan-500/5 blur-[120px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    <div class="glass-card max-w-md w-full p-10 text-center border border-white/5 space-y-6 relative z-10 hover:glass-card-hover">
        <h1 class="text-8xl font-display font-black tracking-tight bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent text-glow-cyan animate-pulse">
            404
        </h1>
        
        <div class="space-y-2">
            <h2 class="text-xl font-display font-extrabold text-white">HALAMAN TIDAK DITEMUKAN</h2>
            <p class="text-sm text-slate-400 font-light">Maaf, halaman yang Anda tuju di portal WebKriya tidak dapat kami temukan atau telah dipindahkan.</p>
        </div>

        <div class="pt-4">
            <a href="/" class="inline-block px-8 py-3.5 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-black font-bold text-sm shadow-[0_0_20px_rgba(6,182,212,0.3)] transition-all hover:scale-105">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
@endsection
