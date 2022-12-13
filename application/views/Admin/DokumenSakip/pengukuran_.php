<!-- 
    CATATAN:
    Tulalu ada bcrita dg ibu, dpe masing-masing kotak kata admin yg isi.
 -->


<div class="pengukuran-kinerja container">
    <div class="main-content-pengukuran-kinerja">
        <div class="search-table-container">
            <div class="show-n-row-table">
                <p>Lihat</p>
                <form method="GET" action="">
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

        <table class="table-pengukuran-kinerja">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Username</th>
                    <th>Triwulan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Provinsi Sulawesi Utara</td>
                    <td>
                        <button class="btn-triwulan" type="button">
                            Triwulan 1
                        </button>
                        <button class="btn-triwulan" type="button">
                            Triwulan 2
                        </button>
                        <button class="btn-triwulan" type="button">
                            Triwulan 3
                        </button>
                        <button class="btn-triwulan" type="button">
                            Triwulan 4
                        </button>
                        <button class="btn-triwulan" type="button">
                            Final
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Provinsi Sulawesi Utara</td>
                    <td>
                        <button class="btn-triwulan" type="button">
                            Triwulan 1
                        </button>
                        <button class="btn-triwulan" type="button">
                            Triwulan 2
                        </button>
                        <button class="btn-triwulan" type="button">
                            Triwulan 3
                        </button>
                        <button class="btn-triwulan" type="button">
                            Triwulan 4
                        </button>
                        <button class="btn-triwulan" type="button">
                            Final
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>