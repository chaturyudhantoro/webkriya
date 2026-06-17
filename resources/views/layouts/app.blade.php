<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'WebKriya Modern School')</title>
    <meta name="description" content="@yield('meta_description', 'Portal Website Sekolah Modern dan Futuristik dengan Program Keahlian Unggulan Kriya Kayu, Kriya Tekstil, Multimedia, dan TJKT.')">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased min-h-screen flex flex-col font-sans selection:bg-amber-400 selection:text-black">
    <!-- Cyber Background Decoration -->
    <div class="fixed inset-0 pointer-events-none z-[-1] overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-amber-500/5 blur-[150px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] rounded-full bg-yellow-600/5 blur-[150px]"></div>
    </div>

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Identity -->
                <div class="flex items-center gap-3">
                    <a href="/" class="flex items-center gap-2 group">
                        <span class="text-2xl font-display font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent group-hover:opacity-95 transition-opacity">
                            {{ school_setting('website_name', 'WEBKRIYA') }}
                        </span>
                        <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-amber-500/10 text-amber-700 border border-amber-500/20 uppercase tracking-widest">
                            {{ school_setting('academic_year', '2026') }}
                        </span>
                    </a>
                </div>

                <!-- Main Menu -->
                <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                    <a href="/" class="hover:text-cyan-400 transition-colors">Beranda</a>
                    <div class="relative group/menu">
                        <button class="flex items-center gap-1 hover:text-purple-400 transition-colors focus:outline-none">
                            Jurusan
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-56 rounded-2xl glass-card border border-white/5 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-300 py-2 p-1">
                            <a href="/jurusan/kriya-kayu" class="flex items-center px-4 py-2.5 rounded-xl hover:bg-white/5 hover:text-amber-400 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-amber-500 mr-3"></span>
                                Kriya Kayu
                            </a>
                            <a href="/jurusan/kriya-tekstil" class="flex items-center px-4 py-2.5 rounded-xl hover:bg-white/5 hover:text-purple-400 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-purple-500 mr-3"></span>
                                Kriya Tekstil
                            </a>
                            <a href="/jurusan/multimedia" class="flex items-center px-4 py-2.5 rounded-xl hover:bg-white/5 hover:text-cyan-400 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-cyan-500 mr-3"></span>
                                Multimedia
                            </a>
                            <a href="/jurusan/tjkt" class="flex items-center px-4 py-2.5 rounded-xl hover:bg-white/5 hover:text-emerald-400 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 mr-3"></span>
                                TJKT
                            </a>
                        </div>
                    </div>
                    <a href="/berita" class="hover:text-cyan-400 transition-colors">Berita</a>
                    <a href="/tracer-study" class="hover:text-cyan-400 transition-colors">Tracer Study</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-4">
                    <a href="/ppdb" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-white font-semibold text-sm shadow-[0_0_20px_rgba(197,160,89,0.2)] transition-all hover:scale-105">
                        PPDB Online
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-white/5 bg-black/60 backdrop-blur-md mt-20 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Col 1: Identity -->
                <div class="md:col-span-2">
                    <span class="text-xl font-display font-extrabold bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent">
                        {{ school_setting('website_name', 'WEBKRIYA MODERN SCHOOL') }}
                    </span>
                    <p class="mt-4 text-sm text-slate-400 max-w-sm leading-relaxed">
                        Menyiapkan talenta kreatif dan kompeten di bidang Kriya, Multimedia, serta Teknologi Jaringan untuk menghadapi era digital industri masa depan.
                    </p>
                </div>

                <!-- Col 2: Navigation -->
                <div>
                    <h4 class="text-sm font-semibold text-white tracking-widest uppercase mb-4">Akses Cepat</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="/" class="hover:text-cyan-400 transition-colors">Beranda</a></li>
                        <li><a href="/ppdb" class="hover:text-cyan-400 transition-colors">PPDB Online</a></li>
                        <li><a href="/berita" class="hover:text-cyan-400 transition-colors">Kabar Berita</a></li>
                        <li><a href="/tracer-study" class="hover:text-cyan-400 transition-colors">Tracer Study</a></li>
                        <li><a href="/admin" class="hover:text-cyan-400 transition-colors">Portal Admin</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact Info -->
                <div>
                    <h4 class="text-sm font-semibold text-white tracking-widest uppercase mb-4">Kontak Kami</h4>
                    <ul class="space-y-3 text-sm text-slate-400 leading-relaxed">
                        <li>
                            <strong class="text-white block text-xs uppercase tracking-wider mb-0.5">Alamat:</strong>
                            {{ school_setting('address', 'Jl. Kriya Modern No. 26 Surakarta, Indonesia') }}
                        </li>
                        <li>
                            <strong class="text-white block text-xs uppercase tracking-wider mb-0.5">Jam Buka:</strong>
                            {{ school_setting('opening_hours', 'Senin - Jumat, 07:00 - 15:00') }}
                        </li>
                        <li>
                            <strong class="text-white block text-xs uppercase tracking-wider mb-0.5">Email:</strong>
                            info@webkriya.sch.id
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/5 mt-8 pt-8 text-center text-xs text-slate-500">
                &copy; {{ date('Y') }} WebKriya School. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
