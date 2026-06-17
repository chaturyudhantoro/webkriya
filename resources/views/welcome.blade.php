@extends('layouts.app')

@section('title', 'WebKriya Modern School - Elegant Futuristic School Portal')

@section('content')
<!-- Hero Slider Section -->
<section id="hero-slider" class="relative min-h-[90vh] lg:min-h-screen flex items-center justify-center overflow-hidden border-b border-white/5">
    <!-- Slides Container -->
    <div class="absolute inset-0 z-0">
        
        <!-- Slide 1 -->
        <div class="slide-item absolute inset-0 flex items-center justify-center transition-opacity duration-1000 opacity-0 pointer-events-none">
            <!-- Background Image -->
            <img src="{{ asset('images/smk_kriya_exterior.png') }}" alt="Gedung SMK Kriya" class="slide-bg absolute inset-0 w-full h-full object-cover transition-transform duration-[6000ms] ease-out">
            <div class="absolute inset-0 bg-slate-950/50 backdrop-blur-[1px]"></div>
            <div class="absolute w-[40rem] h-[40rem] rounded-full bg-amber-500/5 blur-[120px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

            <!-- Content -->
            <div class="max-w-5xl mx-auto text-center relative z-10 px-4 space-y-8 pt-12">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-xs text-amber-300 font-semibold tracking-wider uppercase">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    Portal Resmi Sekolah
                </div>

                <h1 class="text-4xl sm:text-6xl md:text-7xl font-display font-black tracking-tight leading-none text-white drop-shadow-[0_4px_12px_rgba(0,0,0,0.7)]">
                    ELEGANT FUTURISTIC<br>
                    <span class="bg-gradient-to-r from-amber-300 via-yellow-400 to-amber-500 bg-clip-text text-transparent">
                        SCHOOL PORTAL
                    </span>
                </h1>

                <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-100 leading-relaxed font-medium drop-shadow-[0_2px_6px_rgba(0,0,0,0.95)]">
                    Menyongsong era revolusi industri baru melalui integrasi karya kriya tradisional bernilai estetika tinggi dan penguasaan infrastruktur digital terdepan.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="/ppdb" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-white font-bold text-base hover:scale-105 transition-all shadow-lg shadow-amber-500/25 text-center">
                        Daftar PPDB Sekarang
                    </a>
                    <a href="#jurusan" class="w-full sm:w-auto px-8 py-4 rounded-full border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white font-semibold text-base transition-all text-center">
                        Eksplorasi Jurusan
                    </a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide-item absolute inset-0 flex items-center justify-center transition-opacity duration-1000 opacity-0 pointer-events-none">
            <!-- Background Image -->
            <img src="{{ asset('images/smk_kriya_collaboration.png') }}" alt="Kolaborasi Siswa" class="slide-bg absolute inset-0 w-full h-full object-cover transition-transform duration-[6000ms] ease-out">
            <div class="absolute inset-0 bg-slate-950/50 backdrop-blur-[1px]"></div>
            <div class="absolute w-[40rem] h-[40rem] rounded-full bg-amber-500/5 blur-[120px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

            <!-- Content -->
            <div class="max-w-5xl mx-auto text-center relative z-10 px-4 space-y-8 pt-12">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-xs text-amber-300 font-semibold tracking-wider uppercase">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    PPDB 2026/2027 Telah Dibuka
                </div>

                <h1 class="text-4xl sm:text-6xl md:text-7xl font-display font-black tracking-tight leading-none text-white drop-shadow-[0_4px_12px_rgba(0,0,0,0.7)]">
                    BERGABUNGLAH BERSAMA<br>
                    <span class="bg-gradient-to-r from-yellow-300 via-amber-400 to-amber-600 bg-clip-text text-transparent">
                        TALENTA KREATIF DIGITAL
                    </span>
                </h1>

                <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-100 leading-relaxed font-medium drop-shadow-[0_2px_6px_rgba(0,0,0,0.95)]">
                    Kembangkan bakat kriya kayu, tenun tekstil estetis dengan penguasaan modeling 3D, cetak 3D, serta perancangan rekayasa jaringan modern.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="/ppdb" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-white font-bold text-base hover:scale-105 transition-all shadow-lg shadow-amber-500/25 text-center">
                        Daftar PPDB Online
                    </a>
                    <a href="#profil-sekolah" class="w-full sm:w-auto px-8 py-4 rounded-full border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white font-semibold text-base transition-all text-center">
                        Tentang Sekolah Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide-item absolute inset-0 flex items-center justify-center transition-opacity duration-1000 opacity-0 pointer-events-none">
            <!-- Background Image -->
            <img src="{{ asset('images/smk_kriya_profile.png') }}" alt="Studio Kriya Modern" class="slide-bg absolute inset-0 w-full h-full object-cover transition-transform duration-[6000ms] ease-out">
            <div class="absolute inset-0 bg-slate-950/50 backdrop-blur-[1px]"></div>
            <div class="absolute w-[40rem] h-[40rem] rounded-full bg-amber-500/5 blur-[120px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

            <!-- Content -->
            <div class="max-w-5xl mx-auto text-center relative z-10 px-4 space-y-8 pt-12">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-xs text-amber-300 font-semibold tracking-wider uppercase">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    Sinergi Seni &amp; Teknologi
                </div>

                <h1 class="text-4xl sm:text-6xl md:text-7xl font-display font-black tracking-tight leading-none text-white drop-shadow-[0_4px_12px_rgba(0,0,0,0.7)]">
                    MAHAKARYA ESTETIK &amp;<br>
                    <span class="bg-gradient-to-r from-amber-300 via-yellow-500 to-yellow-600 bg-clip-text text-transparent">
                        PRESISI DIGITAL
                    </span>
                </h1>

                <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-100 leading-relaxed font-medium drop-shadow-[0_2px_6px_rgba(0,0,0,0.95)]">
                    Mencetak lulusan yang menguasai seni kriya tradisional bernilai ekonomi tinggi serta memiliki sertifikasi kompetensi industri digital terkini.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="/tracer-study" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-white font-bold text-base hover:scale-105 transition-all shadow-lg shadow-amber-500/25 text-center">
                        Lihat Tracer Study Alumni
                    </a>
                    <a href="#jurusan" class="w-full sm:w-auto px-8 py-4 rounded-full border border-white/20 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white font-semibold text-base transition-all text-center">
                        Pelajari Kompetensi
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Navigation Arrows -->
    <button id="prev-slide" class="absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full glass-card border border-white/10 flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 hover:scale-105 hover:border-cyan-500/50 transition-all focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
    </button>
    <button id="next-slide" class="absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full glass-card border border-white/10 flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 hover:scale-105 hover:border-cyan-500/50 transition-all focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </button>

    <!-- Slide Dots Indicators -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-3">
        <button class="slide-dot w-3 h-3 rounded-full bg-white/20 transition-all duration-300 focus:outline-none" data-slide="0"></button>
        <button class="slide-dot w-3 h-3 rounded-full bg-white/20 transition-all duration-300 focus:outline-none" data-slide="1"></button>
        <button class="slide-dot w-3 h-3 rounded-full bg-white/20 transition-all duration-300 focus:outline-none" data-slide="2"></button>
    </div>
