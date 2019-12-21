<?php

use App\Tour;
use Illuminate\Database\Seeder;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tour::create([
            'code' => 'komodo',
            'name' => 'Pulau Komodo',
            'price' => 12000000,
            'image' => 'tour-2.jpg',
            'description' => 'Fasilitas Paket Wisata Pulau Komodo & Labuan Bajo Tour 3 - hari 2 Malam

            - Kapal Phinisi Sailing Komodo Labuan Bojo, 5 cabin private, 2 cabin sharing-
            - Air bilas 5000 Liter (terdiri dari air panas dan air dingin)
            - Tiket Masuk ke Taman Nasional Komodo
            - Pengantaran masuk dan keluar Bandara
            - Pelampung Keselamatan
            - Guide Lokal yang Berlisensi HPI
            - Guide Khusus Manta Point
            - Makan 7x (makan siang dan makan malam selama 3 hari 2 malam)
            - Pemberian snack di sore hari selama perjalanan
            - Dokumentasi dari alam bawah air
            - Air mineral selama perjalanan
            - P3K
            - Minuman hangat (Kopi/Teh) selama perjalanan sepuasnya
            - Peralatan snorkeling
            - Tips Tour Leader
            - Pengalaman mengasikkan setelah menjelajahi spot tujuan wisata

            Biaya Tersebut Belum Termasuk :

            - Tiket pesawat dari kota asal menuju ke meeting point
            - Penginapan setelah melakukan perjalanan
            - Kebutuhan pribadi

            Perlengkapan yang Harus Dipersiapkan

            - Tas Kerir 40L
            - Sepatu untuk treking atau sendal gunung
            - Pakaian ganti Minimal 2 Pasang
            - Pakaian untuk berenang
            - Jangan lupa untuk membawa obat-obatan pribadi
            - Headlamp atau senter
            - Kamera digital, SLR, kamera khusus underwater(jika punya)
            - Peralatan untuk snorkeling (jika punya)
            - Sunblock (minimal SPF 30)
            - Peralatan untuk mandi
            - Botol air minum atau snack tambahan bagi yang ingin ngemil selama di perjalanan
            - Jaket atau pakaian hangat

            Rundown Perjalanan (Itinerary) Paket Wisata Pulau Komodo Labuan Bajo Tour 3 Hari 2 Malam Jika anda termasuk para peserta yang berasal dari luar kota, bisa menggunakan pesawat untuk - kemudian menuju ke kawasan meeting point. Tentunya biaya tiket pesawat ditanggung oleh masing-masing peserta. Selain itu, penginapan para peserta sebelum berangkat menuju ke Labuan Bajo juga akan ditanggung secara pribadi.

            Untuk masalah jadwal, yang kami tentukan untuk perjalanan wisata anda merupakan jadwal yang sudah termasuk dalam standart tour dan memiliki sistem yang tidak mengikat serta fleksibel. Namun bagi anda yang ingin mencustom lagi jadwal yang kami sediakan, maka anda bisa langsung berkonsultasi kepada kami untuk masalah jadwal yang diinginkan secara gratis tanpa dipungut biaya apapun alias gratis.

            Day 1

            09.00 – 10.00 : Berkumpul di area Meeting Point
            10.00 – 12.00 : Berangkat menuju ke Pulau Kanawa, Beraktivitas, dan Makan Siang
            12.00 – 14.00 : Berangkat menuju ke Manta Point
            14.00 – 15.30 : Snorkeling
            15.30 – 16.30 : Menuju ke Gili Lawa
            16.30 – 18.00 : Treking ke Puncak Gili Lawa (Lokasi Sunset View)
            18.00 – 19.00 : Kembali ke kapal
            19.00 – 20.00 : Acara Makan Malam
            20.00 – selesai : Acara bebas, beristirahat, finish hari pertama

            Day 2

            06.00 – 07.00 : Bangun Pagi dilanjutkan dengan sarapan pagi
            07.00 – 09.00 : Menuju ke Pulau Padar
            09.00 – 11.00 : Treking di Puncak Pulau Padar
            11.00 – 12.00 : Kembali ke kapal, Makan Siang, Menuju ke Pulau Komodo
            12.00 – 13.00 : Treking di Pulau Komodo
            13.00 – 15.00 : Menuju ke Pink Beach
            15.00 – 17.00 : Menuju ke Pantai Namong, aktifitas snorkeling
            17.00 – 18.00 : Menuju ke Pulau Kalong (Lokasi Sunset View)
            18.00 – 18.30 : Kembali ke Kapal
            18.30 – 19.30 : Istirahat, Bersih-bersih, acara makan malam
            19.00 – selesai : istirahat, finish hari kedua

            Day 3

            07.00 – 08.00 : Bangun, Sarapan pagi
            08.00 – 10.00 : Menuju ke Taka Makassar
            10.00 – 12.00 : Pelaksanaan aktivitas di Taka Makassar
            12.00 – 15.00 : Kembali ke kapal, menuju ke Pulau Kelor, Makan siang
            15.00 – 17.00 : Aktivitas di Pulau Kelor (Treking & Snorkeling)
            17.00 – 18.00 : Kembali menuju ke Labuan Bajo
            18.00 – Selesai : Sampai di Labuan Bajo, perpisahan, trip selesai
            *Note : Jadwal acara yang telah tersusun di atas memiliki sistem yang tidak mengikat, bisa berubah sewaktu-waktu tergantung dengan kondisi yang ada di lapangan.oluptates placeat numquam provident quis, atque nisi iure?'

        ]);

        Tour::create([
            'code' => 'labuan',
            'name' => 'Labuan Bajo',
            'price' => 10000000,
            'image' => 'tour-1.jpg',
            'description' => '10 orang Rp 2.900.000 / pax
            8-9 orang Rp 3.050.000 / pax
            6-7 orang Rp 3.200.000 / pax
            4-5 orang Rp 3.450.000 / pax
            3 orang Rp 4.350.000 / pax
            2 orang Rp 5.325.000 / pax
            Tour Labuan Bajo, Komodo 4 Hari 3 Malam Bagi anda yang membutuhkan tour Labuan Bajo, paket tour komodo 4 hari 3 malam ini merupakan paket yang paling pas untuk menjawab kebutuhan anda akan kegiatan tour di Labuan Bajo. Karena dalam paket tour Komodo 4 hari 3 malam ini anda akan mengunjungi semua destinasi utama di Labuan Bajo dan karena durasi waktunya 4 hari 3 malam akan membuat anda bisa lebih santai menjalani tour Labuan Bajo.

            Namun bagi anda yang hanya memiliki sedikit waktu untuk mengunjungi Labuan Bajo, anda bisa memilih paket Tour Labuan Bajo & Komodo 3 hari 2 malam atau paket Tour Labuan Bajo & Komodo 2 hari 1 malam

            Paket Tour Komodo 4 hari 3 malam ini meliputi : Penjemputan dari Labuan Bajo, Kapal Kabin AC sebagai tempat menginap dan menjelajahi pulau-pulau selama 3 hari 2 malam, Hotel Centro Bajo selama 1 malam, Makan sesuai itinerary, Air mineral selama tour, Tour Guide yang akan menemani selama tour dan Asuransi perjalanan.

            Adapun detail itinerary paket tour Komodo, Labuan Bajo 4 hari 3 malam adalah sebagai berikut :
            Day 1 (Tidak ada makan) :
            - Penjemputan dari Bandara Komodo, Labuan Bajo
            - Mengunjungi gua Batu Cermin
            - Check in hotel dan acara bebas

            Day 2 ( B, L, D )

            - Sarapan pagi di Hotel
            - Dijemput untuk menuju Pelabuhan
            - Memasuki Kapal
            - Menuju Pulau Kelor untuk snorkeling dan trekking
            - Menuju Pulau Rinca untuk trekking mengunjungi habitat komodo
            - Menuju Pulau Kalong untuk menikmati sunset dan melihat migrasi ribuan kelelawar
            - Kapal bersandar di dekat perairan pulau Kalong
            - Dinner dan bermalam di kapal

            Day 3 (B, L, D)

            - Breakfast diatas kapal
            - Menuju Pulau Padar untuk trekking menikmati pemandangan dari bukit di Pulau Padar
            - Menuju Pink Beach untuk bersantai, snorkeling dan trekking
            - Lunch diatas kapal
            - Menuju Manta Point untuk melihat ikan Pari Manta
            - Mengunjungi Pulau Pasir Taka Makassar
            - Menuju Gili Lawa untuk trekking dan menikmati pemandangan dari bukit Gili Lawa
            - Kapal bersandar di dekat perairan Gili Lawa
            - Dinner dan bermalam diatas kapal

            Day 4 (B, L)

            - Breakfast
            - Menuju Pulau Kanawa untuk bersnorkeling
            - Lunch di atas kapal
            - Kembali ke Labuan Bajo dan diantar ke bandara/hotel.

            Paket Tour Termasuk :

            - Antar-jemput Bandara/Hotel di Labuan Bajo
            - Makan sesuai itinerary (8x makan)
            - Sewa kapal kabin AC mengelilingi TN. Komodo selama 3 hari 2 malam
            - Hotel di Labuan Bajo 1 malam di Labuan Bajo (Centro Bajo Hotel)
            - Air mineral
            - Guide lokal berlicensi (untuk peserta min 8 orang)
            - Asuransi
            - Tidak termasuk :
            - Tipping untuk guide/ABK
            - Tiket pesawat
            - Makan malam di Labuan Bajo
            - Tiket masuk kawasan Taman Nasional Komodo (WNI)
            - Pengeluaran pribadi
            - Alat Snorkling (Rp.50.000 / hari)'
        ]);

        Tour::create([
            'code' => 'raja',
            'name' => 'Raja Ampat',
            'price' => 15000000,
            'image' => 'tour-3.jpg',
            'description' => 'Raja Ampat adalah sebuah kabupaten dan merupakan bagian dari Propinsi Papua Barat. Untuk mencapai Kepulauan ini, kita harus menginjakkan kaki di kota Sorong terlebih dahulu. Biasanya para wisatawan banyak menggunakan penerbangan untuk sampai ke kota ini. Setelah sampai kota Sorong, kita dapat menggunakan sejenis kapal cepat yang biasa berlayar dua kali sehari menuju Waisai, ibukota kabupaten Raja Ampat. Perjalanan hanya akan memakan waktu sekitar 2-3 jam saja dari pelabuhan Sorong, hingga sampai di pelabuhan Waisai Raja Ampat.

            Sebagian orang menyebutkan wisata Raja Ampat di Papua ini adalah surga wisata tersembunyi yang dimiliki oleh Indonesia. Wisata Raja Ampat mungkin dapat dinobatkan sebagai wisata alam bawah laut paling mempesona yang dimiliki oleh Indonesia.

            INCLUSION
            Price Include
            - Transport avanza selama di Sorong
            - Kapal regular Sorong – Waisai
            - Makan sesuai dengan itinerary
            - Speedboat Untuk Hopping Island dan Snorkeling
            - Alat Snorkeling
            - Kamera underwater
            - Tiket masuk dan donasi
            - Air mineral selama tour
            - Local guide
            - Asuransi

            Package exclude - Air tix and airport tax
            - Meals off the program
            - Transport off the program
            - Personal expense
            - Additional tour
            - Crew Tips

            Itinerary
            MEETING POINT
            Bandara Domine Eduard Osok, Sorong
            Day 1 (LD)
            Anda akan dijemput di Bandara (Based on flight detail). Makan pagi di lokal resto (own expense). Lalu menuju ke Pelabuhan untuk menyebrang ke Waisai menggunakan kapal regular, sampai di Waisai dilanjutkan menuju Resort, makan siang. Check in dan free program. Makan malam di Resort.

            Day 2 (BLD)
            Setelah sarapan, anda akan dibawa dengan speed boat menuju Pianemo “Little Wayag” hunting foto, dilanjutkan menuju telaga bintang. Selanjutnya menuju Arborek untuk snorkeling. Makan siang (lunch box), menuju Sawinggrai untuk fish feeding dilanjutkan menuju Koh island dengan keindahan Pasir Timbul. Usai berkeliling, anda akan langsung menuju resort dan untuk makan malam.

            Day 3 (BLD)
            Sarapan di Resort. Setelah sarapan tour hari ini dilanjutkan dengan mengunjungi Sawandarek, dilanjutkan menuju Yenbuba Jetty, makan siang. Tour dilanjutkan menuju Friwen wall untuk snorkeling dan bermain di Friwen Pantai. Menuju resort, istirahat. Makan malam.

            Day 4 (B)
            Persiapan check out dan sarapan di resort jam 8 pagi menuju Pelabuhan Waisai untuk menuju Sorong. Sampai di Sorong menuju oleh-oleh, makan siang (own expense). Transfer bandara. End of tour'
        ]);

        Tour::create([
            'code' => 'sumba',
            'name' => 'Sumba',
            'price' => 9000000,
            'image' => 'tour-4.jpg',
            'description' => 'Jelajahi Sumba hanya dalam 4 hari dan 3 malam! Lihat pesona pulau yang indah ini, mulai dari matahari terbenam di Pantai Bwana, menjelajahi Danau Waekuri, hingga belajar tentang budaya lokal di desa adat seperti Praijing. Dekatkan diri dengan alam dan trekking ke berbagai spot menakjubkan seperti Air Terjun Tenggedu dan Bukit Warinding!

            Rangkaian Kegiatan :

            Day 1
            - 11.30 - 12.30 Penjemputan di Bandara Tombalaka
            - 12.30 - 13.30 Hotel check in dan makan siang
            - 13.30 - 14.30 Berangkat ke Ratenggaro
            - 14.30 - 15.30 Menjelajahi Desa Ratenggaro
            - 15.30 - 16.30 Berangkat ke Pantai Bwarna
            - 16.30 - 18.00 Menjelajahi pantai Bwarna
            - 18.00 - 19.30 Kembali ke Hotel
            - 19.30 - 20.30 Dinner
            - 20.30 - 05.00 Istirahat

            Day 2

            - 06:00-07:00 Breakfast & Check out
            - 06:00-07:00 Breakfast & Check out
            - 07:00-08:30 Menuju ke Pantai Mandorak
            - 08:30-09:00 Menjelajahi Pantai Mandorak
            - 09:00-09:05 Menuju ke Danau Waekuri
            - 09:05-10:00 Menjelajahi Danau Waekuri
            - 10:00-12:00 Menuju Desa Praijing
            - 12:00-13:00 Menjelajahi Desa Praijing
            - 13:00-13:40 Menuju ke Air Terjun Lapopu
            - 13:40-15:00 Menjelajahi Air Terjun Lapopu dan makan siang
            - 15:00-18:00 Menuju ke Sumba Timur
            - 18:00-19:30 Makan malam
            - 19:30-05:00 Check in hotel dan istirahat

            Day 3
            - 05:00-05:30 Morning call
            - 05:00-05:30 Morning call
            - 05:30-07:00 Bersiap-siap & sarapan
            - 07:00-09:00 Menuju ke Air Terjun Tenggedu
            - 09:00-10:00 Trekking ke Air Terjun Tenggedu
            - 10:00-11:00 Menjelajahi Air Terjun Tenggedu
            - 11:00-12:00 Trekking kembali ke area parkir
            - 12:00-12:30 Makan siang (lunch box)
            - 12:30-13:30 Menuju ke Savana Puru Kembera
            - 13:30-14:30 Menjelajahi Savana Puru Kembara
            - 14:30-16:00 Menuju ke Pantai Walakiri
            - 16:00-18:00 Menjelajahi Pantai Walakiri hingga matahari terbenam
            - 18:00-20:00 Makan malam
            - 20:00-04:00 Kembali ke hotel & istirahat
            Day 4
            - 04:00-04:30 Morning call
            - 04:00-04:30 Morning call
            - 04:30-05:00 Menuju ke Bukit Warinding
            - 05:00-06:30 Menjelajahi Bukit Warinding
            - 06:30-07:30 Kembali ke hotel
            - 07:30-08:30 Sarapan & persiapan check out
            - 08:30-08:45 Check out
            - 08:45-09:00 Menuju ke Sentra Tenun Kampung Priliu
            - 09:00-09:45 Berburu souvenir
            - 09:45-10:00 Menuju ke Bukit Persaudaraan / Mau Hau
            - 10:00-10:45 Menjelajahi Bukit Persaudaraan
            - 11:00-11:30 Kembali ke bandara

            Harga paket tour mulai dari Rp 3.250.000 dengan minimal peserta 4 orang, Rp 4.100.000 dengan minimal peserta 3 orang, dan Rp 5.600.000 dengan minimal peserta 2 orang.'
        ]);
        Tour::create([
            'code' => 'bromo',
            'name' => 'Gunung Bromo',
            'price' => 2500000,
            'image' => 'tour-5.jpg',
            'description' => 'Kota Malang yang terkenal dengan sebutan kota dingin yang berada di kaki Gunung Semeru dan Gunung Arjuno ini memang sangat layak untuk dijadikan tujuan wisata, dengan suasana yang sejuk seperti pedesaan kalian bisa merasakan nikmatnya liburan di kota Malang, bangun pagi dengan suasana yang sejuk ditambah lagi dengan pemandangan indah dari gunung dan susana sekitar yang bisa kalian rasakan di Malang akan menambah lagi betapa enaknya berlibur ke kota Malang. Masih ragu untuk berlibur ke Malang ? segera hilangkan rasa ragu tersebut dan bergegas pesan paket wisata malang batu bromo 3 hari 2 malam ini, jangan sampai lewatkan waktu liburan yang panjang hanya untuk kegiatan yang sia-sia.

            Rangkaian Kegiatan :

            Day 1
            - 08.00 - 08.30 : Penjemputan (Hotel/Bandara/Stasiun di Malang, Batu, Surabaya).
            - 08.30 - 09.30 : Perjalanan ke Coban Rondo.
            - 09.30 - 12.00 : Wisata Coban Rondo dan Taman Labirin.
            - 12.00 - 12.30 : Perjalanan ke Museum Angkut.
            - 12.30 - 16.30 : Wisata Museum Angkut.
            - 16.30 - 17.00 : Perjalanan BNS.
            - 17.00 - 19.00 : Wisata BNS .
            - 19.00 - 20.00 : Perjalanan ke Hotel.
            - 20.00 - 20.15 : Check In Hotel.
            - 20.15 - Selesai : Finish hari pertama (Istirahat Untuk Penjemputan Jam 23.00)

            Day 2
            - 07.00 – 08.00 : Breakfast .
            - 08.00 – 09.00 : Perjalanan ke Petik Apel.
            - 09.00 – 12.00 : Wisata Petik Apel.
            - 12.00 – 12.30 : Perjalanan ke Jatimpark III & Dino Park .
            - 12.30 – 17.00 : Wisata JatimparkIII & Dino Park .
            - 17.00 – 17.30 : Perjalanan ke Tempat Oleh-Oleh .
            - 17.30 – 18.00 : Cari Oleh-Oleh .
            - 18.00 – 19.00 : Perjalanan ke Hotel .
            - 19.00 – 23.00 : Finish Day 2 ( Persiapan pejemputan ke Bromo jam 23.00 ).

            Day 3
            - 23.30 – 00.00 : Penjemputan di Hotel & chekout
            - 00.00 – 03.00 : Perjalanan ke Transit Point untuk Over Jeep.
            - 03.00 – 04.00 : Perjalanan ke Bukit Penanjakan (Bukit Cinta & Bukit Kingkong*Opsional).
            - 04.00 – 06.00 : Bukit Penanjakan Gunung Bromo (Menikmati Indahnya Sunrise).
            - 06.00 – 08.00 : Padang Savana (Bukit Teletubbies) dan Pasir Berbisik.
            - 08.00 – 10.00 : Kawah Bromo dan Pura Luhur Poten.
            - 10.00 – 10.30 : Perjalanan kembali ke Transit Point.
            - 10.30 – 14.00 : Perjalanan ke Bandara/StasiunMalang/Surabaya
            - 14.00 : Drop Finish

            Harga paket tour mulai dari Rp 1.895.000 dengan minimal peserta 4 orang, Rp 2.195.000 dengan minimal peserta 3 orang, dan Rp 2.750.000 dengan minimal peserta 2 orang.'
        ]);

        Tour::create([
            'code' => 'toba',
            'name' => 'Danau Toba',
            'price' => 5000000,
            'image' => 'tour-6.jpg',
            'description' => 'Jika berkunjung ke Sumatera maka Anda wajib untuk menjelajahi Danau Toba, sebuah danau tekto-vulkanik dengan ukuran panjang 100 kilometer dan lebar 30 kilometer yang terletak di Provinsi Sumatera Utara, Indonesia. Danau ini merupakan danau terbesar di Indonesia dan Asia Tenggara. Di tengah danau terdapat sebuah pulau vulkanik bernama Pulau Samosir. Danau Toba akan memberikan pesona wisata yang tak akan terlupakan oleh Anda. Bagaimana, Anda tertarik mengikuti Paket Wisata Danau Toba? Bagi Anda yang tertarik dengan Paket Wisata Danau Toba, kami membuka Open Trip khusus untuk Anda. Berikut rangkaian perjalanan yang kami tawarkan.

            Rangkaian Kegiatan :

            Day 1
            Pagi hari tiba di Bandara Kuala Namu Medan, kemudian berangkat menuju Parapat via Pematang Siantar melewati jalan lintas Trans Sumatera selama enam jam perjalanan. Horas! Tiba di Parapat lalu menyeberang ke Pulau Samosir dan mendarat di kawasan Tuktuk. Check-in di hotel (Toledo atau Carolina Hotel), makan malam dan istirahat.

            Day 2
            - Ambarita, Huta Siallagan.
            Sarapan pagi di hotel, dilanjutkan kunjungan ke Desa Ambarita untuk melihat rumah adat Batak di Huta Siallagan. Di sana, terdapat meja batu yang dahulu digunakan oleh raja untuk persidangan, tempat pemasungan dan tempat eksekusi mati bagi pelanggar hukum adat atau musuh raja. Tempat ini juga merupakan asal dari legenda kanibalisme orang Batak.

            - Desa Tomok
            Kunjungan dilanjutkan ke dengan wisata sejarah di Desa Tomok. Terdapat makam batu Raja Sidabutar yang konon merupakan orang pertama yang datang ke Pulau Samosir. Di Desa Tomok, peserta dapat melihat Tarian Sigale-Gale, yakni boneka berbentuk manusia yang dapat menari Tortor (tarian khas Batak Toba). Selain itu, di Tomok anda juga bisa berbelanja beraneka ragam souvenir. Sore hari kembali ke Tutuk untuk beristirahat.

            Day 3
            - Pangururan
            Setelah sarapan dan check-out hotel, peserta berangkat menuju Pangururan.
            Pangururan adalah lokasi yang menyatukan daratan Pulau Samosir dengan Pulau Sumatera.
            Disini ada lokasi yang dinamakan puncak Tele, tempat melihat danau Toba dari puncak tertinggi.
            - Tongging dan Sipiso-Piso
            Tongging adalah dataran tinggi tanah Karo, dimana kita juga bisa melihat panorama danau Toba dengan sisi yang berbeda. Selain itu disini juga terdapat air terjun sipiso-piso yang tersohor itu. Dari sini kita kembali ke Bandara Kualanamu dan pulang ke tempat masing-masing.

            Harga paket tour adalah Rp 2.200.000/pax.'
        ]);

        Tour::create([
            'code' => 'harau' ,
            'name' => 'Lembah Harau' ,
            'price' => 6000000 ,
            'image' => 'tour-7.jpg' ,
            'description' => 'Lembah Harau adalah sebuah ngarai dekat kota Payakumbuh di kabupaten Limapuluh Koto, provinsi Sumatra Barat. Lembah Harau diapit dua bukit cadas terjal dengan ketinggian mencapai 150 meter berupa batu pasir yang terjal berwarna-warni, dengan ketinggian 100 sampai 500 meter. Topografi Cagar Alam Harau adalah berbukit-bukit dan bergelombang. Tinggi dari permukaan laut adalah 500 sampai 850 meter, bukit tersebut antara lain adalah Bukit Air Putih, Bukit Jambu, Bukit Singkarak dan Bukit Tarantang. Berjalan menuju Lembah Harau amat menyenangkan. Dengan udara yang masih segar, Anda bisa melihat keindahan alam sekitarnya. Tebing-tebing granit yang menjulang tinggi dengan bentuknya yang unik mengelilingi lembah. Tebing-tebing granit yang terjal ini mempunyai ketinggian 80 m hingga 300 m.

            Rangkaian Kegiatan :

            Day 1
            Rombongan akan dijemput oleh team kami di Padang Airport Sumbar dan langsung memulai perjalanan menuju kawasan hutan lindung Lembah Anai yang berada dipinggir jalan utama Padang – Bukittinggi. Istirahat sejenak untuk menikmati keindahan dan sambil merasakan kesejukan Air terjun Lembah Anai yang bersumber dari mata air pegunungan Singgalang. Setelah itu tour dilanjutkan menuju Pusat Dokumentasi dan Informasi Kebudayaan Minangkabau yang juga merupakan komplek miniatur kampung Minang dengan beragam Rumah Gadang yang berada di Padang Panjang dan dilanjutkan dengan istirahat makan siang. Perjalanan selanjutnya diteruskan menuju menuju kampung yang terkenal akan kerajinan tangan tenun Songket dan ukiran kayu yang berada di Nagari Pandai Sikek. Sore harinya perjalanan diteruskan menuju kota Payakumbuh untuk menuju Lembah Harau. Makan malam dan check in hotel di Lembah Harau.

            Day 2
            Bersiap untuk check out hotel setelah sarapan pagi dan tour dimulai dengan mengelilingi perkampungan Lembah Harau. Kampung yang berada di dasar lembah yang dipenuhi hamparan sawah nan hijau ini, dikelilingi dengan bukit batu yang terjal dimana hampir setiap sudut dinding-dindingnya dihiasi oleh air terjun yang menawan.
            Setelah puas menikmati keindahan dinding dan air terjun Lembah Harau, perjalanan selanjutnya diteruskan menuju Jembatan Kelok 9 untuk menyaksikan keindahan panorama alam yang dari dasar lembahnya sampai ke puncak lembah terhubung oleh sebuah jembatan layang yang didampingi oleh indah nya liku Jalan Kelok 9 sendiri.
            Kemudian tour mengarah ke Batusangkar dimana rombongan akan dibawa mengunjungi Istana Basa Pagaruyung yang merupakan sebuah komplek rumah Gadang kediaman raja Minangkabau dahulunya di Kab. Tanah Datar. Setelah itu Istirahat dan makan siang di Nagari Sungai Tarab sambil menikmati hamparan sawah nan hijau dan berjinjang.
            Selanjutnya tour menuju Danau Singkarak yang merupakan danau terbesar di Sumatera Barat dan sangat terkenal akan Ikan Bilisnya. Setelah cukup beristirahat ditepian danau yang asri perjalanan diteruskan menuju kota Bukittinggi untuk check in hotel di Bukittinggi. Nantinya rombongan akan dibawa keluar untuk makan malam di restaurant kesukaan anda.

            Day 3
            Selesai sarapan pagi perjalanan dimulai menuju Danau Maninjau yang merupakan salah satu danau terindah yang ada di Sumatera. Setelah melalui perjalanan perbukitan yang menghijau, kita akan coffee break di Nagari Sungai Landia untuk melepas penat sambil menikmati panorama alamnya nan indah menawan. Setelah itu dilanjutkan menuju Puncak Lawang dimana mata kita akan dimanjakan oleh keelokan alam Danau Maninjau yang merupakan sebuah caldera yang terindah di Sumbar. Kemudian perjalanan diteruskan menuju Nagari Lawang untuk melihat proses pembuatan gula merah tebu dan kacang goreng yang dikelola secara traditional oleh warga sekitar kampung tersebut. Setelah itu diteruskan menuju Bukittinggi untuk istirahat makan siang. Pada sore harinya kita mengunjungi Taman Jam Gadang yang merupakan icon wisata Bukittinggi dan bersantai ria di kawasan Pasar Atas Bukittinggi. Kembali ke hotel dan makan malam.

            Day 4
            Setelah selesai sarapan pagi langsung check out hotel dan melanjutkan perjalanan ke Padang ibukota Provinsi Sumatera Barat. Selain terkenal akan Pantai dan Wisata baharinya, Padang dikenal juga sebagai pusat pendidikan Universitas Andalasnya.
            Setiba di Padang rombongan akan diajak berkeliling untuk city tour dengan dengan mengunjungi daerah “Pondok” kawasan kota tuanya Padang dan juga melewati Jembatan Siti Nurbaya serta pelabuhan tua “Muaro” dan diakhiri dengan menyusuri tepian laut Padang yang dilanjutkan dengan istirahat dan makan siang. Sekiranya masih ada waktu, rombongan dapat juga mengunjungi Batu Malin Kundang di Pantai Air Manis nantinya yang akan disesuaikan mengikut jadwal penerbangan anda.
            Setelah itu perjalanan diteruskan menuju Bandar Udara Minangkabau untuk meneyelesaikan perjalanan liburan anda di Sumatrera Barat. Selamat Jalan dan sampai berjumpa kembali dilain kesempatan.

            Harga paket tour mulai dari Rp 2.150.000/pax, disesuaikan dengan kebutuhan Hotel.',
        ]);

        Tour::create([
            'code' => 'tanjung',
            'name' => 'Tanjung Tinggi',
            'price' => 7500000,
            'image' => 'tour-8.jpg',
            'description' =>'Tanjung tinggi adalah pantai yang diapit oleh dua semenanjung, yaitu tanjung Kelayang dan tanjung Pendam. Nama tanjung tinggi diambil dari kata tanjung yang artinya semenanjung dan tinggi yang artinya pantai yang memiliki bebatuan yang tinggi. Pantai Tanjung Tinggi merupakan salah satu tempat wisata di pulau Belitung.

            Rangkaian Kegiatan :

            Day 1
            1. Pukul 07.30, Kami akan menjemput Anda di Bandara HS Hananjoedin Tanjungpandan.
            2. Mencicipi Mie Khas Belitung dan minuman segar Jeruk Konci.
            3. Cek in Hotel.
            4. Menuju SD Laskar Pelangi, Rumah Keong, Museum Kata Andrea Hirata, ( Optional : Rumah dan Kampoeng Ahok ) di Belitung Timur.
            5. Kemudian menuju Kota Manggar ( Kota 1001 Warung Kopi ).
            6. Kita makan siang di Restoran Lokal.
            7. Mencicipi Kopi Manggar.
            8. Menuju Vihara Dwi Kwan Im dan Pantai Burung Mandi.
            9. Saatnya Kita kembali ke Hotel untuk beristirahat.
            10. Kemudian Kita kunjungi Pantai Tanjung Pendam sambil menikmati Sunset.
            11. Makan Malam di Restoran Lokal.
            12. Istirahat (free program).

            Day 2
            1. Pukul 08.00 Setelah Peserta selesai Makan Pagi Kita menuju Pantai Tanjung Kelayang tempat penyeberangan boat nelayan tradisional.
            2. Kita lanjutkan untuk menuju Batu Garuda dan Pulau Kelayang.
            3. Kemudian menuju Pulau Gosong atau Pulau Pasir untuk bertemu dengan sekumpulan Bintang Laut yang dapat dijadikan Property Photography.
            4. Kemudian ke Pulau Batu Berlayar.
            5. Kemudian Kita kunjungi Pulau Kepayang dan disini Kita akan makan siang dengan menu utama Ikan Bakar.
            6. Lanjut lagi Kita menuju Pulau Lengkuas ( Pulau Mercusuar ).
            7. Kita beristirahat sejenak.
            8. Bagi Anda yang ingin melihat keindahan Laut Belitung, silahkan naik ke Mercusuar jangan lupa cameranya.
            9. Pengenalan Alat dan Snorkeling, sehingga yang belum pernah Snorkeling bisa belajar sedikit.
            10. Selanjutnya Kita akan ber-snorkeling dikedalaman 2 meter yang akan di pandu oleh Tour Guide Kami.
            11. Kemudian kita Kepulau Burung.
            12. Kembali menuju Pantai Tanjung Kelayang.
            13. Kemudian menuju Pantai Tanjung Tinggi ( Pantai Laskar Pelangi ) dan merasakan sejuknya Air Kelapa Muda.
            14. Saatnya Kita kembali ke Hotel.
            15. Makan Malam di Restoran Lokal.
            16. Istirahat (free program).

            Day 3
            1. Breakfast di Hotel dan kemudian Cek Out Hotel.
            2. Kita lanjutkan City Tour dan mencari Oleh-oleh.
            3. Mengunjungi Pantai Tanjung Pendam, Musium Belitung, Rumah Adat Belitung, dan Danau Kaolin.
            4. Makan siang di Restoran Lokal.
            5. Peserta akan diantar ke Bandara Hs Hananjoedin Tanjungpandan.

            Harga paket tour mulai dari Rp 1.550.000/pax, disesuaikan dengan kebutuhan Hotel.'

        ]);

    }
}
