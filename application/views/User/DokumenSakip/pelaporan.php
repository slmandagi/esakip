<div class="pelaporan-kinerja-container">
    <div class="main-content-pelaporan-kinerja">
        <form action="" class="form-input-dokumen-pelaporan" method="POST">
            <div class="wrapper-input-dokumen">
                <label for="upload-file-dokumen">Pilih File</label>
                <!-- label ini berfungsi sebagai input(secara tampilan) -->
                <label for="upload-file-dokumen" class="upload-file-dokumen">
                    Upload file anda disini...
                    <i class="fa-solid fa-file-circle-plus"></i>
                </label>
                <!-- hanya trima dokumen dan gambar -->
                <input type="file" id="upload-file-dokumen" class="upload-file-pelaporan upload-input" required accept=".doc,.docx, application/pdf">
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-nama-dokumen">Nama Dokumen</label>
                <input type="text" placeholder="Input nama dokumen disini..." class="input-nama-dokumen upload-input">
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-unit-kerja">Unit Kerja</label>
                <input type="text" placeholder="Input unit kerja anda disini..." class="input-unit-kerja upload-input">
            </div>
            <button type="submit" id="kirim-dokumen-pelaporan">Kirim</button>
        </form>
    </div>
</div>