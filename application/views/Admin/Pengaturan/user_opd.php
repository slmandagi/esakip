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
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pemerintah Provinsi Sulut</td>
                    <td>Email</td>
                    <td>
                        <button class="btn-edit-user">Edit</button>
                        <button class="btn-aktif-user">Aktif</button>
                        <button class="btn-lupa-password">Lupa Password</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Badan Pendapatan Daerah</td>
                    <td>Email</td>
                    <td>
                        <button class="btn-edit-user">Edit</button>
                        <button class="btn-aktif-user" disabled>Aktif</button>
                        <button class="btn-lupa-password">Lupa Password</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="modal-tambah-user-container modal-pengaturan">
            <div class="modal-tambah-user">
                <form action="" class="form-tambah-user" method="POST">
                    <h3>Tambah User</h3>
                    <label for="unit-kerja-modal">Unit Kerja</label>
                    <input type="text" id="unit-kerja-modal">
                    <label for="email-modal">Email</label>
                    <input type="text" id="email-modal">
                    <label for="password-modal">Password</label>
                    <input type="text" id="password-modal">
                    <select name="" id="pilih-role-user" role="radiogroup">
                        <option value="" selected hidden>Pilih Role</option>
                        <option value="Instansi Pemda" role="radio" id="user-instansi">Instansi Pemda</option>
                        <option value="Organisasi Perangkat Daerah" role="radio" id="user-opd">Organisasi Perangkat Daerah</option>
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
                    <input type="text" id="unit-kerja-modal" placeholder="Pemerintah Provinsi Sulut">
                    <label for="username-modal">Username</label>
                    <input type="text" id="username-modal" placeholder="...">
                    <label for="email-modal">Email</label>
                    <input type="text" id="email-modal" placeholder="pemprovsulut@gmail.com">
                    <select name="" id="pilih-role-user" role="radiogroup">
                        <option value="" selected hidden>Pilih Role</option>
                        <option value="Instansi Pemda" role="radio" id="user-instansi">Instansi Pemda</option>
                        <option value="Organisasi Perangkat Daerah" role="radio" id="user-opd">Organisasi Perangkat Daerah</option>
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