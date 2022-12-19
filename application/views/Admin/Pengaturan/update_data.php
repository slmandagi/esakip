<div class="user-opd-container">
    <div class="main-content-user-opd">
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
                <li class="pilih-user">
                    <a href=""> Badan Pendapatan Daerah</a>
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
                <li class="pilih-user">
                    <a href=""> Badan Pendapatan Daerah</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    .pilih-user-opd {
        display: flex;
        flex-direction: column;
        width: 50%;
        height: 20%;
        align-items: center;
        position: relative;
    }

    .pilih-user-opd label {
        cursor: pointer;
    }

    .pilih-user-opd span {
        border: 2px solid white;
        font-size: 14px;
        cursor: pointer;
    }

    .pilih-user-opd span:hover {
        border: 2px solid #062C30;
    }

    .pilih-user-opd ul.daftar-user {
        background: #062C30;
        width: 40%;
        border-radius: 8px;
        position: absolute;
        top: 50%;
        right: 2%;
        height: 150px;
        overflow: hidden;
        overflow-y: visible;
        /* visibility: hidden; */
        display: none;
        opacity: 0;
        pointer-events: none;
    }

    .pilih-user-opd ul.daftar-user.active {
        display: block;
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
</style>