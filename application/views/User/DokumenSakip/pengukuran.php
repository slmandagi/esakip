<div class="pengukuran-kinerja-container">
    <div class="main-content-pengukuran-kinerja">
        <form action="" class="form-input-dokumen-pengukuran" method="POST">
            <div class="wrapper-input-dokumen">
                <label for="upload-file-dokumen">Pilih File</label>
                <!-- label ini berfungsi sebagai input(secara tampilan) -->
                <label for="upload-file-dokumen" class="upload-file-dokumen">
                    Upload file anda disini...
                    <i class="fa-solid fa-file-circle-plus"></i>
                </label>
                <!-- hanya trima dokumen dan gambar -->
                <input type="file" id="upload-file-dokumen" class="upload-file-pengukuran upload-input" required accept=".doc,.docx, application/pdf">
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-nama-dokumen">Nama Dokumen</label>
                <input type="text" placeholder="Input nama dokumen disini..." class="input-nama-dokumen upload-input">
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-unit-kerja">Unit Kerja</label>
                <input type="text" placeholder="Input unit kerja anda disini..." class="input-unit-kerja upload-input">
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-triwulan">Input Triwulan</label>
                <select name="input-triwulan" id="input-triwulan" class="input-triwulan upload-input">
                    <?php foreach ($jenis_surat as $value) : ?>
                        <option value="" hidden>Pilih..</option>
                        <option value="<?= $value->name ?>"><?= $value->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-jenis-dokumen">Jenis Dokumen</label>
                <input type="text" value="Laporan Kinerja" class="input-nama-dokumen upload-input">
            </div>
            <button type="submit" id="kirim-dokumen-pengukuran">Kirim</button>
        </form>
    </div>
</div>