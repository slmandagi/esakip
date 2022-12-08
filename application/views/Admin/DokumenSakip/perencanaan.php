<div class="perencanaan-kinerja-container ">
    <div class="search-table-container">
        <div class="show-n-row-table">
            <p>Lihat</p>

            <form method="GET" action="<?= base_url('admin/perencanaan_kinerja') ?>">
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
    <div class="main-content-perencanaan-kinerja">
        <table class="table-perencanaan">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Pengirim</th>
<<<<<<< HEAD
                    <th>Jenis Dokumen</th>
                    <th>Nama dokumen</th>
                    <th>Waktu Pengiriman</th>
                    <th>Download</th>

=======
                    <th>Renstra/RPJMD</th>
                    <th>IKU</th>
                    <th>RKT</th>
                    <th>PK</th>
                    <th>PK Perubahan</th>
                    <th>Renja</th>
                    <th>Renaksi</th>
                    <th>Cascading Kinerja</th>
                    <th>Pohon Kinerja</th>
                    <th>Crosscutting</th>
>>>>>>> 659556ed212f74180aecb4da82fee5084314a8d9
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor =  $this->uri->segment(3) ? $this->uri->segment(3) + 1  : 1;

                foreach ($table as $baris) :
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $baris['opd'] ?></td>
<<<<<<< HEAD
                        <td><?= $baris['jenis_dok'] ?></td>
                        <td><?= $baris['nama_dok'] ?></td>
                        <td><?= $baris['date'] ?></td>
                        <td><?= $baris['File_dok'] ?></td>
                        <!-- <td><i class="<?= $baris['pk_perubahan'] ?>"></i></td> -->
=======
                        <td><i class="<?= $baris['renstra_rpjmd'] ?>"></i></td>
                        <td><i class="<?= $baris['iku'] ?>"></i></td>
                        <td><i class="<?= $baris['rkt'] ?>"></i></td>
                        <td><i class="<?= $baris['pk'] ?>"></i></td>
                        <td><i class="<?= $baris['pk_perubahan'] ?>"></i></td>
                        <td>Kosong</td>
                        <td>Kosong</td>
                        <td>Kosong</td>
                        <td>Kosong</td>
                        <td>Kosong</td>

>>>>>>> 659556ed212f74180aecb4da82fee5084314a8d9
                    </tr>
                <?php
                    $nomor++;
                endforeach;
                ?>
            </tbody>
        </table>

        <div class="footer-for-pagination">
            <div class="button-pagination">
                <?php echo $pagination ?>
            </div>
        </div>
    </div>
</div>