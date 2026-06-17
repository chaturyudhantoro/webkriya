@extends('layouts.app')

@section('title', 'Kabar Sekolah Terbaru - WebKriya Modern School')

@section('content')
<!-- Header Page -->
<section class="py-16 md:py-24 px-4 text-center border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <div class="max-w-3xl mx-auto space-y-4">
        <h1 class="text-3xl sm:text-5xl font-display font-black leading-none text-white">
            KABAR & KEGIATAN
        </h1>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed font-light">
            Temukan berita terbaru, pengumuman resmi, dan dokumentasi agenda kegiatan WebKriya Modern School di sini.
        </p>
    </div>
</section>

<!-- News Cards List -->
<section class="max-w-6xl mx-auto px-4 py-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($news as $item)
            <article class="glass-card overflow-hidden group hover:glass-card-hover flex flex-col h-full justify-between">
                <div>
                    <!-- Thumbnail -->
                    <div class="h-48 bg-[#f5f0e6] overflow-hidden relative border-b border-[#3d2b1f]/10">
                        @if($item->image_path)
                            <img src="/storage/{{ $item->image_path }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-amber-500/5 to-amber-700/5 text-amber-700/30 font-display font-bold text-xs uppercase tracking-widest">
                                NO THUMBNAIL
                            </div>
                        @endif
                        <span class="absolute top-4 left-4 px-2.5 py-1 rounded-md text-[10px] font-semibold bg-amber-500/10 text-amber-700 border border-amber-500/20 uppercase">
                            News
                        </span>
                    </div>

                    <!-- Title & Excerpt -->
                    <div class="p-6 space-y-3">
                        <h3 class="text-lg font-bold line-clamp-2 text-white group-hover:text-amber-600 transition-colors">
                            {{ $item->title }}
                        </h3>
                        <div class="text-sm text-slate-400 line-clamp-3 leading-relaxed font-light">
                            {!! strip_tags($item->content) !!}
                        </div>
                    </div>
                </div>

                <!-- Footer Article -->
                <div class="px-6 pb-6 pt-2 border-t border-[#3d2b1f]/10 flex items-center justify-between text-xs text-slate-500">
                    <span>{{ $item->published_at?->format('d M Y') ?? $item->created_at->format('d M Y') }}</span>
                    <a href="/berita/{{ $item->slug }}" class="text-amber-600 font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </article>
        @empty
            <div class="col-span-3 text-center p-20 glass-card text-slate-500">
                Belum ada berita yang diterbitkan saat ini.
            </div>
        @endforelse
    </div>
</section>
@endsection
