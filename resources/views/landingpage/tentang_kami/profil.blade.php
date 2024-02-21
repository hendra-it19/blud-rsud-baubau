@extends('layouts.landingpage.main')

@section('views')
    <section class="w-full p-2 lg:p-10">
        <div class="overflow-hidden rounded-lg h-32 lg:h-40 w-full relative">
            <img src="{{ asset('asset/image/section.jpg') }}" alt=""
                class="object-cover w-full aspect-auto lg:-translate-y-[250px]">
            <div
                class="absolute z-10 left-0 top-0 bottom-0 w-full bg-gradient-to-r from-gray-800 lg:from-gray-500 to-transparent p-2 lg:p-5 flex flex-col justify-center gap-2">

                <div>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center lg:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="{{ url('/') }}"
                                    class="inline-flex items-center text-xs lg:text-sm font-medium text-white hover:text-secondary-600">
                                    <svg class="w-2 h-2 lg:w-4 lg:h-4 me-1 lg:me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                    </svg>
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-2 h-2 lg:w-4 lg:h-4 text-gray-400 mx-0.5 lg:mx-1"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a class="ms-1 text-xs lg:text-sm font-medium text-gray-200 md:ms-2">
                                        Tentang
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-2 h-2 lg:w-4 lg:h-4 text-gray-400 mx-0.5 lg:mx-1"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a class="ms-1 text-xs lg:text-sm font-medium text-gray-200 md:ms-2">
                                        Profil
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <h2 class="text-white font-semibold text-xl lg:text-4xl">Profil Rumah Sakit</h2>
            </div>
        </div>
    </section>

    <section class="min-h-screen p-2 lg:px-10">
        <h2 class="title">Profil Rumah
            Sakit
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-10 text-justify leading-loose">
            <div>
                <h2 class="text-xl mt-5 mb-3 font-semibold text-gray-700 underline">Letak Geografis</h2>
                <p>Rumah Sakit Umum Daerah Kota Baubau secara geografis terletak di Kecamatan Murhum bagian utara diantara
                    5º47’-5º48’ Lintang Selatan dan 122º59’-122º60’ Bujur Timur, berlokasi di Jalan Drs. H. La ode Manarfa
                    No.20 Kelurahan Baadia,Kecamatan Murhum, Kota Baubau, dengan luas tanah 6000 m² dan luas bangunan
                    2071,10 m². Dengan lokasi yang sangat strategis dan dikelilingi oleh pusat-pusat pertumbuhan ekonomi,
                    sosial dan budaya sehingga sangat potensial untuk pengembangan di masa mendatang.</p>
                <p>RSUD Kota Baubau merupakan rumah sakit rujukan bagi fasilitas kesehatan yang menjadi milik Pemerintah
                    Kota Baubau untuk itu keadaan geografis dan demografi RSUD Kota Baubau digambarkan dari keadaan
                    geografis dan demografi Kota Baubau.</p>
            </div>
            <div>
                <h2 class="text-xl mt-5 mb-3 font-semibold text-gray-700 underline">Lingkungan Fisik</h2>
                <p>Seiring dengan pertumbuhan penduduk Kota Baubau dan perkembangan pembangunan wilayah Kota Baubau, sarana
                    dan prasarana rumah sakit yang ada dinilai sudah tidak layak lagi, maka sejak tahun 2002 Pemerintah Kota
                    Baubau merencanakan relokasi ke tempat yang lebih luas di kawasan Palagimata. Pembangunan fisik secara
                    bertahap dimulai tahun 2003 sampai sekarang dan dibangun diatas lahan seluas 41.470 m² dan luas bangunan
                    2071,10 m².</p>
            </div>
        </div>
        <div class="text-justify leading-loose">
            <h2 class="text-xl mt-5 mb-3 font-semibold text-gray-700 underline">Status</h2>
            <p>
                Sejarah RSUD Kota Baubau bermula dari pendirian rumah sakit ini pada zaman kolonial Belanda yang berlokasi
                di pusat kota Baubau tepat di depan Pelabuhan Baubau. Setelah kemerdekaan dan pembentukan Provinsi Sulawesi
                Tenggara pada tahun 1959, rumah sakit tersebut kemudian menjadi Rumah Sakit Kabupaten Buton. Pada tahun 1978
                Rumah Sakit Kabupaten Buton ditetapkan sebagai Rumah Sakit Type D, dan selanjutnya sesuai Keputusan Menteri
                Kesehatan tahun 1997 ditetapkan sebagai Rumah Sakit Type C.
            </p>
            <p>
                Berdasarkan Undang-undang Republik Indonesia Nomor 13 Tahun 2001 tentang Pembentukan Kota Baubau, maka RSUD
                Kabupaten Buton diserahkan kepada Pemerintah Kota Baubau dan berubah nama menjadi RSUD Kota Baubau. Hal
                tersebut sejalan dengan penyerahan aset-aset Pemerintah Kabupaten Buton yang ada di wilayah administratif
                Kota Baubau kepada Pemerintah Kota Baubau, termasuk seluruh SDM yang ada di RSUD Kabupaten Buton tersebut.
                Pada bulan Agustus tahun 2008 rumah sakit pindah di Palagimata dan beroperasi secara penuh dengan status
                kepemilikin oleh Pemerintah Kota Baubau.
            </p>
            <p>
                RSUD Kota Baubau merupakan salah satu rumah sakit yang ada di eks Kabupaten Buton yang kini telah dimekarkan
                menjadi 4 Kabupaten/Kota yaitu Kota Baubau, Kabupaten Buton, Kabupaten Bombana dan Kabupaten Wakatobi.
                Posisi strategis Kota Baubau membuat pusat rujukan Pelayanan Kesehatan bagi keempat daerah tersebut bertumpu
                pada RSUD Kota Baubau Hal ini merupakan peluang pengembangan RSUD untuk meningkatkan pelayanan. Didukung
                dengan keberhasilan RSUD Kota Baubau dalam meraih kelulusan sebagai Rumah Sakit Berakreditasi Madya Nomor:
                KARS-SERT/278/XII/2019 yang berlaku sampai dengan tanggal 18 Desember 2021.
            </p>
            <p>
                Sebagai salah satu instrument dalam pelayanan kesehatan tersebut adalah pengelolaan manajemen Rumah Sakit
                yang multi kompleks. Sebagai satu institusi, RSUD Kota Baubau selalu dituntut meningkatkan kualitas
                peralatan, namun di pihak lain dituntut pula untuk mengutamakan pelayanan kepada masyarakat banyak. Kedua
                fungsi tersebut dapat dipadukan sehingga RSUD dapat menjadi suatu ” Lembaga Sosial Economi ” dimana fungsi
                -fungsi ekonomi dapat digunakan untukmembiayai fungsi sosialnya.
            </p>
            <p>
                Bertolak dari pemikiran tersebut dengan memperhatikan posisi strategis Kota Baubau, maka ke depan sudah
                saatnya dipikirkan pengembangan RSUD Kota Baubau sebagai pusat rujukan ke-2 di Propinsi Sulawesi Tenggara.
                Hal ini dimungkinkan mengingat.
            </p>
            <ol class="list-inside list-decimal">
                <li>Kesehatan merupakan investasi jangka panjang, sehingga efisiensi dan efektivitas selalu diprioritaskan.
                </li>
                <li>RSUD mempunyai kewajiban untuk melayani masyarakat miskin (Publict Goods) sekaligus harus proaktif
                    terhadap tuntutan segmen masyarakat mampu (Privat Goods). </li>
                <li>RSUD sudah terlibat dalam persaingan dengan Rumah Sakit lain yang sangat agresif dalam menangkap peluang
                    pasar dan memperebutkan sumber daya manusia.</li>
                <li>RSUD berhadapan dengan perkembangan teknologi kedokteran dan teknologi manajemen modern yang memerlukan
                    biaya besar.</li>
                <li>RSUD merupakan organisasi padat karya, profesi, fungsi, teknologi dan modal.</li>
                <li>RSUD Kota Baubau telah memiliki kesiapan sumber daya manusia hanya tertinggal dalam sarana dan
                    prasarana.</li>
            </ol>
            <p>RSUD Kota Baubau berdasarkan PERDA Kota Baubau No 6 Tahun 2020 menerapkan Pola Pengelolaan Keuangan Badan
                Layanan Umum Daerah (PPK-BLUD) dan sekarang disebut dengan BLUD RSUD Kota Baubau. </p>
            <p>RSUD Kota Baubau berdasarkan PERDA Kota Baubau No 6 Tahun 2020 menerapkan Pola Pengelolaan Keuangan Badan
                Layanan Umum Daerah (PPK-BLUD) dan sekarang disebut dengan BLUD RSUD Kota Baubau. </p>
            <p>Nama-nama Direktur Rumah Sakit dari masa ke masa</p>
            <ol class="list-inside list-decimal">
                <li>dr. Tjia Supi Au (1947)</li>
                <li>dr. Cooke (1950)</li>
                <li>dr. Ten Ham (1960)</li>
                <li>dr. Sumadi (1961)</li>
                <li>dr. Staadler (1962)</li>
                <li>Abunawas (1963)</li>
                <li>dr. Amin Nompo (1967)</li>
                <li>Mr. Muzuni (1968)</li>
                <li>Zr. Picauly (1968)</li>
                <li>dr. Widayat (1978)</li>
                <li>dr. M. Suyudin (1980)</li>
                <li>dr. Wiyoto (1980)</li>
                <li>dr. Indra (1984)</li>
                <li>dr. Andi Pala Waruka (1986)</li>
                <li>dr. Alex (1986)</li>
                <li>dr. La Ode Sudil. B (1997)</li>
                <li>dr. Mahyudin (2001)</li>
                <li>dr. H. Aminuddin, Sp.A (2004)</li>
                <li>dr. H. Zamry Amin, Sp.OG (2013)</li>
                <li>dr. H. Hasmudin, Sp.B (2014-2020)</li>
                <li>dr. Hj. Maria Aty Sanga, M.Kes (2020-2020)</li>
                <li>Ninie Astyani, S.Si, Apt, M.Kes (2020-2020)</li>
                <li>dr. Hj. Nuraeni Djawa (2020-2020)</li>
                <li>dr. Lukman, Sp.Pd (2020-2022)</li>
                <li>dr. Sadly Salman, Sp.OG (2022-sekarang)</li>
            </ol>

        </div>

    </section>

    <x-mitra-section />
@endsection
