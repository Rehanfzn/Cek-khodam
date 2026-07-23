@php
$starStyles = '';
for ($i = 0; $i < 120; $i++) {
    $x = rand(0, 2000);
    $y = rand(0, 1000);
    $s = (rand(1, 3) == 1) ? 2 : 1;
    $o = (rand(10, 60) / 100);
    $d = rand(0, 6);
    $starStyles .= "{$x}px {$y}px {$d}px {$s}px rgba(255,235,220,{$o}),";
}
$starStyles = rtrim($starStyles, ',');

$goldDust = '';
for ($i = 0; $i < 30; $i++) {
    $x = rand(0, 2000);
    $y = rand(0, 1000);
    $d = rand(6, 16);
    $o = (rand(10, 30) / 100);
    $goldDust .= "{$x}px {$y}px 0 {$d}px rgba(201,149,74,{$o}),";
}
$goldDust = rtrim($goldDust, ',');
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Khodam — Portal Spiritual Nusantara</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#060312] text-[#e8d8c8] font-sans overflow-x-hidden select-none">

    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">

        <div class="absolute inset-0 bg-gradient-to-b from-[#060312] via-[#0a0618] to-[#080412]"></div>

        <div class="absolute inset-0" style="box-shadow: inset 0 0 200px 50px rgba(10,6,24,0.8);"></div>

        <div class="absolute inset-0" style="box-shadow: {{ $starStyles }};"></div>

        <div class="absolute inset-0" style="box-shadow: {{ $goldDust }};"></div>

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-[#c9954a]/5 rounded-full blur-[100px]"></div>

        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[500px] h-[200px] bg-[#6b1d2a]/8 rounded-full blur-[80px]"></div>

        <div class="absolute top-1/3 -left-40 w-72 h-72 bg-[#6b3fa0]/10 rounded-full blur-[90px] animate-mystical"></div>
        <div class="absolute top-1/4 -right-40 w-80 h-80 bg-[#8b2f3a]/12 rounded-full blur-[100px] animate-mystical" style="animation-delay: -4s; animation-duration: 15s;"></div>
        <div class="absolute bottom-1/4 left-1/3 w-60 h-60 bg-[#c9954a]/8 rounded-full blur-[80px] animate-mystical" style="animation-delay: -7s; animation-duration: 13s;"></div>

    </div>

    <div class="fixed inset-0 z-50 bg-[#060312] animate-curtain animate-curtain-fade pointer-events-none overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-[#c9954a]/3 via-transparent to-[#6b1d2a]/5"></div>
        <div class="absolute bottom-0 left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-[#c9954a]/40 to-transparent animate-curtain-shimmer"></div>
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-[#060312] to-transparent"></div>
    </div>

    <main class="relative z-10 min-h-screen flex flex-col items-center justify-center px-4 sm:px-6 py-6">
        <div class="w-full max-w-5xl mx-auto text-center">

            <div class="mb-4 sm:mb-6 animate-title" style="animation-delay: 1.6s;">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                    <span class="w-6 sm:w-8 h-px bg-gradient-to-r from-transparent to-[#c9954a]/30"></span>
                    <span class="text-[#c9954a]/50 text-[9px] sm:text-[10px] tracking-[0.4em] uppercase font-light">nusantara mystica</span>
                    <span class="w-6 sm:w-8 h-px bg-gradient-to-l from-transparent to-[#c9954a]/30"></span>
                </div>

                <h1 class="font-serif text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black tracking-wide leading-tight"
                    style="color: #c9954a; text-shadow: 0 0 40px rgba(201,149,74,0.15), 0 0 80px rgba(201,149,74,0.05);">
                    Cek Khodam
                </h1>

                <div class="flex items-center justify-center gap-2 sm:gap-3 mt-2 sm:mt-3">
                    <span class="w-4 sm:w-6 h-px bg-[#c9954a]/15"></span>
                    <span class="text-[#c9954a] text-[8px] sm:text-[9px] tracking-[0.3em] uppercase font-light">✦</span>
                    <span class="text-[#a08060] text-sm sm:text-base md:text-lg italic font-serif">temukan khodam dalam dirimu</span>
                    <span class="text-[#c9954a] text-[8px] sm:text-[9px] tracking-[0.3em] uppercase font-light">✦</span>
                    <span class="w-4 sm:w-6 h-px bg-[#c9954a]/15"></span>
                </div>

                <p class="text-[#4a3050]/40 text-xs sm:text-sm mt-1 aksara-jawa">ꦕꦺꦏ꧀​ꦏꦺꦴꦝꦩ꧀ — ꦒꦸꦒꦸꦂ​ꦠꦸꦩꦸꦫꦺꦴꦤ꧀​ꦗꦮ</p>
            </div>

            <div class="relative flex items-center justify-center mt-6 sm:mt-8 mb-8 sm:mb-12" style="min-height: 290px;">

                <div class="animate-card-spin animate-card-breath absolute z-[1] perspective-[800px]" style="--rot: -22deg; --fly-x: -200px; animation-delay: 1.9s, 4.5s; left: 3%; top: 28px;">
                    <div class="group cursor-default">
                        <div class="relative w-[110px] sm:w-[130px] md:w-[155px] aspect-[3/5] rounded-lg transition-all duration-500 hover:-translate-y-4 hover:rotate-[-18deg]" style="background: linear-gradient(135deg, #1a1225, #100b1a); border: 1px solid rgba(201,149,74,0.18); box-shadow: 0 4px 20px rgba(0,0,0,0.4), inset 0 0 60px rgba(201,149,74,0.02);">
                            <div class="absolute inset-[3px] rounded-md border border-[#c9954a]/10 pointer-events-none"></div>
                            <div class="absolute inset-[5px] rounded-md border border-[#c9954a]/6 pointer-events-none"></div>
                            <span class="absolute top-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute top-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <div class="flex flex-col items-center justify-center h-full px-2.5 py-3">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#c9954a]/8 border border-[#c9954a]/15 flex items-center justify-center mb-1.5">
                                    <span class="text-[#c9954a] text-xs sm:text-sm">☿</span>
                                </div>
                                <div class="w-6 h-px bg-[#c9954a]/15 mb-1.5"></div>
                                <span class="text-[#c9954a] font-serif text-[10px] sm:text-xs font-bold tracking-[0.15em]">JODOH</span>
                                <span class="text-[#a08060]/60 text-[7px] sm:text-[8px] mt-1 leading-tight px-1">Kecocokan pasangan</span>
                                <div class="mt-auto flex items-center gap-1">
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                    <span class="text-[#c9954a]/10 text-[5px]">◇</span>
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animate-card-spin animate-card-breath absolute z-[2] perspective-[800px]" style="--rot: -10deg; --fly-x: -120px; animation-delay: 2.05s, 4.8s; left: 17%; top: 10px;">
                    <div class="group cursor-default">
                        <div class="relative w-[120px] sm:w-[142px] md:w-[170px] aspect-[3/5] rounded-lg transition-all duration-500 hover:-translate-y-4 hover:rotate-[-7deg]" style="background: linear-gradient(135deg, #1a1225, #100b1a); border: 1px solid rgba(201,149,74,0.18); box-shadow: 0 4px 20px rgba(0,0,0,0.4), inset 0 0 60px rgba(201,149,74,0.02);">
                            <div class="absolute inset-[3px] rounded-md border border-[#c9954a]/10 pointer-events-none"></div>
                            <div class="absolute inset-[5px] rounded-md border border-[#c9954a]/6 pointer-events-none"></div>
                            <span class="absolute top-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute top-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <div class="flex flex-col items-center justify-center h-full px-2.5 py-3">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#c9954a]/8 border border-[#c9954a]/15 flex items-center justify-center mb-1.5">
                                    <span class="text-[#c9954a] text-xs sm:text-sm">◈</span>
                                </div>
                                <div class="w-6 h-px bg-[#c9954a]/15 mb-1.5"></div>
                                <span class="text-[#c9954a] font-serif text-[10px] sm:text-xs font-bold tracking-[0.15em]">WETON</span>
                                <span class="text-[#a08060]/60 text-[7px] sm:text-[8px] mt-1 leading-tight px-1">Kalender & neptu</span>
                                <div class="mt-auto flex items-center gap-1">
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                    <span class="text-[#c9954a]/10 text-[5px]">◇</span>
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animate-card-spin animate-card-center-glow absolute z-[5] perspective-[800px]" style="--rot: 0deg; --fly-x: 0px; animation-delay: 2.2s, 4.5s;">
                    <div class="group cursor-default">
                        <div class="relative w-[140px] sm:w-[160px] md:w-[195px] aspect-[3/5] rounded-lg transition-all duration-500 hover:-translate-y-5" style="background: linear-gradient(145deg, #221835, #140e20); border: 2px solid rgba(201,149,74,0.35); box-shadow: 0 8px 40px rgba(0,0,0,0.5), 0 0 60px rgba(201,149,74,0.08), inset 0 0 80px rgba(201,149,74,0.03);">
                            <div class="absolute inset-[4px] rounded-md border border-[#c9954a]/15 pointer-events-none"></div>
                            <div class="absolute inset-[7px] rounded-md border border-[#c9954a]/8 pointer-events-none"></div>

                            <span class="absolute top-2 left-2 text-[#c9954a]/25 text-[7px]">✦</span>
                            <span class="absolute top-2 right-2 text-[#c9954a]/25 text-[7px]">✦</span>
                            <span class="absolute bottom-2 left-2 text-[#c9954a]/25 text-[7px]">✦</span>
                            <span class="absolute bottom-2 right-2 text-[#c9954a]/25 text-[7px]">✦</span>

                            <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-2 py-0.5 rounded-full bg-[#0a0618] border border-[#c9954a]/20">
                                <span class="text-[#c9954a]/40 text-[6px] tracking-[0.2em] font-light">MAJOR ARCANA</span>
                            </div>

                            <div class="flex flex-col items-center justify-center h-full px-3 py-5">
                                <div class="mb-1.5">
                                    <span class="text-[#c9954a] text-xl sm:text-2xl font-serif font-black tracking-normal">KHODAM</span>
                                </div>
                                <div class="w-10 h-px bg-gradient-to-r from-transparent via-[#c9954a]/50 to-transparent mb-2"></div>
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-[#c9954a]/8 border-2 border-[#c9954a]/20 flex items-center justify-center mb-2">
                                    <span class="text-[#c9954a] text-lg sm:text-xl">✶</span>
                                </div>
                                <span class="text-[#a08060]/80 text-[9px] sm:text-[10px] leading-relaxed max-w-[130px]">Temukan pendamping spiritualmu</span>
                                <div class="mt-auto flex items-center gap-1.5">
                                    <span class="text-[#c9954a]/30 text-[7px]">◈</span>
                                    <span class="text-[#c9954a]/20 text-[7px]">◈</span>
                                    <span class="text-[#c9954a]/30 text-[7px]">◈</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animate-card-spin animate-card-breath absolute z-[2] perspective-[800px]" style="--rot: 10deg; --fly-x: 120px; animation-delay: 2.05s, 4.8s; right: 17%; top: 10px;">
                    <div class="group cursor-default">
                        <div class="relative w-[120px] sm:w-[142px] md:w-[170px] aspect-[3/5] rounded-lg transition-all duration-500 hover:-translate-y-4 hover:rotate-[7deg]" style="background: linear-gradient(135deg, #1a1225, #100b1a); border: 1px solid rgba(201,149,74,0.18); box-shadow: 0 4px 20px rgba(0,0,0,0.4), inset 0 0 60px rgba(201,149,74,0.02);">
                            <div class="absolute inset-[3px] rounded-md border border-[#c9954a]/10 pointer-events-none"></div>
                            <div class="absolute inset-[5px] rounded-md border border-[#c9954a]/6 pointer-events-none"></div>
                            <span class="absolute top-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute top-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <div class="flex flex-col items-center justify-center h-full px-2.5 py-3">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#c9954a]/8 border border-[#c9954a]/15 flex items-center justify-center mb-1.5">
                                    <span class="text-[#c9954a] text-xs sm:text-sm">♄</span>
                                </div>
                                <div class="w-6 h-px bg-[#c9954a]/15 mb-1.5"></div>
                                <span class="text-[#c9954a] font-serif text-[10px] sm:text-xs font-bold tracking-[0.15em]">PRIMBON</span>
                                <span class="text-[#a08060]/60 text-[7px] sm:text-[8px] mt-1 leading-tight px-1">Ramalan & watak</span>
                                <div class="mt-auto flex items-center gap-1">
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                    <span class="text-[#c9954a]/10 text-[5px]">◇</span>
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animate-card-spin animate-card-breath absolute z-[1] perspective-[800px]" style="--rot: 22deg; --fly-x: 200px; animation-delay: 1.9s, 4.5s; right: 3%; top: 28px;">
                    <div class="group cursor-default">
                        <div class="relative w-[110px] sm:w-[130px] md:w-[155px] aspect-[3/5] rounded-lg transition-all duration-500 hover:-translate-y-4 hover:rotate-[18deg]" style="background: linear-gradient(135deg, #1a1225, #100b1a); border: 1px solid rgba(201,149,74,0.18); box-shadow: 0 4px 20px rgba(0,0,0,0.4), inset 0 0 60px rgba(201,149,74,0.02);">
                            <div class="absolute inset-[3px] rounded-md border border-[#c9954a]/10 pointer-events-none"></div>
                            <div class="absolute inset-[5px] rounded-md border border-[#c9954a]/6 pointer-events-none"></div>
                            <span class="absolute top-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute top-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 left-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <span class="absolute bottom-1.5 right-1.5 text-[#c9954a]/20 text-[6px]">✦</span>
                            <div class="flex flex-col items-center justify-center h-full px-2.5 py-3">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-[#c9954a]/8 border border-[#c9954a]/15 flex items-center justify-center mb-1.5">
                                    <span class="text-[#c9954a] text-xs sm:text-sm">☽</span>
                                </div>
                                <div class="w-6 h-px bg-[#c9954a]/15 mb-1.5"></div>
                                <span class="text-[#c9954a] font-serif text-[10px] sm:text-xs font-bold tracking-[0.15em]">HOROR</span>
                                <span class="text-[#a08060]/60 text-[7px] sm:text-[8px] mt-1 leading-tight px-1">Horror harian</span>
                                <div class="mt-auto flex items-center gap-1">
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                    <span class="text-[#c9954a]/10 text-[5px]">◇</span>
                                    <span class="text-[#c9954a]/15 text-[5px]">◆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="animate-btn relative inline-flex flex-col items-center" style="animation-delay: 2.8s;">
                <a href="/cek-khodam"
                   class="relative inline-flex items-center gap-3 bg-gradient-to-r from-[#c9954a] via-[#d4a255] to-[#c9954a] text-[#0a0612] font-semibold text-sm sm:text-base px-7 sm:px-9 py-3 sm:py-3.5 rounded-full hover:from-[#d4a255] hover:via-[#dcab5e] hover:to-[#d4a255] transition-all duration-300 active:scale-95 shadow-[0_0_30px_rgba(201,149,74,0.25)] hover:shadow-[0_0_50px_rgba(201,149,74,0.4)] tracking-wider uppercase z-10">
                    <span class="text-[10px]">✦</span>
                    <span>Buka Portal</span>
                    <span class="text-[10px]">✦</span>
                </a>
                <div class="mt-4 z-10">
                    <a href="/cek-khodam" class="text-[#a08060]/35 text-[10px] hover:text-[#a08060]/60 transition-colors tracking-wider font-light">
                        lewati →
                    </a>
                </div>
            </div>

        </div>
    </main>

    <nav class="fixed top-0 left-0 right-0 z-30 flex items-center justify-between h-12 px-4 sm:px-6 bg-transparent pointer-events-none">
        <div></div>
        <div class="flex items-center gap-0.5 sm:gap-1 pointer-events-auto">
            <a href="/cek-khodam" class="relative px-3 sm:px-4 py-1.5 rounded-xl text-[10px] sm:text-xs font-light tracking-wider text-[#c9954a]/40 hover:text-[#c9954a] hover:bg-[#c9954a]/[0.04] transition-all duration-300">Khodam</a>
            <a href="/jodoh" class="relative px-3 sm:px-4 py-1.5 rounded-xl text-[10px] sm:text-xs font-light tracking-wider text-[#c9954a]/40 hover:text-[#c9954a] hover:bg-[#c9954a]/[0.04] transition-all duration-300">Jodoh</a>
            <a href="/weton" class="relative px-3 sm:px-4 py-1.5 rounded-xl text-[10px] sm:text-xs font-light tracking-wider text-[#c9954a]/40 hover:text-[#c9954a] hover:bg-[#c9954a]/[0.04] transition-all duration-300">Weton</a>
            <a href="/tentang" class="relative px-3 sm:px-4 py-1.5 rounded-xl text-[10px] sm:text-xs font-light tracking-wider text-[#c9954a]/40 hover:text-[#c9954a] hover:bg-[#c9954a]/[0.04] transition-all duration-300">Tentang</a>
        </div>
    </nav>

</body>
</html>