</section>

<!-- Floating Stats Section (moved here right below the Hero Slider) -->
<section class="relative z-20 -mt-12 max-w-5xl mx-auto px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
        <div class="p-6 rounded-2xl glass-card text-center shadow-lg border border-white/5 backdrop-blur-md">
            <div class="text-3xl sm:text-4xl font-display font-extrabold text-cyan-400">98%</div>
            <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Serapan Kerja Alumni</div>
        </div>
        <div class="p-6 rounded-2xl glass-card text-center shadow-lg border border-white/5 backdrop-blur-md">
            <div class="text-3xl sm:text-4xl font-display font-extrabold text-purple-400">12+</div>
            <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Kerjasama Industri</div>
        </div>
        <div class="p-6 rounded-2xl glass-card text-center shadow-lg border border-white/5 backdrop-blur-md">
            <div class="text-3xl sm:text-4xl font-display font-extrabold text-amber-400">2,400+</div>
            <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Karya Seni Terjual</div>
        </div>
        <div class="p-6 rounded-2xl glass-card text-center shadow-lg border border-white/5 backdrop-blur-md">
            <div class="text-3xl sm:text-4xl font-display font-extrabold text-emerald-400">4</div>
            <div class="text-xs text-slate-400 mt-1 uppercase tracking-wider">Jurusan Unggulan</div>
        </div>
    </div>
</section>

