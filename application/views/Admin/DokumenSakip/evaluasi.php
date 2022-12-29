<div class="evaluasi-kinerja-container">
    <div class="search-table-container">
        <div class="show-n-row-table">
            <p>Lihat</p>

            <form method="GET" action="<?= base_url('admin_sakip_sulut/evaluasi_kinerja') ?>">
                <select name="banyaknya-data">
                    <option hidden></option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <!-- <option value="5">5</option> -->
                </select>
                <input type="submit" name="pilih_jum_data" value="Tampilkan">
            </form>
        </div>
        <div class="search-table">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari" class="search-table-input" onkeyup="">
        </div>
    </div>
    <div class="main-content-evaluasi-kinerja">
        <table class="table-evaluasi-kinerja">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Perangkat Daerah</th>
                    <th>Kategori (per Tahun)</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $nomor =  $this->uri->segment(3) ? $this->uri->segment(3) + 1  : 1;
                foreach ($table as $baris) :
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $baris['user_name'] ?></td>
                        <td>
                            <form id="tambah_evaluasi" action="<?= base_url('Admin_sakip_sulut/evaluasi_kinerja') ?>" method="POST" class="form-input-evaluasi-admin" enctype="multipart/form-data">
                                <div class="input-file-evaluasi-container">
                                    <!-- <label for="upload-file-informasi">Pilih File</label> -->
                                    <!-- label ini berfungsi sebagai input(secara tampilan) -->
                                    <label for="upload-file-evaluasi-<?= $nomor ?>" class="upload-file-evaluasi-label-<?= $nomor ?>">
                                        Upload file anda disini...
                                        <i class="fa-solid fa-file-circle-plus"></i>
                                    </label>
                                    <!-- hanya trima dokumen -->
                                    <input type="file" name="file" id="upload-file-evaluasi-<?= $nomor ?>" class="upload-file-evaluasi-input" required accept=".doc,.docx, application/pdf" data-nomor="<?= $nomor ?>">
                                </div>
                                <input type="text" id="nilai" name="nilai" class="input-evaluasi-admin" placeholder="Input Nilai">
                                <button type="submit">Selesai</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                endforeach;
                ?>
            </tbody>
        </table>

        <div class="footer-for-pagination">
            <div class="button-pagination">
                <a href="">1</a>
            </div>
        </div>
    </div>
</div>

<style>
    .form-input-evaluasi-admin {
        display: flex;
        justify-content: center;
    }

    .form-input-evaluasi-admin .input-file-evaluasi-container {
        width: 50%;
        margin-right: 10px;
        height: 30px;
    }

    .form-input-evaluasi-admin input[type="file"] {
        display: none;
    }

    .form-input-evaluasi-admin label.upload-file-evaluasi {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: none;
        padding: 8px;
        border-radius: 10px;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.5s;
        height: 30px;
    }

    .form-input-evaluasi-admin .upload-file-evaluasi:hover {
        background: lightgray;
        color: black;
    }

    .form-input-evaluasi-admin .upload-file-evaluasi:hover i {
        color: black;
    }
</style>