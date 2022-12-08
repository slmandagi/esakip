$(document).ready(function () {

    // General
    $('.modal-close').click(function () {
        $('.modal-pengaturan').removeClass('active');
        console.log('afasf')
    })

    // Modal tambah user
    $('.btn-tambah-user').click(function () {
        $('.modal-tambah-user-container').addClass('active');
        console.log('adfa');
    })

    $('.btn-tambah-user-modal').click(function () {
        $('.modal-tambah-user-container').removeClass('active');
    })


    // Modal edit user

    $('.btn-edit-user').click(function () {
        $('.modal-edit-user-container').addClass("active");
    })

    $('.btn-edit-user-modal').click(function () {
        $('.modal-edit-user-container').removeClass("active");
    })

    // Modal Lupa Password

    $('.btn-lupa-password').click(function () {
        $('.modal-lupa-password-container').addClass('active');
    })

    $('.btn-lupa-password-modal').click(function () {
        $('.modal-lupa-password-container').removeClass('active');
    })
})