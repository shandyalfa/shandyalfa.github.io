<?php
if (session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
?>


<header>
    <nav>
        <div class="logo">
            <img src="images/BRI_2020.svg" alt="logo bri">
            <a href=""></a>
        </div>
        <ul>
            <li><a href="#Beranda">Beranda</a></li>
            <li><a href="#VisiMisi">Visi Misi</a></li>
            <li><a href="#TentangSaya">Tentang Saya</a></li>
            <?php 
            if (isset($_SESSION['login']) && $_SESSION['login']) { 
                ?>
                <li class="navbar-item <?php echo isset($lihat) && $lihat ? 'nav-active' : '' ?>">
                    <a href="halaman.php">
                        Lihat Data  
                    </a>
                </li>
                <?php 
            }
            ?>
            <li><a href="#Daftar">Daftar</a></li>
            <li><a href="#UmpanBalik">Umpan Balik</a></li>
        </ul>
        <button onclick="openAdmin()">Menu Admin</button>
        <button id="tombolMenu" onclick = "bukaTombol()">
            <i class='bx bx-menu'></i>
        </button>
    </nav>
</header>