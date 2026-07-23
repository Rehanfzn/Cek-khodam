<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Khodam</title>
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
            <a href="/jodoh" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Jodoh</a>
            <a href="/weton" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Weton</a>
            <a href="/tentang" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Tentang</a>
            <button id="muteBtn" class="relative px-3 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300 border border-transparent" aria-label="Toggle sound">🔊</button>
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

    <main class="relative z-10 min-h-screen flex flex-col items-center justify-center px-6 py-12 pt-[56px]">
        <div class="w-full max-w-lg mx-auto text-center">

            <div class="mb-2">
                <span class="text-[#d4a843]/40 text-sm tracking-[0.3em] uppercase font-light">nusantara</span>
            </div>

            <div class="flex items-center justify-center gap-3 mb-2">
                <h1 class="font-serif text-6xl md:text-7xl font-black text-[#d4a843] tracking-wide">
                    Cek Khodam
                </h1>
            </div>

            <p id="subtitleText" class="text-[#a09070] text-lg md:text-xl italic font-serif mb-8">
                sopo khodam mu?
            </p>
            <p id="subtitleAksara" class="text-[#4a5030]/60 text-sm font-serif mb-6 aksara-jawa"></p>

            <div class="space-y-4">
                <div class="relative">
                    <input
                        id="namaInput"
                        type="text"
                        placeholder="Jeneng panjenengan..."
                        class="w-full bg-[#0d120d]/80 border border-[#2d3a20]/50 rounded-lg px-5 py-3 text-[#e8e0d0] placeholder-[#6a7050]/60 focus:outline-none focus:border-[#d4a843]/50 focus:ring-1 focus:ring-[#d4a843]/30 transition-all text-center text-lg"
                        maxlength="50"
                    />
                </div>

                <div class="relative">
                    <input
                        id="tanggalInput"
                        type="date"
                        class="w-full bg-[#0d120d]/80 border border-[#2d3a20]/50 rounded-lg px-5 py-3 text-[#e8e0d0] focus:outline-none focus:border-[#d4a843]/50 focus:ring-1 focus:ring-[#d4a843]/30 transition-all text-center text-lg [color-scheme:dark]"
                    />
                </div>

                <button
                    id="cekBtn"
                    class="w-full bg-gradient-to-r from-[#d4a843] via-[#c49a30] to-[#d4a843] text-[#0a0f0a] font-semibold text-lg px-8 py-3.5 rounded-lg hover:from-[#e0b44f] hover:via-[#d4a843] hover:to-[#e0b44f] transition-all duration-300 active:scale-95 animate-pulse-glow disabled:opacity-60 disabled:cursor-not-allowed disabled:animate-none"
                >
                    Cek Khodam
                </button>
            </div>

            <div id="resultArea" class="mt-8 hidden">
                <div id="spinnerArea" class="min-h-[140px] flex flex-col items-center justify-center">
                    <div class="relative">
                        <div class="w-16 h-16 border-2 border-[#2d3a20]/50 border-t-[#d4a843] rounded-full animate-spin mb-6"></div>
                    </div>
                    <p id="loadingText" class="text-[#a09070] text-sm font-light tracking-widest uppercase">Memediksi khodam...</p>
                    <p id="spinText" class="font-serif text-2xl text-[#d4a843]/80 mt-4 min-h-[36px] transition-all duration-100"></p>
                </div>

                <div id="finalResult" class="hidden space-y-4">
                    <div class="bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-6 backdrop-blur-sm">
                        <p class="text-[#a09070] text-sm mb-1 tracking-wider">
                            Khodam <span id="namaDisplay" class="text-[#d4a843] font-semibold"></span>
                        </p>
                        <p id="khodamAksara" class="text-[#4a5030]/50 text-sm mb-1 aksara-jawa"></p>
                        <h2 id="khodamName" class="font-serif text-3xl md:text-4xl font-bold text-[#d4a843] mb-2"></h2>
                        <div class="w-16 h-0.5 bg-[#d4a843]/30 mx-auto mb-3"></div>
                        <p id="khodamDesc" class="text-[#b0a080] text-base italic"></p>
                    </div>

                    <div id="primbonArea" class="hidden bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-5 backdrop-blur-sm text-left">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[#d4a843] text-lg">꧋</span>
                            <h3 id="primbonHeader" class="font-serif text-lg font-semibold text-[#d4a843]">Primbon Jawa</h3>
                        </div>
                        <p id="primbonAksara" class="text-[#4a5030]/50 text-xs mb-2 aksara-jawa"></p>
                        <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-sm mb-3">
                            <span class="text-[#6a7050]">Tanggal Masehi</span>
                            <span id="tglMasehi" class="text-[#e8e0d0] text-right"></span>
                            <span class="text-[#6a7050]">Tanggal Jawa</span>
                            <span id="tglJawa" class="text-[#d4a843] text-right font-semibold"></span>
                            <span class="text-[#6a7050]">Weton</span>
                            <span id="wetonDisplay" class="text-[#e8e0d0] text-right font-semibold"></span>
                            <span class="text-[#6a7050]">Pasaran</span>
                            <span id="pasaranDisplay" class="text-[#e8e0d0] text-right"></span>
                            <span class="text-[#6a7050]">Neptu</span>
                            <span id="neptuDisplay" class="text-[#d4a843] text-right font-bold"></span>
                        </div>
                        <div id="primbonDesc" class="text-[#b0a080] text-sm italic border-t border-[#2d3a20]/30 pt-3 mt-1"></div>
                    </div>

                    <div id="horrorArea" class="hidden bg-[#1a0808]/60 border border-[#3a1515]/50 rounded-xl px-6 py-5 backdrop-blur-sm text-left">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[#c04040] text-lg">⬡</span>
                            <h3 id="horrorHeader" class="font-serif text-lg font-semibold text-[#c06060]">Kejadian Horror</h3>
                        </div>
                        <p id="horrorAksara" class="text-[#4a3020]/60 text-xs mb-2 aksara-jawa"></p>
                        <p id="horrorDate" class="text-[#6a5050] text-xs tracking-wider mb-2"></p>
                        <p id="horrorDesc" class="text-[#b08080] text-sm leading-relaxed"></p>
                    </div>

                    <div class="flex items-center justify-center gap-4 mt-2 flex-wrap">
                        <button id="shareBtn" class="text-[#a09070] hover:text-[#d4a843] transition-colors text-sm tracking-wider uppercase underline underline-offset-4 decoration-[#2d3a20]/50 hover:decoration-[#d4a843]/50">
                            Bagikan
                        </button>
                        <button id="saveImgBtn" class="text-[#a09070] hover:text-[#d4a843] transition-colors text-sm tracking-wider uppercase underline underline-offset-4 decoration-[#2d3a20]/50 hover:decoration-[#d4a843]/50">
                            🖼️ Simpan
                        </button>
                        <button id="shareImgBtn" class="text-[#a09070] hover:text-[#d4a843] transition-colors text-sm tracking-wider uppercase underline underline-offset-4 decoration-[#2d3a20]/50 hover:decoration-[#d4a843]/50">
                            📤 Bagikan Foto
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
            // ===== DATA KODHAM =====
            const khodams = [
                { name: "Harimau Sumatera", desc: "Khodam macan sakti, wani lan gagah perkasa. Roh sing nguwasani alas." },
                { name: "Elang Jawa", desc: "Khodam manuk elang, panguwasa langit kang sejati. Mata kang tembus pandang." },
                { name: "Komodo", desc: "Khodam naga purba, warisan tanah timur. Naga lawas kang digdaya." },
                { name: "Buaya Muara", desc: "Khodam buaya putih, singa laut kang angkuh. Kuwat lan ora kena dipojokke." },
                { name: "Gajah Sumatera", desc: "Khodam gajah putih, kekuatan lan kebijaksanaan. Sing ngemban amanat." },
                { name: "Badak Jawa", desc: "Khodam badak wulung, teguh lan ora kenal mundur. Waja kang kokoh." },
                { name: "Macan Tutul", desc: "Khodam macan tutul, lincah lan waspada. Misterius lan angel diuber." },
                { name: "Kancil", desc: "Khodam kancil, pinter akal lan cerdik. Kecil tapi selalu menang." },
                { name: "Ular Sanca", desc: "Khodam ular sanca, nduweni daya pikat kang kuat. Sabar nunggu wektu." },
                { name: "Burung Hantu", desc: "Khodam manuk hantu, wicaksana ing pepeteng. Bisa ndeleng kang ora katon." },
                { name: "Rajawali", desc: "Khodam rajawali, panguwasa kahyangan. Megal-megol ing mega." },
                { name: "Biawak", desc: "Khodam biawak, petarung kang ora gampang nyerah. Kuwat ing kahanan." },
                { name: "Kera Hitam", desc: "Khodam kera hitam, pinter nakal lan lucu. Nanging aja dianggep remeh." },
                { name: "Cendrawasih", desc: "Khodam cendrawasih, ayu lan gemah ripah. Kahyangan ing bumi." },
                { name: "Penyu Hijau", desc: "Khodam penyu, sabar lan umur panjang. Ilmu kang jero." },
                { name: "Lumba-lumba", desc: "Khodam lumba-lumba, pinter lan seneng tetulung. Sing nulungi kang butuh." },
                { name: "Rusa", desc: "Khodam rusa, lemah lembut lan waspada. Endah nanging waspada." },
                { name: "Musang", desc: "Khodam musang, licik lan bisa ngadepi kahanan. Mbebas saka rubeda." },
                { name: "Trenggiling", desc: "Khodam trenggiling, nduweni waja kang kuat. Ditutupi rahasia kang rapet." },
                { name: "Babi Hutan", desc: "Khodam babi hutan, pemberani lan kuat. Aja diganggu, aja diusik." },
                { name: "Beruang Madu", desc: "Khodam beruang madu, kuat lan nduweni rahasia legi." },
                { name: "Kupu-kupu", desc: "Khodam kupu-kupu, ngelingake bab keindahan. Obahing urip." },
                { name: "Kelelawar", desc: "Khodam kelelawar, bisa ndeleng ing pepeteng. Panguwasa wektu wengi." },
                { name: "Kucing Hutan", desc: "Khodam kucing hutan, mandiri lan waspada. Ileming alas." },
                { name: "Orang Utan", desc: "Khodam orang utan, sepuh lan wicaksana. Tetua kang panyantose." },
                { name: "Anoa", desc: "Khodam anoa, kuwat lan ora gampang ambruk. Ketangguhan sejati." },
                { name: "Kasuari", desc: "Khodam kasuari, manuk kang digdaya. Sing njaga tapel wates." },
                { name: "Macan Dahan", desc: "Khodam macan dahan, misterius lan angel dicekel. Bayangan ing wengi." },
                { name: "Tarsius", desc: "Khodam tarsius, nduweni mata kang tembus. Bisa ndeleng samubarang." },
                { name: "Kukang", desc: "Khodam kukang, alon-alon waton kelakon. Sabar lan teliti." },
                { name: "Bekantan", desc: "Khodam bekantan, irung gedhe wong lanang sejati. Khas Borneo." },
                { name: "Landak", desc: "Khodam landak, aja sembarangan nyedhaki. Nglindhungi awake dewe." },
                { name: "Singa", desc: "Khodam singa, roh panguwasa sing gagah perkasa. Raja ing alam sakupenge." },
                { name: "Kuda", desc: "Khodam kuda liar, mbebas lan ora bisa diatur. Angin ing sawah." },
                { name: "Monyet", desc: "Khodam monyet, pinter nanging jail. Aja kebacut percaya." },
            ];

            // ===== KALENDER JAWA =====
            const HARI = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const HARI_NEptu = [5, 4, 3, 7, 8, 6, 9];
            const PASARAN = ['Legi', 'Pahing', 'Pon', 'Wage', 'Kliwon'];
            const PASARAN_NEptu = [5, 9, 7, 4, 8];
            const NAMA_BULAN_Jawa = ['Sura', 'Sapar', 'Mulud', 'Bakda Mulud', 'Jumadilawal', 'Jumadilakir', 'Rejeb', 'Ruwah', 'Pasa', 'Sawal', 'Sela', 'Besar'];
            const PANJANG_BULAN_Jawa = [30, 29, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29];
            const WINDU = ['Alip', 'Ehe', 'Jimawal', 'Je', 'Dal', 'Be', 'Wawu', 'Jimakir'];

            const REF_DATE = new Date(2026, 4, 25);
            const REF_PASARAN_INDEX = 1;

            function getPasaranIndex(date) {
                const diff = Math.round((date - REF_DATE) / (1000 * 60 * 60 * 24));
                return ((diff % 5) + 5 + REF_PASARAN_INDEX) % 5;
            }

            function getWeton(date) {
                const dayIdx = date.getDay();
                const pasIdx = getPasaranIndex(date);
                return {
                    hari: HARI[dayIdx],
                    pasaran: PASARAN[pasIdx],
                    neptu: HARI_NEptu[dayIdx] + PASARAN_NEptu[pasIdx],
                    pasaranIndex: pasIdx,
                    hariIndex: dayIdx
                };
            }

            function getTahunJawa(tahunMasehi, tanggal, bulan) {
                let aj = tahunMasehi - 67;
                const refSura = new Date(tahunMasehi, 5, 20);
                const testDate = new Date(tahunMasehi, bulan, tanggal);
                if (testDate < refSura) {
                    aj--;
                }
                return aj;
            }

            function konversiTanggalJawa(tgl) {
                const refTgl = new Date(2026, 4, 18);
                const refHari = 1;
                const refBulan = 11;
                const refTahun = 1959;

                const diffDays = Math.round((tgl - refTgl) / (1000 * 60 * 60 * 24));

                let jBulan = refBulan;
                let jTahun = refTahun;
                let jTanggal = refHari;
                let sisa = diffDays;

                if (sisa >= 0) {
                    while (sisa > 0) {
                        let maxDay = jBulan === 11 ? 30 : PANJANG_BULAN_Jawa[jBulan];
                        if (jTanggal + sisa <= maxDay) {
                            jTanggal += sisa;
                            sisa = 0;
                        } else {
                            sisa -= (maxDay - jTanggal + 1);
                            jTanggal = 1;
                            if (jBulan === 11) {
                                jBulan = 0;
                                jTahun++;
                            } else {
                                jBulan++;
                            }
                        }
                    }
                } else {
                    sisa = -sisa;
                    while (sisa > 0) {
                        if (sisa < jTanggal) {
                            jTanggal -= sisa;
                            sisa = 0;
                        } else {
                            sisa -= jTanggal;
                            if (jBulan === 0) {
                                jBulan = 11;
                                jTahun--;
                            } else {
                                jBulan--;
                            }
                            jTanggal = jBulan === 11 ? 30 : PANJANG_BULAN_Jawa[jBulan];
                            if (sisa < 0) {
                                jTanggal += sisa;
                                sisa = 0;
                            }
                            if (sisa > 0) {
                                sisa--;
                                if (sisa > 0) {
                                    jTanggal = jBulan === 11 ? 30 : PANJANG_BULAN_Jawa[jBulan];
                                } else {
                                    jTanggal = 1;
                                }
                            }
                        }
                    }
                }

                const winduIdx = (jTahun % 8 + 8) % 8;

                return {
                    tanggal: jTanggal,
                    bulan: NAMA_BULAN_Jawa[jBulan],
                    bulanIndex: jBulan,
                    tahun: jTahun,
                    windu: WINDU[winduIdx]
                };
            }

            // ===== PRIMBON =====
            const PRIMBON = {
                'Minggu Legi': {
                    watak: 'Senang bekerja keras, pendiam tapi berwibawa. Memiliki insting yang kuat dan jarang salah dalam mengambil keputusan.',
                    rezeki: 'Lancar dan penuh kejutan. Sering mendapat rezeki dari arah tak terduga.'
                },
                'Minggu Pahing': {
                    watak: 'Pemberani dan tidak mudah menyerah. Teguh pada pendirian, kadang keras kepala.',
                    rezeki: 'Baik. Usaha yang digeluti akan membawa hasil meski perlu perjuangan.'
                },
                'Minggu Pon': {
                    watak: 'Pandai bergaul, ramah, dan disukai banyak orang. Mudah beradaptasi.',
                    rezeki: 'Cukup. Ada saja rezeki datang, terutama dari relasi dan pertemanan.'
                },
                'Minggu Wage': {
                    watak: 'Teliti, sabar, dan pekerja keras. Tidak suka konflik tapi tegas.',
                    rezeki: 'Stabil. Tidak berlebihan tapi cukup untuk kebutuhan.'
                },
                'Minggu Kliwon': {
                    watak: 'Berwibawa, punya daya tarik magis. Banyak yang segan dan menghormati.',
                    rezeki: 'Melimpah jika bisa mengelola emosi dan keterbukaan.'
                },
                'Senin Legi': {
                    watak: 'Cerdas, pandai bicara, dan mudah bergaul. Cepat beradaptasi dengan lingkungan baru.',
                    rezeki: 'Lancar. Bakat bicara bisa menjadi sumber rezeki utama.'
                },
                'Senin Pahing': {
                    watak: 'Kreatif dan inovatif. Selalu punya ide baru. Kadang terlalu perfeksionis.',
                    rezeki: 'Baik. Kreativitas menjadi kunci utama kesuksesan finansial.'
                },
                'Senin Pon': {
                    watak: 'Penyayang, setia, dan punya empati tinggi. Suka menolong sesama.',
                    rezeki: 'Cukup. Rezeki datang dari ketulusan hati.'
                },
                'Senin Wage': {
                    watak: 'Sederhana, rendah hati, dan tidak suka pamer. Orangnya tenang.',
                    rezeki: 'Cukup. Hidup berkecukupan dengan apa yang ada.'
                },
                'Senin Kliwon': {
                    watak: 'Punya wawasan luas, suka belajar, dan bijaksana. Sering menjadi panutan.',
                    rezeki: 'Baik. Ilmu dan pengetahuan menjadi sumber rezeki.'
                },
                'Selasa Legi': {
                    watak: 'Lineah, enerjik, dan punya semangat tinggi. Cepat dalam bertindak.',
                    rezeki: 'Lancar. Semangat pantang menyerah membawa hasil.'
                },
                'Selasa Pahing': {
                    watak: 'Berani, mandiri, dan tidak suka diatur. Punya jiwa pemimpin.',
                    rezeki: 'Baik. Keberanian membuka banyak peluang.'
                },
                'Selasa Pon': {
                    watak: 'Penuh pertimbangan, tidak terburu-buru dalam bertindak. Bijaksana.',
                    rezeki: 'Cukup. Kedisiplinan membawa kestabilan finansial.'
                },
                'Selasa Wage': {
                    watak: 'Pendiam tapi cermat. Tidak banyak bicara tapi tindakannya tepat.',
                    rezeki: 'Stabil. Hidup sederhana dan berkecukupan.'
                },
                'Selasa Kliwon': {
                    watak: 'Karismatik, punya wibawa alami. Disegani dan dihormati lingkungan sekitar.',
                    rezeki: 'Melimpah. Kharisma membuka banyak pintu rezeki.'
                },
                'Rabu Legi': {
                    watak: 'Ramah, supel, dan mudah bergaul. Banyak teman dan koneksi.',
                    rezeki: 'Lancar. Jaringan pertemanan yang luas membantu karier.'
                },
                'Rabu Pahing': {
                    watak: 'Tegas, ambisius, dan punya target tinggi. Tidak mudah puas.',
                    rezeki: 'Baik. Ambisi yang terkendali membawa kesuksesan.'
                },
                'Rabu Pon': {
                    watak: 'Telaten, sabar, dan punya ketekunan tinggi. Tidak mudah menyerah.',
                    rezeki: 'Cukup. Ketekunan membuahkan hasil yang setimpal.'
                },
                'Rabu Wage': {
                    watak: 'Praktis, efisien, dan suka hal-hal sederhana. Tidak rumit.',
                    rezeki: 'Stabil. Kehidupan finansial yang mapan.'
                },
                'Rabu Kliwon': {
                    watak: 'Punya kepekaan batin kuat, intuitif, dan misterius. Banyak yang penasaran.',
                    rezeki: 'Baik. Kepekaan batin membantu membaca peluang.'
                },
                'Kamis Legi': {
                    watak: 'Cerdas, analitis, dan suka mempelajari hal baru. Berpikiran terbuka.',
                    rezeki: 'Lancar. Kecerdasan menjadi aset utama.'
                },
                'Kamis Pahing': {
                    watak: 'Optimis, bersemangat, dan selalu melihat sisi positif. Menginspirasi.',
                    rezeki: 'Baik. Sikap positif menarik rezeki.'
                },
                'Kamis Pon': {
                    watak: 'Hati-hati, penuh perhitungan, dan tidak sembrono. Setiap langkah dipikirkan.',
                    rezeki: 'Cukup. Kehati-hatian menjaga kestabilan finansial.'
                },
                'Kamis Wage': {
                    watak: 'Setia, dapat diandalkan, dan punya integritas tinggi. Orang yang menepati janji.',
                    rezeki: 'Stabil. Kepercayaan orang lain membawa rezeki.'
                },
                'Kamis Kliwon': {
                    watak: 'Bijaksana, banyak akal, dan punya wawasan luas. Sering dimintai saran.',
                    rezeki: 'Baik. Kebijaksanaan dihargai dan membawa berkah.'
                },
                'Jumat Legi': {
                    watak: 'Lembut, penuh kasih, dan punya hati yang tulus. Disukai banyak orang.',
                    rezeki: 'Lancar. Ketulusan hati membawa rezeki tak terduga.'
                },
                'Jumat Pahing': {
                    watak: 'Berkharisma, menyenangkan, dan punya banyak teman. Gigih meraih cita-cita.',
                    rezeki: 'Baik. Semangat tinggi membawa hasil maksimal.'
                },
                'Jumat Pon': {
                    watak: 'Sabar, teliti, dan punya daya juang tinggi. Tidak mudah putus asa.',
                    rezeki: 'Cukup. Kesabaran membuahkan hasil manis.'
                },
                'Jumat Wage': {
                    watak: 'Hati-hati, waspada, dan tidak suka risiko besar. Lebih suka yang pasti.',
                    rezeki: 'Stabil. Kehati-hatian menjaga finansial tetap aman.'
                },
                'Jumat Kliwon': {
                    watak: 'Misterius, karismatik, dan punya daya tarik spiritual. Banyak yang penasaran.',
                    rezeki: 'Baik. Kharisma spiritual membawa peluang unik.'
                },
                'Sabtu Legi': {
                    watak: 'Pekerja keras, ulet, dan pantang menyerah. Punya semangat baja.',
                    rezeki: 'Lancar. Kerja keras membuahkan hasil yang memuaskan.'
                },
                'Sabtu Pahing': {
                    watak: 'Berani, petualang, dan suka tantangan. Tidak suka hal-hal monoton.',
                    rezeki: 'Baik. Keberanian membuka peluang-peluang baru.'
                },
                'Sabtu Pon': {
                    watak: 'Tenang, sabar, dan penuh pengertian. Pendengar yang baik.',
                    rezeki: 'Cukup. Kesabaran membawa keberuntungan.'
                },
                'Sabtu Wage': {
                    watak: 'Sederhana, jujur, dan apa adanya. Tidak suka berpura-pura.',
                    rezeki: 'Stabil. Kejujuran membawa kepercayaan dan rezeki.'
                },
                'Sabtu Kliwon': {
                    watak: 'Punya wibawa alami, disegani, dan punya kelebihan spiritual.',
                    rezeki: 'Melimpah. Wibawa alami membuka banyak kesempatan.'
                }
            };

            function getPrimbon(weton) {
                const key = weton.hari + ' ' + weton.pasaran;
                return PRIMBON[key] || {
                    watak: 'Pribadi yang unik dan penuh misteri. Teruslah menggali potensi diri.',
                    rezeki: 'Rezeki sudah diatur. Yang penting usaha dan doa.'
                };
            }

            // ===== HORROR EVENTS =====
            const HORROR = [
                { bulan: 0, tgl: 1, desc: 'Malam Tahun Baru identik dengan mistis. Konon di beberapa daerah, pada malam ini arwah penasaran berkeliaran mencari ganti. Banyak yang percaya pantulan kaca di jam 00.00 bisa menampakkan sosok lain di belakang kita.' },
                { bulan: 0, tgl: 14, desc: 'Wekasan: di beberapa desa Jawa, malam ini dianggap angker. Konon pintu gerbang dunia gaib terbuka lebar. Warga biasa mengadakan tirakatan dan doa bersama untuk menolak bala.' },
                { bulan: 0, tgl: 24, desc: 'Angker! Di tanggal ini konon sering terdengar suara tangisan bayi dari sumur-sumur tua di Jawa Tengah. Masyarakat setempat percaya itu adalah jelmaan kuntilanak yang kehilangan anaknya.' },
                { bulan: 1, tgl: 6, desc: 'Di sebuah desa di Gunung Kidul, warga percaya setiap tanggal ini ada sosok wanita berbaju putih duduk di perempatan jalan sejak magrib. Siapa yang menyapanya akan hilang selama 3 hari.' },
                { bulan: 1, tgl: 22, desc: 'Malam Anggara Kasih (Selasa Kliwon). Dipercaya sebagai malam paling keramat dalam weton Jawa. Energi magis mencapai puncaknya. Banyak praktik spiritual dilakukan malam ini.' },
                { bulan: 2, tgl: 3, desc: 'Hari angker di pesisir selatan. Konon Nyi Roro Kidul sedang "mbuka segara". Nelayan pantang melaut. Ombak besar tiba-tiba bisa muncul tanpa sebab.' },
                { bulan: 2, tgl: 17, desc: 'Tanggal merah di kalender Jawa: Tumpek Landep. Hari keramat bagi benda-benda pusaka. Konon di malam hari, keris-keris kuno mengeluarkan suara lengkingan halus.' },
                { bulan: 2, tgl: 25, desc: 'Jumat Kliwon terakhir di bulan ini. Konon di pemakaman umum sering terlihat keranda terbang melintas di atas pohon-pohon besar. Tidak semua orang bisa melihatnya.' },
                { bulan: 3, tgl: 1, desc: 'Malam April Mop di Indonesia identik dengan cerita horor. Di sebuah pondok pesantren tua di Jawa Timur, konon pada tanggal ini suara genderang perang dari masa lalu terdengar dari dalam tanah.' },
                { bulan: 3, tgl: 15, desc: 'Diperkirakan sebagai malam "puncak" para lelembut. Konon di daerah Magelang, sapi-sapi di kandang sering gelisah dan melenguh tanpa sebab pada malam ini.' },
                { bulan: 3, tgl: 28, desc: 'Selasa Wage terakhir bulan ini. Dipercaya sebagai hari dimana makhluk halus dari 4 penjuru mata angin berkumpul. Jangan keluar rumah setelah jam 9 malam.' },
                { bulan: 4, tgl: 1, desc: 'Hari Buruh Internasional. Namun di Jawa, tanggal ini dipercaya sebagai hari turunnya "Ratu Pantai Selatan" ke darat. Ombak di pantai selatan menjadi sangat berbahaya.' },
                { bulan: 4, tgl: 12, desc: 'Hari yang dianggap sakral bagi penganut Kejawen. Konon di Gunung Lawu, pada tanggal ini sering terdengar gamulan mistis dari puncak gunung. Para pendaki mengaku mendengar suara tarian tanpa wujud.' },
                { bulan: 4, tgl: 22, desc: 'Malam Jumat Kliwon di bulan ini sangat istimewa. Konon pohon beringin di alun-alun kota Jawa bisa berganti tempat dalam semalam. Siapa yang menyaksikannya akan mendapatkan "pamor" berupa kemampuan melihat alam gaib.' },
                { bulan: 5, tgl: 7, desc: 'Dipercaya sebagai tanggal lahirnya makhluk bernama "Genderuwo" dalam kepercayaan Jawa. Konon di daerah Banyuwangi, malam hari sering terdengar suara tawa besar yang menggema di tengah hutan.' },
                { bulan: 5, tgl: 18, desc: 'Malam 1 Sura (tahun baru Jawa). Ini adalah malam paling sakral dalam penanggalan Jawa. Konon semua makhluk halus berkumpul. Orang-orang melakukan tirakatan dan meditasi massal.' },
                { bulan: 5, tgl: 30, desc: 'Akhir bulan penuh misteri. Dipercaya sebagai hari terbaik untuk "nanggap" atau berinteraksi dengan makhluk halus. Dukun-dukun di Jawa sering melakukan ritual di malam ini.' },
                { bulan: 6, tgl: 8, desc: 'Tanggal keramat di bulan Rejeb. Banyak peziarah ke makam-makam keramat. Konon doa di malam ini mustajab. Tapi juga banyak penampakan di area pemakaman.' },
                { bulan: 6, tgl: 21, desc: 'Hari angker di wilayah DIY. Konon pada tanggal ini, Keraton Yogyakarta mengadakan ritual khusus untuk menutup "pintu gaib" yang terbuka. Masyarakat dilarang keluar rumah setelah tengah malam.' },
                { bulan: 7, tgl: 5, desc: 'Malam Nishfu Sya\'ban. Dipercaya sebagai malam pembagian rezeki dan pencatatan nasib. Namun juga malam dimana arwah-arwah gentayangan pulang ke rumahnya. Tradisi "megibung" atau bagi-bagi makanan dilakukan untuk menghormati mereka.' },
                { bulan: 7, tgl: 17, desc: 'Tanggal keramat bulan Ruwah. Banyak masyarakat melakukan "nyekar" ke makam leluhur. Konon arwah-arwah pulang ke rumah asal. Siapa yang tidak menyambutnya akan mendapat kesialan.' },
                { bulan: 7, tgl: 25, desc: 'Jumat terakhir bulan Ruwah. Dikenal sebagai malam "pengampunan dosa" sekaligus malam paling angker kedua setelah 1 Sura. Banyak ritual pemanggil arwah dilakukan.' },
                { bulan: 8, tgl: 1, desc: '1 Ramadan dalam kalender Jawa (Pasa). Hari pertama puasa, konon setan-setan dibelenggu. Namun di beberapa tempat justru semakin banyak kejadian mistis karena khodam-khodam penjaga tertentu ikut berpuasa dan melemah.' },
                { bulan: 8, tgl: 17, desc: 'Hari kemerdekaan RI. Di dunia mistis Jawa, konon pukul 17.17 selalu ada hening sejenak di alam gaib sebagai penghormatan pada para pahlawan yang gugur.' },
                { bulan: 8, tgl: 25, desc: 'Malam ganjil di 10 hari terakhir Ramadan. Dipercaya sebagai malam Lailatul Qadar. Namun di Jawa, malam ini juga dianggap wingit (angker). Pintu langit terbuka, pintu alam gaib juga ikut terbuka.' },
                { bulan: 9, tgl: 1, desc: '1 Syawal atau Lebaran. Dalam tradisi Jawa, malam takbiran juga dipercaya sebagai malam di mana para leluhur ikut merayakan. Suara takbir dianggap sebagai "panggilan" yang membuat mereka ikut hadir.' },
                { bulan: 9, tgl: 15, desc: 'Bulan Syawal, minggu kedua. Konon di desa-desa Jawa, sering ada pagebluk atau wabah misterius yang muncul di tanggal ini. Masyarakat mengadakan selamatan desa untuk menolak bala.' },
                { bulan: 9, tgl: 29, desc: 'Akhir bulan Syawal. Konon di beberapa pantai selatan, malam hari ombak berubah warna menjadi hitam pekat. Para nelayan percaya itu adalah rambut Nyi Roro Kidul yang terbawa ombak.' },
                { bulan: 10, tgl: 7, desc: 'Bulan Sela atau Apit. Dalam tradisi Jawa, ini adalah bulan untuk "ngalap berkah" ke tempat-tempat keramat. Konon di bulan ini energi mistis mencapai keseimbangan, baik untuk meditasi maupun kontak spiritual.' },
                { bulan: 10, tgl: 20, desc: 'Tanggal keramat di bulan Sela. Dipercaya sebagai hari turunnya ajaran-ajaran mistik kepada para empu di masa lalu. Banyak ilmu kebatinan yang "diturunkan" pada tanggal ini.' },
                { bulan: 10, tgl: 30, desc: 'Malam terakhir bulan Sela. Konon pohon-pohon besar di hutan Jawa "bersujud" pada tengah malam. Siapa yang masih terjaga dan melihatnya, konon akan mendapatkan kesaktian ilmu pancasona.' },
                { bulan: 11, tgl: 1, desc: '1 Besar. Bulan terakhir dalam kalender Jawa. Dipercaya sebagai bulan penutup siklus energi. Masyarakat melakukan bersih desa dan selamatan besar-besaran.' },
                { bulan: 11, tgl: 12, desc: 'Menjelang pertengahan bulan Besar. Konon di malam ini terjadi "benturan" energi antara tahun lama dan tahun baru. Fenomena mistis sering terjadi, terutama di daerah pegunungan.' },
                { bulan: 11, tgl: 25, desc: 'Tanggal istimewa. Dipercaya sebagai hari terbaik untuk tirakat dan mendekatkan diri pada Yang Maha Kuasa. Energi spiritual mencapai puncaknya di tahun Jawa. Banyak yang melakukan semedi di tempat-tempat angker untuk mendapatkan "wisik" atau petunjuk gaib.' },
            ];

            // ===== PRIMBON KECOCOKAN KHODAM =====
            const KETERANGAN_KHODAM = {
                'Harimau Sumatera': { sifat: 'Pelindung pemberani', elemen: 'Api' },
                'Elang Jawa': { sifat: 'Pengawal langit', elemen: 'Angin' },
                'Komodo': { sifat: 'Kesaktian purba', elemen: 'Tanah' },
                'Buaya Muara': { sifat: 'Kekuatan air', elemen: 'Air' },
                'Gajah Sumatera': { sifat: 'Kebijaksanaan agung', elemen: 'Tanah' },
                'Badak Jawa': { sifat: 'Keteguhan hati', elemen: 'Tanah' },
                'Macan Tutul': { sifat: 'Kecepatan berpikir', elemen: 'Angin' },
                'Kancil': { sifat: 'Kecerdasan licik', elemen: 'Angin' },
                'Ular Sanca': { sifat: 'Kesabaran membelit', elemen: 'Tanah' },
                'Burung Hantu': { sifat: 'Kebijaksanaan malam', elemen: 'Api' },
                'Rajawali': { sifat: 'Kekuasaan tertinggi', elemen: 'Api' },
                'Biawak': { sifat: 'Petarung ulung', elemen: 'Tanah' },
                'Kera Hitam': { sifat: 'Kelicikan cerdas', elemen: 'Angin' },
                'Cendrawasih': { sifat: 'Keindahan surgawi', elemen: 'Angin' },
                'Penyu Hijau': { sifat: 'Panjang umur', elemen: 'Air' },
                'Lumba-lumba': { sifat: 'Penolong sejati', elemen: 'Air' },
                'Rusa': { sifat: 'Kewaspadaan lembut', elemen: 'Angin' },
                'Musang': { sifat: 'Kelincahan jalan', elemen: 'Angin' },
                'Trenggiling': { sifat: 'Perlindungan baju waja', elemen: 'Tanah' },
                'Babi Hutan': { sifat: 'Keganasan berani', elemen: 'Tanah' },
                'Beruang Madu': { sifat: 'Kekuatan manis', elemen: 'Tanah' },
                'Kupu-kupu': { sifat: 'Transformasi indah', elemen: 'Angin' },
                'Kelelawar': { sifat: 'Penglihatan gelap', elemen: 'Angin' },
                'Kucing Hutan': { sifat: 'Kemandirian liar', elemen: 'Api' },
                'Orang Utan': { sifat: 'Kebijaksanaan sepuh', elemen: 'Tanah' },
                'Anoa': { sifat: 'Ketahanan pendek', elemen: 'Tanah' },
                'Kasuari': { sifat: 'Penjaga batas', elemen: 'Api' },
                'Macan Dahan': { sifat: 'Misteri tersembunyi', elemen: 'Angin' },
                'Tarsius': { sifat: 'Mata tembus pandang', elemen: 'Angin' },
                'Kukang': { sifat: 'Kesabaran bergerak', elemen: 'Tanah' },
                'Bekantan': { sifat: 'Keunikan menonjol', elemen: 'Air' },
                'Landak': { sifat: 'Pertahanan diri', elemen: 'Tanah' },
                'Singa': { sifat: 'Kekuasaan raja', elemen: 'Api' },
                'Kuda': { sifat: 'Kebebasan liar', elemen: 'Angin' },
                'Monyet': { sifat: 'Kepintaran nakal', elemen: 'Angin' },
            };

            function cariHorror(bulan, tanggal) {
                for (const h of HORROR) {
                    if (h.bulan === bulan && h.tgl === tanggal) {
                        return h;
                    }
                }
                for (const h of HORROR) {
                    if (h.bulan === bulan) {
                        return h;
                    }
                }
                const idx = (bulan + tanggal) % HORROR.length;
                return HORROR[idx];
            }

            function getElemenWeton(weton) {
                const elemen = ['Tanah', 'Air', 'Api', 'Angin'];
                const idx = (weton.hariIndex + weton.pasaranIndex) % 4;
                return elemen[idx];
            }

            function cariKecocokan(neptu, khodam) {
                const info = KETERANGAN_KHODAM[khodam.name];
                if (!info) return '';
                const elemenKhodam = info.elemen;
                const wetonEl = ['Tanah', 'Air', 'Api', 'Angin'][(neptu.weton.hariIndex + neptu.weton.pasaranIndex) % 4];
                if (elemenKhodam === wetonEl) {
                    return 'SELARAS: Khodam ' + elemenKhodam + ' selaras dengan weton ' + wetonEl + ' mu! Energi menyatu sempurna.';
                } else if (
                    (elemenKhodam === 'Api' && wetonEl === 'Tanah') ||
                    (elemenKhodam === 'Tanah' && wetonEl === 'Api')
                ) {
                    return 'NETRAL: Khodam ' + elemenKhodam + ' dan weton ' + wetonEl + ' mu saling melengkapi.';
                } else {
                    return 'UNIK: Kombinasi khodam ' + elemenKhodam + ' dan weton ' + wetonEl + ' menciptakan energi mistis yang langka.';
                }
            }

            // ===== I18N =====
            const LANG = {
                jawa: {
                    subtitle: 'sopo khodam mu?',
                    namaPlaceholder: 'Jeneng panjenengan...',
                    cekBtn: 'Cek Khodam',
                    loading: 'Memediksi khodam...',
                    normalBtn: 'Cek Khodam',
                    primbonHeader: 'Primbon Jawa',
                    horrorHeader: 'Kejadian Horror',
                     resetBtn: 'Cek Maneh',
                     shareBtn: 'Bagikan',
                     shareCopied: 'Disalin!',
                     footer: '\uA9B6\uA9B4\uA9B1\uA9B2\uA9AE\uA9A3 &bull; kanggo seneng-seneng wae',
                },
             indonesia: {
                     subtitle: 'siapa khodam kamu?',
                     namaPlaceholder: 'Nama kamu...',
                     cekBtn: 'Cek Khodam',
                     loading: 'Memprediksi khodam...',
                     normalBtn: 'Cek Khodam',
                     primbonHeader: 'Primbon Jawa',
                     horrorHeader: 'Kejadian Horror',
                     resetBtn: 'Cek Lagi',
                     shareBtn: 'Bagikan',
                     shareCopied: 'Tersalin!',
                     footer: 'untuk bersenang-senang saja',
                 }
            };
            let currentLang = 'jawa';

            // ===== AKSARA SETUP =====
            const aksaraElements = new Map();

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

            function setAksaraText(elId, text) {
                const el = document.getElementById(elId);
                if (el) setAksara(el, text);
            }



            // ===== MAIN =====
             const namaInput = document.getElementById('namaInput');
             const tanggalInput = document.getElementById('tanggalInput');
             const cekBtn = document.getElementById('cekBtn');
             const resultArea = document.getElementById('resultArea');
             const spinnerArea = document.getElementById('spinnerArea');
             const finalResult = document.getElementById('finalResult');
             const spinText = document.getElementById('spinText');
             const khodamName = document.getElementById('khodamName');
             const khodamDesc = document.getElementById('khodamDesc');
             const namaDisplay = document.getElementById('namaDisplay');
             const primbonArea = document.getElementById('primbonArea');
             const tglMasehi = document.getElementById('tglMasehi');
             const tglJawa = document.getElementById('tglJawa');
             const wetonDisplay = document.getElementById('wetonDisplay');
             const pasaranDisplay = document.getElementById('pasaranDisplay');
             const neptuDisplay = document.getElementById('neptuDisplay');
             const primbonDesc = document.getElementById('primbonDesc');
             const horrorArea = document.getElementById('horrorArea');
             const horrorDate = document.getElementById('horrorDate');
             const horrorDesc = document.getElementById('horrorDesc');
             const resetBtn = document.getElementById('resetBtn');
             const shareBtn = document.getElementById('shareBtn');
             const loadingText = document.getElementById('loadingText');
             const subtitleText = document.getElementById('subtitleText');
             const subtitleAksara = document.getElementById('subtitleAksara');
             const footerText = document.getElementById('footerText');
             const primbonHeader = document.getElementById('primbonHeader');
             const primbonAksara = document.getElementById('primbonAksara');
             const horrorHeader = document.getElementById('horrorHeader');
             const horrorAksara = document.getElementById('horrorAksara');
             const khodamAksara = document.getElementById('khodamAksara');

             // ===== I18N SETUP =====
             function setLang(lang) {
                 currentLang = lang;
                 const t = LANG[lang];
                 if (subtitleText) subtitleText.textContent = t.subtitle;
                 if (namaInput) namaInput.placeholder = t.namaPlaceholder;
                 if (loadingText) loadingText.textContent = t.loading;
                 if (resetBtn) resetBtn.textContent = t.resetBtn;
                 if (shareBtn) shareBtn.textContent = t.shareBtn;
                 if (footerText) footerText.textContent = t.footer;
                 if (primbonHeader) primbonHeader.textContent = t.primbonHeader;
                 if (horrorHeader) horrorHeader.textContent = t.horrorHeader;
                 // Re-populate aksara for subtitle only (others populated after result)
                 if (lang === 'jawa') {
                     setAksara(subtitleAksara, t.subtitle);
                 }
                 setAksara(primbonAksara, t.primbonHeader);
                 setAksara(horrorAksara, t.horrorHeader);
             }





            // ===== SHARE =====
            let lastResult = null;

            function getShareText() {
                if (!lastResult) return '';
                const t = 'Cek Khodam\n' +
                    'Khodam: ' + lastResult.khodam.name + '\n' +
                    'Weton: ' + lastResult.weton.hari + ' ' + lastResult.weton.pasaran + '\n' +
                    'Neptu: ' + lastResult.weton.neptu + '\n' +
                    'Tanggal: ' + lastResult.tanggal + '\n\n' +
                    'Cek juga di ' + window.location.href;
                return t;
            }

            if (shareBtn) {
                shareBtn.addEventListener('click', function() {
                    const text = getShareText();
                    if (!text) return;
                    if (navigator.share) {
                        navigator.share({
                            title: 'Cek Khodam',
                            text: text,
                        }).catch(function() {});
                    } else if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(text).then(function() {
                            const orig = shareBtn.textContent;
                            shareBtn.textContent = LANG[currentLang].shareCopied;
                            setTimeout(function() {
                                shareBtn.textContent = orig;
                            }, 2000);
                        }).catch(function() {
                            fallbackCopy(text);
                        });
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
                    setTimeout(function() {
                        shareBtn.textContent = orig;
                    }, 2000);
                } catch (e) {}
                document.body.removeChild(ta);
            }

            // ===== DATE LIMIT =====
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            tanggalInput.max = yyyy + '-' + mm + '-' + dd;

            // ===== CEK KHODAM =====
            cekBtn.addEventListener('click', function() {

                const nama = namaInput.value.trim() || 'Sampeyan';
                const tglVal = tanggalInput.value;
                if (!tglVal) {
                    tanggalInput.focus();
                    tanggalInput.style.borderColor = '#c04040';
                    setTimeout(function() {
                        tanggalInput.style.borderColor = '';
                    }, 2000);
                    return;
                }

                const parts = tglVal.split('-');
                const tglDate = new Date(parseInt(parts[0]), parseInt(parts[1]) - 1, parseInt(parts[2]));
                const weton = getWeton(tglDate);
                const jawa = konversiTanggalJawa(tglDate);
                const primbon = getPrimbon(weton);
                const horror = cariHorror(tglDate.getMonth(), tglDate.getDate());

                const result = khodams[Math.floor(Math.random() * khodams.length)];

                lastResult = {
                    khodam: result,
                    weton: weton,
                    tanggal: parseInt(parts[2]) + ' ' + ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'][tglDate.getMonth()] + ' ' + parts[0]
                };

                resultArea.classList.remove('hidden');
                finalResult.classList.add('hidden');
                primbonArea.classList.add('hidden');
                horrorArea.classList.add('hidden');
                spinnerArea.classList.remove('hidden');
                spinText.textContent = '';

                cekBtn.disabled = true;
                cekBtn.textContent = 'Memediksi...';

                const namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

                let fastCount = 0;
                const fastCycles = 18;
                const slowCycles = 8;

                function fastPhase() {
                    if (fastCount < fastCycles) {
                        spinText.textContent = khodams[Math.floor(Math.random() * khodams.length)].name;
                        fastCount++;
                        setTimeout(fastPhase, 80);
                    } else {
                        slowCount = 0;
                        slowPhase();
                    }
                }

                let slowCount = 0;
                function slowPhase() {
                    if (slowCount < slowCycles) {
                        spinText.textContent = khodams[Math.floor(Math.random() * khodams.length)].name;
                        slowCount++;
                        const delay = 150 + slowCount * 60;
                        setTimeout(slowPhase, delay);
                    } else {
                        spinText.textContent = result.name;
                        setTimeout(function() {
                            spinnerArea.classList.add('hidden');
                            finalResult.classList.remove('hidden');
                            namaDisplay.textContent = nama;
                            khodamName.textContent = result.name;
                            khodamDesc.textContent = result.desc;

                            // Aksara jawa for khodam name
                            setAksara(khodamAksara, result.name);

                            const kecocokan = cariKecocokan({ weton: weton }, result);
                            if (kecocokan) {
                                khodamDesc.textContent = result.desc + ' ' + kecocokan;
                            }

                            const tanggalStr = parseInt(parts[2]) + ' ' + namaBulan[tglDate.getMonth()] + ' ' + parts[0];
                            tglMasehi.textContent = tanggalStr;
                            tglJawa.textContent = jawa.tanggal + ' ' + jawa.bulan + ' ' + jawa.tahun + ' (' + jawa.windu + ')';
                            wetonDisplay.textContent = weton.hari + ' ' + weton.pasaran;
                            pasaranDisplay.textContent = weton.pasaran;
                            neptuDisplay.textContent = weton.neptu;
                            primbonDesc.textContent = primbon.watak;
                            primbonArea.classList.remove('hidden');
                            primbonArea.classList.add('animate-reveal');

                            // Aksara for weton
                            setAksara(primbonAksara, LANG[currentLang].primbonHeader);

                            const hDate = tanggalStr;
                            horrorDate.textContent = '\u2B21 ' + hDate;
                            horrorDesc.textContent = horror.desc;
                            horrorArea.classList.remove('hidden');
                            horrorArea.classList.add('animate-reveal');

                            setAksara(horrorAksara, LANG[currentLang].horrorHeader);

                            finalResult.classList.add('animate-reveal');

                            cekBtn.disabled = false;
                            cekBtn.textContent = LANG[currentLang].normalBtn;


                        }, 600);
                    }
                }

                fastPhase();
            });

            // ===== RESET =====
            resetBtn.addEventListener('click', function() {
                resultArea.classList.add('hidden');
                finalResult.classList.add('hidden');
                primbonArea.classList.add('hidden');
                horrorArea.classList.add('hidden');
                finalResult.classList.remove('animate-reveal');
                primbonArea.classList.remove('animate-reveal');
                horrorArea.classList.remove('animate-reveal');
                namaInput.value = '';
                tanggalInput.value = '';
                tanggalInput.style.borderColor = '';
                namaInput.focus();
                lastResult = null;
            });

             // ===== KEYBOARD =====
             namaInput.addEventListener('keydown', function(e) {
                 if (e.key === 'Enter') {
                     tanggalInput.focus();
                 }
             });

             tanggalInput.addEventListener('keydown', function(e) {
                 if (e.key === 'Enter') {
                     cekBtn.click();
                 }
            });

            // ===== IMAGE GENERATION (Canvas API) =====
            let isGenerating = false;
            
            async function generateShareImage(resultData) {
                if (isGenerating) return null;
                isGenerating = true;
                
                // Wait for fonts to be ready
                if (document.fonts) {
                    await document.fonts.ready;
                }
                
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                // Card dimensions (4:5 ratio, good for mobile sharing)
                const width = 540;
                const height = 675;
                canvas.width = width;
                canvas.height = height;
                
                // 1. Background gradient (dark mystical)
                const gradient = ctx.createLinearGradient(0, 0, 0, height);
                gradient.addColorStop(0, '#070a07');
                gradient.addColorStop(0.5, '#0d120d');
                gradient.addColorStop(1, '#070a07');
                ctx.fillStyle = gradient;
                ctx.fillRect(0, 0, width, height);
                
                // 2. Decorative border
                ctx.strokeStyle = '#d4a843';
                ctx.lineWidth = 2;
                ctx.strokeRect(1, 1, width-2, height-2);
                
                // 3. Inner decorative border
                ctx.strokeStyle = '#d4a843';
                ctx.lineWidth = 1;
                ctx.setLineDash([8, 6]);
                ctx.strokeRect(20, 20, width-40, height-40);
                ctx.setLineDash([]);
                
                // 4. Title section
                ctx.textAlign = 'center';
                const centerX = width / 2;
                let yPos = 80;
                
                // Main title - Cek Khodam
                ctx.font = 'bold 28px "Playfair Display", serif';
                ctx.fillStyle = '#d4a843';
                ctx.fillText('Cek Khodam', centerX, yPos);
                yPos += 40;
                
                // Subtitle - Aksara Jawa
                try {
                    const aksaraTitle = window.toJavanese ? window.toJavanese('Cek Khodam') : 'Cek Khodam';
                    ctx.font = '20px "Instrument Sans", sans-serif';
                    ctx.fillStyle = '#d4a843';
                    ctx.fillText(aksaraTitle, centerX, yPos);
                } catch (e) {
                    ctx.font = '16px "Instrument Sans", sans-serif';
                    ctx.fillStyle = '#d4a843';
                    ctx.fillText('Cek Khodam', centerX, yPos);
                }
                yPos += 30;
                
                // Decorative separator
                ctx.strokeStyle = '#d4a843';
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.moveTo(centerX - 60, yPos);
                ctx.lineTo(centerX + 60, yPos);
                ctx.stroke();
                yPos += 30;
                
                // 5. User name
                ctx.font = '18px "Instrument Sans", sans-serif';
                ctx.fillStyle = '#e8e0d0';
                ctx.fillText(`Untuk: ${resultData.nama}`, centerX, yPos);
                yPos += 40;
                
                // 6. Khodam name
                ctx.font = 'bold 24px "Playfair Display", serif';
                ctx.fillStyle = '#d4a843';
                ctx.fillText(resultData.khodam.name, centerX, yPos);
                yPos += 30;
                
                // Khodam Aksara
                try {
                    const aksaraName = window.toJavanese ? window.toJavanese(resultData.khodam.name) : resultData.khodam.name;
                    ctx.font = '18px "Instrument Sans", sans-serif';
                    ctx.fillStyle = '#d4a843';
                    ctx.fillText(aksaraName, centerX, yPos);
                } catch (e) {
                    ctx.font = '16px "Instrument Sans", sans-serif';
                    ctx.fillStyle = '#d4a843';
                    ctx.fillText(resultData.khodam.name, centerX, yPos);
                }
                yPos += 20;
                
                // Khodam description (shortened)
                ctx.font = '14px "Instrument Sans", italic';
                ctx.fillStyle = '#b0a080';
                const desc = resultData.khodam.desc.length > 60 
                    ? resultData.khodam.desc.substring(0, 57) + '...' 
                    : resultData.khodam.desc;
                ctx.fillText(desc, centerX, yPos, width - 80);
                yPos += 25;
                
                // 7. Separator line
                ctx.strokeStyle = '#d4a843';
                ctx.lineWidth = 1;
                ctx.setLineDash([4, 2]);
                ctx.beginPath();
                ctx.moveTo(centerX - 80, yPos);
                ctx.lineTo(centerX + 80, yPos);
                ctx.stroke();
                ctx.setLineDash([]);
                yPos += 30;
                
                // 8. Details section (Weton, Neptu, Tanggal)
                ctx.textAlign = 'left';
                const leftX = width / 2 - 150;
                
                ctx.font = '16px "Instrument Sans", sans-serif';
                ctx.fillStyle = '#a09070';
                ctx.fillText('Weton:', leftX, yPos);
                ctx.fillStyle = '#e8e0d0';
                ctx.fillText(`${resultData.weton.hari} ${resultData.weton.pasaran}`, leftX + 80, yPos);
                yPos += 25;
                
                ctx.fillStyle = '#a09070';
                ctx.fillText('Neptu:', leftX, yPos);
                ctx.fillStyle = '#d4a843';
                ctx.font = 'bold 18px "Instrument Sans", sans-serif';
                ctx.fillText(resultData.weton.neptu.toString(), leftX + 80, yPos);
                yPos += 25;
                
                ctx.fillStyle = '#a09070';
                ctx.fillText('Tanggal:', leftX, yPos);
                ctx.fillStyle = '#e8e0d0';
                ctx.fillText(resultData.tanggal, leftX + 80, yPos);
                yPos += 35;
                
                // 9. Footer
                ctx.textAlign = 'center';
                ctx.font = '12px "Instrument Sans", sans-serif';
                ctx.fillStyle = '#6a7050';
                ctx.fillText('cek-khodam.test', centerX, height - 20);
                
                // Convert to blob
                return new Promise((resolve, reject) => {
                    canvas.toBlob((blob) => {
                        isGenerating = false;
                        if (blob) {
                            resolve(blob);
                        } else {
                            reject(new Error('Canvas is blank'));
                        }
                    }, 'image/png');
                });
            }
            
            // Share image button handler
            if (shareImgBtn) {
                shareImgBtn.addEventListener('click', async function() {
                    if (!lastResult) return;
                    
                    // Show loading state
                    const originalText = shareImgBtn.textContent;
                    shareImgBtn.textContent = 'Membuat...';
                    shareImgBtn.disabled = true;
                    
                    try {
                        const blob = await generateShareImage({
                            nama: namaInput.value.trim() || 'Sampeyan',
                            khodam: lastResult.khodam,
                            weton: lastResult.weton,
                            tanggal: lastResult.tanggal
                        });
                        
                        const blobUrl = URL.createObjectURL(blob);
                        
                        // Try to share via Web Share API (mobile)
                        if (navigator.share) {
                            try {
                                await navigator.share({
                                    title: 'Cek Khodam Result',
                                    text: 'Lihat hasil cek khodamku!',
                                    files: [new File([blob], 'khodam-result.png', { type: 'image/png' })]
                                });
                            } catch (shareError) {
                                // If share fails, fall back to download
                                const a = document.createElement('a');
                                a.href = blobUrl;
                                a.download = `khodam-${Date.now()}.png`;
                                document.body.appendChild(a);
                                a.click();
                                document.body.removeChild(a);
                            }
                        } else {
                            // Desktop: force download
                            const a = document.createElement('a');
                            a.href = blobUrl;
                            a.download = `khodam-${Date.now()}.png`;
                            document.body.appendChild(a);
                            a.click();
                            document.body.removeChild(a);
                        }
                        
                        URL.revokeObjectURL(blobUrl);
                    } catch (error) {
                        console.error('Failed to generate/share image:', error);
                        alert('Gagal membuat gambar. Silakan coba lagi.');
                    } finally {
                        shareImgBtn.textContent = originalText;
                        shareImgBtn.disabled = false;
                    }
                });
            }
            
            // Save image button handler
            if (saveImgBtn) {
                saveImgBtn.addEventListener('click', async function() {
                    if (!lastResult) return;
                    
                    // Show loading state
                    const originalText = saveImgBtn.textContent;
                    saveImgBtn.textContent = 'Membuat...';
                    saveImgBtn.disabled = true;
                    
                    try {
                        const blob = await generateShareImage({
                            nama: namaInput.value.trim() || 'Sampeyan',
                            khodam: lastResult.khodam,
                            weton: lastResult.weton,
                            tanggal: lastResult.tanggal
                        });
                        
                        const blobUrl = URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = blobUrl;
                        a.download = `khodam-${(namaInput.value.trim() || 'Sampeyan').replace(/\s+/g, '_')}-${Date.now()}.png`;
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        URL.revokeObjectURL(blobUrl);
                    } catch (error) {
                        console.error('Failed to generate image:', error);
                        alert('Gagal membuat gambar. Silakan coba lagi.');
                    } finally {
                        saveImgBtn.textContent = originalText;
                        saveImgBtn.disabled = false;
                    }
                });
            }
            
            // ===== INIT I18N =====
            setLang('jawa');

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
                    this.currentBgmGong = null;
                    this.slendro = [264, 297, 330, 396, 495];
                    this.pelog = [264, 297, 330, 370, 412, 445, 495];
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
                    if (this.ctx.state === 'suspended') {
                        this.ctx.resume();
                    }
                }

                // ===== GONG SYNTHESIS =====
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

                    // Add harmonic partials for authentic gamelan gong timbre
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

                // ===== BONANG SYNTHESIS =====
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

                    // Add a second oscillator at double frequency for metallic timbre
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

                // ===== ATMOSPHERIC PAD =====
                startBGM() {
                    this.ensureCtx();
                    if (this.isBgmPlaying) return;
                    this.isBgmPlaying = true;

                    const now = this.ctx.currentTime;

                    // Drone base
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

                    // Fifth above
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

                    // Atmospheric pad (filtered noise)
                    const bufferSize = this.ctx.sampleRate * 2;
                    const buffer = this.ctx.createBuffer(1, bufferSize, this.ctx.sampleRate);
                    const data = buffer.getChannelData(0);
                    for (let i = 0; i < bufferSize; i++) {
                        data[i] = (Math.random() * 2 - 1) * 0.02;
                    }
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

                    this.isBgmPlaying = true;

                    // Periodic soft gong hits as rhythm
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
                            if (n.gain) {
                                n.gain.gain.exponentialRampToValueAtTime(0.001, now + 0.5);
                            }
                            if (n.osc) {
                                n.osc.stop(now + 0.5);
                            }
                            if (n.lfo) {
                                n.lfo.stop(now + 0.5);
                            }
                        } catch (e) {}
                    });
                    this.bgmNodes = [];
                }

                // ===== SPINNER SEQUENCE =====
                playSpinnerSequence() {
                    this.ensureCtx();
                    const sequence = [
                        [0, 0.08], [1, 0.12], [2, 0.08], [3, 0.14],
                        [4, 0.08], [3, 0.1], [2, 0.08], [1, 0.12],
                        [0, 0.08], [4, 0.1], [3, 0.08], [2, 0.14],
                        [1, 0.08], [0, 0.1], [4, 0.12], [3, 0.08]
                    ];
                    const now = this.ctx.currentTime;
                    sequence.forEach((item, i) => {
                        const noteIdx = item[0];
                        const delay = item[1];
                        const startTime = now + i * 0.1;
                        const freq = this.slendro[noteIdx % 5];
                        const osc = this.ctx.createOscillator();
                        const gain = this.ctx.createGain();
                        const filter = this.ctx.createBiquadFilter();
                        osc.type = 'triangle';
                        osc.frequency.setValueAtTime(freq, startTime);
                        gain.gain.setValueAtTime(0, startTime);
                        gain.gain.linearRampToValueAtTime(0.3, startTime + 0.003);
                        gain.gain.exponentialRampToValueAtTime(0.001, startTime + delay);
                        filter.type = 'bandpass';
                        filter.frequency.setValueAtTime(freq * 3, startTime);
                        filter.Q.setValueAtTime(4, startTime);
                        osc.connect(filter);
                        filter.connect(gain);
                        gain.connect(this.sfxGain);
                        osc.start(startTime);
                        osc.stop(startTime + delay + 0.02);
                    });
                }

                // ===== HORROR AMBIANCE =====
                playHorrorAmbiance() {
                    this.ensureCtx();
                    const now = this.ctx.currentTime;
                    const horrorGain = this.ctx.createGain();
                    horrorGain.gain.setValueAtTime(0, now);
                    horrorGain.gain.linearRampToValueAtTime(0.15, now + 0.5);
                    horrorGain.gain.exponentialRampToValueAtTime(0.001, now + 5);

                    const osc = this.ctx.createOscillator();
                    osc.type = 'sawtooth';
                    osc.frequency.setValueAtTime(55, now);
                    osc.frequency.linearRampToValueAtTime(50, now + 2);
                    osc.frequency.linearRampToValueAtTime(60, now + 4);

                    const filter = this.ctx.createBiquadFilter();
                    filter.type = 'lowpass';
                    filter.frequency.setValueAtTime(150, now);
                    filter.frequency.exponentialRampToValueAtTime(80, now + 3);

                    osc.connect(filter);
                    filter.connect(horrorGain);
                    horrorGain.connect(this.masterGain);
                    osc.start(now);
                    osc.stop(now + 5);

                    // Wind-like noise
                    const bufSize = this.ctx.sampleRate * 3;
                    const buf = this.ctx.createBuffer(1, bufSize, this.ctx.sampleRate);
                    const ch = buf.getChannelData(0);
                    for (let i = 0; i < bufSize; i++) {
                        ch[i] = (Math.random() * 2 - 1) * 0.3;
                    }
                    const wind = this.ctx.createBufferSource();
                    wind.buffer = buf;
                    const windFilter = this.ctx.createBiquadFilter();
                    windFilter.type = 'bandpass';
                    windFilter.frequency.setValueAtTime(300, now);
                    windFilter.Q.setValueAtTime(1, now);
                    const windGain = this.ctx.createGain();
                    windGain.gain.setValueAtTime(0, now);
                    windGain.gain.linearRampToValueAtTime(0.05, now + 1);
                    windGain.gain.exponentialRampToValueAtTime(0.001, now + 4);
                    wind.connect(windFilter);
                    windFilter.connect(windGain);
                    windGain.connect(this.masterGain);
                    wind.start(now);
                    wind.stop(now + 5);
                }

                // ===== REVEAL SEQUENCE =====
                playReveal() {
                    this.ensureCtx();
                    this.playGong(80, 4);
                    setTimeout(() => this.playGong(100, 3), 300);
                    setTimeout(() => {
                        for (let i = 0; i < 5; i++) {
                            this.playBonang(i % 5, 0.3 + i * 0.05);
                        }
                    }, 600);
                }

                // ===== UI CLICK =====
                playClick() {
                    this.ensureCtx();
                    const note = Math.floor(Math.random() * 5);
                    this.playBonang(note, 0.15);
                }

                // ===== MUTE CONTROL =====
                toggleMute() {
                    this.ensureCtx();
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
                    if (btn) {
                        btn.textContent = this.muted ? '🔇' : '🔊';
                    }
                }
            }

            const audio = new AudioSystem();

            // Mute button handler
            const muteBtn = document.getElementById('muteBtn');
            if (muteBtn) {
                muteBtn.addEventListener('click', function() {
                    audio.toggleMute();
                    audio.playClick();
                });
            }

            // Init audio on first user interaction
            function initAudioOnInteraction() {
                if (!audio.ctx) {
                    audio.init();
                    if (!audio.muted) {
                        audio.startBGM();
                    }
                }
                document.removeEventListener('click', initAudioOnInteraction);
                document.removeEventListener('touchstart', initAudioOnInteraction);
                document.removeEventListener('keydown', initAudioOnInteraction);
            }
            document.addEventListener('click', initAudioOnInteraction);
            document.addEventListener('touchstart', initAudioOnInteraction);
            document.addEventListener('keydown', initAudioOnInteraction);

            // ===== INTEGRATE SOUND INTO EXISTING FLOW =====
            const resultObserver = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        const el = mutation.target;
                        if (!el.classList.contains('hidden') && el.id === 'finalResult') {
                            if (audio.ctx && !audio.muted) {
                                setTimeout(function() {
                                    audio.playReveal();
                                }, 200);
                            }
                        }
                    }
                });
            });
            resultObserver.observe(finalResult, { attributes: true, attributeFilter: ['class'] });

            const horrorObserver = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        const el = mutation.target;
                        if (!el.classList.contains('hidden') && el.id === 'horrorArea') {
                            if (audio.ctx && !audio.muted) {
                                setTimeout(function() {
                                    audio.playHorrorAmbiance();
                                }, 400);
                            }
                        }
                    }
                });
            });
            horrorObserver.observe(horrorArea, { attributes: true, attributeFilter: ['class'] });

            cekBtn.addEventListener('click', function() {
                initAudioOnInteraction();
                if (audio.ctx && !audio.muted) {
                    audio.playClick();
                    setTimeout(function() {
                        audio.playSpinnerSequence();
                    }, 50);
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
            if (saveImgBtn) {
                saveImgBtn.addEventListener('click', function() {
                    if (audio.ctx && !audio.muted) audio.playClick();
                });
            }
            if (shareImgBtn) {
                shareImgBtn.addEventListener('click', function() {
                    if (audio.ctx && !audio.muted) audio.playClick();
                });
            }

            // ===== END AUDIO SYSTEM =====
        })();
    </script>

</body>
</html>
