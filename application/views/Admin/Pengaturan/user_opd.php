    <div class="user-opd-container">
        <div class="main-content-user-opd">
            <div class="search-table-container">
                <!-- <div class="show-n-row-table">
                    <p>Lihat</p>
                    <form method="GET" action="<?= base_url('admin_sakip_sulut/user_opd') ?>">
                        <select name="banyaknya-data">
                            <option hidden></option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                        </select>
                        <input type="submit" name="pilih_jum_data" value="Tampilkan">
                    </form>
                </div> -->

                <button class="btn-tambah-user">Tambah User</button>
                <a href="<?= base_url('Admin_sakip_sulut/show_user_id') ?>"><button style="margin-right:800px;">Edit User</button></a>
                <div class="search-table">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Cari" class="search-table-input" onkeyup="">
                </div>
            </div>
            <table class="table-user-opd">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Unit Kerja</th>
                        <th>Jenis User</th>
                        <th>Email</th>
                        <!-- <th>Hak Akses User</th> -->
                        <th>Status User</th>
                        <th>Dibuat</th>
                        <th>Update</th>
                        <th>Aktifasi User</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- <tr>
                        <td>1</td>
                        <td>Pemerintah Provinsi Sulut</td>
                        <td>Email</td>
                        <td>
                            <button class="btn-edit-user">Edit</button>
                            <button class="btn-aktif-user">Aktif</button>
                            <button class="btn-lupa-password">Lupa Password</button>
                        </td>
                    </tr> -->
                    <?php
                    $nomor =  $this->uri->segment(3) ? $this->uri->segment(3) + 1  : 1;

                    foreach ($table as $baris) :
                    ?>
                        <tr>
                            <?php if ($baris['user_akses'] == '2') { ?>
                                <td><?= $nomor ?></td>
                                <td><?= $baris['user_name'] ?></td>
                                <td><?= $baris['Jenis_user'] ?></td>
                                <td><?= $baris['user_email'] ?></td>
                                <!-- <td><?= $baris['user_akses'] == '1' ? "Admin" : "User" ?></td> -->
                                <td><?= $baris['user_status'] == '1' ? "Aktif" : "Block" ?></td>
                                <td><?= $baris['date_created'] ?></td>
                                <td><?= $baris['date_update'] ?></td>
                                <td>
                                    <form action="<?= base_url('admin_sakip_sulut/update_status_aktif'); ?>" method="POST">

                                        <input type="hidden" name="user_id" id="user_id" value="<?= $baris['user_id'] ?>">
                                        <input type="hidden" name="user_status" id="user_status" value="<?= $baris['user_status'] ?>">
                                        <?php if ($baris['user_status'] == '0') { ?>
                                            <button type="submit" class="btn-aktif-user">Aktifkan</button>
                                        <?php } ?>
                                    </form>

                                    <form action="<?= base_url('admin_sakip_sulut/update_status_block'); ?>" method="POST">
                                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $baris['user_id']; ?>">
                                        <input type="hidden" name="user_status" id="user_status" value="<?php echo $baris['user_status']; ?>">
                                        <?php if ($baris['user_status'] == '1') { ?>
                                            <button uid="<?php echo $baris['user_id']; ?>" uemail="<?php echo $baris['user_email']; ?>" ustatus="<?php echo $baris['user_status']; ?>" class="btn-block-user">Block User</button>
                                        <?php } ?>
                                    </form>

                                </td>
                                <td>
                                    <!-- <button uid="<?php echo $baris['user_id']; ?>" uname="<?php echo $baris['user_name']; ?>" uemail="<?php echo $baris['user_email']; ?>" ujenis="<?php echo $baris['Jenis_user']; ?>" class="btn-edit-user">Edit</button> -->

                                    <button class="btn-lupa-password">Lupa Password</button>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php
                        $nomor++;
                    endforeach;
                    ?>

                </tbody>
            </table>

            <?php if ($error = $this->session->flashdata('msg')) { ?>

                <h3 class="text-success"><?php echo  $error; ?></h3>

            <?php } ?>

            <div class="footer-for-pagination">
                <div class="button-pagination">
                    <?php echo $pagination ?>
                </div>
            </div>

            <div class="modal-tambah-user-container modal modal-pengaturan">
                <div class="modal-tambah-user">
                    <form action="<?= base_url('admin_sakip_sulut/user_opd'); ?>" class="form-tambah-user" method="POST">
                        <h3>Tambah User</h3>
                        <label for="unit-kerja-modal">Unit Kerja</label>
                        <span style="color: red;"> <?= form_error('user_name', '<small class="text-danger">', '</small>') ?></span>
                        <input type="text" id="unit-kerja-modal" name="user_name" value="<?= set_value('user_name'); ?>">

                        <label for="email-modal">Email</label>
                        <span style="color: red;"><?= form_error('user_email', '<small class="text-danger">', '</small>') ?></span>
                        <input type="email" id="email-modal" name="user_email" value="<?= set_value('user_email'); ?>">

                        <label for="password-modal">Password</label>
                        <span style="color: red;"><?= form_error('user_password', '<small class="text-danger">', '</small>') ?></span>
                        <input type="password" id="password-modal" name="user_password" value="<?= set_value('user_password'); ?>">

                        <select name="Jenis_user" id="pilih-role-user" role="radiogroup" required>
                            <?php foreach ($jenis_u as $value) : ?>
                                <option role="radio" value="" hidden>Pilih Role</option>
                                <option role="radio" value="<?= set_value('Jenis_user'); ?><?= $value->name ?>"><?= $value->name ?></option>
                            <?php endforeach ?>
                        </select>
                        <button type="submit" id="btn-tambah-user-modal" class="btn-tambah-user-modal">Tambah</button>
                        <i class="fa-solid fa-circle-xmark modal-close"></i>
                    </form>
                </div>



            </div>

            <!-- <div class="modal-edit-user-container modal modal-pengaturan">
                <div class="modal-edit-user">
                    <?php foreach ($userID as $user) : ?>

                        <form action="<?= base_url('admin_sakip_sulut/update_data'); ?>" class="form-edit-user" method="POST">
                            <h3>Edit User</h3>

                            <label id="hide">Id :</label>
                            <input type="hidden" id="user_id" name="user_id" value="">

                            <label for="unit-kerja-modal">Unit Kerja</label>
                            <input name="user_name" type="text" id="user_name" value="">

                            <label for="email-modal">Email</label>
                            <input name="user_email" type="text" id="user_email" value="">
                            <select name="Jenis_user" id="Jenis_user" role="radiogroup">
                                <?php foreach ($jenis_u as $value) : ?>
                                    <option role="radio" value="" hidden>Pilih Role</option>
                                    <option role="radio" value="<?= $value->name ?>"><?= $value->name ?></option>
                                <?php endforeach ?>
                            </select>

                            <button type="submit" id="btn-edit-user-modal" class="btn-edit-user-modal">Edit</button>
                            <input type="submit" id="submit" name="dsubmit" value="Edit" class="btn-edit-user-modal">
                            <i class="fa-solid fa-circle-xmark modal-close"></i>
                        </form>
                    <?php endforeach; ?>

                </div>
            </div> -->

            <div class="modal-lupa-password-container modal modal-pengaturan">
                <div class="modal-lupa-password">
                    <form action="" class="form-lupa-password" id="form-lupa-password" class="form-lupa-password">
                        <h3>Lupa Password</h3>
                        <label for="password-baru">Password Baru</label>
                        <input type="text" class="password-baru" id="password-baru">
                        <label for="konfirmasi-password-baru">Konfirmasi Password Baru</label>
                        <input type="text" class="konfirmasi-password-baru" id="konfirmasi-password-baru">
                        <button type="submit" id="btn-edit-user-modal" class="btn-lupa-password-modal">Simpan</button>
                        <i class="fa-solid fa-circle-xmark modal-close"></i>
                    </form>
                </div>
            </div>

            <!-- modal for block user -->
            <!-- <div class="modal-block-user-container modal-pengaturan modal">

                <form action="<?= base_url('admin_sakip_sulut/update_status_block'); ?>" method="POST" class="form-modal-block-user">
                    <h3>Apakah Anda Ingin Mengganti Status User Ini?</h3>

                    <div class="btn-ya-tidak-block-container">
                        //getting value in hidden field with the hep of ID's
                        <input type="hidden" name="id" id="user_id" value="">
                        <input type="hidden" name="status" id="user_status" value="">
                        <input type="hidden" name="status" id="user_email" value="">

                        <button type="submit" class="btn-ya-block btn-block-user-modal" name="submit">Ya</button>
                        <button class="btn-tidak-block model-close btn-block-user-modal">Tidak</button>
                    </div>
                </form>

            </div> -->


        </div>
    </div>