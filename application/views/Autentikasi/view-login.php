<div class="autentikasi-container">
    <div class="form-container">
        <h1>Login</h1>
        <p>Silahkan bapak/ibu perangkat daerah untuk memasukkan data agar dapat masuk ke sistem.</p>
        <br>
        <?php echo $this->session->flashdata('msg'); ?>
        <form action="<?= base_url('Autentikasi/autentikasi'); ?>" method="POST" class="form-autentikasi">

            <label for="input-username">Email</label>
            <input id="email" name="email" type="email" placeholder="Isi email anda..." required>

            <label for="input-password">Password</label>
            <div class="password-wrapper">
                <input id="password" name="pass" type="password" placeholder="Isi password anda..." required>
                <i class="fa-solid fa-eye" onclick="myFunction()"></i>
            </div>
            <button type="submit" class="btn-login autentikasi">Login</button>
        </form>


    </div>
    <div class="headline-container">
        <h1 class="e">e<span class="sakip">SAKIP</span></h1>
        <h2>Sistem Akuntabilitas Kinerja
            Instansi Pemerintahan</h2>
    </div>

</div>

<style>
    .autentikasi-container {
        width: 100%;
        /* background: lightyellow; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: rgba(163, 200, 205, 0.55);
    }

    .form-container {
        width: 30%;
        height: 80%;
        margin-left: 5%;
        /* background: lightblue; */
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: default;
        /* justify-content: space-around; */
    }

    .form-container h1 {
        margin-top: 10%;
    }

    .form-container p {
        font-size: 14px;
        text-align: center;
    }

    .form-autentikasi .password-wrapper {
        position: relative;
        display: flex;
    }

    .form-autentikasi .password-wrapper i {
        position: absolute;
        align-self: center;
        right: 2%;
    }

    .headline-container {
        background: #062C30;
        width: 50%;
        height: 95%;
        border-radius: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-right: 1%;
    }

    .form-autentikasi {
        display: flex;
        flex-direction: column;
        width: 70%;
        height: 60%;
        margin-top: 10%;
    }

    .form-autentikasi label {
        font-size: 14px;
        font-weight: 500;
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .form-autentikasi input {
        height: 40px;
        border-radius: 8px;
        border: none;
        outline: none;
        padding: 10px;
        font-size: 12px;
        width: 100%;
    }

    .form-autentikasi .footer-autentikasi {
        align-self: flex-start;
        margin-top: 15px;
    }

    .form-autentikasi p,
    a {
        font-size: 12px;
    }

    .form-autentikasi .footer-autentikasi a {
        text-decoration: underline
    }


    .headline-container h1 {
        font-size: 60px;
    }

    .headline-container h2,
    h5 {
        color: white;

    }

    .headline-container h2 {
        font-size: 30px;
        width: 70%;
        text-align: center;
    }

    .btn-login.autentikasi {
        align-self: center;
        width: 50%;
        margin-top: 15%;
        background: rgba(6, 44, 48, 0.85);
        color: white;
        border-radius: 8px;
        cursor: pointer;
    }
</style>