<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Kecocokan Jodoh</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#1a0a1a] text-[#e8e0d0] font-sans overflow-x-hidden">
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-30 flex items-center justify-between h-14 px-4 sm:px-6 bg-[#0a0f0a]/80 backdrop-blur-2xl shadow-[0_4px_30px_rgba(0,0,0,0.5)] before:content-[''] before:absolute before:inset-0 before:bg-gradient-to-r before:from-[#d4a843]/[0.02] before:via-transparent before:to-[#2d5a27]/[0.02] before:pointer-events-none">
        <a href="/cek-khodam" class="flex items-center gap-2.5 shrink-0">
            <span class="text-[#d4a843] text-xl leading-none">ꦕꦺꦏ꧀​ꦗꦺꦴꦝꦺꦴꦃ</span>
            <span class="text-[11px] text-[#d4a843]/50 tracking-[0.15em] uppercase font-light hidden sm:inline">Cek Jodoh</span>
        </a>
        <div class="flex items-center gap-1">
            <a href="/cek-khodam" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Khodam</a>
            <a href="/jodoh" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 bg-[#d4a843]/[0.04]">Jodoh</a>
            <a href="/weton" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Weton</a>
            <a href="/tentang" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Tentang</a>
            <button id="muteBtn" class="relative px-3 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300 border border-transparent" aria-label="Toggle sound">🔊</button>
        </div>
    </nav>

    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#d4a843]/10 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute -top-20 right-20 w-80 h-80 bg-[#b03060]/20 rounded-full blur-3xl animate-float-medium" style="animation-delay: -3s;"></div>
        <div class="absolute bottom-40 left-1/4 w-64 h-64 bg-[#d4a843]/5 rounded-full blur-3xl animate-float-fast" style="animation-delay: -5s;"></div>
        <div class="absolute top-1/3 -right-32 w-72 h-72 bg-[#5a1a3a]/30 rounded-full blur-3xl animate-float-medium" style="animation-delay: -7s;"></div>
        <div class="absolute bottom-20 -right-20 w-96 h-96 bg-[#d4a843]/8 rounded-full blur-3xl animate-float-slow" style="animation-delay: -2s;"></div>
    </div>

    <main class="relative z-10 min-h-screen flex flex-col items-center justify-center px-6 py-12 pt-[56px]">
        <div class="w-full max-w-lg mx-auto text-center">
            <div class="mb-2">
                <span class="text-[#d4a843]/40 text-sm tracking-[0.3em] uppercase font-light">primbon jawa</span>
            </div>

            <div class="flex items-center justify-center gap-3 mb-2">
                <h1 class="font-serif text-5xl md:text-6xl font-black text-[#d4a843] tracking-wide">
                    Cek Jodoh
                </h1>
            </div>

            <p id="subtitleText" class="text-[#a09070] text-lg md:text-xl italic font-serif mb-8">
                sapa jodhohmu?
            </p>
            <p id="subtitleAksara" class="text-[#4a5030]/60 text-sm font-serif mb-6 aksara-jawa"></p>

            <p id="inputHint" class="text-[#6a7050]/80 text-xs tracking-wider mb-6">
                Ketik jeneng loro kanggo ngitung kecocokan miturut primbon
            </p>

            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="text-[#d4a843] text-sm font-semibold shrink-0 w-8">꧁</span>
                    <input
                        id="nama1Input"
                        type="text"
                        placeholder="Jeneng sampeyan..."
                        class="flex-1 bg-[#0d120d]/80 border border-[#2d3a20]/50 rounded-lg px-5 py-3 text-[#e8e0d0] placeholder-[#6a7050]/60 focus:outline-none focus:border-[#d4a843]/50 focus:ring-1 focus:ring-[#d4a843]/30 transition-all text-center text-lg"
                        maxlength="50"
                    />
                </div>

                <div class="flex items-center gap-2 justify-center">
                    <div class="h-px flex-1 bg-gradient-to-r from-transparent via-[#d4a843]/30 to-transparent"></div>
                    <span class="text-[#d4a843]/40 text-sm font-serif italic">&</span>
                    <div class="h-px flex-1 bg-gradient-to-r from-transparent via-[#d4a843]/30 to-transparent"></div>
                </div>

                <div class="flex items-center gap-3">
                    <span class="text-[#b03060] text-sm font-semibold shrink-0 w-8">꧂</span>
                    <input
                        id="nama2Input"
                        type="text"
                        placeholder="Jeneng pasangan..."
                        class="flex-1 bg-[#0d120d]/80 border border-[#2d3a20]/50 rounded-lg px-5 py-3 text-[#e8e0d0] placeholder-[#6a7050]/60 focus:outline-none focus:border-[#b03060]/50 focus:ring-1 focus:ring-[#b03060]/30 transition-all text-center text-lg"
                        maxlength="50"
                    />
                </div>

                <button
                    id="cekBtn"
                    class="w-full bg-gradient-to-r from-[#d4a843] via-[#c08050] to-[#b03060] text-[#0a0f0a] font-semibold text-lg px-8 py-3.5 rounded-lg hover:from-[#e0b44f] hover:via-[#d09060] hover:to-[#c04070] transition-all duration-300 active:scale-95 animate-pulse-glow disabled:opacity-60 disabled:cursor-not-allowed disabled:animate-none"
                >
                    Cek Kecocokan
                </button>
            </div>

            <div id="resultArea" class="mt-8 hidden">
                <div id="spinnerArea" class="min-h-[140px] flex flex-col items-center justify-center">
                    <div class="relative">
                        <div class="w-16 h-16 border-2 border-[#2d3a20]/50 border-t-[#d4a843] rounded-full animate-spin mb-6"></div>
                    </div>
                    <p id="loadingText" class="text-[#a09070] text-sm font-light tracking-widest uppercase">Ngitung kecocokan...</p>
                    <p id="spinText" class="font-serif text-2xl text-[#d4a843]/80 mt-4 min-h-[36px] transition-all duration-100"></p>
                </div>

                <div id="finalResult" class="hidden space-y-4">
                    <div id="matchRing" class="relative w-40 h-40 mx-auto mb-2">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 160 160">
                            <circle cx="80" cy="80" r="70" fill="none" stroke="#1a1f1a" stroke-width="8"/>
                            <circle id="progressArc" cx="80" cy="80" r="70" fill="none" stroke="#d4a843" stroke-width="8"
                                stroke-linecap="round" stroke-dasharray="439.82"
                                stroke-dashoffset="439.82" style="transition: stroke-dashoffset 1.5s ease-out"/>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <span id="matchPercent" class="text-3xl font-bold text-[#d4a843] font-serif">0%</span>
                            <span id="matchLabel" class="text-xs text-[#a09070] tracking-wider uppercase mt-1">cocok</span>
                        </div>
                    </div>

                    <div id="categoryBadge" class="inline-block px-5 py-2 rounded-full bg-[#d4a843]/10 border border-[#d4a843]/30 text-[#d4a843] font-semibold text-sm tracking-wider">
                    </div>

                    <div class="bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-5 backdrop-blur-sm">
                        <div class="grid grid-cols-2 gap-4 mb-3">
                            <div id="person1Card" class="bg-[#1a1f1a]/60 rounded-lg p-3 border border-[#d4a843]/20">
                                <p id="person1Name" class="text-[#d4a843] font-semibold text-sm truncate"></p>
                                <p id="person1Element" class="text-[#a09070] text-xs mt-1"></p>
                                <p id="person1Neptu" class="text-[#6a7050] text-xs"></p>
                            </div>
                            <div id="person2Card" class="bg-[#1a1f1a]/60 rounded-lg p-3 border border-[#b03060]/20">
                                <p id="person2Name" class="text-[#b03060] font-semibold text-sm truncate"></p>
                                <p id="person2Element" class="text-[#a09070] text-xs mt-1"></p>
                                <p id="person2Neptu" class="text-[#6a7050] text-xs"></p>
                            </div>
                        </div>

                        <div class="w-16 h-0.5 bg-[#d4a843]/30 mx-auto mb-3"></div>
                        <p id="compatDesc" class="text-[#b0a080] text-sm italic leading-relaxed"></p>
                    </div>

                    <div id="detailArea" class="bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-5 backdrop-blur-sm text-left hidden">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[#d4a843] text-lg">꧋</span>
                            <h3 id="detailHeader" class="font-serif text-lg font-semibold text-[#d4a843]">Detail Primbon</h3>
                        </div>
                        <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm">
                            <span class="text-[#6a7050]">Neptu <span id="detailName1" class="text-[#d4a843]"></span></span>
                            <span id="detailNeptu1" class="text-[#e8e0d0] text-right font-semibold"></span>
                            <span class="text-[#6a7050]">Neptu <span id="detailName2" class="text-[#b03060]"></span></span>
                            <span id="detailNeptu2" class="text-[#e8e0d0] text-right font-semibold"></span>
                            <span class="text-[#6a7050]">Total Neptu</span>
                            <span id="detailTotal" class="text-[#d4a843] text-right font-bold"></span>
                            <span class="text-[#6a7050]">Kategori</span>
                            <span id="detailCategory" class="text-[#d4a843] text-right font-semibold"></span>
                            <span class="text-[#6a7050]">Kecocokan Elemen</span>
                            <span id="detailElement" class="text-[#b0a080] text-right"></span>
                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-3 mt-2 flex-wrap">
                        <button id="shareBtn" class="text-[#a09070] hover:text-[#d4a843] transition-colors text-sm tracking-wider uppercase underline underline-offset-4 decoration-[#2d3a20]/50 hover:decoration-[#d4a843]/50">
                            Bagikan
                        </button>
                        <button id="resetBtn" class="text-[#a09070] hover:text-[#d4a843] transition-colors text-sm tracking-wider uppercase underline underline-offset-4 decoration-[#2d3a20]/50 hover:decoration-[#d4a843]/50">
                            Cek Maneh
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-auto pt-16 pb-6 text-center">
            <p id="footerText" class="text-[#3a5030]/60 text-xs tracking-wider">ꦒꦸꦪꦺꦴꦤ꧀ &bull; kanggo seneng-seneng wae</p>
        </footer>
    </main>

    <script>
        (function() {
            // ===== NEPTU HANACAKA =====
            const CARAKAN_MAP = {
                'a':1,'i':1,'u':1,'e':1,'o':1,'h':1,
                'n':2,'c':3,'r':4,'k':5,
                'd':6,'t':7,'s':8,'w':9,'l':10,
                'p':11,'f':11,'v':11,'q':5,'x':20,
                'b':18,'m':16,'g':17,'j':13,'y':14,
                'z':15
            };

            const ELEMEN_MAP = [
                { name: 'Api', color: '#d4a843', range: [1,5] },
                { name: 'Tanah', color: '#6a9050', range: [6,10] },
                { name: 'Air', color: '#4080b0', range: [11,15] },
                { name: 'Angin', color: '#b0a080', range: [16,20] }
            ];

            const KATEGORI = [
                { name: 'Pegat', desc: 'Pasangan iki rentan konflik gedhe. Perselingkuhan, ekonomi sing ora stabil, lan risiko perpisahan dhuwur. Kudu sabar lan komunikasi sing apik.', descId: 'Pasangan ini rentan konflik besar. Perselingkuhan, ekonomi tidak stabil, dan risiko perpisahan tinggi. Perlu kesabaran dan komunikasi yang baik.' },
                { name: 'Ratu', desc: 'Pasangan sing luhur lan dihormati. Kaya bakal harmoni lan wibawa. Wong liya nganggep pasangan iki minangka pasangan sing sampurna lan rukun.', descId: 'Pasangan yang luhur dan dihormati. Akan hidup dalam harmoni dan wibawa. Orang lain menganggap pasangan ini sebagai pasangan yang sempurna dan rukun.' },
                { name: 'Jodoh', desc: 'Pasangan sing pancen ditakdirake bebarengan. Bisa nampa kaluwihan lan kekurangan. Kecocokan alami, ikatan emosional sing kuat.', descId: 'Pasangan yang memang ditakdirkan bersama. Mampu saling menerima kelebihan dan kekurangan. Kecocokan alami, ikatan emosional yang kuat.' },
                { name: 'Topo', desc: 'Pasangan iki bakal ngadhepi kasusahan ing awal hubungan, nanging suwe-suwe bakal nemokake kabegjan. Butuh kesabaran lan ketekunan.', descId: 'Pasangan ini akan menghadapi kesulitan di awal hubungan, namun lama-lama akan menemukan kebahagiaan. Butuh kesabaran dan ketekunan.' },
                { name: 'Tinari', desc: 'Pasangan sing begja lan mulya. Rezeki lancar, urip seneng lan ayem. Sedulur lan kanca akeh sing nresnani.', descId: 'Pasangan yang beruntung dan mulia. Rezeki lancar, hidup bahagia dan damai. Saudara dan teman banyak yang menyayangi.' },
                { name: 'Padu', desc: 'Pasangan sing kerep padu utawa cekcok. Nanging padu-paduan iku ora nganti ngrusak hubungan. Isih bisa rukun maneh.', descId: 'Pasangan yang sering bertengkar. Namun pertengkaran itu tidak sampai merusak hubungan. Masih bisa rukun kembali.' },
                { name: 'Sujanan', desc: 'Pasangan sing gampang cemburu lan curiga. Kudu kuwat komunikasi lan saling percaya supaya ora dadi masalah gedhe.', descId: 'Pasangan yang mudah cemburu dan curiga. Harus kuat komunikasi dan saling percaya agar tidak menjadi masalah besar.' },
                { name: 'Pesthi', desc: 'Pasangan sing rukun ayem nganti tumekane sepuh. Masalah cilik ora ngrusak keharmonisan. Kuwat lan langgeng.', descId: 'Pasangan yang rukun damai hingga tua. Masalah kecil tidak merusak keharmonisan. Kuat dan langgeng.' }
            ];

            const ELEMEN_MATCH = {
                'Api': { 'Api': 92, 'Tanah': 78, 'Air': 42, 'Angin': 65 },
                'Tanah': { 'Api': 78, 'Tanah': 88, 'Air': 72, 'Angin': 55 },
                'Air': { 'Api': 42, 'Tanah': 72, 'Air': 85, 'Angin': 68 },
                'Angin': { 'Api': 65, 'Tanah': 55, 'Air': 68, 'Angin': 90 }
            };

            function getCarakanValue(ch) {
                const c = ch.toLowerCase();
                if (c >= 'a' && c <= 'z') {
                    return CARAKAN_MAP[c] || 5;
                }
                return 0;
            }

            function getElement(neptu) {
                for (const el of ELEMEN_MAP) {
                    if (neptu >= el.range[0] && neptu <= el.range[1]) return el;
                }
                return ELEMEN_MAP[0];
            }

            function getFirstLetterNeptu(name) {
                const first = name.trim().charAt(0);
                if (!first) return 5;
                return getCarakanValue(first);
            }

            function hitungNeptuNama(nama) {
                let total = 0;
                for (const ch of nama) {
                    total += getCarakanValue(ch);
                }
                return total || 5;
            }

            function hitungKecocokan(nama1, nama2) {
                const neptu1 = hitungNeptuNama(nama1);
                const neptu2 = hitungNeptuNama(nama2);
                const total = neptu1 + neptu2;

                const first1 = getFirstLetterNeptu(nama1);
                const first2 = getFirstLetterNeptu(nama2);
                const element1 = getElement(first1);
                const element2 = getElement(first2);

                const elemenMatch = ELEMEN_MATCH[element1.name][element2.name];

                const neptuMatch = 100 - (Math.abs(neptu1 - neptu2) / Math.max(neptu1, neptu2)) * 50;

                const catIdx = (total % 8);
                const kategori = KATEGORI[catIdx];

                const catScore = 100 - (catIdx * 4);
                const percentage = Math.round(Math.min(99, Math.max(30,
                    (elemenMatch * 0.4) + (neptuMatch * 0.35) + (catScore * 0.25)
                )));

                return {
                    neptu1, neptu2, total,
                    element1: element1.name, element2: element2.name,
                    element1Color: element1.color, element2Color: element2.color,
                    elemenMatch,
                    kategori: kategori.name,
                    kategoriDesc: kategori.desc,
                    kategoriDescId: kategori.descId,
                    percentage,
                    catIdx
                };
            }

            // ===== AKSARA SETUP =====
            function setAksara(el, text) {
                if (!el) return;
                try {
                    const fn = window.toJavanese;
                    if (typeof fn === 'function') {
                        el.textContent = fn(text);
                    } else {
                        el.textContent = '';
                    }
                } catch (e) {
                    el.textContent = '';
                }
            }

            // ===== I18N =====
            const LANG = {
                jawa: {
                    subtitle: 'sapa jodhohmu?',
                    inputHint: 'Ketik jeneng loro kanggo ngitung kecocokan miturut primbon',
                    nama1Placeholder: 'Jeneng sampeyan...',
                    nama2Placeholder: 'Jeneng pasangan...',
                    cekBtn: 'Cek Kecocokan',
                    loading: 'Ngitung kecocokan...',
                    normalBtn: 'Cek Kecocokan',
                    detailHeader: 'Detail Primbon',
                    matchLabel: 'cocok',
                    resetBtn: 'Cek Maneh',
                    shareBtn: 'Bagikan',
                    shareCopied: 'Disalin!',
                    footer: '\uA9B6\uA9B4\uA9B1\uA9B2\uA9AE\uA9A3 \u2022 kanggo seneng-seneng wae',
                },
                indonesia: {
                    subtitle: 'siapa jodohmu?',
                    inputHint: 'Ketik dua nama untuk menghitung kecocokan menurut primbon',
                    nama1Placeholder: 'Nama kamu...',
                    nama2Placeholder: 'Nama pasangan...',
                    cekBtn: 'Cek Kecocokan',
                    loading: 'Menghitung kecocokan...',
                    normalBtn: 'Cek Kecocokan',
                    detailHeader: 'Detail Primbon',
                    matchLabel: 'cocok',
                    resetBtn: 'Cek Lagi',
                    shareBtn: 'Bagikan',
                    shareCopied: 'Tersalin!',
                    footer: 'untuk bersenang-senang saja',
                }
            };
            let currentLang = 'jawa';

            // ===== DOM REFS =====
            const nama1Input = document.getElementById('nama1Input');
            const nama2Input = document.getElementById('nama2Input');
            const cekBtn = document.getElementById('cekBtn');
            const resultArea = document.getElementById('resultArea');
            const spinnerArea = document.getElementById('spinnerArea');
            const finalResult = document.getElementById('finalResult');
            const spinText = document.getElementById('spinText');
            const loadingText = document.getElementById('loadingText');
            const subtitleText = document.getElementById('subtitleText');
            const subtitleAksara = document.getElementById('subtitleAksara');
            const footerText = document.getElementById('footerText');
            const inputHint = document.getElementById('inputHint');
            const matchPercent = document.getElementById('matchPercent');
            const matchLabel = document.getElementById('matchLabel');
            const matchRing = document.getElementById('matchRing');
            const progressArc = document.getElementById('progressArc');
            const categoryBadge = document.getElementById('categoryBadge');
            const person1Name = document.getElementById('person1Name');
            const person2Name = document.getElementById('person2Name');
            const person1Element = document.getElementById('person1Element');
            const person2Element = document.getElementById('person2Element');
            const person1Neptu = document.getElementById('person1Neptu');
            const person2Neptu = document.getElementById('person2Neptu');
            const compatDesc = document.getElementById('compatDesc');
            const detailArea = document.getElementById('detailArea');
            const detailHeader = document.getElementById('detailHeader');
            const detailName1 = document.getElementById('detailName1');
            const detailName2 = document.getElementById('detailName2');
            const detailNeptu1 = document.getElementById('detailNeptu1');
            const detailNeptu2 = document.getElementById('detailNeptu2');
            const detailTotal = document.getElementById('detailTotal');
            const detailCategory = document.getElementById('detailCategory');
            const detailElement = document.getElementById('detailElement');
            const shareBtn = document.getElementById('shareBtn');
            const resetBtn = document.getElementById('resetBtn');

            function setLang(lang) {
                currentLang = lang;
                const t = LANG[lang];
                if (subtitleText) subtitleText.textContent = t.subtitle;
                if (inputHint) inputHint.textContent = t.inputHint;
                if (nama1Input) nama1Input.placeholder = t.nama1Placeholder;
                if (nama2Input) nama2Input.placeholder = t.nama2Placeholder;
                if (loadingText) loadingText.textContent = t.loading;
                if (resetBtn) resetBtn.textContent = t.resetBtn;
                if (shareBtn) shareBtn.textContent = t.shareBtn;
                if (matchLabel) matchLabel.textContent = t.matchLabel;
                if (footerText) footerText.textContent = t.footer;
                if (detailHeader) detailHeader.textContent = t.detailHeader;
                if (lang === 'jawa') {
                    setAksara(subtitleAksara, t.subtitle);
                }
            }

            // ===== SPINNER =====
            const KATA_MAGIS_JAWA = [
                'Rasane ati...', 'Niteni weton...', 'Maca aksara...',
                'Nggoleki jalma...', 'Mbethik nasib...', 'Ngrumat rasa...',
                'Nimbang takdir...', 'Manunggaling jiwa...'
            ];
            const KATA_MAGIS_ID = [
                'Meraba hati...', 'Mencari weton...', 'Membaca aksara...',
                'Menakar jiwa...', 'Meramal nasib...', 'Menghitung rasa...',
                'Menimbang takdir...', 'Menyatukan jiwa...'
            ];
            let lastResult = null;

            cekBtn.addEventListener('click', function() {
                const nama1 = nama1Input.value.trim() || 'Sampeyan';
                const nama2 = nama2Input.value.trim() || 'Pasangan';

                if (!nama1Input.value.trim() && !nama2Input.value.trim()) {
                    nama1Input.style.borderColor = '#c04040';
                    nama2Input.style.borderColor = '#c04040';
                    nama1Input.focus();
                    setTimeout(function() {
                        nama1Input.style.borderColor = '';
                        nama2Input.style.borderColor = '';
                    }, 2000);
                    return;
                }
                if (!nama1Input.value.trim()) {
                    nama1Input.style.borderColor = '#c04040';
                    nama1Input.focus();
                    setTimeout(function() { nama1Input.style.borderColor = ''; }, 2000);
                    return;
                }
                if (!nama2Input.value.trim()) {
                    nama2Input.style.borderColor = '#c04040';
                    nama2Input.focus();
                    setTimeout(function() { nama2Input.style.borderColor = ''; }, 2000);
                    return;
                }

                const result = hitungKecocokan(nama1, nama2);
                lastResult = { nama1, nama2, ...result };

                resultArea.classList.remove('hidden');
                finalResult.classList.add('hidden');
                spinnerArea.classList.remove('hidden');
                spinText.textContent = '';
                cekBtn.disabled = true;
                cekBtn.textContent = LANG[currentLang].loading;
                detailArea.classList.add('hidden');

                const kataList = currentLang === 'jawa' ? KATA_MAGIS_JAWA : KATA_MAGIS_ID;
                let count = 0;
                const totalCycles = 18;

                function spin() {
                    if (count < totalCycles) {
                        spinText.textContent = KATEGORI[Math.floor(Math.random() * 8)].name + ' ' + Math.floor(Math.random() * 60 + 30) + '%';
                        count++;
                        const delay = count < 10 ? 80 : 100 + (count - 10) * 50;
                        setTimeout(spin, delay);
                    } else {
                        spinText.textContent = result.kategori + ' ' + result.percentage + '%';
                        setTimeout(function() {
                            spinnerArea.classList.add('hidden');
                            finalResult.classList.remove('hidden');
                            showResult(nama1, nama2, result);
                            cekBtn.disabled = false;
                            cekBtn.textContent = LANG[currentLang].normalBtn;
                        }, 500);
                    }
                }
                spin();
            });

            function showResult(nama1, nama2, result) {
                person1Name.textContent = nama1;
                person2Name.textContent = nama2;
                person1Element.textContent = '\u2605 ' + result.element1.toUpperCase();
                person2Element.textContent = '\u2605 ' + result.element2.toUpperCase();
                person1Neptu.textContent = 'Neptu: ' + result.neptu1;
                person2Neptu.textContent = 'Neptu: ' + result.neptu2;

                document.getElementById('person1Card').style.borderColor = result.element1Color + '40';
                document.getElementById('person2Card').style.borderColor = result.element2Color + '40';

                const pct = result.percentage;
                matchPercent.textContent = pct + '%';

                const categoryColors = ['#c04040', '#d4a843', '#60b060', '#b08040', '#d4a843', '#c08040', '#c06060', '#80b080'];
                const catColor = categoryColors[result.catIdx];
                categoryBadge.textContent = '\u2B26 ' + result.kategori.toUpperCase() + ' \u2B24';
                categoryBadge.style.color = catColor;
                categoryBadge.style.borderColor = catColor + '40';
                categoryBadge.style.background = catColor + '10';

                const radius = 70;
                const circumference = 2 * Math.PI * radius;
                const offset = circumference - (pct / 100) * circumference;
                progressArc.style.strokeDasharray = circumference;
                progressArc.style.stroke = pct >= 80 ? '#60b060' : pct >= 60 ? '#d4a843' : pct >= 45 ? '#b08040' : '#c04040';
                setTimeout(function() {
                    progressArc.style.strokeDashoffset = offset;
                }, 100);

                const desc = currentLang === 'jawa' ? result.kategoriDesc : result.kategoriDescId;
                compatDesc.textContent = desc;

                detailName1.textContent = nama1;
                detailName2.textContent = nama2;
                detailNeptu1.textContent = result.neptu1;
                detailNeptu2.textContent = result.neptu2;
                detailTotal.textContent = result.total;
                detailCategory.textContent = result.kategori;
                detailElement.textContent = result.element1 + ' + ' + result.element2 + ' = ' + result.elemenMatch + '%';
                detailArea.classList.remove('hidden');
                detailArea.classList.add('animate-reveal');

                finalResult.classList.add('animate-reveal');
            }

            // ===== SHARE =====
            function getShareText() {
                if (!lastResult) return '';
                const t = 'Cek Kecocokan Jodoh\n' +
                    lastResult.nama1 + ' \u2665 ' + lastResult.nama2 + '\n' +
                    'Kecocokan: ' + lastResult.percentage + '%\n' +
                    'Kategori: ' + lastResult.kategori + '\n' +
                    'Neptu: ' + lastResult.neptu1 + ' + ' + lastResult.neptu2 + ' = ' + lastResult.total + '\n' +
                    'Elemen: ' + lastResult.element1 + ' + ' + lastResult.element2 + '\n\n' +
                    'Cek juga di ' + window.location.href;
                return t;
            }

            if (shareBtn) {
                shareBtn.addEventListener('click', function() {
                    const text = getShareText();
                    if (!text) return;
                    if (navigator.share) {
                        navigator.share({ title: 'Cek Kecocokan Jodoh', text: text }).catch(function() {});
                    } else if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(text).then(function() {
                            const orig = shareBtn.textContent;
                            shareBtn.textContent = LANG[currentLang].shareCopied;
                            setTimeout(function() { shareBtn.textContent = orig; }, 2000);
                        }).catch(function() { fallbackCopy(text); });
                    } else {
                        fallbackCopy(text);
                    }
                });
            }

            function fallbackCopy(text) {
                const ta = document.createElement('textarea');
                ta.value = text;
                ta.style.position = 'fixed';
                ta.style.left = '-9999px';
                document.body.appendChild(ta);
                ta.select();
                try {
                    document.execCommand('copy');
                    const orig = shareBtn.textContent;
                    shareBtn.textContent = LANG[currentLang].shareCopied;
                    setTimeout(function() { shareBtn.textContent = orig; }, 2000);
                } catch (e) {}
                document.body.removeChild(ta);
            }

            // ===== RESET =====
            resetBtn.addEventListener('click', function() {
                resultArea.classList.add('hidden');
                finalResult.classList.add('hidden');
                finalResult.classList.remove('animate-reveal');
                detailArea.classList.add('hidden');
                detailArea.classList.remove('animate-reveal');
                nama1Input.value = '';
                nama2Input.value = '';
                nama1Input.style.borderColor = '';
                nama2Input.style.borderColor = '';
                nama1Input.focus();
                lastResult = null;
                progressArc.style.strokeDashoffset = 439.82;
            });

            // ===== KEYBOARD =====
            nama1Input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') nama2Input.focus();
            });
            nama2Input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') cekBtn.click();
            });

            // ===== LANG TOGGLE =====
            const langToggle = document.createElement('button');
            langToggle.id = 'langToggle';
            langToggle.className = 'fixed top-14 right-4 z-40 px-3 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/60 hover:text-[#d4a843] border border-[#d4a843]/20 hover:bg-[#d4a843]/[0.04] transition-all duration-300';
            langToggle.textContent = 'ID';
            document.body.appendChild(langToggle);

            langToggle.addEventListener('click', function() {
                const newLang = currentLang === 'jawa' ? 'indonesia' : 'jawa';
                langToggle.textContent = newLang === 'jawa' ? 'ID' : 'JW';
                setLang(newLang);
                if (lastResult) {
                    const r = lastResult;
                    showResult(r.nama1, r.nama2, r);
                }
            });

            // ===== AUDIO SYSTEM =====
            class AudioSystem {
                constructor() {
                    this.ctx = null;
                    this.muted = localStorage.getItem('khodamMuted') === 'true';
                    this.masterGain = null;
                    this.bgmGain = null;
                    this.sfxGain = null;
                    this.bgmNodes = [];
                    this.isBgmPlaying = false;
                    this.bgmInterval = null;
                    this.slendro = [264, 297, 330, 396, 495];
                }

                init() {
                    if (this.ctx) return;
                    this.ctx = new (window.AudioContext || window.webkitAudioContext)();
                    this.masterGain = this.ctx.createGain();
                    this.masterGain.gain.value = this.muted ? 0 : 0.4;
                    this.masterGain.connect(this.ctx.destination);

                    this.bgmGain = this.ctx.createGain();
                    this.bgmGain.gain.value = 0.25;
                    this.bgmGain.connect(this.masterGain);

                    this.sfxGain = this.ctx.createGain();
                    this.sfxGain.gain.value = 0.6;
                    this.sfxGain.connect(this.masterGain);

                    this.updateMuteBtn();
                }

                ensureCtx() {
                    if (!this.ctx) this.init();
                    if (this.ctx.state === 'suspended') this.ctx.resume();
                }

                playGong(freq, duration, gainNode) {
                    this.ensureCtx();
                    const target = gainNode || this.sfxGain;
                    const now = this.ctx.currentTime;
                    const osc = this.ctx.createOscillator();
                    const gain = this.ctx.createGain();
                    const filter = this.ctx.createBiquadFilter();
                    osc.type = 'sine';
                    osc.frequency.setValueAtTime(freq, now);
                    osc.frequency.exponentialRampToValueAtTime(freq * 0.85, now + 0.3);
                    gain.gain.setValueAtTime(0, now);
                    gain.gain.linearRampToValueAtTime(0.7, now + 0.05);
                    gain.gain.exponentialRampToValueAtTime(0.001, now + duration);
                    filter.type = 'lowpass';
                    filter.frequency.setValueAtTime(800, now);
                    filter.frequency.exponentialRampToValueAtTime(200, now + duration);
                    osc.connect(filter);
                    filter.connect(gain);
                    gain.connect(target);
                    osc.start(now);
                    osc.stop(now + duration);
                    for (let i = 2; i <= 5; i++) {
                        const hOsc = this.ctx.createOscillator();
                        const hGain = this.ctx.createGain();
                        hOsc.type = 'sine';
                        hOsc.frequency.setValueAtTime(freq * i * 0.99, now);
                        hGain.gain.setValueAtTime(0, now);
                        hGain.gain.linearRampToValueAtTime(0.3 / i, now + 0.03);
                        hGain.gain.exponentialRampToValueAtTime(0.001, now + duration * 0.7);
                        hOsc.connect(hGain);
                        hGain.connect(gain);
                        hOsc.start(now);
                        hOsc.stop(now + duration * 0.7);
                    }
                }

                playBonang(noteIdx, duration, gainNode) {
                    this.ensureCtx();
                    const target = gainNode || this.sfxGain;
                    const freq = this.slendro[noteIdx % 5];
                    const now = this.ctx.currentTime;
                    const osc = this.ctx.createOscillator();
                    const gain = this.ctx.createGain();
                    const filter = this.ctx.createBiquadFilter();
                    osc.type = 'triangle';
                    osc.frequency.setValueAtTime(freq, now);
                    osc.frequency.exponentialRampToValueAtTime(freq * 1.02, now + 0.02);
                    gain.gain.setValueAtTime(0, now);
                    gain.gain.linearRampToValueAtTime(0.6, now + 0.005);
                    gain.gain.exponentialRampToValueAtTime(0.001, now + duration);
                    filter.type = 'bandpass';
                    filter.frequency.setValueAtTime(freq * 3, now);
                    filter.Q.setValueAtTime(5, now);
                    osc.connect(filter);
                    filter.connect(gain);
                    gain.connect(target);
                    osc.start(now);
                    osc.stop(now + duration);
                    const osc2 = this.ctx.createOscillator();
                    const gain2 = this.ctx.createGain();
                    osc2.type = 'sine';
                    osc2.frequency.setValueAtTime(freq * 2.01, now);
                    gain2.gain.setValueAtTime(0, now);
                    gain2.gain.linearRampToValueAtTime(0.2, now + 0.003);
                    gain2.gain.exponentialRampToValueAtTime(0.001, now + duration * 0.5);
                    osc2.connect(gain2);
                    gain2.connect(gain);
                    osc2.start(now);
                    osc2.stop(now + duration * 0.5);
                }

                startBGM() {
                    this.ensureCtx();
                    if (this.isBgmPlaying) return;
                    this.isBgmPlaying = true;
                    const now = this.ctx.currentTime;
                    const droneOsc = this.ctx.createOscillator();
                    const droneGain = this.ctx.createGain();
                    droneOsc.type = 'sine';
                    droneOsc.frequency.setValueAtTime(66, now);
                    droneGain.gain.setValueAtTime(0, now);
                    droneGain.gain.linearRampToValueAtTime(0.12, now + 2);
                    droneOsc.connect(droneGain);
                    droneGain.connect(this.bgmGain);
                    droneOsc.start(now);
                    this.bgmNodes.push({ osc: droneOsc, gain: droneGain });

                    const fifthOsc = this.ctx.createOscillator();
                    const fifthGain = this.ctx.createGain();
                    fifthOsc.type = 'sine';
                    fifthOsc.frequency.setValueAtTime(99, now);
                    fifthGain.gain.setValueAtTime(0, now);
                    fifthGain.gain.linearRampToValueAtTime(0.08, now + 2);
                    fifthOsc.connect(fifthGain);
                    fifthGain.connect(this.bgmGain);
                    fifthOsc.start(now);
                    this.bgmNodes.push({ osc: fifthOsc, gain: fifthGain });

                    const bufferSize = this.ctx.sampleRate * 2;
                    const buffer = this.ctx.createBuffer(1, bufferSize, this.ctx.sampleRate);
                    const data = buffer.getChannelData(0);
                    for (let i = 0; i < bufferSize; i++) data[i] = (Math.random() * 2 - 1) * 0.02;
                    const noise = this.ctx.createBufferSource();
                    noise.buffer = buffer;
                    noise.loop = true;
                    const noiseFilter = this.ctx.createBiquadFilter();
                    noiseFilter.type = 'lowpass';
                    noiseFilter.frequency.setValueAtTime(200, now);
                    noiseFilter.frequency.linearRampToValueAtTime(400, now + 10);
                    const lfo = this.ctx.createOscillator();
                    const lfoGain = this.ctx.createGain();
                    lfo.frequency.setValueAtTime(0.1, now);
                    lfoGain.gain.setValueAtTime(150, now);
                    lfo.connect(lfoGain);
                    lfoGain.connect(noiseFilter.frequency);
                    const noiseGain = this.ctx.createGain();
                    noiseGain.gain.setValueAtTime(0, now);
                    noiseGain.gain.linearRampToValueAtTime(0.2, now + 3);
                    noise.connect(noiseFilter);
                    noiseFilter.connect(noiseGain);
                    noiseGain.connect(this.bgmGain);
                    lfo.start(now);
                    noise.start(now);
                    this.bgmNodes.push({ osc: noise, gain: noiseGain, lfo: lfo, lfoGain: lfoGain });

                    const gongPattern = () => {
                        if (!this.isBgmPlaying) return;
                        this.playGong(90, 2.5, this.bgmGain);
                        this.bgmInterval = setTimeout(() => {
                            if (this.isBgmPlaying) gongPattern();
                        }, 12000 + Math.random() * 8000);
                    };
                    setTimeout(gongPattern, 4000);
                }

                stopBGM() {
                    this.isBgmPlaying = false;
                    if (this.bgmInterval) {
                        clearTimeout(this.bgmInterval);
                        this.bgmInterval = null;
                    }
                    const now = this.ctx ? this.ctx.currentTime : 0;
                    this.bgmNodes.forEach(n => {
                        try {
                            if (n.gain) n.gain.gain.exponentialRampToValueAtTime(0.001, now + 0.5);
                            if (n.osc) n.osc.stop(now + 0.5);
                            if (n.lfo) n.lfo.stop(now + 0.5);
                        } catch (e) {}
                    });
                    this.bgmNodes = [];
                }

                playLoveSequence() {
                    this.ensureCtx();
                    const melody = [0, 2, 4, 3, 2, 0, 1, 2, 3, 4, 4, 3, 2, 1, 0, 2];
                    const now = this.ctx.currentTime;
                    melody.forEach((note, i) => {
                        const startTime = now + i * 0.2;
                        const freq = this.slendro[note % 5];
                        const osc = this.ctx.createOscillator();
                        const gain = this.ctx.createGain();
                        const filter = this.ctx.createBiquadFilter();
                        osc.type = 'triangle';
                        osc.frequency.setValueAtTime(freq, startTime);
                        gain.gain.setValueAtTime(0, startTime);
                        gain.gain.linearRampToValueAtTime(0.3, startTime + 0.003);
                        gain.gain.exponentialRampToValueAtTime(0.001, startTime + 0.3);
                        filter.type = 'bandpass';
                        filter.frequency.setValueAtTime(freq * 3, startTime);
                        filter.Q.setValueAtTime(4, startTime);
                        osc.connect(filter);
                        filter.connect(gain);
                        gain.connect(this.sfxGain);
                        osc.start(startTime);
                        osc.stop(startTime + 0.35);
                    });
                }

                playReveal() {
                    this.ensureCtx();
                    this.playGong(80, 4);
                    setTimeout(() => this.playGong(100, 3), 300);
                    setTimeout(() => this.playLoveSequence(), 500);
                }

                playClick() {
                    this.ensureCtx();
                    this.playBonang(Math.floor(Math.random() * 5), 0.15);
                }

                toggleMute() {
                    this.muted = !this.muted;
                    localStorage.setItem('khodamMuted', this.muted);
                    if (this.masterGain) {
                        this.masterGain.gain.value = this.muted ? 0 : 0.4;
                    }
                    this.updateMuteBtn();
                    if (this.muted) {
                        this.stopBGM();
                    } else {
                        this.startBGM();
                    }
                }

                updateMuteBtn() {
                    const btn = document.getElementById('muteBtn');
                    if (btn) btn.textContent = this.muted ? '\uD83D\uDD07' : '\uD83D\uDD0A';
                }
            }

            const audio = new AudioSystem();
            const muteBtn = document.getElementById('muteBtn');
            if (muteBtn) {
                muteBtn.addEventListener('click', function() {
                    audio.ensureCtx();
                    audio.toggleMute();
                    audio.playClick();
                });
            }

            function initAudioOnInteraction() {
                if (!audio.ctx) {
                    audio.init();
                    if (!audio.muted) audio.startBGM();
                }
                document.removeEventListener('click', initAudioOnInteraction);
                document.removeEventListener('touchstart', initAudioOnInteraction);
                document.removeEventListener('keydown', initAudioOnInteraction);
            }
            document.addEventListener('click', initAudioOnInteraction);
            document.addEventListener('touchstart', initAudioOnInteraction);
            document.addEventListener('keydown', initAudioOnInteraction);

            // ===== INTEGRATE SOUND =====
            const finalObserver = new MutationObserver(function(mutations) {
                mutations.forEach(function(m) {
                    if (m.type === 'attributes' && m.attributeName === 'class') {
                        const el = m.target;
                        if (!el.classList.contains('hidden') && el.id === 'finalResult') {
                            if (audio.ctx && !audio.muted) {
                                setTimeout(function() { audio.playReveal(); }, 200);
                            }
                        }
                    }
                });
            });
            finalObserver.observe(finalResult, { attributes: true, attributeFilter: ['class'] });

            cekBtn.addEventListener('click', function() {
                initAudioOnInteraction();
                if (audio.ctx && !audio.muted) {
                    audio.playClick();
                    setTimeout(function() { audio.playLoveSequence(); }, 100);
                }
            });

            if (resetBtn) {
                resetBtn.addEventListener('click', function() {
                    if (audio.ctx && !audio.muted) audio.playClick();
                });
            }
            if (shareBtn) {
                shareBtn.addEventListener('click', function() {
                    if (audio.ctx && !audio.muted) audio.playClick();
                });
            }

            // ===== INIT =====
            setLang('jawa');
        })();
    </script>
</body>
</html>