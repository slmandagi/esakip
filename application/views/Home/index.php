<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="<?= base_url('/assets/css/home.css') ?>">
</head>

<body>


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
                <img src="<?= base_url('/assets/img/pulau-siladen-manado-sulawesi-utara 1.svg'); ?>" alt="" class="bg-img">
                <h1 class="sakip-highlight">SISTEM AKUNTANBILITAS KINERJA INSTANSI PEMERINTAH PROVINSI SULUT</h1>
            </div>

            <!-- About -->
            <div class="landing about" id="about">
                <h1>Tentang <span class="e">e</span>SAKIP</h1>
                <img src="<?= base_url('/assets/img/garuda.svg'); ?>" alt="" class="img-garuda">
                <div class="glass-bg desc">
                    <p class="sakip-desc">E-Sakip adalah aplikasi Sistem Akuntabilitas Kinerja Instansi Pemerintah secara elektronik (E-SAKIP) yang bertujuan untuk memudahkan proses pemantauan dan pengendalian kinerja Unit Kerja di lingkungan Instansi Pemerintah dalam rangka meningkatkan akuntabilitas dan kinerja satuan / unit kerja pada khususnya dan kinerja Instansi pada umumnya.</p>
                    <!-- <h1>About</h1> -->
                </div>
            </div>
            <div class="strip-login">
                <h2>Silahkan Login Terlebih Dahulu Untuk Dapat Masuk ke Sistem.</h2>
                <a href="" class="strip btn-login">Login</a>
            </div>

            <!-- Regulation -->
            <div class="landing regulation" id="regulation">
                <h1>Peraturan Terkait e-SAKIP</h1>
                <div class="glass-bg regulation">
                    <!-- Nanti akan berupa link yang akan mendownload dokumen tentang aturan-aturan -->
                    <p>1. Peraturan pertama</p>
                    <p>2. Peraturan kedua </p>
                    <p>3. Peraturan ketiga</p>
                    <p>4. Peraturan keempat</p>
                </div>
                <!-- <h1>Regulation</h1> -->
            </div>

            <div class="strip-login">
                <h2>Silahkan Login Terlebih Dahulu Untuk Dapat Masuk ke Sistem.</h2>
                <a href="" class="strip btn-login">Login</a>
            </div>

            <!-- Kontak -->
            <div class="landing contact" id="contact">
                <div class="headline contact">
                    <h1>Kontak Kami</h1>
                </div>

                <div class="list-kontak">
                    <div class="kontak">
                        <div class="icon-wrapper-kontak">
                            <img src="<?= base_url('/assets/img/Handphone.svg') ?>" alt="">
                        </div>
                        <h5><span>TELP:</span> (031) 5474482 | <span> EXT:</span> 353
                        </h5>
                    </div>
                    <div class="kontak">
                        <div class="icon-wrapper-kontak">
                            <img src="<?= base_url('/assets/img/Mail.svg') ?>" alt="">
                        </div>
                        <h5>organisasi@surabaya.go.id</h5>
                    </div>
                    <div class="kontak">
                        <div class="icon-wrapper-kontak">
                            <img src="<?= base_url('/assets/img/Location.svg') ?>" alt="">
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

    <script src="<?= base_url('/assets/js/home.js') ?>"></script>
</body>

</html>