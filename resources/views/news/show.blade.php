@extends('layouts.app')

@section('title', $item->title . ' - WebKriya Modern School')

@section('content')
<article class="max-w-4xl mx-auto px-4 py-16 md:py-24 space-y-8">
    <!-- Breadcrumbs & Meta -->
    <div class="space-y-4">
        <a href="/berita" class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-slate-500 hover:text-slate-300 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Berita
        </a>

        <h1 class="text-3xl sm:text-5xl font-display font-black leading-tight text-white">
            {{ $item->title }}
        </h1>

        <div class="flex items-center gap-6 text-xs text-slate-400">
            <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-full bg-cyan-500/20 text-cyan-400 font-display font-bold flex items-center justify-center text-[10px]">
                    {{ strtoupper(substr($item->author->name ?? 'A', 0, 1)) }}
                </span>
                <span class="font-semibold text-slate-300">{{ $item->author->name ?? 'Administrator' }}</span>
            </div>
            <span>&bull;</span>
            <span>{{ $item->published_at?->format('d F Y') ?? $item->created_at->format('d F Y') }}</span>
        </div>
    </div>

    <!-- Thumbnail Image -->
    @if($item->image_path)
        <div class="w-full rounded-3xl overflow-hidden border border-white/5 shadow-2xl">
            <img src="/storage/{{ $item->image_path }}" alt="{{ $item->title }}" class="w-full h-auto max-h-[500px] object-cover">
        </div>
    @endif

    <!-- Article Content -->
    <div class="prose prose-invert prose-cyan max-w-none leading-relaxed text-slate-300 font-light text-base sm:text-lg space-y-6">
        {!! $item->content !!}
    </div>
</article>
@endsection
