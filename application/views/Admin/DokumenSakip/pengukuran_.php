<div class="pengukuran-kinerja-container">
    <div class="main-content-pengukuran-kinerja">
        <div class="pilih-triwulan-container">
            <a class="btn-triwulan-1 pilih-btn-triwulan" type="button">
                Triwulan 1
            </a>
            <a class="btn-triwulan-2 pilih-btn-triwulan" type="button">
                Triwulan 2
            </a>
            <a class="btn-triwulan-3 pilih-btn-triwulan" type="button">
                Triwulan 3
            </a>
            <a class="btn-triwulan-4 pilih-btn-triwulan" type="button">
                Triwulan 4
            </a>
        </div>
        <table class="table-pengukuran-kinerja triwulan-1" id="triwulan-1">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($all_opd)) {
                    $i = 0;
                    foreach ($all_opd as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->user_name; ?></td>
                            <td>
                                <a class="btn-triwulan triwulan-1-modal" + id="t1" data-opd="<?= $opd->user_name ?>" type="button">
                                    Input Data Triwulan 1
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <table class="table-pengukuran-kinerja triwulan-2" id="triwulan-2">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($all_opd)) {
                    $i = 0;
                    foreach ($all_opd as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->user_name; ?></td>
                            <td>
                                <a href="<?= base_url('admin_sakip_sulut/') ?>" class="btn-triwulan triwulan-2-modal" id="t1" data-opd="<?= $opd->user_name ?>" type="button">
                                    Input Data Triwulan 2
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <table class="table-pengukuran-kinerja triwulan-3" id="triwulan-3">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($all_opd)) {
                    $i = 0;
                    foreach ($all_opd as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->user_name; ?></td>
                            <td>
                                <a href="<?= base_url('admin_sakip_sulut/') ?>" class="btn-triwulan triwulan-3-modal" id="t1" data-opd="<?= $opd->user_name ?>" type="button">
                                    Input Data Triwulan 3
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <table class="table-pengukuran-kinerja triwulan-4" id="triwulan-4">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($all_opd)) {
                    $i = 0;
                    foreach ($all_opd as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->user_name; ?></td>
                            <td>
                                <a href="<?= base_url('admin_sakip_sulut/') ?>" class="btn-triwulan triwulan-4-modal" id="t1" data-opd="<?= $opd->user_name ?>" type="button">
                                    Input Data Triwulan 4
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal-triwulan-1-container modal">
        <div class="modal-triwulan" id="modal_t1">
            <div class="head-modal-triwulan">
                Input Triwulan I
                <i class="fa-solid fa-circle-xmark modal-close"></i>
            </div>
            <form id="triwulan1" class="form-modal-triwulan triwulan-1" action="<?php echo base_url('tambah_t1') ?>" enctype="multipart/form-data" method="post">
                <div class="unduh-dokumen-lakip-container">
                    <label for="unduh-dok-lakip">Unduh Dokumen Laporan Kinerja Triwulan I</label>
                    <a href="<?= base_url(); ?>download/download" download id="unduh-dok-lakip" class="unduh-dok-lakip">Unduh Disini</a>
                </div>

                <div class="input-pengukuran-admin-container">
                    <label for="ji_t1">Jumlah Indikator</label>
                    <input type="text" id="ji_t1" name="ji_t1" class="jlh-indikator">
                </div>
                <div class="input-pengukuran-admin-container">
                    <label for="tidak-ada-target-input">Tidak Ada Target</label>
                    <input type="text" id="tt_t1" name="tt_t1" class="tidak-ada-target-input">
                </div>
                <div class="tidak-tercapai-container">
                    <p>Tidak Tercapai:</p>
                    <div class="tidak-tercapai-indikator">
                        <label for="tc1_t1">00.00 s/d 49.99</label>
                        <input type="text" id="tc1_t1" name="tc1_t1" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tc2_t1">50.00 s/d 64.99</label>
                        <input type="text" id="tc2_t1" name="tc2_t1" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">

                        <label for="tc3_t1">65.00 s/d 74.99</label>
                        <input type="text" id="tc3_t1" name="tc3_t1" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tc4_t1">75.00 s/d 89.99</label>
                        <input type="text" id="tc4_t1" name="tc4_t1" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tc5_t1">90.00 s/d 99.99</label>
                        <input type="text" id="tc5_t1" name="tc5_t1" class="tidak-tercapai-input">
                    </div>
                </div>
                <div class="tercapai-melebihi-container">
                    <label for="t_t1" class=>Tercapai</label>
                    <input type="text" id="t_t1" name="t_t1" class="tercapai-input">
                    <label for="mt_t1">Melebihi Target</label>
                    <input type="text" id="mt_t1" name="mt_t1" class="melebihi-target-input">
                </div>
                <button type="submit" class="btn-selesai-input-triwulan">Selesai</button>
            </form>
        </div>
    </div>

    <div class="modal-triwulan-2-container modal">
        <div class="modal-triwulan">
            <div class="head-modal-triwulan">
                Input Triwulan II
                <i class="fa-solid fa-circle-xmark modal-close"></i>

            </div>
            <form class="form-modal-triwulan triwulan-2">
                <div class="unduh-dokumen-lakip-container">
                    <label for="unduh-dok-lakip">Unduh Dokumen Laporan Kinerja Triwulan II</label>
                    <a href="<?= base_url('/assets/img/home/garuda.svg') ?>" download id="unduh-dok-lakip" class="unduh-dok-lakip">Unduh Disini</a>
                </div>

                <div class="input-pengukuran-admin-container">
                    <label for="jlh-indikator">Jumlah Indikator</label>
                    <input type="text" disabled value="25" id="jlh-indikator" class="jlh-indikator">
                </div>
                <div class="input-pengukuran-admin-container">
                    <label for="tidak-ada-target-input">Tidak Ada Target</label>
                    <input type="text" value="" class="tidak-ada-target-input">
                </div>
                <div class="tidak-tercapai-container">
                    <p>Tidak Tercapai:</p>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-pertama">00.00 s/d 49.99</label>
                        <input type="text" id="tidak-tercapai-pertama" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-kedua">50.00 s/d 64.99</label>
                        <input type="text" id="tidak-tercapai-kedua" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-ketiga">65.00 s/d 74.99</label>
                        <input type="text" id="tidak-tercapai-ketiga" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-keempat">75.00 s/d 89.99</label>
                        <input type="text" id="tidak-tercapai-keempat" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-kelima">90.00 s/d 99.99</label>
                        <input type="text" id="tidak-tercapai-kelima" class="tidak-tercapai-input">
                    </div>
                </div>
                <div class="tercapai-melebihi-container">
                    <label for="tercapai-input" class=>Tercapai</label>
                    <input type="text" id="tercapai-input" class="tercapai-input">
                    <label for="melebihi-target-input">Melebihi Target</label>
                    <input type="text" id="melebihi-target-input" class="melebihi-target-input">
                </div>
                <button type="submit" class="btn-selesai-input-triwulan">Selesai</button>
            </form>
        </div>
    </div>
    <div class="modal-triwulan-3-container modal">
        <div class="modal-triwulan">
            <div class="head-modal-triwulan">
                Input Triwulan III
                <i class="fa-solid fa-circle-xmark modal-close"></i>

            </div>
            <form class="form-modal-triwulan triwulan-3">
                <div class="unduh-dokumen-lakip-container">
                    <label for="unduh-dok-lakip">Unduh Dokumen Laporan Kinerja Triwulan III</label>
                    <a href="<?= base_url('/assets/img/home/garuda.svg') ?>" download id="unduh-dok-lakip" class="unduh-dok-lakip">Unduh Disini</a>
                </div>

                <div class="input-pengukuran-admin-container">
                    <label for="jlh-indikator">Jumlah Indikator</label>
                    <input type="text" disabled value="25" id="jlh-indikator" class="jlh-indikator">
                </div>
                <div class="input-pengukuran-admin-container">
                    <label for="tidak-ada-target-input">Tidak Ada Target</label>
                    <input type="text" value="" class="tidak-ada-target-input">
                </div>
                <div class="tidak-tercapai-container">
                    <p>Tidak Tercapai:</p>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-pertama">00.00 s/d 49.99</label>
                        <input type="text" id="tidak-tercapai-pertama" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-kedua">50.00 s/d 64.99</label>
                        <input type="text" id="tidak-tercapai-kedua" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-ketiga">65.00 s/d 74.99</label>
                        <input type="text" id="tidak-tercapai-ketiga" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-keempat">75.00 s/d 89.99</label>
                        <input type="text" id="tidak-tercapai-keempat" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-kelima">90.00 s/d 99.99</label>
                        <input type="text" id="tidak-tercapai-kelima" class="tidak-tercapai-input">
                    </div>
                </div>
                <div class="tercapai-melebihi-container">
                    <label for="tercapai-input" class=>Tercapai</label>
                    <input type="text" id="tercapai-input" class="tercapai-input">
                    <label for="melebihi-target-input">Melebihi Target</label>
                    <input type="text" id="melebihi-target-input" class="melebihi-target-input">
                </div>
                <button type="submit" class="btn-selesai-input-triwulan">Selesai</button>
            </form>
        </div>
    </div>

    <div class="modal-triwulan-4-container modal">
        <div class="modal-triwulan">
            <div class="head-modal-triwulan">
                Input Triwulan IV
                <i class="fa-solid fa-circle-xmark modal-close"></i>

            </div>
            <form class="form-modal-triwulan triwulan-4">
                <div class="unduh-dokumen-lakip-container">
                    <label for="unduh-dok-lakip">Unduh Dokumen Laporan Kinerja Triwulan IV</label>
                    <a href="<?= base_url('/assets/img/home/garuda.svg') ?>" download id="unduh-dok-lakip" class="unduh-dok-lakip">Unduh Disini</a>
                </div>

                <div class="input-pengukuran-admin-container">
                    <label for="jlh-indikator">Jumlah Indikator</label>
                    <input type="text" disabled value="25" id="jlh-indikator" class="jlh-indikator">
                </div>
                <div class="input-pengukuran-admin-container">
                    <label for="tidak-ada-target-input">Tidak Ada Target</label>
                    <input type="text" value="" class="tidak-ada-target-input">
                </div>
                <div class="tidak-tercapai-container">
                    <p>Tidak Tercapai:</p>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-pertama">00.00 s/d 49.99</label>
                        <input type="text" id="tidak-tercapai-pertama" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-kedua">50.00 s/d 64.99</label>
                        <input type="text" id="tidak-tercapai-kedua" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-ketiga">65.00 s/d 74.99</label>
                        <input type="text" id="tidak-tercapai-ketiga" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-keempat">75.00 s/d 89.99</label>
                        <input type="text" id="tidak-tercapai-keempat" class="tidak-tercapai-input">
                    </div>
                    <div class="tidak-tercapai-indikator">
                        <label for="tidak-tercapai-kelima">90.00 s/d 99.99</label>
                        <input type="text" id="tidak-tercapai-kelima" class="tidak-tercapai-input">
                    </div>
                </div>
                <div class="tercapai-melebihi-container">
                    <label for="tercapai-input" class=>Tercapai</label>
                    <input type="text" id="tercapai-input" class="tercapai-input">
                    <label for="melebihi-target-input">Melebihi Target</label>
                    <input type="text" id="melebihi-target-input" class="melebihi-target-input">
                </div>
                <button type="submit" class="btn-selesai-input-triwulan">Selesai</button>
            </form>
        </div>
    </div>
</div>