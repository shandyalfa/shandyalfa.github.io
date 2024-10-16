<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>e-Reqruitment WEB</title>
</head>
<body>
    <?php include("navbar.php"); ?>
    
    <main>
        <div class="main" id="Beranda">
            <div class="left">
                <h5>Halooo, Selamat Datang di <span>Bank BRI</span> !!!</h5>
                <h3>Mari Membangun <span> Indonesia </span> Melalui <span>Bank BRI</span></h3>
                <p>
                    Bekerja di BRI berarti bekerja di lingkungan kerja yang menyenangkan, kreatif, dan dinamis yang kondusif untuk pengembangan pribadi dan pengasuhan dari pemimpin terbaik.
                </p>
                <button onclick="keHalamanSelanjutnya()">
                <i class='bx bx-layer-plus'></i>
                Daftar</button>
            </div>
            <div class="right">
                <img src="images/20230324044812.jpg" alt="gambar">
            </div>
        </div>
        <div class="skills" id="VisiMisi">
            <h5>Bergabunglah bersama kami</h5>
            <h3>Berkarir dan Membangun.</h3>
            <div class="skill-items">
                <div class="item">
                    <div class="icon"><i class='bx bx-directions'></i></div>
                    <h4>Belajar dengan yang berpengalaman</h4>
                    <p>Insan BRILiaN diberikan kesempatan untuk terus menerus belajar dan berkembang melalui tantangan, petualangan, dan perubahan. Bekerja sama dan berkolaborasi untuk menjadi pemimpin hebat, pelaku perubahan untuk Indonesia brilian.</p>
                </div>
                <div class="item">
                    <div class="icon"><i class='bx bx-book-open' ></i></div>
                    <h4>Lingkungan yang Berkembang</h4>
                    <p>Mengasah potensi dan mengembangkan diri melalui budaya berbasis kinerja dengan didukung lingkungan kerja yang supportive, jenjang karier yang jelas dan peluang pertumbuhan karier yang luas. Miliki ketangguhan mental dan spirit pembawa perubahan untuk masa depan yang brilian.</p>
                </div>
                <div class="item">
                    <div class="icon"><i class='bx bxl-figma' ></i></div>
                    <h4>Berkontribusi untuk Indonesia</h4>
                    <p>Dengan integritas tinggi & profesionalisme menjadi agen perubahan untuk membangun ekonomi Indonesia. Bersama, berdaya, dan berkarya menjadi Bintang Kehidupan, menciptakan hidup yang bermakna dan menjadikan Indonesia yang lebih baik bagi semua.</p> 
                </div>
                <div class="item">
                    <div class="icon"><i class='bx bx-code-alt' ></i></div>
                    <h4>Great Culture & Great Leader</h4>
                    <p>Hanya sedikit perusahaan yang dapat menyediakan lingkungan kerja yang unik dan pilihan tempat kerja yang beragam di seluruh Indonesia.
                        BRI menyadari pentingnya membangun Great Culture dan Great Leader, sehingga setiap orang dapat memberikan upaya maksimal untuk mencapai tujuan bersama.</p> 
                </div>
            </div>
        </div>
        <div class="about" id="TentangSaya">
            <div class="left">
                <img src="images/photo_2024-09-25_18-12-13.jpg" alt="gambar">
            </div>
            <div class="right">
                <h5>About</h5>
                <h3>About Me</h3>
                <p>
                    Halo! Nama saya Shandy, dan saya senang bisa mengikuti praktikum Pemrograman WEB. Saya adalah seorang mahasiswa informatika universitas mulawarman kelas C angkatan 2023.
                     Sekarang saya tinggal di Bengkuring, tetapi daerah asal saya adalah Kutai Barat. 
                    </p>
                    <p>
                    Umur saya sekarang adalah 19 tahun, dan saya senang mencoba hal-hal baru seperti salah satunya yaitu membuat web. 
                    Saya percaya bahwa setiap pengalaman adalah pelajaran berharga, dan saya selalu terbuka untuk berbagi ide dan belajar dari orang lain. 
              
                </p>
            </div>
        </div>
        <div class="portofolio" id="Daftar">
            <div class="header">
                <div class="info">
                    <h5>Kami mencari talenta terbaik</h5>
                    <h3>Mulailah Karir Anda</h3>
                </div>
                <button onclick="keHalamanSelanjutnya()" ><i class='bx bx-layer-plus'></i>
                DAFTAR
                </button>
            </div>
            <div class="portfo-items">
                <div class="item">
                    <img src="images/2016332021-Pict.-Tersenyum.jpg" alt="gambar">
                    <div class="info">
                        <h4>Lulusan Baru</h4>
                        <p>
                            #MulailahPotensiAnda dan temukan peluang karir 
                            Anda sebagai Fresh Graduate di BRI.
                        </p>
                        <div class="container">
                            <a href="#" onclick="openPOP()">Click Me</a>    
                            <div class="popup" id="popup">
                                <h2>Thank You</h2>
                                <p>Oke bro sudah disubmit</p>
                                <button type="button" onclick="closePOP()">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/download.jpg" alt="gambar">
                    <div class="info">
                        <h4>Profesional</h4>
                        <p>#BangunlahKarirAnda dengan lingkungan kerja yang memaksimalkan potensi Anda.</p>
                        <div class="container">
                            <a href="#" onclick="openPOP()">Click Me</a>    
                            <div class="popup" id="popup">
                                <h2>Thank You</h2>
                                <p>Oke bro sudah disubmit</p>
                                <button type="button" onclick="closePOP()">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <img src="images/58683-kaesang-pangarep-igkaesangp.jpg" alt="gambar">
                    <div class="info">
                        <h4>Magang</h4>
                        <p>#TingkatkanKemahiranAnda. Dapatkan pengalaman profesional Anda bersama BRI!</p>
                        <div class="container">
                            <a href="#" onclick="openPOP()">Click Me</a>    
                            <div class="popup" id="popup">
                                <h2>Thank You</h2>
                                <p>Oke bro sudah disubmit</p>
                                <button type="button" onclick="closePOP()">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback" id="UmpanBalik">
            <h5>Testimoni Staf Kami</h5>
            <h3>BRIlian Generation</h3>
            <div class="customers">
                <div class="item">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>

                    </div>
                    <p>
                        Di BRI saya mendapatkan hands on experience di global banking dalam melakukan pekerjaan, seperti ditempatkan di Unit Kerja Luar Negeri.
                    </p>
                    <div class="user">
                        <img src="images/images.jpg" alt="gambar">
                        <div class="info">
                            <h5>
                                Akmal Alvian Pratama
                            </h5>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>

                    </div>
                    <p>
                        Sistem support di BRI sangat mendukung dalam bekerja, mulai dari atasan serta tim yang solid, membuat kami yakin bahwa "BRI is your next place to grow".
                    </p>
                    <div class="user">
                        <img src="images/images (1).jpg" alt="gambar">
                        <div class="info">
                            <h5>
                                Vicky Ahmad Fernanda
                            </h5>
                            <p>Staff Ahli</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>

                    </div>
                    <p>
                        Kesempatan, kepercayaan dan tanggung jawab yang diberikan membuat saya dapat memberikan kontribusi postif bagi perusahaan.
                    </p>
                    <div class="user">
                        <img src="images/ilustrasi-manusia-jenius-dok-freepik_169.jpeg" alt="gambar">
                        <div class="info">
                            <h5>
                                Robby Pratama
                            </h5>
                            <p>Staff Khusus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include("footer.php") ?>
    
    <script>
    let popup = document.getElementById("popup");
    function openPOP(){
        popup.classList.add("open-popup");
    }
    function closePOP(){
        popup.classList.remove("open-popup");
    }
    function keHalamanSelanjutnya() {
        window.location.href = 'add.php';
    }
    function bukaTombol(){
        const nav = document.querySelector('nav');
        nav.classList.toggle('open');
    }

    function openAdmin(){
        window.location.href = "halaman.php";
    }
    </script>
</body>
</html>