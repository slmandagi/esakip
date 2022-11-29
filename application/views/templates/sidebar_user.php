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
                <a href="<?= base_url('User/dokumen') ?>">
                    <p>Dokumen SAKIP</p>
                </a>
            </div>
            <!-- <ul class="dropdown bagian-komponen-sakip">
                <li class="komponen nonactive">Perencanaan Kinerja</li>
                <li class="komponen nonactive">Pengukuran Kinerja</li>
                <li class="komponen nonactive">Pelaporan Kinerja</li>
                <li class="komponen nonactive">Evaluasi Kinerja</li>
            </ul> -->

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
            <!-- action untuk logout -->
            <a href="<?php echo site_url('autentikasi/logout'); ?>" class="logout">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <span class="tooltip for-profile">Profile/Keluar</span>
        </div>
    </div>
</div>