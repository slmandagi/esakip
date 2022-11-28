<div class="sidebar-container">
    <div class="sidebar" id="sidebar">
        <div class="header">
            <a href="" class="logo-esakip" id="logo-esakip">
                <img src="<?= base_url('/assets/img/sidebar/eSakip.svg') ?>" alt="" width="100px">
            </a>
            <!-- <img src="<?= base_url('/assets/img/sidebar/List.svg') ?>" alt="" width="35px"> -->
            <div class="list-bar" id="list-bar">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="sidebar-content">
            <div class="menu dashboard active" id="menu">
                <i class="fa-solid fa-gauge-high"></i>
                <a href="">
                    <p>Dashboard</p>
                </a>
                <span class="tooltip">Dashboard</span>
            </div>
            <div class="menu komponen-sakip">
                <i class="fa-regular fa-file"></i>
                <p>Komponen SAKIP</p>
                <i class="fa-solid fa-chevron-up panah-sakip "></i>
                <span class="tooltip">Dokumen SAKIP
                    <!-- <ul class="dropdown bagian-komponen-sakip">
                    <li class="komponen nonactive">Perencanaan Kinerja</li>
                    <li class="komponen nonactive">Pengukuran Kinerja</li>
                    <li class="komponen nonactive">Pelaporan Kinerja</li>
                    <li class="komponen nonactive">Evaluasi Kinerja</li>
                </ul> -->
                </span>
            </div>
            <ul class="dropdown bagian-komponen-sakip">
                <li class="komponen nonactive">Perencanaan Kinerja</li>
                <li class="komponen nonactive">Pengukuran Kinerja</li>
                <li class="komponen nonactive">Pelaporan Kinerja</li>
                <li class="komponen nonactive">Evaluasi Kinerja</li>
            </ul>

            <div class="menu informasi">
                <!-- <img src="<?= base_url('/assets/img/sidebar/Information.svg') ?>" alt="" height="25"> -->
                <i class="fa-regular fa-message"></i>
                <p>Informasi</p>
                <span class="tooltip">Informasi</span>
            </div>
            <!-- USER TIDAK ADA PENGATURAN -->
            <!-- PAKE DROP DOWN (
            1. PROFIL PENGGUNA
            2. UBAH EMAIL/PASSSWORD
            3. USER OPD
            )-->
            <div class="menu list-pengaturan">
                <!-- <img src="<?= base_url('/assets/img/sidebar/Pengaturan.svg') ?>" alt="" width="30"> -->
                <i class="fa-solid fa-gear"></i>
                <p>Pengaturan</p>
                <i class="fa-solid fa-chevron-up panah-pengaturan "></i>
                <span class="tooltip">Pengaturan</span>
            </div>
            <ul class="dropdown bagian-pengaturan">
                <li class="pengaturan nonactive">Profil Pengguna</li>
                <li class="pengaturan nonactive">Ubah Email</li>
                <li class="pengaturan nonactive">User OPD</li>
            </ul>

            <div class="menu faq">
                <i class="fa-solid fa-question"></i>
                <p>FAQ</p>
                <span class="tooltip">FAQ</span>
            </div>
        </div>
        <div class="profile">
            <img src="<?= base_url('/assets/img/sidebar/RandomPerson.svg') ?> " alt="" height="50" width="50">
            <div class="data-profile">
                <h4><?php echo $this->session->userdata('name'); ?></h4>
                <p><?php echo $this->session->userdata('access'); ?></p>
            </div>
            <a href="<?php echo site_url('autentikasi/logout'); ?>" class="logout">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <span class="tooltip for-profile">Profile/Keluar</span>
        </div>
    </div>
</div>