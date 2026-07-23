<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Weton Jawa</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#070a07] text-[#e8e0d0] font-sans overflow-x-hidden">
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-30 flex items-center justify-between h-14 px-4 sm:px-6 bg-[#0a0f0a]/80 backdrop-blur-2xl shadow-[0_4px_30px_rgba(0,0,0,0.5)] before:content-[''] before:absolute before:inset-0 before:bg-gradient-to-r before:from-[#d4a843]/[0.02] before:via-transparent before:to-[#2d5a27]/[0.02] before:pointer-events-none">
        <a href="/cek-khodam" class="flex items-center gap-2.5 shrink-0">
            <span class="text-[#d4a843] text-xl leading-none">ꦕꦺꦏ꧀​ꦮꦼꦠꦺꦴꦤ꧀</span>
            <span class="text-[11px] text-[#d4a843]/50 tracking-[0.15em] uppercase font-light hidden sm:inline">Cek Weton</span>
        </a>
        <div class="flex items-center gap-1">
            <a href="/cek-khodam" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Khodam</a>
            <a href="/jodoh" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Jodoh</a>
            <a href="/weton" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 bg-[#d4a843]/[0.04]">Weton</a>
            <a href="/tentang" class="relative px-4 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300">Tentang</a>
            <button id="muteBtn" class="relative px-3 py-1.5 rounded-xl text-xs font-light tracking-wider text-[#d4a843]/80 hover:text-[#d4a843] hover:bg-[#d4a843]/[0.04] transition-all duration-300 border border-transparent" aria-label="Toggle sound">🔊</button>
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
                <span class="text-[#d4a843]/40 text-sm tracking-[0.3em] uppercase font-light">primbon jawa</span>
            </div>

            <div class="flex items-center justify-center gap-3 mb-2">
                <h1 class="font-serif text-5xl md:text-6xl font-black text-[#d4a843] tracking-wide">
                    Cek Weton
                </h1>
            </div>

            <p id="subtitleText" class="text-[#a09070] text-lg md:text-xl italic font-serif mb-8">
                weton mu opo?
            </p>
            <p id="subtitleAksara" class="text-[#4a5030]/60 text-sm font-serif mb-6 aksara-jawa"></p>

            <div class="space-y-4">
                <input
                    id="namaInput"
                    type="text"
                    placeholder="Jeneng panjenengan..."
                    class="w-full bg-[#0d120d]/80 border border-[#2d3a20]/50 rounded-lg px-5 py-3 text-[#e8e0d0] placeholder-[#6a7050]/60 focus:outline-none focus:border-[#d4a843]/50 focus:ring-1 focus:ring-[#d4a843]/30 transition-all text-center text-lg"
                    maxlength="50"
                />
                <input
                    id="tanggalInput"
                    type="date"
                    class="w-full bg-[#0d120d]/80 border border-[#2d3a20]/50 rounded-lg px-5 py-3 text-[#e8e0d0] focus:outline-none focus:border-[#d4a843]/50 focus:ring-1 focus:ring-[#d4a843]/30 transition-all text-center text-lg [color-scheme:dark]"
                />
                <button
                    id="cekBtn"
                    class="w-full bg-gradient-to-r from-[#d4a843] via-[#c49a30] to-[#d4a843] text-[#0a0f0a] font-semibold text-lg px-8 py-3.5 rounded-lg hover:from-[#e0b44f] hover:via-[#d4a843] hover:to-[#e0b44f] transition-all duration-300 active:scale-95 animate-pulse-glow disabled:opacity-60 disabled:cursor-not-allowed disabled:animate-none"
                >
                    Cek Weton
                </button>
            </div>

            <div id="resultArea" class="mt-8 hidden">
                <div id="spinnerArea" class="min-h-[140px] flex flex-col items-center justify-center">
                    <div class="relative">
                        <div class="w-16 h-16 border-2 border-[#2d3a20]/50 border-t-[#d4a843] rounded-full animate-spin mb-6"></div>
                    </div>
                    <p id="loadingText" class="text-[#a09070] text-sm font-light tracking-widest uppercase">Ngitung weton...</p>
                    <p id="spinText" class="font-serif text-2xl text-[#d4a843]/80 mt-4 min-h-[36px] transition-all duration-100"></p>
                </div>

                <div id="finalResult" class="hidden space-y-4">
                    <div class="bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-6 backdrop-blur-sm">
                        <p class="text-[#a09070] text-sm mb-1 tracking-wider">
                            Weton <span id="namaDisplay" class="text-[#d4a843] font-semibold"></span>
                        </p>
                        <p id="wetonAksara" class="text-[#4a5030]/50 text-sm mb-2 aksara-jawa"></p>

                        <div class="flex items-center justify-center gap-3 mb-1">
                            <span id="wetonHari" class="font-serif text-3xl text-[#d4a843] font-bold"></span>
                            <span id="wetonPasaran" class="font-serif text-3xl text-[#d4a843] font-bold"></span>
                        </div>

                        <div id="neptuBadge" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#d4a843]/10 border border-[#d4a843]/30 text-[#d4a843] text-sm font-semibold mt-2 mb-3">
                            Neptu <span id="neptuValue" class="text-lg"></span>
                        </div>

                        <div id="elementBadge" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase">
                        </div>
                    </div>

                    <div class="bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-5 backdrop-blur-sm text-left">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[#d4a843] text-lg">꧋</span>
                            <h3 class="font-serif text-lg font-semibold text-[#d4a843]">Primbon Jawa</h3>
                        </div>

                        <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-sm mb-4">
                            <span class="text-[#6a7050]">Tanggal Masehi</span>
                            <span id="tglMasehi" class="text-[#e8e0d0] text-right"></span>
                            <span class="text-[#6a7050]">Tanggal Jawa</span>
                            <span id="tglJawa" class="text-[#d4a843] text-right font-semibold"></span>
                            <span class="text-[#6a7050]">Pasaran</span>
                            <span id="pasaranDisplay" class="text-[#e8e0d0] text-right"></span>
                            <span class="text-[#6a7050]">Neptu</span>
                            <span id="neptuDisplay" class="text-[#d4a843] text-right font-bold"></span>
                        </div>

                        <div class="space-y-3">
                            <div class="bg-[#1a1f1a]/60 rounded-lg p-3 border border-[#d4a843]/10">
                                <p class="text-[#d4a843] text-xs font-semibold tracking-wider mb-1 uppercase">Watak</p>
                                <p id="watakDesc" class="text-[#b0a080] text-sm leading-relaxed"></p>
                            </div>
                            <div class="bg-[#1a1f1a]/60 rounded-lg p-3 border border-[#d4a843]/10">
                                <p class="text-[#d4a843] text-xs font-semibold tracking-wider mb-1 uppercase">Rezeki</p>
                                <p id="rezekiDesc" class="text-[#b0a080] text-sm leading-relaxed"></p>
                            </div>
                        </div>
                    </div>

                    <div id="extraArea" class="bg-[#0d120d]/60 border border-[#2d3a20]/40 rounded-xl px-6 py-5 backdrop-blur-sm text-left hidden">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[#d4a843] text-lg">✦</span>
                            <h3 id="extraHeader" class="font-serif text-lg font-semibold text-[#d4a843">Info Tambahan</h3>
                        </div>
                        <div class="grid grid-cols-2 gap-x-4 gap-y-3 text-sm">
                            <div>
                                <p class="text-[#6a7050] text-xs mb-1">Elemen</p>
                                <p id="extraElement" class="text-[#d4a843] font-semibold"></p>
                            </div>
                            <div>
                                <p class="text-[#6a7050] text-xs mb-1">Karir Cocok</p>
                                <p id="extraKarir" class="text-[#e8e0d0]"></p>
                            </div>
                            <div>
                                <p class="text-[#6a7050] text-xs mb-1">Arah Keberuntungan</p>
                                <p id="extraArah" class="text-[#e8e0d0]"></p>
                            </div>
                            <div>
                                <p class="text-[#6a7050] text-xs mb-1">Hari Keberuntungan</p>
                                <p id="extraHari" class="text-[#e8e0d0]"></p>
                            </div>
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

            const ELEMEN_WETON = ['Tanah', 'Air', 'Api', 'Angin'];

            const INFO_ELEMEN = {
                'Api': { color: '#d4a843', bg: '#d4a84310', border: '#d4a84330', karir: 'Pemimpin, Pengusaha, Chef, Atlet', arah: 'Selatan', hari: 'Selasa, Jumat' },
                'Tanah': { color: '#6a9050', bg: '#6a905010', border: '#6a905030', karir: 'Guru, Petani, Arsitek, Pengacara', arah: 'Tenggara', hari: 'Rabu, Sabtu' },
                'Air': { color: '#4080b0', bg: '#4080b010', border: '#4080b030', karir: 'Nelayan, Psikolog, Seniman, Perawat', arah: 'Utara', hari: 'Senin, Kamis' },
                'Angin': { color: '#b0a080', bg: '#b0a08010', border: '#b0a08030', karir: 'Penulis, Musisi, Pilot, Pedagang', arah: 'Barat', hari: 'Minggu, Kamis' }
            };

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
                    hariIndex: dayIdx,
                    neptuHari: HARI_NEptu[dayIdx],
                    neptuPasaran: PASARAN_NEptu[pasIdx]
                };
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
                            if (jBulan === 11) { jBulan = 0; jTahun++; }
                            else { jBulan++; }
                        }
                    }
                } else {
                    sisa = -sisa;
                    while (sisa > 0) {
                        if (sisa < jTanggal) { jTanggal -= sisa; sisa = 0; }
                        else {
                            sisa -= jTanggal;
                            if (jBulan === 0) { jBulan = 11; jTahun--; }
                            else { jBulan--; }
                            jTanggal = jBulan === 11 ? 30 : PANJANG_BULAN_Jawa[jBulan];
                            if (sisa < 0) { jTanggal += sisa; sisa = 0; }
                            if (sisa > 0) {
                                sisa--;
                                if (sisa > 0) jTanggal = jBulan === 11 ? 30 : PANJANG_BULAN_Jawa[jBulan];
                                else jTanggal = 1;
                            }
                        }
                    }
                }
                const winduIdx = (jTahun % 8 + 8) % 8;
                return { tanggal: jTanggal, bulan: NAMA_BULAN_Jawa[jBulan], tahun: jTahun, windu: WINDU[winduIdx] };
            }

            function getElemenWeton(weton) {
                return ELEMEN_WETON[(weton.hariIndex + weton.pasaranIndex) % 4];
            }

            const PRIMBON = {
                'Minggu Legi': { watak: 'Seneng kerja keras, pendiam nanging berwibawa. Nduweni insting sing kuat lan jarang kliru njupuk keputusan.', rezeki: 'Lancar lan kebak kejutan. Kerep oleh rezeki saka arah sing ora dikarepke.' },
                'Minggu Pahing': { watak: 'Pemberani lan ora gampang nyerah. Teguh ing pendirian, kadang keras kepala.', rezeki: 'Apik. Usaha sing dijalanake bakal nekakake hasil senajan perlu perjuangan.' },
                'Minggu Pon': { watak: 'Pinter gaul, ramah, lan disenengi wong akeh. Gampang adaptasi.', rezeki: 'Cukup. Ana wae rezeki teka, utamane saka relasi lan pertemanan.' },
                'Minggu Wage': { watak: 'Teliti, sabar, lan kerja keras. Ora seneng konflik nanging tegas.', rezeki: 'Stabil. Ora kakehan nanging cukup kanggo kabutuhan.' },
                'Minggu Kliwon': { watak: 'Berwibawa, nduweni daya tarik magis. Wong akeh segan lan ngajeni.', rezeki: 'Melimpah yen bisa ngatur emosi lan keterbukaan.' },
                'Senin Legi': { watak: 'Cerdas, pinter ngomong, lan gampang gaul. Cepet adaptasi.', rezeki: 'Lancar. Bakat ngomong bisa dadi sumber rezeki utama.' },
                'Senin Pahing': { watak: 'Kreatif lan inovatif. Terus duwe ide anyar. Kadang perfeksionis.', rezeki: 'Apik. Kreativitas dadi kunci sukses finansial.' },
                'Senin Pon': { watak: 'Penyayang, setia, lan nduweni empati dhuwur. Seneng tetulung.', rezeki: 'Cukup. Rezeki teka saka ketulusan ati.' },
                'Senin Wage': { watak: 'Sederhana, andhap asor, lan ora seneng pamer. Wong e tenang.', rezeki: 'Cukup. Urip berkecukupan karo apa anane.' },
                'Senin Kliwon': { watak: 'Nduweni wawasan jembar, seneng sinau, lan wicaksana. Asring dadi panutan.', rezeki: 'Apik. Ilmu lan kawruh dadi sumber rezeki.' },
                'Selasa Legi': { watak: 'Lineah, enerjik, lan nduweni semangat dhuwur. Cepet tumindak.', rezeki: 'Lancar. Semangat ora gampang nyerah nekakake hasil.' },
                'Selasa Pahing': { watak: 'Wani, mandiri, lan ora seneng diatur. Nduweni jiwa pemimpin.', rezeki: 'Apik. Keberanian mbukak akeh peluang.' },
                'Selasa Pon': { watak: 'Kebak pertimbangan, ora kesusu tumindak. Wicaksana.', rezeki: 'Cukup. Kedisiplinan nekakake stabilitas finansial.' },
                'Selasa Wage': { watak: 'Pendiam nanging cermat. Ora akeh ngomong nanging tumindake tepat.', rezeki: 'Stabil. Urip sederhana lan berkecukupan.' },
                'Selasa Kliwon': { watak: 'Karismatik, nduweni wibawa alami. Disegani lan dihormati.', rezeki: 'Melimpah. Kharisma mbukak akeh lawang rezeki.' },
                'Rabu Legi': { watak: 'Ramah, supel, lan gampang gaul. Akeh kanca lan koneksi.', rezeki: 'Lancar. Jaringan pertemanan jembar mbantu karir.' },
                'Rabu Pahing': { watak: 'Tegas, ambisius, lan nduweni target dhuwur. Ora gampang puas.', rezeki: 'Apik. Ambisi sing dikendhalekake nekakake sukses.' },
                'Rabu Pon': { watak: 'Telaten, sabar, lan nduweni ketekunan dhuwur. Ora gampang nyerah.', rezeki: 'Cukup. Ketekunan nekakake hasil sing setimpal.' },
                'Rabu Wage': { watak: 'Praktis, efisien, lan seneng bab-bab sederhana. Ora ruwet.', rezeki: 'Stabil. Urip finansial sing mapan.' },
                'Rabu Kliwon': { watak: 'Nduweni kepekaan batin kuat, intuitif, lan misterius. Akeh sing penasaran.', rezeki: 'Apik. Kepekaan batin mbantu maca peluang.' },
                'Kamis Legi': { watak: 'Cerdas, analitis, lan seneng sinau bab anyar. Pikiran terbuka.', rezeki: 'Lancar. Kecerdasan dadi aset utama.' },
                'Kamis Pahing': { watak: 'Optimis, bersemangat, lan tansah ndeleng sisi positif. Inspiratif.', rezeki: 'Apik. Sikap positif narik rezeki.' },
                'Kamis Pon': { watak: 'Ati-ati, kebak perhitungan, lan ora sembrono. Saben langkah dipikir.', rezeki: 'Cukup. Kehati-hatian njaga stabilitas finansial.' },
                'Kamis Wage': { watak: 'Setia, bisa diandelake, lan nduweni integritas dhuwur. Wong sing nepati janji.', rezeki: 'Stabil. Kepercayaan wong liya nekakake rezeki.' },
                'Kamis Kliwon': { watak: 'Wicaksana, akeh akal, lan nduweni wawasan jembar. Asring dijaluki saran.', rezeki: 'Apik. Kawicaksanan diajeni lan nekakake berkah.' },
                'Jumat Legi': { watak: 'Lemah lembut, kebak tresna, lan nduweni ati tulus. Disenengi wong akeh.', rezeki: 'Lancar. Ketulusan ati nekakake rezeki ora kaduga.' },
                'Jumat Pahing': { watak: 'Berkharisma, nyenengake, lan akeh kanca. Gigih nggayuh cita-cita.', rezeki: 'Apik. Semangat dhuwur nekakake hasil maksimal.' },
                'Jumat Pon': { watak: 'Sabar, teliti, lan nduweni daya juang dhuwur. Ora gampang putus asa.', rezeki: 'Cukup. Kesabaran nekakake hasil manis.' },
                'Jumat Wage': { watak: 'Ati-ati, waspada, lan ora seneng risiko gedhe. Luwih seneng sing pasti.', rezeki: 'Stabil. Kehati-hatian njaga finansial tetep aman.' },
                'Jumat Kliwon': { watak: 'Misterius, karismatik, lan nduweni daya tarik spiritual. Akeh sing penasaran.', rezeki: 'Apik. Kharisma spiritual nekakake peluang unik.' },
                'Sabtu Legi': { watak: 'Kerja keras, ulet, lan pantang nyerah. Nduweni semangat baja.', rezeki: 'Lancar. Kerja keras nekakake hasil sing maremake.' },
                'Sabtu Pahing': { watak: 'Wani, petualang, lan seneng tantangan. Ora seneng bab monoton.', rezeki: 'Apik. Keberanian mbukak peluang anyar.' },
                'Sabtu Pon': { watak: 'Tenang, sabar, lan kebak pangerten. Pendengar sing apik.', rezeki: 'Cukup. Kesabaran nekakake keberuntungan.' },
                'Sabtu Wage': { watak: 'Sederhana, jujur, lan apa anane. Ora seneng pura-pura.', rezeki: 'Stabil. Kejujuran nekakake kepercayaan lan rezeki.' },
                'Sabtu Kliwon': { watak: 'Nduweni wibawa alami, disegani, lan nduweni kaluwihan spiritual.', rezeki: 'Melimpah. Wibawa alami mbukak akeh kesempatan.' }
            };

            // Indonesian versions
            const PRIMBON_ID = {
                'Minggu Legi': { watak: 'Senang bekerja keras, pendiam tapi berwibawa. Memiliki insting yang kuat dan jarang salah dalam mengambil keputusan.', rezeki: 'Lancar dan penuh kejutan. Sering mendapat rezeki dari arah tak terduga.' },
                'Minggu Pahing': { watak: 'Pemberani dan tidak mudah menyerah. Teguh pada pendirian, kadang keras kepala.', rezeki: 'Baik. Usaha yang digeluti akan membawa hasil meski perlu perjuangan.' },
                'Minggu Pon': { watak: 'Pandai bergaul, ramah, dan disukai banyak orang. Mudah beradaptasi.', rezeki: 'Cukup. Ada saja rezeki datang, terutama dari relasi dan pertemanan.' },
                'Minggu Wage': { watak: 'Teliti, sabar, dan pekerja keras. Tidak suka konflik tapi tegas.', rezeki: 'Stabil. Tidak berlebihan tapi cukup untuk kebutuhan.' },
                'Minggu Kliwon': { watak: 'Berwibawa, punya daya tarik magis. Banyak yang segan dan menghormati.', rezeki: 'Melimpah jika bisa mengelola emosi dan keterbukaan.' },
                'Senin Legi': { watak: 'Cerdas, pandai bicara, dan mudah bergaul. Cepat beradaptasi dengan lingkungan baru.', rezeki: 'Lancar. Bakat bicara bisa menjadi sumber rezeki utama.' },
                'Senin Pahing': { watak: 'Kreatif dan inovatif. Selalu punya ide baru. Kadang terlalu perfeksionis.', rezeki: 'Baik. Kreativitas menjadi kunci utama kesuksesan finansial.' },
                'Senin Pon': { watak: 'Penyayang, setia, dan punya empati tinggi. Suka menolong sesama.', rezeki: 'Cukup. Rezeki datang dari ketulusan hati.' },
                'Senin Wage': { watak: 'Sederhana, rendah hati, dan tidak suka pamer. Orangnya tenang.', rezeki: 'Cukup. Hidup berkecukupan dengan apa yang ada.' },
                'Senin Kliwon': { watak: 'Punya wawasan luas, suka belajar, dan bijaksana. Sering menjadi panutan.', rezeki: 'Baik. Ilmu dan pengetahuan menjadi sumber rezeki.' },
                'Selasa Legi': { watak: 'Lineah, enerjik, dan punya semangat tinggi. Cepat dalam bertindak.', rezeki: 'Lancar. Semangat pantang menyerah membawa hasil.' },
                'Selasa Pahing': { watak: 'Berani, mandiri, dan tidak suka diatur. Punya jiwa pemimpin.', rezeki: 'Baik. Keberanian membuka banyak peluang.' },
                'Selasa Pon': { watak: 'Penuh pertimbangan, tidak terburu-buru dalam bertindak. Bijaksana.', rezeki: 'Cukup. Kedisiplinan membawa kestabilan finansial.' },
                'Selasa Wage': { watak: 'Pendiam tapi cermat. Tidak banyak bicara tapi tindakannya tepat.', rezeki: 'Stabil. Hidup sederhana dan berkecukupan.' },
                'Selasa Kliwon': { watak: 'Karismatik, punya wibawa alami. Disegani dan dihormati lingkungan sekitar.', rezeki: 'Melimpah. Kharisma membuka banyak pintu rezeki.' },
                'Rabu Legi': { watak: 'Ramah, supel, dan mudah bergaul. Banyak teman dan koneksi.', rezeki: 'Lancar. Jaringan pertemanan yang luas membantu karier.' },
                'Rabu Pahing': { watak: 'Tegas, ambisius, dan punya target tinggi. Tidak mudah puas.', rezeki: 'Baik. Ambisi yang terkendali membawa kesuksesan.' },
                'Rabu Pon': { watak: 'Telaten, sabar, dan punya ketekunan tinggi. Tidak mudah menyerah.', rezeki: 'Cukup. Ketekunan membuahkan hasil yang setimpal.' },
                'Rabu Wage': { watak: 'Praktis, efisien, dan suka hal-hal sederhana. Tidak rumit.', rezeki: 'Stabil. Kehidupan finansial yang mapan.' },
                'Rabu Kliwon': { watak: 'Punya kepekaan batin kuat, intuitif, dan misterius. Banyak yang penasaran.', rezeki: 'Baik. Kepekaan batin membantu membaca peluang.' },
                'Kamis Legi': { watak: 'Cerdas, analitis, dan suka mempelajari hal baru. Berpikiran terbuka.', rezeki: 'Lancar. Kecerdasan menjadi aset utama.' },
                'Kamis Pahing': { watak: 'Optimis, bersemangat, dan selalu melihat sisi positif. Menginspirasi.', rezeki: 'Baik. Sikap positif menarik rezeki.' },
                'Kamis Pon': { watak: 'Hati-hati, penuh perhitungan, dan tidak sembrono. Setiap langkah dipikirkan.', rezeki: 'Cukup. Kehati-hatian menjaga kestabilan finansial.' },
                'Kamis Wage': { watak: 'Setia, dapat diandalkan, dan punya integritas tinggi. Orang yang menepati janji.', rezeki: 'Stabil. Kepercayaan orang lain membawa rezeki.' },
                'Kamis Kliwon': { watak: 'Bijaksana, banyak akal, dan punya wawasan luas. Sering dimintai saran.', rezeki: 'Baik. Kebijaksanaan dihargai dan membawa berkah.' },
                'Jumat Legi': { watak: 'Lembut, penuh kasih, dan punya hati yang tulus. Disukai banyak orang.', rezeki: 'Lancar. Ketulusan hati membawa rezeki tak terduga.' },
                'Jumat Pahing': { watak: 'Berkharisma, menyenangkan, dan punya banyak teman. Gigih meraih cita-cita.', rezeki: 'Baik. Semangat tinggi membawa hasil maksimal.' },
                'Jumat Pon': { watak: 'Sabar, teliti, dan punya daya juang tinggi. Tidak mudah putus asa.', rezeki: 'Cukup. Kesabaran membuahkan hasil manis.' },
                'Jumat Wage': { watak: 'Hati-hati, waspada, dan tidak suka risiko besar. Lebih suka yang pasti.', rezeki: 'Stabil. Kehati-hatian menjaga finansial tetap aman.' },
                'Jumat Kliwon': { watak: 'Misterius, karismatik, dan punya daya tarik spiritual. Banyak yang penasaran.', rezeki: 'Baik. Kharisma spiritual membawa peluang unik.' },
                'Sabtu Legi': { watak: 'Pekerja keras, ulet, dan pantang menyerah. Punya semangat baja.', rezeki: 'Lancar. Kerja keras membuahkan hasil yang memuaskan.' },
                'Sabtu Pahing': { watak: 'Berani, petualang, dan suka tantangan. Tidak suka hal-hal monoton.', rezeki: 'Baik. Keberanian membuka peluang-peluang baru.' },
                'Sabtu Pon': { watak: 'Tenang, sabar, dan penuh pengertian. Pendengar yang baik.', rezeki: 'Cukup. Kesabaran membawa keberuntungan.' },
                'Sabtu Wage': { watak: 'Sederhana, jujur, dan apa adanya. Tidak suka berpura-pura.', rezeki: 'Stabil. Kejujuran membawa kepercayaan dan rezeki.' },
                'Sabtu Kliwon': { watak: 'Punya wibawa alami, disegani, dan punya kelebihan spiritual.', rezeki: 'Melimpah. Wibawa alami membuka banyak kesempatan.' }
            };

            // ===== AKSARA =====
            function setAksara(el, text) {
                if (!el) return;
                try {
                    const fn = window.toJavanese;
                    if (typeof fn === 'function') el.textContent = fn(text);
                    else el.textContent = '';
                } catch (e) { el.textContent = ''; }
            }

            // ===== I18N =====
            const LANG = {
                jawa: {
                    subtitle: 'weton mu opo?',
                    namaPlaceholder: 'Jeneng panjenengan...',
                    cekBtn: 'Cek Weton',
                    loading: 'Ngitung weton...',
                    normalBtn: 'Cek Weton',
                    extraHeader: 'Info Tambahan',
                    resetBtn: 'Cek Maneh',
                    shareBtn: 'Bagikan',
                    shareCopied: 'Disalin!',
                    neptuLabel: 'Neptu',
                    watakLabel: 'Watak',
                    rezekiLabel: 'Rezeki',
                    footer: '\uA9B6\uA9B4\uA9B1\uA9B2\uA9AE\uA9A3 \u2022 kanggo seneng-seneng wae',
                    element: 'Elemen',
                    karir: 'Karir Cocok',
                    arah: 'Arah Keberuntungan',
                    hari: 'Hari Keberuntungan',
                },
                indonesia: {
                    subtitle: 'weton kamu apa?',
                    namaPlaceholder: 'Nama kamu...',
                    cekBtn: 'Cek Weton',
                    loading: 'Menghitung weton...',
                    normalBtn: 'Cek Weton',
                    extraHeader: 'Info Tambahan',
                    resetBtn: 'Cek Lagi',
                    shareBtn: 'Bagikan',
                    shareCopied: 'Tersalin!',
                    neptuLabel: 'Neptu',
                    watakLabel: 'Watak',
                    rezekiLabel: 'Rezeki',
                    footer: 'untuk bersenang-senang saja',
                    element: 'Elemen',
                    karir: 'Karir Cocok',
                    arah: 'Arah Keberuntungan',
                    hari: 'Hari Keberuntungan',
                }
            };
            let currentLang = 'jawa';

            // ===== DOM =====
            const namaInput = document.getElementById('namaInput');
            const tanggalInput = document.getElementById('tanggalInput');
            const cekBtn = document.getElementById('cekBtn');
            const resultArea = document.getElementById('resultArea');
            const spinnerArea = document.getElementById('spinnerArea');
            const finalResult = document.getElementById('finalResult');
            const spinText = document.getElementById('spinText');
            const loadingText = document.getElementById('loadingText');
            const subtitleText = document.getElementById('subtitleText');
            const subtitleAksara = document.getElementById('subtitleAksara');
            const footerText = document.getElementById('footerText');
            const namaDisplay = document.getElementById('namaDisplay');
            const wetonAksara = document.getElementById('wetonAksara');
            const wetonHari = document.getElementById('wetonHari');
            const wetonPasaran = document.getElementById('wetonPasaran');
            const neptuBadge = document.getElementById('neptuBadge');
            const neptuValue = document.getElementById('neptuValue');
            const elementBadge = document.getElementById('elementBadge');
            const tglMasehi = document.getElementById('tglMasehi');
            const tglJawa = document.getElementById('tglJawa');
            const pasaranDisplay = document.getElementById('pasaranDisplay');
            const neptuDisplay = document.getElementById('neptuDisplay');
            const watakDesc = document.getElementById('watakDesc');
            const rezekiDesc = document.getElementById('rezekiDesc');
            const extraArea = document.getElementById('extraArea');
            const extraHeader = document.getElementById('extraHeader');
            const extraElement = document.getElementById('extraElement');
            const extraKarir = document.getElementById('extraKarir');
            const extraArah = document.getElementById('extraArah');
            const extraHari = document.getElementById('extraHari');
            const shareBtn = document.getElementById('shareBtn');
            const resetBtn = document.getElementById('resetBtn');

            function setLang(lang) {
                currentLang = lang;
                const t = LANG[lang];
                if (subtitleText) subtitleText.textContent = t.subtitle;
                if (namaInput) namaInput.placeholder = t.namaPlaceholder;
                if (loadingText) loadingText.textContent = t.loading;
                if (resetBtn) resetBtn.textContent = t.resetBtn;
                if (shareBtn) shareBtn.textContent = t.shareBtn;
                if (footerText) footerText.textContent = t.footer;
                if (extraHeader) extraHeader.textContent = t.extraHeader;
                if (lang === 'jawa') setAksara(subtitleAksara, t.subtitle);
            }

            // ===== DATE LIMIT =====
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            tanggalInput.max = yyyy + '-' + mm + '-' + dd;

            let lastResult = null;

            // ===== MAIN =====
            cekBtn.addEventListener('click', function() {
                const nama = namaInput.value.trim() || 'Sampeyan';
                const tglVal = tanggalInput.value;
                if (!tglVal) {
                    tanggalInput.focus();
                    tanggalInput.style.borderColor = '#c04040';
                    setTimeout(function() { tanggalInput.style.borderColor = ''; }, 2000);
                    return;
                }

                const parts = tglVal.split('-');
                const tglDate = new Date(parseInt(parts[0]), parseInt(parts[1]) - 1, parseInt(parts[2]));
                const weton = getWeton(tglDate);
                const jawa = konversiTanggalJawa(tglDate);
                const elemen = getElemenWeton(weton);
                const infoElemen = INFO_ELEMEN[elemen];

                const wetonKey = weton.hari + ' ' + weton.pasaran;
                const primbon = (currentLang === 'jawa' ? PRIMBON : PRIMBON_ID)[wetonKey] || { watak: 'Pribadi unik lan kebak misteri.', rezeki: 'Rezeki wis diatur. Sing penting usaha lan doa.' };

                lastResult = { nama, weton, jawa, elemen, primbon, tanggal: parseInt(parts[2]) + ' ' + ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'][tglDate.getMonth()] + ' ' + parts[0] };

                resultArea.classList.remove('hidden');
                finalResult.classList.add('hidden');
                spinnerArea.classList.remove('hidden');
                spinText.textContent = '';
                cekBtn.disabled = true;
                cekBtn.textContent = LANG[currentLang].loading;
                extraArea.classList.add('hidden');

                const namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

                let count = 0;
                const fastCycles = 18;
                const slowCycles = 8;

                function fastPhase() {
                    if (count < fastCycles) {
                        const rHari = HARI[Math.floor(Math.random() * 7)];
                        const rPas = PASARAN[Math.floor(Math.random() * 5)];
                        spinText.textContent = rHari + ' ' + rPas;
                        count++;
                        setTimeout(fastPhase, 80);
                    } else {
                        count = 0;
                        slowPhase();
                    }
                }

                function slowPhase() {
                    if (count < slowCycles) {
                        const rHari = HARI[Math.floor(Math.random() * 7)];
                        const rPas = PASARAN[Math.floor(Math.random() * 5)];
                        spinText.textContent = rHari + ' ' + rPas;
                        count++;
                        const delay = 150 + count * 60;
                        setTimeout(slowPhase, delay);
                    } else {
                        spinText.textContent = weton.hari + ' ' + weton.pasaran;
                        setTimeout(function() {
                            spinnerArea.classList.add('hidden');
                            finalResult.classList.remove('hidden');

                            namaDisplay.textContent = nama;
                            wetonHari.textContent = weton.hari;
                            wetonPasaran.textContent = weton.pasaran;
                            neptuValue.textContent = weton.neptu;

                            setAksara(wetonAksara, weton.hari + ' ' + weton.pasaran);

                            const elColor = infoElemen.color;
                            elementBadge.textContent = '\u2605 ' + elemen;
                            elementBadge.style.background = infoElemen.bg;
                            elementBadge.style.borderColor = infoElemen.border;
                            elementBadge.style.color = elColor;

                            const tanggalStr = parseInt(parts[2]) + ' ' + namaBulan[tglDate.getMonth()] + ' ' + parts[0];
                            tglMasehi.textContent = tanggalStr;
                            tglJawa.textContent = jawa.tanggal + ' ' + jawa.bulan + ' ' + jawa.tahun + ' (' + jawa.windu + ')';
                            pasaranDisplay.textContent = weton.pasaran;
                            neptuDisplay.textContent = weton.neptu + ' (' + weton.neptuHari + ' + ' + weton.neptuPasaran + ')';

                            watakDesc.textContent = primbon.watak;
                            rezekiDesc.textContent = primbon.rezeki;

                            extraElement.textContent = elemen;
                            extraElement.style.color = elColor;
                            extraKarir.textContent = infoElemen.karir;
                            extraArah.textContent = infoElemen.arah;
                            extraHari.textContent = infoElemen.hari;
                            extraArea.classList.remove('hidden');
                            extraArea.classList.add('animate-reveal');

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
                extraArea.classList.add('hidden');
                finalResult.classList.remove('animate-reveal');
                extraArea.classList.remove('animate-reveal');
                namaInput.value = '';
                tanggalInput.value = '';
                tanggalInput.style.borderColor = '';
                namaInput.focus();
                lastResult = null;
            });

            // ===== KEYBOARD =====
            namaInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') tanggalInput.focus();
            });
            tanggalInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') cekBtn.click();
            });

            // ===== SHARE =====
            function getShareText() {
                if (!lastResult) return '';
                const r = lastResult;
                return 'Cek Weton Jawa\n' +
                    r.nama + ' - ' + r.weton.hari + ' ' + r.weton.pasaran + '\n' +
                    'Neptu: ' + r.weton.neptu + ' | Elemen: ' + r.elemen + '\n' +
                    'Tanggal: ' + r.tanggal + '\n' +
                    'Tanggal Jawa: ' + r.jawa.tanggal + ' ' + r.jawa.bulan + ' ' + r.jawa.tahun + '\n\n' +
                    'Cek juga di ' + window.location.href;
            }

            if (shareBtn) {
                shareBtn.addEventListener('click', function() {
                    const text = getShareText();
                    if (!text) return;
                    if (navigator.share) {
                        navigator.share({ title: 'Cek Weton Jawa', text: text }).catch(function() {});
                    } else if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(text).then(function() {
                            const orig = shareBtn.textContent;
                            shareBtn.textContent = LANG[currentLang].shareCopied;
                            setTimeout(function() { shareBtn.textContent = orig; }, 2000);
                        }).catch(function() { fallbackCopy(text); });
                    } else { fallbackCopy(text); }
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
                    if (this.bgmInterval) { clearTimeout(this.bgmInterval); this.bgmInterval = null; }
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

                playSpinnerSequence() {
                    this.ensureCtx();
                    const seq = [0,1,2,3,4,3,2,1,0,1,2,3,4,3,2,1];
                    const now = this.ctx.currentTime;
                    seq.forEach((note, i) => {
                        const t = now + i * 0.1;
                        const freq = this.slendro[note % 5];
                        const osc = this.ctx.createOscillator();
                        const gain = this.ctx.createGain();
                        const filter = this.ctx.createBiquadFilter();
                        osc.type = 'triangle';
                        osc.frequency.setValueAtTime(freq, t);
                        gain.gain.setValueAtTime(0, t);
                        gain.gain.linearRampToValueAtTime(0.3, t + 0.003);
                        gain.gain.exponentialRampToValueAtTime(0.001, t + 0.12);
                        filter.type = 'bandpass';
                        filter.frequency.setValueAtTime(freq * 3, t);
                        filter.Q.setValueAtTime(4, t);
                        osc.connect(filter);
                        filter.connect(gain);
                        gain.connect(this.sfxGain);
                        osc.start(t);
                        osc.stop(t + 0.15);
                    });
                }

                playReveal() {
                    this.ensureCtx();
                    this.playGong(80, 4);
                    setTimeout(() => this.playGong(100, 3), 300);
                }

                playClick() {
                    this.ensureCtx();
                    this.playBonang(Math.floor(Math.random() * 5), 0.15);
                }

                toggleMute() {
                    this.muted = !this.muted;
                    localStorage.setItem('khodamMuted', this.muted);
                    if (this.masterGain) this.masterGain.gain.value = this.muted ? 0 : 0.4;
                    this.updateMuteBtn();
                    if (this.muted) this.stopBGM();
                    else this.startBGM();
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
                    setTimeout(function() { audio.playSpinnerSequence(); }, 50);
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