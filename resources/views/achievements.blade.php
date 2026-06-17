@extends('layouts.app')

@section('title', 'Prestasi Sekolah - WebKriya Modern School')

@section('content')
<!-- Header Page -->
<section class="py-16 md:py-24 px-4 text-center border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <div class="max-w-3xl mx-auto space-y-4">
        <h1 class="text-3xl sm:text-5xl font-display font-black leading-none text-white">
            PRESTASI SEKOLAH
        </h1>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed font-light">
            Galeri kebanggaan perolehan prestasi akademik dan non-akademik siswa-siswi WebKriya.
        </p>
    </div>
</section>

<!-- Achievements Grid -->
<section class="max-w-6xl mx-auto px-4 py-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($achievements as $achievement)
            <div class="glass-card overflow-hidden group hover:glass-card-hover flex flex-col justify-between h-full">
                <div>
                    <!-- Photo container -->
                    <div class="h-48 bg-[#f5f0e6] relative overflow-hidden border-b border-[#3d2b1f]/10 flex items-center justify-center">
                        @if($achievement->image_path)
                            <img src="/storage/{{ $achievement->image_path }}" alt="{{ $achievement->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-amber-500/10 to-amber-700/10 flex items-center justify-center text-amber-700">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                            </div>
                        @endif
                        <span class="absolute top-4 left-4 px-2.5 py-1 rounded-md text-[10px] font-semibold bg-amber-500/10 text-amber-700 border border-amber-500/20 uppercase">
                            {{ $achievement->category }}
                        </span>
                    </div>

                    <div class="p-6 space-y-3">
                        <h3 class="text-lg font-bold text-white group-hover:text-amber-600 transition-colors line-clamp-2">
                            {{ $achievement->title }}
                        </h3>
                        <p class="text-sm text-slate-400 font-light leading-relaxed line-clamp-3">
                            {{ $achievement->description }}
                        </p>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <div class="border-t border-white/5 pt-4 flex flex-col gap-1 text-xs text-slate-500">
                        <span class="font-semibold text-slate-300">Pemenang: {{ $achievement->winner_name }}</span>
                        <span>Diterima pada: {{ $achievement->date->format('d M Y') }}</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center p-20 glass-card text-slate-500">
                Data prestasi sekolah belum dimasukkan saat ini.
            </div>
        @endforelse
    </div>
</section>
@endsection
