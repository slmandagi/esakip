<div class="dashboard-container">

    <div class="search-table-container">
        <div class="show-n-row-table">
            <p>Lihat</p>
            <form method="GET" action="<?= base_url('user/') ?>">
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

    <div class="main-content-dashboard-user">
        <table class="table-dashboard-user">
            <!-- DI BAGIAN TABLE SO BOLEH COBA PAKE API FOR DATA DUMMY -->
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Dokumen</th>
                    <th>Status</th>
                    <th>Tanggal Upload</th>
                    <th>Unduh Dokumen</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($all_docs)) {
                    $i = 0;
                    foreach ($all_docs as $s) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td style="text-align: start; padding-left: 20px"><?= $s->nama_dok; ?></td>
                            <td><i class="fa-solid fa-circle-check"></i></td>
                            <td><?= $s->date; ?></td>
                            <td>
                                <a href="<?= base_url() ?>Download/download/<?= $s->id ?>">
                                    <i class="fa-solid fa-file-arrow-down">
                                    </i>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="footer-for-pagination">
            <div class="button-pagination">
                <span class="detail-pagination">Sebelumnya</span>
                <a href="" class="active">1</a>

                <!-- <?php echo $pagination ?> -->
                <span class="detail-pagination">Selanjutnya</span>

            </div>
        </div>
    </div>

</div>


<!-- 
     <div class="show-n-row-table">
        <p>Lihat</p>
        <form method="GET" action="<?= base_url('user/') ?>">
            <select name="banyaknya-data">
                <option hidden></option>
                <option value="5">5</option>
                <option value="10">10</option>
                </select>
            <input type="submit" name="pilih_jum_data" value="Tampilkan">
        </form>
    </div>
 -->