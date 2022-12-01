 <!-- START OF DASHBOARD CONTENT -->
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

     <div class="main-content-dashboard">
         <table class="table-dashboard">
             <!-- DI BAGIAN TABLE SO BOLEH COBA PAKE API FOR DATA DUMMY -->
             <thead>
                 <tr class="header-table-dashboard">
                     <th>Nomor</th>
                     <th>OPD</th>
                     <th>RPJMD</th>
                     <th>Renstra</th>
                     <th>IKU</th>
                     <th>Renja</th>
                     <th>PK</th>
                     <th>Renaksi</th>
                     <th>Lakip</th>
                     <th>Lainnya</th>
                 </tr>

             </thead>
             <tbody>

                 <?php
                    $nomor =  $this->uri->segment(3) ? $this->uri->segment(3) + 1  : 1;
                    foreach ($table as $baris) :
                    ?>
                     <tr class="baris-table-dashboard">
                         <td><?= $nomor ?></td>
                         <td><?= $baris["opd"] ?></td>
                         <td><i class="<?= $baris['rpjmd'] ?>"></i></td>
                         <td><i class="<?= $baris['renstra'] ?>"></i></td>
                         <td><i class="<?= $baris['iku'] ?>"></i></td>
                         <td><i class="<?= $baris['renja'] ?>"></i></td>
                         <td><i class="<?= $baris['pk'] ?>"></i></td>
                         <td><i class="<?= $baris['renaksi'] ?>"></i></td>
                         <td><i class="<?= $baris['lakip'] ?>"></i></td>
                         <td><i class="<?= $baris['lainnya'] ?>"></i></td>
                     </tr>
                 <?php
                        $nomor++;
                    endforeach;
                    ?>

             </tbody>
         </table>

         <div class="footer-for-pagination">
             <!-- <span class="detail-pagination">Sebelumnya</span> -->
             <div class="button-pagination">
                 <?php echo $pagination ?>
             </div>
             <!-- <span class="detail-pagination">Selanjutnya</span> -->
         </div>
     </div>
     <!-- END OF MAIN CONTENT CONTAINER -->
 </div>
 <!-- END OF DASHBOARD CONTAINER -->