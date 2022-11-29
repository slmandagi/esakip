<div class="evaluasi-kinerja-container">
    <div class="search-table-container">
        <div class="show-n-row-table">
            <p>Lihat</p>

            <form method="GET" action="<?= base_url('admin/evaluasi_kinerja') ?>">
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
                <tr>
                    <td>1</td>
                    <td>Provinsi Sulawesi Utara</td>
                    <td>
                        <form action="" method="POST" class="form-input-evaluasi-admin">
                            <input type="text" class="input-evaluasi-admin" placeholder="Input Nilai">
                            <button type="submit">Selesai</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Badan Pendapatan Daerah</td>
                    <td>
                        <form action="" method="POST" class="form-input-evaluasi-admin">
                            <input type="text" class="input-evaluasi-admin" placeholder="Input Nilai">
                            <button type="submit">Selesai</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="footer-for-pagination">
            <div class="button-pagination">
                <a href="">1</a>
            </div>
        </div>
    </div>
</div>