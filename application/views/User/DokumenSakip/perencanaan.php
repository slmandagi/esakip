<div class="perencanaan-kinerja-container">
    <div class="main-content-perencanaan-kinerja">
        <form action="<?= base_url('User/perencanaan_kinerja'); ?>" class="form-input-dokumen-perencanaan" method="POST" enctype="multipart/form-data">

            <!-- user name yang akan terupload ke database -->
            <div class="wrapper-input-dokumen">
                <label for="input-nama-dokumen">User Name</label>
                <input name="opd" id="opd" type="text" value="<?php echo $this->session->userdata('name'); ?>" class="input-nama-dokumen upload-input" required>
            </div>

            <div class="wrapper-input-dokumen">
                <label for="upload-file-dokumen">Pilih File</label>
                <!-- label ini berfungsi sebagai input(secara tampilan) -->
                <label for="upload-file-dokumen" class="upload-file-dokumen">
                    Upload file anda disini...
                    <i class="fa-solid fa-file-circle-plus"></i>
                </label>
                <!-- hanya trima dokumen dan gambar -->
                <input type="file" name="File_dok" id="upload-file-dokumen" class="upload-file-perencanaan upload-input" required accept=".doc,.docx, application/pdf">
            </div>


            <div class="wrapper-input-dokumen">
                <label for="input-nama-dokumen">Nama Dokumen</label>
                <input name="nama_dok" id="nama_dok" type="text" placeholder="Contoh: IKU2019..." class="input-nama-dokumen upload-input">
            </div>

            <div class="wrapper-input-dokumen">
                <label for="input-jenis-dokumen">Jenis Dokumen</label>
                <select name="jenis_dok" id="jenis_dok" class="input-jenis-dokumen upload-input" required>
                    <?php foreach ($jenis_surat as $value) : ?>
                        <option value="" hidden>Pilih..</option>
                        <option value="<?= $value->name ?>"><?= $value->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="wrapper-input-dokumen">
                <label for="input-unit-kerja">Waktu Pengiriman</label>
                <input id="date" name="date" type="date" placeholder="Input unit kerja anda disini..." class="input-unit-kerja upload-input" required>
            </div>

            <button type="submit" value="KIRIM" id="kirim-dokumen-perencanaan">Kirim</button>
        </form>
    </div>
</div>