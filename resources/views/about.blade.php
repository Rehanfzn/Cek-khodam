<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Cek Khodam</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#070a07] text-[#e8e0d0] font-sans overflow-x-hidden">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-30 flex items-center justify-between h-14 px-4 sm:px-6 bg-[#0a0f0a]/80 backdrop-blur-2xl shadow-[0_4px_30px_rgba(0,0,0,0.5)] before:content-[''] before:absolute before:inset-0 before:bg-gradient-to-r before:from-[#d4a843]/[0.02] before:via-transparent before:to-[#2d5a27]/[0.02] before:pointer-events-none">
        <a href="/" class="flex items-center gap-2.5 shrink-0">
            <span class="text-[#d4a843] text-xl leading-none">ꦕꦺꦏ꧀​ꦏꦺꦴꦝꦩ꧀</span>
            <span class="text-[11px] text-[#d4a843]/50 tracking-[0.15em] uppercase font-light hidden sm:inline">Cek Khodam</span>
        </a>

        <div class="flex items-center gap-1">
            <a href="/" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Khodam</a>
            <a href="/jodoh" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Jodoh</a>
            <a href="/weton" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Weton</a>
            <a href="/tentang" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 bg-[#d4a843]/[0.04]">Tentang</a>
            <label for="mobileMenu" class="md:hidden text-[#d4a843]/60 text-lg cursor-pointer hover:text-[#d4a843] transition-colors" aria-label="Toggle menu">
                ☰
            </label>
        </div>
    </nav>

    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#d4a843]/10 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute -top-20 right-20 w-80 h-80 bg-[#2d5a27]/20 rounded-full blur-3xl animate-float-medium" style="animation-delay: -3s;"></div>
        <div class="absolute bottom-40 left-1/4 w-64 h-64 bg-[#d4a843]/5 rounded-full blur-3xl animate-float-fast" style="animation-delay: -5s;"></div>
        <div class="absolute top-1/3 -right-32 w-72 h-72 bg-[#1a3a1a]/30 rounded-full blur-3xl animate-float-medium" style="animation-delay: -7s;"></div>
        <div class="absolute bottom-20 -right-20 w-96 h-96 bg-[#d4a843]/8 rounded-full blur-3xl animate-float-slow" style="animation-delay: -2s;"></div>
    </div>

    <main class="relative z-10 min-h-screen flex flex-col items-center justify-center px-6 py-16 pt-[80px]">
        <div class="w-full max-w-xl mx-auto text-center">
            <div class="bg-[#0d120d]/40 backdrop-blur-sm border border-[#ffffff]/[0.05] rounded-2xl p-8 md:p-10 shadow-xl">
                <div class="mb-2">
                    <span class="text-[#d4a843]/40 text-xs tracking-[0.3em] uppercase font-light">nusantara</span>
                </div>
                <h1 class="font-serif text-3xl md:text-4xl font-bold text-[#d4a843] mb-2">ꦕꦺꦏ꧀​ꦏꦺꦴꦝꦩ꧀</h1>
                <p class="text-[#a09070] text-xs tracking-[0.2em] uppercase mb-8">Cek Khodam</p>

                <div class="text-left space-y-5 text-[#b0a080] text-sm md:text-base leading-relaxed">
                    <p>
                        <strong class="text-[#d4a843]">Cek Khodam</strong> adalah aplikasi web interaktif yang mengeksplorasi warisan budaya Jawa melalui penentuan <em>khodam</em> — pendamping spiritual — berdasarkan nama dan tanggal lahir.
                    </p>
                    <p>
                        Menggabungkan perhitungan primbon Jawa klasik, sistem penanggalan tradisional Jawa (weton, pasaran, neptu), dan elemen mistis Nusantara untuk menciptakan pengalaman yang autentik dan mendalam.
                    </p>

                    <div class="border-t border-[#ffffff]/[0.06] pt-5 mt-6">
                        <h3 class="font-serif text-lg font-semibold text-[#d4a843] mb-4">Fitur Utama</h3>
                        <ul class="space-y-2.5">
                            <li class="flex items-start gap-3">
                                <span class="text-[#d4a843] text-sm mt-0.5 shrink-0">✦</span>
                                <span><strong class="text-[#e8e0d0]">Penentuan Khodam:</strong> Sistem memilih khodam secara acak dari 35 entitas mitologis Nusantara seperti Harimau Sumatera, Elang Jawa, dan Naga Komodo.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#d4a843] text-sm mt-0.5 shrink-0">✦</span>
                                <span><strong class="text-[#e8e0d0]">Kalender Jawa:</strong> Konversi tanggal Masehi ke penanggalan Jawa lengkap dengan bulan, tahun, dan windu.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#d4a843] text-sm mt-0.5 shrink-0">✦</span>
                                <span><strong class="text-[#e8e0d0]">Weton &amp; Pasaran:</strong> Menampilkan hari pasaran lengkap dengan neptu dan karakter primbon berdasarkan weton kelahiran.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#d4a843] text-sm mt-0.5 shrink-0">✦</span>
                                <span><strong class="text-[#e8e0d0]">Horror Harian:</strong> Informasi kejadian mistis dari berbagai daerah Nusantara yang terkait dengan tanggal lahir Anda.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#d4a843] text-sm mt-0.5 shrink-0">✦</span>
                                <span><strong class="text-[#e8e0d0]">Bagikan Hasil:</strong> Generasi gambar khodam kustom dan teks yang bisa dibagikan ke media sosial.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#d4a843] text-sm mt-0.5 shrink-0">✦</span>
                                <span><strong class="text-[#e8e0d0]">Aksara Jawa:</strong> Tampilan aksara Jawa untuk nama khodam dan elemen-elemen primbon.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border-t border-[#ffffff]/[0.06] pt-5 mt-6">
                        <h3 class="font-serif text-lg font-semibold text-[#d4a843] mb-4">Cara Kerja</h3>
                        <ol class="space-y-2.5 list-decimal list-inside marker:text-[#d4a843]">
                            <li>Masukkan nama lengkap Anda</li>
                            <li>Pilih tanggal lahir menggunakan kalender</li>
                            <li>Sistem menghitung weton, pasaran, dan neptu berdasarkan tanggal</li>
                            <li>Khodam dipilih secara acak dari 35 entitas Nusantara</li>
                            <li>Hasil ditampilkan lengkap dengan primbon, weton, dan kejadian horror harian</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <a href="/" class="inline-flex items-center gap-2 text-[#a09070] hover:text-[#d4a843] transition-colors text-sm tracking-wider uppercase">
                    <span>←</span>
                    <span class="underline underline-offset-4 decoration-[#2d3a20]/50 hover:decoration-[#d4a843]/50">Kembali ke Beranda</span>
                </a>
            </div>
        </div>
    </main>

    <footer class="mt-auto pt-16 pb-6 text-center">
        <p id="footerText" class="text-[#3a5030]/60 text-xs tracking-wider">ꦒꦸꦪꦺꦴꦤ꧀ &bull; kanggo seneng-seneng wae</p>
    </footer>

    <script>
        (function() {
            const footerText = document.getElementById('footerText');
            if (footerText) {
                footerText.textContent = '\uA9B6\uA9B4\uA9B1\uA9B2\uA9AE\uA9A3 \u2022 kanggo seneng-seneng wae';
            }
        })();
    </script>
</body>
</html>