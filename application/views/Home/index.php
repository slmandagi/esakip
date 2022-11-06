<div class="container">
    <div class="navbar">
        <div class="nav-left">
            <p class="e">e<span class="sakip">SAKIP</span></p>
        </div>
        <div class="nav-right">
            <ul>
                <li class="home"><a href="#home">Home</a></li>
                <li class="about"><a href="#about">About</a></li>
                <li class="regulation"><a href="#regulation">Regulation</a></li>
                <li class="contact"><a href="#contact">Contact</a></li>
                <!-- <button type="button" class="btn-login">Login</button> -->
                <a href="" class="btn-login">Login</a>
            </ul>
        </div>
    </div>

    <div class="content">
        <!-- Home -->
        <div class="landing home" id="home">
            <img src="<?= base_url('/assets/img/home/pulau-siladen-manado-sulawesi-utara 1.svg'); ?>" alt="" class="bg-img hidden">
            <div class="headline-about">
                <h5 class="hidden">Selamat Datang di</h5>
                <h1 class="sakip-highlight hidden">Sistem Akuntabilitas Kinerja Instansi Pemerintah Provinsi Sulawesi Utara</h1>
            </div>

        </div>

        <!-- About -->
        <div class="landing about" id="about">
            <h1 class="hidden">Tentang <span class="e">e</span>SAKIP</h1>
            <div class="filler hidden">
                <div class="persegi-panjang biru">
                </div>
                <div class="persegi-panjang putih"></div>
            </div>

            <img src="<?= base_url('/assets/img/home/garuda.svg'); ?>" alt="" class="img-garuda hidden">

            <div class="glass-bg desc hidden">
                <p class="sakip-desc">E-Sakip adalah aplikasi Sistem Akuntabilitas Kinerja Instansi Pemerintah secara elektronik (E-SAKIP) yang bertujuan untuk memudahkan proses pemantauan dan pengendalian kinerja Unit Kerja di lingkungan Instansi Pemerintah dalam rangka meningkatkan akuntabilitas dan kinerja satuan / unit kerja pada khususnya dan kinerja Instansi pada umumnya.</p>
            </div>
        </div>
        <div class="strip-login">
            <div class="bungkus-strip-login hidden">
                <h2 class="hidden">Silahkan Login Terlebih Dahulu Untuk Dapat Masuk ke Sistem.</h2>
                <a href="" class="strip btn-login hidden">Login</a>
            </div>
        </div>

        <!-- Regulation -->
        <div class="landing regulation" id="regulation">
            <h1 class="hidden">Peraturan Terkait <span class="e">e</span>SAKIP</h1>
            <img src="<?= base_url('/assets/img/home/illustrations-regulation-page.svg') ?>" alt="" height="400" width="400" class="hidden">
            <div class="glass-bg regulation hidden">
                <!-- Nanti akan berupa link yang akan mendownload dokumen tentang aturan-aturan -->
                <p>1. Peraturan pertama</p>
                <p>2. Peraturan kedua </p>
                <p>3. Peraturan ketiga</p>
                <p>4. Peraturan keempat</p>
            </div>
            <div class="rincian-regulation hidden">
                * Peraturan yang ada pada esakip sudah mengacu pada PERMENPAN NO.......
            </div>
        </div>

        <div class="strip-login">
            <div class="bungkus-strip-login hidden">
                <h2 class="hidden">Silahkan Login Terlebih Dahulu Untuk Dapat Masuk ke Sistem.</h2>
                <a href="" class="strip btn-login hidden">Login</a>
            </div>
        </div>

        <!-- Kontak -->
        <div class="landing contact" id="contact">
            <h1 class="hidden">Kontak Kami</h1>
            <div class="filler hidden">
                <div class="persegi-panjang biru">
                </div>
                <div class="persegi-panjang putih"></div>
            </div>
            <div class="list-kontak hidden">
                <div class="kontak">
                    <div class="icon-wrapper-kontak">
                        <i class="fa-solid fa-mobile-screen-button" style="font-size: 25px;"></i>
                    </div>
                    <h5><span>TELP:</span> (031) 5474482 | <span> EXT:</span> 353
                    </h5>
                </div>
                <div class="kontak">
                    <div class="icon-wrapper-kontak">
                        <i class="fa-solid fa-envelope" style="font-size: 25px;"></i>
                    </div>
                    <h5>organisasi@sulut.go.id</h5>
                </div>
                <div class="kontak">
                    <div class="icon-wrapper-kontak">
                        <i class="fa-solid fa-location-dot" style="font-size:25px"></i>
                        <!-- <i class="bi bi-geo-alt-fill" style="height: 25px; width: 25px;"></i> -->
                    </div>
                    <h5>
                        Jl Jimerto 25 -27
                        SBY 60272, INA</h5>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>e-SAKIP Biro Organisasi Pemerintah Provinsi Sulawesi Utara</p>
        </div>
    </div>
</div>