<!-- Profil Singkat Section -->
<section id="profil-sekolah" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-t border-amber-900/5 relative overflow-hidden">
    <!-- Visual Effect Glows -->
    <div class="absolute w-[30rem] h-[30rem] rounded-full bg-amber-500/5 blur-[120px] -top-12 -right-12 pointer-events-none"></div>
    <div class="absolute w-[30rem] h-[30rem] rounded-full bg-yellow-600/5 blur-[120px] -bottom-12 -left-12 pointer-events-none"></div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
        <!-- Text Content -->
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-xs text-amber-800 font-semibold uppercase tracking-wider font-display">
                Profil Singkat
            </div>
            
            <h2 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight leading-tight">
                Menghubungkan <span class="bg-gradient-to-r from-amber-500 to-amber-700 bg-clip-text text-transparent">Tradisi Kriya</span> dengan Masa Depan Digital
            </h2>
            
            <p class="text-slate-300 leading-relaxed text-base font-light">
                SMK Kriya hadir sebagai institusi pendidikan kejuruan pionir yang mendobrak batas antara keahlian seni kriya tradisional dan teknologi digital mutakhir. Kami percaya bahwa nilai estetika tinggi dari kriya kayu dan kriya tekstil dapat disinergikan secara dinamis dengan keahlian multimedia serta rekayasa jaringan modern.
            </p>

            <!-- Key Features / Vision Points -->
            <div class="space-y-4 pt-2">
                <div class="flex gap-4 items-start">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-amber-500/10 border border-amber-500/20 text-amber-700 flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-sm">Kurikulum Integratif & Terapan</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Memadukan praktek langsung studio kriya fisik dengan teknologi simulasi digital dan modeling 3D.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-amber-500/10 border border-amber-500/20 text-amber-700 flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-sm">Fasilitas Laboratorium &amp; Studio Modern</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Ruang belajar yang representatif lengkap dengan peralatan kerajinan kayu, mesin tenun, workstation multimedia, dan lab jaringan.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4 pt-4">
                <a href="/tentang/guru" class="px-6 py-3 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-white font-semibold text-sm hover:scale-105 transition-all text-center shadow-md shadow-amber-500/15">
                    Kenali Guru &amp; Staf
                </a>
                <a href="/prestasi" class="px-6 py-3 rounded-full glass-card hover:bg-amber-900/5 text-amber-800 font-semibold text-sm transition-all text-center">
                    Lihat Prestasi Kami
                </a>
            </div>
        </div>

        <!-- Visual Image Container -->
        <div class="lg:col-span-6 group relative">
            <!-- Neon background glows specific to the image container -->
            <div class="absolute -inset-1.5 bg-gradient-to-r from-amber-500 to-amber-700 rounded-[2.5rem] blur opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
            
            <div class="relative overflow-hidden rounded-[2rem] border border-amber-900/10 bg-[#faf8f5] p-2 shadow-2xl">
                <img src="{{ asset('images/smk_kriya_profile.png') }}" 
                     alt="SMK Kriya Modern Studio Profile" 
                     class="w-full h-[400px] object-cover rounded-[1.75rem] transform group-hover:scale-[1.03] transition-all duration-700 ease-out">
                
                <!-- Overlay with subtle text info -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
                    <p class="text-xs text-amber-400 uppercase tracking-widest font-semibold font-display">Ruang Inovasi Kreatif</p>
                    <h3 class="text-xl font-bold mt-1 font-display" style="color: #ffffff !important;">Sinergi Seni Kriya &amp; Teknologi Jaringan</h3>
                    <p class="text-xs mt-1" style="color: #cbd5e1 !important;">Menginspirasi generasi baru kreator, desainer, dan insinyur digital.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jurusan Section -->
