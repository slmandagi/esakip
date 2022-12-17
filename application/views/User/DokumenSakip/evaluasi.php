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
    </div>
    <div class="main-content-evaluasi-kinerja">
        <table class="table-evaluasi-kinerja-user">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Dokumen</th>
                    <th>Hasil Penilaian</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="<?= base_url('/assets/img/home/garuda.svg') ?>" download>
                            EvaluasiKinerja2019.pdf
                            <i class="fa-solid fa-file-arrow-down"></i>
                        </a>
                    </td>
                    <td>A</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="<?= base_url('/assets/img/home/garuda.svg') ?>" download>
                            EvaluasiKinerja2020.pdf
                            <i class="fa-solid fa-file-arrow-down"></i>
                        </a>
                    </td>
                    <td>A</td>
                    <td>2020</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
    .table-evaluasi-kinerja-user {
        width: 70%;
    }
</style>