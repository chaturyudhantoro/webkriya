<div class="glass-card max-w-2xl mx-auto p-8 border border-white/5 shadow-2xl relative overflow-hidden">
    <!-- Ambient light -->
    <div class="absolute w-[20rem] h-[20rem] rounded-full bg-cyan-500/5 blur-[100px] -top-10 -right-10 pointer-events-none"></div>

    <!-- Stepper Header -->
    @if($currentStep <= 3)
        <div class="mb-10">
            <div class="flex items-center justify-between text-xs font-semibold uppercase tracking-wider text-slate-500">
                <span class="{{ $currentStep === 1 ? 'text-cyan-400 font-bold' : '' }}">1. Data Diri</span>
                <span class="{{ $currentStep === 2 ? 'text-cyan-400 font-bold' : '' }}">2. Pilihan Jurusan</span>
                <span class="{{ $currentStep === 3 ? 'text-cyan-400 font-bold' : '' }}">3. Berkas</span>
            </div>
            <div class="w-full bg-white/5 h-1.5 rounded-full mt-3 overflow-hidden">
                <div class="bg-gradient-to-r from-cyan-400 to-blue-600 h-full transition-all duration-300" style="width: {{ ($currentStep - 1) * 50 }}%;"></div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submitForm" class="space-y-6">
        @if ($currentStep === 1)
            <!-- Step 1: Personal Data -->
            <div class="space-y-6">
                <div class="space-y-2">
                    <h3 class="text-xl font-display font-bold text-white">Informasi Data Diri</h3>
                    <p class="text-xs text-slate-400 font-light">Lengkapi data diri Anda sesuai dokumen resmi Kartu Keluarga/Akta Kelahiran.</p>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Nama Lengkap</label>
                        <input type="text" wire:model="full_name" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Masukkan nama lengkap Anda">
                        @error('full_name') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">NISN (10 Digit)</label>
                        <input type="text" wire:model="nisn" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Contoh: 0123456789">
                        @error('nisn') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Alamat Email</label>
                            <input type="email" wire:model="email" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="nama@email.com">
                            @error('email') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Nomor WhatsApp</label>
                            <input type="text" wire:model="whatsapp_number" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none transition-colors" placeholder="Contoh: 08123456789">
                            @error('whatsapp_number') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="button" wire:click="nextStep" class="px-6 py-3 rounded-full bg-cyan-500 text-black font-bold text-sm shadow-[0_0_15px_rgba(6,182,212,0.3)] hover:scale-105 transition-all">
                        Langkah Selanjutnya
                    </button>
                </div>
            </div>
        @endif

        @if ($currentStep === 2)
            <!-- Step 2: Major Selection -->
            <div class="space-y-6">
                <div class="space-y-2">
                    <h3 class="text-xl font-display font-bold text-white">Pilihan Jurusan</h3>
                    <p class="text-xs text-slate-400 font-light">Tentukan prioritas program keahlian yang ingin Anda ikuti.</p>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Pilihan Jurusan Prioritas 1</label>
                        <select wire:model="major_priority_1" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-cyan-500 focus:outline-none transition-colors appearance-none">
                            <option value="" class="bg-[#121420]">-- Pilih Jurusan Utama --</option>
                            @foreach($majors as $major)
                                <option value="{{ $major->id }}" class="bg-[#121420]">{{ $major->name }}</option>
                            @endforeach
                        </select>
                        @error('major_priority_1') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Pilihan Jurusan Prioritas 2</label>
                        <select wire:model="major_priority_2" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-cyan-500 focus:outline-none transition-colors appearance-none">
                            <option value="" class="bg-[#121420]">-- Pilih Jurusan Cadangan --</option>
                            @foreach($majors as $major)
                                <option value="{{ $major->id }}" class="bg-[#121420]">{{ $major->name }}</option>
                            @endforeach
                        </select>
                        @error('major_priority_2') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex justify-between pt-4">
                    <button type="button" wire:click="prevStep" class="px-6 py-3 rounded-full border border-white/10 text-slate-300 font-semibold text-sm hover:bg-white/5 transition-all">
                        Kembali
                    </button>
                    <button type="button" wire:click="nextStep" class="px-6 py-3 rounded-full bg-cyan-500 text-black font-bold text-sm shadow-[0_0_15px_rgba(6,182,212,0.3)] hover:scale-105 transition-all">
                        Langkah Selanjutnya
                    </button>
                </div>
            </div>
        @endif

        @if ($currentStep === 3)
            <!-- Step 3: Document uploads -->
            <div class="space-y-6">
                <div class="space-y-2">
                    <h3 class="text-xl font-display font-bold text-white">Unggah Dokumen Syarat</h3>
                    <p class="text-xs text-slate-400 font-light">Unggah dokumen resmi pendukung pendaftaran (PDF/JPG/PNG, Maks. 2MB per file).</p>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Ijazah Terakhir / SKL (PDF/Gambar)</label>
                        <input type="file" wire:model="document_ijazah" class="w-full text-sm text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-cyan-500/10 file:text-cyan-400 hover:file:bg-cyan-500/20 file:cursor-pointer">
                        @error('document_ijazah') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Kartu Keluarga (PDF/Gambar)</label>
                        <input type="file" wire:model="document_kk" class="w-full text-sm text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-cyan-500/10 file:text-cyan-400 hover:file:bg-cyan-500/20 file:cursor-pointer">
                        @error('document_kk') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Pas Foto Resmi (Maks. 1MB, JPG/PNG)</label>
                        <input type="file" wire:model="document_foto" class="w-full text-sm text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-cyan-500/10 file:text-cyan-400 hover:file:bg-cyan-500/20 file:cursor-pointer">
                        @error('document_foto') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Livewire Loading Indicator -->
                <div wire:loading wire:target="document_ijazah, document_kk, document_foto" class="text-xs text-cyan-400 animate-pulse">
                    Sedang mengunggah berkas, harap tunggu...
                </div>

                <div class="flex justify-between pt-4">
                    <button type="button" wire:click="prevStep" class="px-6 py-3 rounded-full border border-white/10 text-slate-300 font-semibold text-sm hover:bg-white/5 transition-all">
                        Kembali
                    </button>
                    <button type="submit" class="px-8 py-3 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 text-black font-bold text-sm shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:scale-105 transition-all">
                        Kirim Pendaftaran
                    </button>
                </div>
            </div>
        @endif

        @if ($currentStep === 4)
            <!-- Step 4: Success Message -->
            <div class="text-center py-8 space-y-6">
                <!-- Checkmark Animation Glow -->
                <div class="w-20 h-20 bg-cyan-500/10 border-2 border-cyan-500 rounded-full flex items-center justify-center mx-auto shadow-[0_0_30px_rgba(6,182,212,0.3)]">
                    <svg class="w-10 h-10 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>

                <div class="space-y-2">
                    <h3 class="text-2xl font-display font-extrabold text-white">{{ $successMessage }}</h3>
                    <p class="text-sm text-slate-400 font-light max-w-sm mx-auto">Nomor registrasi pendaftaran Anda berhasil dibuat. Simpan kode ini untuk mengecek status secara berkala.</p>
                </div>

                <!-- Registration Number Display -->
                <div class="inline-block px-8 py-4 rounded-2xl bg-white/5 border border-white/10 text-3xl font-display font-black text-glow-cyan tracking-wider text-cyan-400">
                    {{ $regNumber }}
                </div>

                <div class="pt-6 space-y-4">
                    <p class="text-xs text-slate-500">Notifikasi resmi bukti pendaftaran telah dikirimkan ke alamat email dan nomor WhatsApp Anda.</p>
                    <a href="/" class="inline-block px-6 py-3 rounded-full border border-white/10 text-slate-300 font-semibold text-sm hover:bg-white/5 transition-all">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        @endif
    </form>
</div>
