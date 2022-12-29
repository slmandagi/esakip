<script src="<?= base_url('/assets/js/modal.js') ?>"></script>
<div class="head-modal-triwulan">
    Input Triwulan III
    <i class="fa-solid fa-circle-xmark modal-close"></i>
</div>
<form id="triwulan3" class="form-modal-triwulan triwulan-3" action="<?php echo base_url('tambah_t3') ?>" enctype="multipart/form-data" method="post">
    <input type="text" hidden name="opd" value="<?= $opd ?>" id="opd">
    <div class="unduh-dokumen-lakip-container">
        <label for="unduh-dok-lakip">Unduh Dokumen Laporan Kinerja Triwulan III</label>
        <a href="<?= base_url(); ?>download/download/<?= $id ?>" id="unduh-dok-lakip" class="unduh-dok-lakip">Unduh Disini</a>
    </div>

    <div class="input-pengukuran-admin-container">
        <label for="ji_t3">Jumlah Indikator</label>
        <input type="text" id="ji_t3" name="ji_t3" class="jlh-indikator">
    </div>
    <div class="input-pengukuran-admin-container">
        <label for="tidak-ada-target-input">Tidak Ada Target</label>
        <input type="text" id="tt_t3" name="tt_t3" class="tidak-ada-target-input">
    </div>
    <div class="tidak-tercapai-container">
        <p>Tidak Tercapai:</p>
        <div class="tidak-tercapai-indikator">
            <label for="tc1_t3">00.00 s/d 49.99</label>
            <input type="text" id="tc1_t3" name="tc1_t3" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">
            <label for="tc2_t3">50.00 s/d 64.99</label>
            <input type="text" id="tc2_t3" name="tc2_t3" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">

            <label for="tc3_t3">65.00 s/d 74.99</label>
            <input type="text" id="tc3_t3" name="tc3_t3" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">
            <label for="tc4_t3">75.00 s/d 89.99</label>
            <input type="text" id="tc4_t3" name="tc4_t3" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">
            <label for="tc5_t3">90.00 s/d 99.99</label>
            <input type="text" id="tc5_t3" name="tc5_t3" class="tidak-tercapai-input">
        </div>
    </div>
    <div class="tercapai-melebihi-container">
        <label for="t_t3" class=>Tercapai</label>
        <input type="text" id="t_t3" name="t_t3" class="tercapai-input">
        <label for="mt_t3">Melebihi Target</label>
        <input type="text" id="mt_t3" name="mt_t3" class="melebihi-target-input">
    </div>
    <button type="submit" class="btn-selesai-input-triwulan">Selesai</button>
</form>