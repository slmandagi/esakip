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

        <div class="pengukuran-kinerja_">
            <a href="<?= base_url('/assets/img/home/garuda.svg') ?>" download="dokumen-laporan">
                <i class="fa-solid fa-download"></i>
            </a>

        </div>
    </div>
</div>