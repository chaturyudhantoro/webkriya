@extends('layouts.app')

@section('title', 'Alumni Tracer Study - WebKriya Modern School')

@section('content')
<!-- Header Page -->
<section class="py-16 md:py-24 px-4 text-center border-b border-[#3d2b1f]/10 bg-gradient-to-b from-[#f3eee3] to-[#fbfaf7]">
    <div class="max-w-3xl mx-auto space-y-4">
        <h1 class="text-3xl sm:text-5xl font-display font-black leading-none text-white">
            TRACER STUDY
        </h1>
        <p class="text-slate-400 text-sm sm:text-base leading-relaxed font-light">
            Membantu sekolah dalam menelusuri karier alumni guna perbaikan mutu pendidikan dan jejaring alumni yang solid.
        </p>
    </div>
</section>

<!-- Form & Testimonial Section -->
<section class="max-w-6xl mx-auto px-4 py-20 grid grid-cols-1 lg:grid-cols-3 gap-12">
    <!-- Recent Testimonials -->
    <div class="space-y-6">
        <h3 class="text-lg font-display font-extrabold text-white">Kabar Alumni Kami</h3>
        
        <div class="space-y-4">
            <div class="p-5 rounded-2xl glass-card border border-white/5 space-y-3">
                <p class="text-xs text-slate-400 italic">"Belajar Multimedia di WebKriya membekali saya skill UI/UX yang relevan dengan kebutuhan startup global. Sekarang bekerja sebagai Product Designer di Singapura."</p>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-cyan-500/20 text-cyan-400 font-display font-bold flex items-center justify-center text-xs">BP</div>
                    <div>
                        <span class="block text-xs font-bold text-white">Bagas Pratama</span>
                        <span class="block text-[10px] text-slate-500">Alumni Multimedia (Lulus 2024)</span>
                    </div>
                </div>
            </div>

            <div class="p-5 rounded-2xl glass-card border border-white/5 space-y-3">
                <p class="text-xs text-slate-400 italic">"Kriya Kayu mengajarkan saya detail pertukangan halus dan desain furnitur modern. Jasa kustom furnitur saya berkembang pesat di Bali."</p>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-amber-500/20 text-amber-400 font-display font-bold flex items-center justify-center text-xs">AM</div>
                    <div>
                        <span class="block text-xs font-bold text-white">Ahmad Mustofa</span>
                        <span class="block text-[10px] text-slate-500">Alumni Kriya Kayu (Lulus 2023)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tracer Form -->
    <div class="lg:col-span-2">
        <div class="glass-card p-8 border border-white/5">
            <div class="space-y-2 mb-6">
                <h3 class="text-xl font-display font-bold text-white">Formulir Penelusuran Alumni</h3>
                <p class="text-xs text-slate-400">Harap luangkan waktu sejenak untuk memperbarui status aktivitas terkini Anda.</p>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/tracer-study" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Nama Lengkap</label>
                        <input type="text" name="full_name" required class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Masukkan nama lengkap Anda">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Tahun Kelulusan</label>
                        <input type="number" name="graduation_year" required class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Contoh: 2025">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Jurusan</label>
                        <select name="major_id" required class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-cyan-500 focus:outline-none transition-colors appearance-none">
                            <option value="" class="bg-[#121420]">-- Pilih Jurusan --</option>
                            @foreach($majors as $major)
                                <option value="{{ $major->id }}" class="bg-[#121420]">{{ $major->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Status Aktivitas Saat Ini</label>
                        <select name="status" required class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-cyan-500 focus:outline-none transition-colors appearance-none">
                            <option value="bekerja" class="bg-[#121420]">Bekerja</option>
                            <option value="kuliah" class="bg-[#121420]">Kuliah</option>
                            <option value="wirausaha" class="bg-[#121420]">Wirausaha</option>
                            <option value="mencari_kerja" class="bg-[#121420]">Mencari Kerja</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Instansi / Universitas / Usaha</label>
                        <input type="text" name="institution" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Contoh: PT. Sumber Makmur / Universitas Indonesia / Toko Batik">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Posisi / Jurusan / Bidang Usaha</label>
                        <input type="text" name="position" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Contoh: Web Developer / Teknik Informatika / Kerajinan Kayu">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Pesan & Testimoni untuk Sekolah</label>
                    <textarea name="testimonials" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors h-28" placeholder="Tuliskan pengalaman berharga Anda selama bersekolah..."></textarea>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="px-8 py-3 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 text-black font-bold text-sm shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:scale-105 transition-all">
                        Kirim Tracer Study
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
