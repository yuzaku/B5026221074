
<html>
    <head>
    <title>SMAN 15 Surabaya</title>
    <link rel="icon" type="image/x-icon" href="\Asset\favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body style="background-color: #f9f9f9;">
        <nav id="mynav">
            <img src="Asset/navbar_icon.png" alt="" class="nav-icon">
            <label class="logo" id="sman">SMAN 15 Surabaya</label>
            <ul>
                <li><a href="https://sman15-sby.sch.id/about-us/" id="profil">Profil</a></li>
                <li><a href="#infor" id="informasi">Informasi</a></li>
                <li><a href="#announcement" id="pengumuman">Pengumuman</a></li>
                <li><a href="#prest" id="prestasi">Prestasi</a></li>
                <li><a href="#artik" id="artikel">Artikel</a></li>
                <li><a href="#contact" id="kontak">Kontak</a></li>
                <li><a href="/list_tugas" id="tugas">Tugas P.Web</a></li>
            </ul>
        </nav>
        <script>
            var nav = document.getElementById("mynav");
            var informasi = document.getElementById("informasi");
            var pengumuman = document.getElementById("pengumuman");
            var prestasi = document.getElementById("prestasi");
            var artikel = document.getElementById("artikel");
            var kontak = document.getElementById("kontak");
            var profil = document.getElementById("profil");
            var sman = document.getElementById("sman");
            var tugas = document.getElementById("tugas");
            window.onscroll = function () {
                if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
                    nav.classList.add("nav-colored");
                    nav.classList.remove("nav-transparent");
                    informasi.classList.add("nav-text");
                    prestasi.classList.add("nav-text");
                    pengumuman.classList.add("nav-text");
                    artikel.classList.add("nav-text");
                    kontak.classList.add("nav-text");
                    profil.classList.add("nav-text");
                    tugas.classList.add("nav-text");
                    sman.classList.remove("logo");
                    sman.classList.add("nav-title");
                }
                else {
                    nav.classList.add("nav-transparent");
                    nav.classList.remove("nav-colored");
                    informasi.classList.remove("nav-text");
                    prestasi.classList.remove("nav-text");
                    pengumuman.classList.remove("nav-text");
                    artikel.classList.remove("nav-text");
                    kontak.classList.remove("nav-text");
                    profil.classList.remove("nav-text");
                    tugas.classList.remove("nav-text");
                    sman.classList.remove("nav-title");
                    sman.classList.add("logo")
                }
            };
        </script>
        <img src="Asset/sekolah.jpg" alt="libels" class="img-fluid">
        <br>
        <br>
        <br>
        <h1 id="infor" class="title">Informasi Merdeka Belajar</h1>
        <p class="title-desc">Informasi Tentang Merdeka Belajar SMAN 15 Surabaya</p>
        <br>
        <br>
        <div class="row row-add">
            <div class="col-4">
                <img src="Asset/p1.jpeg" alt="" class="img-fluid">
                <a href="" class="article-title"><h5>Pengumuman Pemetaan Kelas XI Tahun Pelajaran 2023-2024</h5></a>
                <br>
                <p class="desc">Menindaklajuti hasil dari pemetaan peserta didik pada alternatif kelompok mata pelajaran peminatan fase F tahun dan akan dimulainya kegiatan belajar mengajar tahun pelajaran 2023-2024...</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p2.jpeg" alt="" class="img-fluid">
                <a class="article-title" href=""><h5>Pengumuman Pemetaan Peserta Didik Dalam Alternatif Kelompok Mata Pelajaran Peminatan Fase F Tahun Pelajaran 2023-2024</h5></a>
                <br>
                <p class="desc">Serangkaian proses asesmen yang sudah dilakukan oleh guru bimbingan konseling...</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p3.jpg" alt="">
                <a href="" class="article-title"><h5>IMPLEMENTASI KURIKULUM MERDEKA 2023</h5></a>
                <br>
                <p class="desc">Melanjutkan sebelumnya sosialaisasi yang diadakan pada tahun 30 Juli 2022 lalu. Sosialisasi IKM hari ini, Jumat 10 Maret 2023 berfokus kepada evaluasi. Evaluasi toidak hanya ditujukan...</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
        </div>
        <br>
        <br>
        <a href="" class="more">LOAD MORE...</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 id="announcement" class="title">Pengumuman</h1>
        <p class="title-desc">Pengumuman Terbaru SMAN 15 Surabaya</p>
        <br>
        <br>
        <div class="row row-add">
            <div class="col-4">
                <img src="Asset/P4.jpeg" alt="" class="img-fluid">
                <a href="" class="article-title"><h5>Workshop Pengembangan Modul Ajar Kurikulum Merdeka</h5></a>
                <br>
                <p class="desc">Surabaya, 14 Agustus 2023 – Hari ini, SMAN 15 Surabaya menjadi tempat bergengsi bagi para pendidik dalam upaya mengembangkan diri dalam dunia pendidikan...</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p5.jpg" alt="" class="img-fluid">
                <a class="article-title" href=""><h5>PENGUMUMAN JADWAL PELAJARAN BERLAKU MULAI 25 JULI 2023</h5></a>
                <br>
                <p class="desc">Jadwal dibawah ini berlaku mulai hari selasa 25 Juli 2023.</p>
                <br>
                <br>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p1.jpeg" alt="">
                <a href="" class="article-title"><h5>Pengumuman Pemetaan Kelas XI Tahun Pelajaran 2023-2024</h5></a>
                <br>
                <p class="desc">Menindaklajuti hasil dari pemetaan peserta didik pada alternatif kelompok mata pelajaran peminatan fase F tahun dan akan dimulainya kegiatan belajar mengajar tahun pelajaran 2023-2024...</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
        </div>
        <br>
        <br>
        <a href="" class="more">LOAD MORE...</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title" id="prest">Prestasi Siswa</h1>
        <p class="title-desc">Prestasi Siswa SMAN 15 Surabaya</p>
        <br>
        <br>
        <div class="row row-add">
            <div class="col-4">
                <img src="Asset/p7.jpg" alt="" class="img-fluid">
                <a href="" class="article-title"><h5>Lomba Musikalisasi Puisi 2023</h5></a>
                <br>
                <p class="desc">Selamat untuk Peserta Didik SMAN 15 Surabaya Juara Lomba Musikalisasi Puisi tingkat Provinsi.</p>
                <br>
                <br>
                <br>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p8.png" alt="" class="img-fluid">
                <a class="article-title" href=""><h5>Prestasi Siswa Maret 2023</h5></a>
                <br>
                <p class="desc">Novia Rizky Anwary Juara II Tunggal Dewasa Putri kategori Seni Bersenjata, Risyad Ihsanul Akmal (X-4) dan Hafizah Mutiah Inas (X-4) meraih Juara Harapan 1 Lomba Entrepreneur Club STIESIA</p>
                <br>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p9.jpg" alt="">
                <a href="" class="article-title"><h5>Sederet Prestasi Siswa</h5></a>
                <br>
                <p class="desc">Kepala SMAN 15 Johanes Mardijono S.Pd., M.M. didampingi Kepala Dinas Pendidikan Jawa Timur Wahid Wahyudi Menerima penghargaan dari Gubernur Jawa Timur Khofifah Indar Parawangsa Juara Umum SMAN AWARD 2022</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
        </div>
        <br>
        <br>
        <a href="" class="more">LOAD MORE...</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title" id="artik">Artikel</h1>
        <p class="title-desc">Artikel Terbaru SMAN 15 Surabaya</p>
        <br>
        <br>
        <div class="row row-add">
            <div class="col-4">
                <img src="Asset/p10.jpg" alt="" class="img-fluid">
                <a href="" class="article-title"><h5>Memperingati Kesaktian Pancasila 1 Oktober 2023</h5></a>
                <br>
                <p class="desc">Hari Minggu, 1 Oktober 2023, menjadi hari bersejarah di SMAN 15 Surabaya ketika seluruh guru dan siswa berkumpul untuk melaksanakan upacara bendera dalam rangka memperingati Hari Kesaktian Pancasila...</p>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p11.jpeg" alt="" class="img-fluid">
                <a class="article-title" href=""><h5>Limolas MPLS 2023</h5></a>
                <br>
                <p class="desc">Sobat sambat Limolas, mulai tanggal 17 Juli 2023 Libels mengadakan kegiatan MPLS (Masa Pengenalan Lingkungan Sekolah). Kegiatan tersebut memang di dasarkan pada Permendikbud No. 18 Tahun 2016...</p>
                <br>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
            <div class="col-4">
                <img src="Asset/p12.jpg" alt="">
                <a href="" class="article-title"><h5>Hari Kebangkitan Nasional 20 Mei 2023</h5></a>
                <br>
                <p class="desc">Tahun 2023 adalah momentum yang bersejarah bagi negara kita, Indonesia. Pada tanggal 20 Mei, kita merayakan Hari Kebangkitan Nasional (HKN), sebuah perayaan yang memperingati semangat perjuangan...</p>
                <br>
                <br>
                <a href="" class="read-more">READ MORE >></a>

            </div>
        </div>
        <br>
        <br>
        <a href="" class="more">LOAD MORE...</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title" id="contact">Contact Us</h1>
        <br>
        <br>
        <div class="row row-add">
            <div class="col-6">
                <h3 class="contact">Lokasi</h3>
                    <br>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1142877320217!2d112.7161836740601!3d-7.3410608722100195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf86c28f13f%3A0x4a01f8feacfccd4!2sSekolah%20Menengah%20Atas%20Negeri%2015%20Surabaya!5e0!3m2!1sid!2sid!4v1697982865178!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-6">
                <h3 class="contact">Kontak</h3>
                    <br>
                    <div class="container-fluid p-0 row">
                        <div class="col-1">
                            <img class="icon" src="Asset/email.png" alt="">
                        </div>
                        <div  class="col-11">
                            <p class="contact-info">Email</p>
                            <p class="contact-info">sman15sby@yahoo.co.id </p>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid p-0 row">
                        <div class="col-1">
                            <img class="icon" src="Asset/location.png" alt="">
                        </div>
                        <div  class="col-11">
                            <p class="contact-info">Alamat</p>
                            <p class="contact-info">Jl. Menanggal Selatan 103 Dukuh Menanggal, Gayungan, Surabaya, Jawa Timur 60234 </p>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid p-0 row">
                        <div class="col-1">
                            <img class="icon" src="Asset/telepon.png" alt="">
                        </div>
                        <div  class="col-11">
                            <p class="contact-info">Telepon</p>
                            <p class="contact-info">+62-031-8290473</p>
                        </div>
                    </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <h3 class="row-add contact">Kritik dan Saran</h3>
        <br>
        <div class="row-add">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama*" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email*" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Telepon">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesan*" required>
            </div>
            <input class="submit" type="submit" value="Kirim">
        </div>
        <br>
        <br>
        <div class="bottom">
            <br>
            <br>
            <div class="row-add row">
                <div class="col-4">
                    <h3 class="bottom-title">Tentang Kami</h3>
                    <br>
                    <div class="jam-kerja">Kami merupakan salah satu sekolah dengan minat terbesar di Surabaya. Bergabunglah bersama kami untuk masa depan yang penuh inovasi.</div>
                </div>
                <div class="col-4">
                    <h3 class="bottom-title">Support Link</h3>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <a class="bottom-desc" href="http://dapo.dikdasmen.kemdikbud.go.id/"> Dapodikdasmen</a>
                            <br>
                            <br>
                            <a class="bottom-desc" href="https://paspor.simpkb.id/casgpo/login?service=https%3A%2F%2Fapp.simpkb.id%2Fauth%2Flogin"> SIM PKB</a>
                            <br>
                            <br>
                            <a class="bottom-desc" href="http://nisn.data.kemdikbud.go.id/page/data"> NINS</a>
                        </div>
                        <div class="col-6">
                            <a class="bottom-desc" href="http://hadir.gtk.kemdikbud.go.id/"> Hadir GTK</a>
                            <br>
                            <br>
                            <a class="bottom-desc" href="https://unbk.kemdikbud.go.id/"> UNBK</a>
                            <br>
                            <br>
                            <a class="bottom-desc" href="http://gerbangkurikulum.psma.kemdikbud.go.id/e-rapor/"> Erapor SMA</a>

                        </div>

                    </div>

                </div>
                <div class="col-4">
                    <h3 class="bottom-title">Jam Belajar</h3>
                    <br>
                    <p class="jam-kerja">Senin: 06.30-15.30</p>
                    <p class="jam-kerja">Selasa: 06.30-15.30</p>
                    <p class="jam-kerja">Rabu: 06.30-15.30</p>
                    <p class="jam-kerja">Kamis: 06.30-15.30</p>
                    <p class="jam-kerja">Jumat: 06.30-11.30</p>
                    <p class="jam-kerja">Sabtu dan Minggu Libur</p>

                </div>
            </div>

        </div>
    </body>
</html>
