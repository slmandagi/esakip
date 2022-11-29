<div class="profil-pengguna-container">
    <div class="penjelasan-singkat">
        <p>Bapak/Ibu dapat mengedit profil untuk admin disini.</p>
    </div>
    <div class="main-content-profil-pengguna-container">
        <form action="" method="POST" class="form-profil-pengguna">
            <div class="input-pengaturan-wrapper kiri">
                <label for="username">Username</label>
                <input type="text" id="username">
                <label for="gelar-depan">Gelar Depan</label>
                <input type="text" id="gelar-depan">
                <label for="nama-penanggung-jawab">Nama Penanggung Jawab</label>
                <input type="text" id="nama-penanggung-jawab">

                <!-- golongan dropdown -->
                <label for="golongan">golongan</label>
                <input type="text" id="golongan">
                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan">
                <label for="no-hp">No. HP</label>
                <input type="text" id="no-hp">
            </div>

            <div class="input-pengaturan-wrapper kanan">
                <label for="gelar-belakang">Gelar Belakang</label>
                <input type="text" id="gelar-belakang">
                <label for="nama-unit-kerja">Nama Unit Kerja</label>
                <input type="text" id="nama-unit-kerja">
                <label for="tingkat-eselon">Tingkat Eselon</label>
                <input type="text" id="tingkat-eselon">
                <label for="nip">NIP</label>
                <input type="text" id="nip">
                <label for="no-telp-kantor">No. Telp Kantor</label>
                <input type="text" id="no-telp-kantor">
                <button class="btn-simpan-profil-pengguna" id="btn-simpan-profil-pengguna">Simpan</button>
            </div>
        </form>

    </div>
</div>


<style>
    .profil-pengguna-container {
        width: 100%;
        height: 100vh;
    }

    .penjelasan-singkat {
        padding-left: 30px;
        margin-bottom: 20px;
    }

    .main-content-profil-pengguna-container {
        width: 100%;
        display: flex;
        justify-content: center;
        height: 100vh;
        /* background: lightyellow; */
        overflow: hidden;

    }

    .form-profil-pengguna {
        width: 60%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        /* padding: 40px; */
        border-radius: 20px;
        margin: 0;
        /* scroll-behavior: smooth; */
    }

    .form-profil-pengguna input {
        height: 35px;
        border-radius: 8px;
        background: #E1E8E6;
        border: none;
        outline: none;
        padding-left: 20px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
    }

    .form-profil-pengguna .input-pengaturan-wrapper {
        display: flex;
        flex-direction: column;
        width: 30%;
    }


    .form-profil-pengguna label:first-of-type {
        margin-top: 0px;
    }

    .form-profil-pengguna label {
        font-size: 14px;
        font-weight: 700;
        margin-top: 25px;
        margin-bottom: 2px;
        color: rgba(0, 0, 0, 0.25);
    }

    .form-profil-pengguna .input-pengaturan-wrapper button {
        width: 60%;
        align-self: flex-end;
        margin-top: 50px;
        padding: 7px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        background: #1C6758;
        color: white;
        transition: all 0.5s;
    }

    .form-profil-pengguna .input-pengaturan-wrapper button:hover {
        background-color: #46B5D1;
        box-shadow: 4px 8px 30px rgba(23, 201, 213, 0.2);
    }
</style>