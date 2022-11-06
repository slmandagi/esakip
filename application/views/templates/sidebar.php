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
        <div class="menu dashboard" id="menu" i>
            <i class="fa-solid fa-gauge-high"></i>
            <p>Dashboard</p>
            <span class="tooltip">Dashboard</span>
        </div>

        <!-- PAKE DROPDOWN (
            1. DOKUMEN
            2. UPLOAD DOKUMEN
        ) -->
        <div class="menu dokumen-sakip">
            <!-- <img src="<?= base_url('/assets/img/sidebar/Dokumen.svg') ?>" alt="" height="25" width="25"> -->
            <i class="fa-regular fa-file"></i>
            <p>Dokumen SAKIP</p>
            <i class="fa-solid fa-chevron-up" style="font-size: 15px;"></i>
            <span class="tooltip">Dokumen SAKIP</span>

        </div>
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
        <div class="menu pengaturan">
            <!-- <img src="<?= base_url('/assets/img/sidebar/Pengaturan.svg') ?>" alt="" width="30"> -->
            <i class="fa-solid fa-gear"></i>
            <p>Pengaturan</p>
            <span class="tooltip">Pengaturan</span>

        </div>
        <div class="menu faq">
            <!-- <img src="<?= base_url('/assets/img/sidebar/FAQ.svg') ?>" alt="" width="25"> -->
            <i class="fa-solid fa-question"></i>
            <p>FAQ</p>
            <span class="tooltip">FAQ</span>

        </div>
    </div>
    <div class="profile">
        <img src="<?= base_url('/assets/img/sidebar/RandomPerson.svg') ?> " alt="" height="60" width="60">
        <div class="data-profile">
            <h4>Person Name</h4>
            <p>Job</p>
        </div>
        <a href="" class="logout">
            <!-- <i class="bi bi-arrow-left-square-fill" style="color: white;"></i> -->
            <!-- <img src="<?= base_url('/assets/img/sidebar/BoxArrowInLeft.svg') ?>" alt="" height="25" width="25"> -->
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <span class="tooltip for-profile">Profile/Keluar</span>
    </div>
</div>