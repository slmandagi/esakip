<div class="dashboard-container">

    <div class="search-table-container">
        <div class="show-n-row-table">
            <p>Lihat</p>
            <form method="GET" action="<?= base_url('admin/') ?>">
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
                <tr>
                    <td>1</td>
                    <td>Renstra</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>RPJMD</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>IKU</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>RENJA/RKT</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>PK</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Rencana Aksi</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Laporan Kinerja</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Cascading Kinerja</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pohon Kinerja</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Crosscutting</td>
                    <td><i class="fa-solid fa-circle-check"></i></td>
                    <td>12 November 2022</td>
                    <td>
                        <a download="dokumen-sakip" href="<?= base_url('/assets/img/home/garuda.svg') ?>">
                            <i class="fa-solid fa-file-arrow-down">
                            </i>

                        </a>
                    </td>
                </tr>
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