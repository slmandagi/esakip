<div class="user-opd-container">
    <div class="main-content-user-opd">
        <div class="search-table-container">
            <button class="btn-tambah-user">Tambah User</button>

            <div class="search-table">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Cari" class="search-table-input" onkeyup="">
            </div>
        </div>
        <table class="table-user-opd">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Unit Kerja</th>
                    <!-- <th>Username</th> -->
                    <th>Email</th>
                    <th>Hak Akses User</th>
                    <th>Status User</th>
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
                        <td><?= $nomor ?></td>
                        <td><?= $baris['user_name'] ?></td>
                        <td><?= $baris['user_email'] ?></td>
                        <td><?= $baris['user_akses'] ?></td>
                        <td><?= $baris['user_status'] ?></td>
                        <td>
                            <button class="btn-edit-user">Edit</button>
                            <button class="btn-aktif-user">Aktif</button>
                            <span style="background-color: red;"> <button class="btn-aktif-user">Block</button></span>
                            <button class="btn-lupa-password">Lupa Password</button>
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
                <?php echo $pagination ?>
            </div>
        </div>

        <div class="modal-tambah-user-container modal-pengaturan">
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

                    <select name="" id="pilih-role-user" role="radiogroup" required>
                        <?php foreach ($jenis_u as $value) : ?>
                            <option role="radio" value="" hidden>Pilih Role</option>
                            <option role="radio" value="<?= set_value('jenis_user'); ?><?= $value->name ?>"><?= $value->name ?></option>
                        <?php endforeach ?>
                    </select>
                    <button type="submit" id="btn-tambah-user-modal" class="btn-tambah-user-modal">Tambah</button>
                    <i class="fa-solid fa-circle-xmark modal-close"></i>
                </form>
            </div>



        </div>
        <div class="modal-edit-user-container modal-pengaturan">
            <div class="modal-edit-user">
                <form action="" class="form-edit-user" method="POST">
                    <h3>Edit User</h3>
                    <label for="unit-kerja-modal">Unit Kerja</label>
                    <input type="text" id="unit-kerja-modal" placeholder="Pemerintah Provinsi Sulut" value="">

                    <!-- <label for="username-modal">Username</label>
                        <input type="text" id="username-modal" placeholder="..." <?php echo $u->user_name ?>> -->

                    <label for="email-modal">Email</label>
                    <input type="text" id="email-modal" placeholder="pemprovsulut@gmail.com" value="">

                    <select name="" id="pilih-role-user" role="radiogroup">
                        <?php foreach ($jenis_u as $value) : ?>
                            <option role="radio" value="" hidden>Pilih Role</option>
                            <option role="radio" value="<?= $value->name ?>"><?= $value->name ?></option>
                        <?php endforeach ?>
                    </select>

                    <button type="submit" id="btn-edit-user-modal" class="btn-edit-user-modal">Edit</button>
                    <i class="fa-solid fa-circle-xmark modal-close"></i>
                </form>

            </div>
        </div>

        <div class="modal-lupa-password-container modal-pengaturan">
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
    </div>
</div>