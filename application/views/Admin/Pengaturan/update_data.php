<div class="user-opd-container">
    <div class="main-content-edit-data">
        <div class="pilih-user-opd">
            <span>
                <label for="daftar-user">Pilih User
                    <i class="fa-solid fa-chevron-down"></i>
                </label>
            </span>
            <ul name="" id="" class="daftar-user">
                <li class="pilih-user">
                    <a href=""> Pemerintah Provinsi Sulut</a>
                </li>
                <li class="pilih-user">
                    <a href=""> Badan Pendapatan Daerah</a>
                </li>
                <li class="pilih-user">
                    <a href=""> Badan Pendapatan Daerah</a>
                </li>
                <li class="pilih-user">
                    <a href=""> Badan Pendapatan Daerah</a>
                </li>
            </ul>
        </div>
        <form action="<?= base_url('admin_sakip_sulut/update_data'); ?>" class="form-edit-user" method="POST">


            <input type="hidden" id="user_id" name="user_id" value="" required>


            <label for="unit-kerja-modal">Unit Kerja</label>
            <input name="user_name" type="text" id="user_name" value="" required>

            <label for="email-modal">Email</label>
            <input name="user_email" type="text" id="user_email" value="" required>

            <select name="Jenis_user" id="Jenis_user" role="radiogroup" required>
                <option role="radio" value="" hidden>Pilih Role</option>
                <option value="Provinsi Sulawesi Utara">Provinsi Sulawesi Utara</option>
                <option role="radio" value="" hidden>Pilih Role</option>
                <option value="Provinsi Sulawesi Utara">Provinsi Sulawesi Utara</option>
            </select>
            <button type="submit" id="btn-edit-user" class="btn-edit-user" style="margin-top: 30px;">Edit</button>
        </form>
        <!-- <h4>Pilih User Terlebih Dahulu.</h4> -->
    </div>
</div>

<style>
    .main-content-edit-data {
        height: 100vh;
    }

    .pilih-user-opd {
        display: flex;
        flex-direction: column;
        width: 40%;
        height: 5%;
        align-items: center;
        justify-content: center;
        position: relative;
        border-style: dotted;
    }

    .pilih-user-opd label {
        cursor: pointer;
        height: 100%;
        padding: 10px;
    }

    .pilih-user-opd span {
        /* border: 2px solid white; */
        font-size: 14px;
        cursor: pointer;
        border-radius: 8px;
    }


    .pilih-user-opd span.active,
    .pilih-user-opd span:hover {
        background: #062C30;
        border-radius: 8px;
    }

    .pilih-user-opd span.active label,
    .pilih-user-opd span:hover label {
        color: white;
    }

    .pilih-user-opd ul.daftar-user {
        background: #062C30;
        width: 40%;
        border-radius: 8px;
        position: absolute;
        top: 0%;
        right: 0%;
        height: 150px;
        overflow: hidden;
        overflow-y: visible;
        visibility: hidden;
        opacity: 0;
        pointer-events: none;
    }

    .pilih-user-opd ul.daftar-user.active {
        visibility: visible;
        opacity: 1;
        pointer-events: visible;
    }

    .pilih-user-opd ul li.pilih-user {
        height: 20px;
        line-height: 20px;
        padding-left: 5px;

    }

    .pilih-user-opd ul li:hover {
        background: white;
        color: black;
    }

    .pilih-user-opd ul li:hover a {
        color: black
    }

    .pilih-user-opd ul li a {
        color: white;
        font-size: 80%;
    }


    .main-content-edit-data h5 {
        display: block;
    }

    .main-content-edit-data h4.disabled {
        display: none;
    }
</style>