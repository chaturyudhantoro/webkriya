@extends('layouts.app')

@section('title', 'Direktori Guru & Staf - WebKriya Modern School')

@section('content')
<!-- Header Page -->
<section class="py-16 md:py-24 px-4 text-center border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <div class="max-w-3xl mx-auto space-y-4">
        <h1 class="text-3xl sm:text-5xl font-display font-black leading-none text-white">
            GURU & STAF SEKOLAH
        </h1>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed font-light">
            Mengenal lebih dekat para pendidik profesional dan staf administrasi WebKriya Modern School.
        </p>
    </div>
</section>

<!-- Teachers Grid -->
<section class="max-w-6xl mx-auto px-4 py-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @forelse($teachers as $teacher)
            <div class="p-6 glass-card text-center group hover:glass-card-hover flex flex-col items-center justify-between">
                <div class="space-y-4 flex flex-col items-center">
                    <!-- Photo container -->
                    <div class="w-32 h-32 rounded-full overflow-hidden border border-[#3d2b1f]/10 relative bg-[#f5f0e6] flex items-center justify-center">
                        @if($teacher->photo_path)
                            <img src="/storage/{{ $teacher->photo_path }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                        @else
                            <!-- Custom Futuristic Initials Avatar -->
                            <div class="w-full h-full bg-gradient-to-br from-amber-500/10 to-amber-700/10 text-amber-700 flex items-center justify-center text-3xl font-display font-bold">
                                {{ strtoupper(substr($teacher->name, 0, 1)) }}
                            </div>
                        @endif
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-base font-bold text-white group-hover:text-amber-600 transition-colors">
                            {{ $teacher->name }}
                        </h3>
                        <p class="text-xs text-slate-400 font-medium leading-relaxed">
                            {{ $teacher->position }}
                        </p>
                        @if($teacher->nip)
                            <span class="block text-[10px] text-slate-500 font-mono">NIP: {{ $teacher->nip }}</span>
                        @endif
                    </div>
                </div>

                @if($teacher->major)
                    <div class="mt-4 pt-3 border-t border-white/5 w-full">
                        <span class="px-2.5 py-1 rounded-md text-[10px] font-semibold bg-white/5 border border-white/10 text-slate-400"
                              style="border-color: {{ $teacher->major->accent_color }}44; color: {{ $teacher->major->accent_color }};">
                            {{ str_replace('Kriya Kreatif ', '', $teacher->major->name) }}
                        </span>
                    </div>
                @endif
            </div>
        @empty
            <div class="col-span-4 text-center p-20 glass-card text-slate-500">
                Data direktori guru belum tersedia saat ini.
            </div>
        @endforelse
    </div>
</section>
@endsection
