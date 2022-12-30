<div class="pelaporan-kinerja-container">
    <div class="main-content-pelaporan-kinerja">
        <form id="tambahLaporan" role="form" action="<?php echo base_url('User/pelaporan_kinerja') ?>" class="form-input-dokumen-pelaporan" enctype="multipart/form-data" method="post">
            <div class="wrapper-input-dokumen">
                <label for="input-nama-dokumen">Nama Dokumen</label>
                <input type="text" id="nama_dok" name="nama_dok" required placeholder="Input nama dokumen disini..." class="input-nama-dokumen upload-input">
            </div>
            <div class="wrapper-input-dokumen">
                <label for="pilih-tahun-evaluasi">Pilih Tahun</label>
                <select class="select" name="year" id="pilih-tahun-evaluasi">
                    <?php foreach ($year as $y) : ?>
                        <option value="" selected hidden></option>
                        <option value="<?= $y->year ?>"><?= $y->year ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="wrapper-input-dokumen">
                <label for="upload-file-dokumen">Pilih File</label>
                <!-- label ini berfungsi sebagai input(secara tampilan) -->
                <label for="upload-file-dokumen" class="upload-file-dokumen">
                    Upload file anda disini...
                    <i class="fa-solid fa-file-circle-plus"></i>
                </label>
                <!-- hanya trima dokumen dan gambar -->
                <input type="file" name="File_dok" id="upload-file-dokumen" class="upload-file-pelaporan upload-input" required accept=".doc,.docx, application/pdf">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>