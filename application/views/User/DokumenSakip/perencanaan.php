<div class="perencanaan-kinerja-container">
    <div class="main-content-perencanaan-kinerja">
        <form action="" class="form-input-dokumen-perencanaan" method="POST">
            <div class="wrapper-input-dokumen">
                <label for="upload-file-dokumen">Pilih File</label>
                <!-- label ini berfungsi sebagai input(secara tampilan) -->
                <label for="upload-file-dokumen" class="upload-file-dokumen">
                    Upload file anda disini...
                    <i class="fa-solid fa-file-circle-plus"></i>
                </label>
                <!-- hanya trima dokumen dan gambar -->
                <input type="file" id="upload-file-dokumen" class="upload-file-perencanaan upload-input" required accept=".doc,.docx, application/pdf">
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
                <label for="input-jenis-dokumen">Jenis Dokumen</label>
                <select name="input-jenis-dokumen" id="input-jenis-dokumen" class="input-jenis-dokumen upload-input">
                    <option value="default-value" selected hidden>Pilih Dokumen</option>
                    <option value="Renstra">Renstra</option>
                    <option value="RPJMD">RPMJD</option>
                    <option value="IKU">IKU</option>
                    <option value="Renja">Renja</option>
                    <option value="PK"> PK</option>
                    <option value="Rencana Aksi">Rencana Aksi</option>
                    <option value="Laporan Kerja">Laporan Kerja</option>
                    <option value="Cascading Kerja">Cascading Kerja</option>
                    <option value="Pohon Kinerja">Pohon Kinerja</option>
                    <option value="Crosscutting">Crosscutting</option>
                </select>
            </div>
            <button type="submit" id="kirim-dokumen-perencanaan">Kirim</button>
        </form>
    </div>
</div>