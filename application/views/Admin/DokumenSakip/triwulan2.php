<script src="<?= base_url('/assets/js/modal.js') ?>"></script>
<div class="head-modal-triwulan">
    Input Triwulan II
    <i class="fa-solid fa-circle-xmark modal-close"></i>
</div>
<form id="triwulan2" class="form-modal-triwulan triwulan-2" action="<?php echo base_url('tambah_t2') ?>" enctype="multipart/form-data" method="post">
    <input type="text" hidden name="opd" value="<?= $opd ?>" id="opd">
    <div class="unduh-dokumen-lakip-container">
        <label for="unduh-dok-lakip">Unduh Dokumen Laporan Kinerja Triwulan II</label>
        <a href="<?= base_url(); ?>download/download/<?= $id ?>" id="unduh-dok-lakip" class="unduh-dok-lakip">Unduh Disini</a>
    </div>

    <div class="input-pengukuran-admin-container">
        <label for="ji_t2">Jumlah Indikator</label>
        <input type="text" id="ji_t2" name="ji_t2" class="jlh-indikator">
    </div>
    <div class="input-pengukuran-admin-container">
        <label for="tidak-ada-target-input">Target</label>
        <input type="text" id="tt_t2" name="tt_t2" class="tidak-ada-target-input">
    </div>
    <div class="tidak-tercapai-container">
        <p>Tidak Tercapai:</p>
        <div class="tidak-tercapai-indikator">
            <label for="tc1_t2">00.00 s/d 49.99</label>
            <input type="text" id="tc1_t2" name="tc1_t2" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">
            <label for="tc2_t2">50.00 s/d 64.99</label>
            <input type="text" id="tc2_t2" name="tc2_t2" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">

            <label for="tc3_t2">65.00 s/d 74.99</label>
            <input type="text" id="tc3_t2" name="tc3_t2" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">
            <label for="tc4_t2">75.00 s/d 89.99</label>
            <input type="text" id="tc4_t2" name="tc4_t2" class="tidak-tercapai-input">
        </div>
        <div class="tidak-tercapai-indikator">
            <label for="tc5_t2">90.00 s/d 99.99</label>
            <input type="text" id="tc5_t2" name="tc5_t2" class="tidak-tercapai-input">
        </div>
    </div>
    <div class="tercapai-melebihi-container">
        <label for="t_t2" class=>Tercapai</label>
        <input type="text" id="t_t2" name="t_t2" class="tercapai-input">
        <label for="mt_t2">Melebihi Target</label>
        <input type="text" id="mt_t2" name="mt_t2" class="melebihi-target-input">
    </div>
    <button type="submit" class="btn-selesai-input-triwulan">Selesai</button>
</form>