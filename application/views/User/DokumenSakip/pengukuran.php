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
                <label for="input-triwulan">Jenis Dokumen</label>
                <select name="input-triwulan" id="input-triwulan" class="input-triwulan upload-input">
                    <option value="default-value" selected hidden>Pilih Triwulan</option>
                    <option value="Triwulan 1">Triwulan 1</option>
                    <option value="Tiruwlan 2">Triwulan 2</option>
                    <option value="Triwulan 3">Triwulan 3</option>
                    <option value="Triwulan 4">Triwulan 4</option>
                </select>
            </div>
            <div class="wrapper-input-dokumen">
                <label for="input-jenis-dokumen">Jenis Dokumen</label>
                <select name="input-jenis-dokumen" id="input-jenis-dokumen" class="input-jenis-dokumen upload-input">
                    <option value="default-value" selected hidden>Pilih Dokumen</option>
                    <option value="Laporan Kinerja">Laporan Kinerja</option>
                </select>
            </div>
            <button type="submit" id="kirim-dokumen-pengukuran">Kirim</button>
        </form>
    </div>
</div>