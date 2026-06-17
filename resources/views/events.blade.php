@extends('layouts.app')

@section('title', 'Agenda & Kegiatan Sekolah - WebKriya Modern School')

@section('content')
<!-- Header Page -->
<section class="py-16 md:py-24 px-4 text-center border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <div class="max-w-3xl mx-auto space-y-4">
        <h1 class="text-3xl sm:text-5xl font-display font-black leading-none text-white">
            AGENDA & EVENT
        </h1>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed font-light">
            Ikuti berbagai agenda penting, workshop industri, pameran, dan kegiatan sosial sekolah.
        </p>
    </div>
</section>

<!-- Events List -->
<section class="max-w-4xl mx-auto px-4 py-20 space-y-8">
    @forelse($events as $event)
        <div class="p-8 glass-card border border-[#3d2b1f]/10 flex flex-col md:flex-row gap-8 items-start justify-between hover:glass-card-hover">
            <!-- Date block -->
            <div class="flex items-center gap-4 md:flex-col md:items-center text-center">
                <div class="px-5 py-3 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-700 font-display font-black text-2xl flex flex-col items-center leading-none min-w-[70px]">
                    {{ $event->event_date->format('d') }}
                    <span class="text-[10px] uppercase tracking-wider font-semibold mt-1 font-sans">{{ $event->event_date->format('M') }}</span>
                </div>
                <span class="text-xs text-slate-500 font-mono">{{ $event->event_date->format('Y') }}</span>
            </div>

            <!-- Content -->
            <div class="flex-grow space-y-3">
                <h3 class="text-xl font-display font-extrabold text-white">
                    {{ $event->title }}
                </h3>
                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ $event->location }}
                    </span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed font-light">
                    {{ $event->description }}
                </p>
            </div>

            <!-- Actions -->
            @if($event->registration_link)
                <div class="w-full md:w-auto pt-4 md:pt-0 self-center">
                    <a href="{{ $event->registration_link }}" target="_blank" class="w-full md:w-auto inline-block text-center px-6 py-3 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 text-white font-bold text-xs hover:from-amber-400 hover:to-amber-600 shadow-[0_4px_12px_rgba(197,160,89,0.25)] hover:scale-105 transition-all">
                        Daftar Kegiatan
                    </a>
                </div>
            @endif
        </div>
    @empty
        <div class="text-center p-20 glass-card text-slate-500">
            Belum ada agenda kegiatan sekolah saat ini.
        </div>
    @endforelse
</section>
@endsection