<section id="jurusan" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 scroll-mt-24">
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h2 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight">
            KOMPETENSI KEAHLIAN
        </h2>
        <div class="w-20 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full"></div>
        <p class="text-slate-400 leading-relaxed">
            Menghasilkan lulusan yang siap bersaing secara global dengan keahlian kriya estetik dan keahlian rekayasa jaringan digital terdepan.
        </p>
    </div>

    <!-- Majors Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($majors as $major)
            @php
                $shadowColor = $major->accent_color . '22';
                $borderColor = $major->accent_color . '33';
            @endphp
            <div class="p-8 glass-card flex flex-col justify-between relative overflow-hidden group hover:scale-[1.02]"
                 style="border-color: {{ $borderColor }}; box-shadow: 0 8px 32px 0 {{ $shadowColor }};">
                
                <!-- Background ambient glow on hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-transparent to-black/80 z-0"></div>
                <div class="absolute top-[-20%] right-[-20%] w-48 h-48 rounded-full blur-[80px] opacity-20 group-hover:opacity-40 transition-opacity" style="background-color: {{ $major->accent_color }}"></div>

                <div class="relative z-10 space-y-6">
                    <!-- Major Icon & Accent -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center font-display font-black text-lg border" 
                         style="background-color: {{ $major->accent_color }}1a; border-color: {{ $major->accent_color }}55; color: {{ $major->accent_color }}">
                        {{ strtoupper(substr($major->slug, 0, 2)) }}
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-2xl font-display font-extrabold tracking-tight group-hover:text-glow-{{ $major->slug }} transition-all" style="color: {{ $major->accent_color }}">
                            {{ $major->name }}
                        </h3>
                        <p class="text-sm text-slate-300 leading-relaxed line-clamp-3">
                            {{ $major->description }}
                        </p>
                    </div>

                    <!-- Curriculum Badges -->
                    @if($major->curriculum)
                        <div class="flex flex-wrap gap-2 pt-2">
                            @foreach($major->curriculum as $subject)
                                <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-white/5 border border-white/10 text-slate-400">
                                    {{ $subject }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="relative z-10 pt-8 flex items-center justify-between">
                    <a href="/jurusan/{{ $major->slug }}" class="inline-flex items-center gap-1 text-sm font-semibold hover:gap-2 transition-all" style="color: {{ $major->accent_color }}">
                        Eksplorasi Program
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Kabar Sekolah (News) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-t border-white/5">
    <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-16 gap-4">
        <div class="space-y-4">
            <h2 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight">
                KABAR SEKOLAH
            </h2>
            <p class="text-slate-400 max-w-xl">
                Ikuti terus perkembangan, prestasi, agenda kegiatan, dan berita terbaru dari portal resmi sekolah.
            </p>
        </div>
        <a href="/berita" class="px-6 py-3 rounded-full glass-card hover:bg-white/5 text-sm font-semibold text-cyan-400 flex items-center gap-2">
            Lihat Semua Berita
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($news as $item)
            <article class="glass-card overflow-hidden group hover:glass-card-hover flex flex-col h-full justify-between">
                <div>
                    <!-- Thumbnail -->
                    <div class="h-48 bg-slate-900 overflow-hidden relative border-b border-white/5">
                        @if($item->image_path)
                            <img src="/storage/{{ $item->image_path }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-950 text-slate-600 font-display font-bold text-xs uppercase tracking-widest">
                                NO THUMBNAIL
                            </div>
                        @endif
                        <span class="absolute top-4 left-4 px-2.5 py-1 rounded-md text-[10px] font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 uppercase">
                            News
                        </span>
                    </div>

                    <!-- Title & Excerpt -->
                    <div class="p-6 space-y-3">
                        <h3 class="text-lg font-bold line-clamp-2 text-white group-hover:text-cyan-400 transition-colors">
                            {{ $item->title }}
                        </h3>
                        <div class="text-sm text-slate-400 line-clamp-3 leading-relaxed font-light">
                            {!! strip_tags($item->content) !!}
                        </div>
                    </div>
                </div>

                <!-- Footer Article -->
                <div class="px-6 pb-6 pt-2 border-t border-white/5 flex items-center justify-between text-xs text-slate-500">
                    <span>{{ $item->published_at?->format('d M Y') ?? $item->created_at->format('d M Y') }}</span>
                    <a href="/berita/{{ $item->slug }}" class="text-cyan-400 font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </article>
        @empty
            <div class="col-span-3 text-center p-12 glass-card text-slate-500">
                Belum ada berita yang diterbitkan saat ini.
            </div>
        @endforelse
    </div>
</section>

<!-- Kontak & Lokasi Section -->
<section id="kontak-lokasi" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-t border-amber-900/5">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
        
        <!-- Info Column -->
        <div class="lg:col-span-5 flex flex-col justify-between space-y-8">
            <div class="space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-xs text-amber-800 font-semibold uppercase tracking-wider font-display">
                    Hubungi &amp; Kunjungi Kami
                </div>
                <h2 class="text-3xl sm:text-5xl font-display font-extrabold tracking-tight leading-tight text-glow-kayu">
                    Lokasi Kampus SMK Kriya
                </h2>
                <p class="text-slate-600 font-light">
                    Kunjungi studio kriya, laboratorium rekayasa jaringan, dan ruang inovasi kreatif kami. Kami sangat senang menyambut kunjungan industri, studi banding, maupun kunjungan calon siswa baru.
                </p>
            </div>

            <!-- Info Details Card -->
            <div class="p-8 glass-card border border-amber-900/10 bg-white/70 shadow-lg space-y-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-amber-500/10 border border-amber-500/20 text-amber-700 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-amber-900 text-sm">Alamat Sekolah</h4>
                        <p class="text-slate-600 text-sm mt-1 leading-relaxed">{{ school_setting('address', 'Jl. Kriya Modern No. 26 Surakarta, Indonesia') }}</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-amber-500/10 border border-amber-500/20 text-amber-700 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-amber-900 text-sm">Jam Operasional</h4>
                        <p class="text-slate-600 text-sm mt-1 leading-relaxed">{{ school_setting('opening_hours', 'Senin - Jumat, 07:00 - 15:00') }}</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-amber-500/10 border border-amber-500/20 text-amber-700 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-amber-900 text-sm">Hubungi Kami</h4>
                        <p class="text-slate-600 text-sm mt-1 leading-relaxed">info@webkriya.sch.id<br>+62 271 123456</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Column -->
        <div class="lg:col-span-7 relative group">
            <!-- Glow background -->
            <div class="absolute -inset-1.5 bg-gradient-to-r from-amber-500 to-amber-700 rounded-[2.5rem] blur opacity-10 group-hover:opacity-25 transition duration-1000"></div>
            
            <div class="relative h-full min-h-[400px] overflow-hidden rounded-[2rem] border border-amber-900/10 bg-white p-2 shadow-xl flex">
                @php
                    $mapsUrl = school_setting('google_maps_url');
                    if ($mapsUrl && str_starts_with(trim($mapsUrl), '<iframe')) {
                        preg_match('/src="([^"]+)"/', $mapsUrl, $matches);
                        $mapsUrl = $matches[1] ?? null;
                    }
                @endphp
                @if($mapsUrl)
                    <iframe 
                        src="{{ $mapsUrl }}" 
                        class="w-full h-full min-h-[400px] rounded-[1.75rem] border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                @else
                    <div class="w-full h-full min-h-[400px] rounded-[1.75rem] bg-slate-100 flex flex-col items-center justify-center text-slate-400 p-8 text-center space-y-4">
                        <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <p class="text-sm font-semibold">Peta belum diatur.</p>
                        <p class="text-xs max-w-xs">Pengelola sekolah dapat memasukkan URL Iframe Google Maps melalui halaman panel admin.</p>
                    </div>
                @endif
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide-item');
    const dots = document.querySelectorAll('.slide-dot');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');
    const sliderContainer = document.getElementById('hero-slider');
    
    let currentSlide = 0;
    let autoplayInterval;
    const intervalTime = 6000;

    function showSlide(index) {
        // Handle wrapping
        if (index >= slides.length) currentSlide = 0;
        else if (index < 0) currentSlide = slides.length - 1;
        else currentSlide = index;

        // Update slides
        slides.forEach((slide, i) => {
            if (i === currentSlide) {
                slide.classList.remove('opacity-0', 'pointer-events-none');
                slide.classList.add('opacity-100');
                // Active zoom effect
                const img = slide.querySelector('.slide-bg');
                if (img) {
                    img.classList.add('scale-[1.04]');
                    img.classList.remove('scale-100');
                }
            } else {
                slide.classList.add('opacity-0', 'pointer-events-none');
                slide.classList.remove('opacity-100');
                const img = slide.querySelector('.slide-bg');
                if (img) {
                    img.classList.remove('scale-[1.04]');
                    img.classList.add('scale-100');
                }
            }
        });

        // Update dots
        dots.forEach((dot, i) => {
            if (i === currentSlide) {
                dot.classList.remove('bg-white/20', 'w-3');
                dot.classList.add('bg-amber-500', 'w-8', 'shadow-[0_0_10px_rgba(245,158,11,0.5)]');
            } else {
                dot.classList.add('bg-white/20', 'w-3');
                dot.classList.remove('bg-amber-500', 'w-8', 'shadow-[0_0_10px_rgba(245,158,11,0.5)]');
            }
        });
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Event listeners
    if (prevBtn) prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoplay();
    });
    
    if (nextBtn) nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoplay();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            resetAutoplay();
        });
    });

    // Autoplay setup
    function startAutoplay() {
        autoplayInterval = setInterval(nextSlide, intervalTime);
    }

    // Hover to pause
    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    function resetAutoplay() {
        stopAutoplay();
        startAutoplay();
    }

    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopAutoplay);
        sliderContainer.addEventListener('mouseleave', startAutoplay);
    }

    // Initialize first slide
    showSlide(0);
    startAutoplay();
});
</script>
@endsection
