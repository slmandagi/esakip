$(document).ready(function () {

    // Admin
    $('.upload-file-informasi-input').change(function () {
        var uploadFileInformasi = document.getElementById('upload-file-informasi');
        var fileName = uploadFileInformasi.files[0].name;

        $('.upload-file-informasi').html(fileName + '<i class="fa-solid fa-check"></i>')
    })

    // User
    $('.upload-file-pelaporan').change(function () {
        var uploadFileDok = document.getElementById('upload-file-dokumen');
        var fileName = uploadFileDok.files[0].name;

        $('.upload-file-dokumen').html(fileName + '<i class="fa-solid fa-check"></i>');
    })


    $('.upload-file-perencanaan').change(function () {
        var uploadFileDok = document.getElementById('upload-file-dokumen');
        var fileName = uploadFileDok.files[0].name;
        $('.upload-file-dokumen').html(fileName + '<i class="fa-solid fa-check"></i>');
    })

    $('.upload-file-pengukuran').change(function () {
        var uploadFileDok = document.getElementById('upload-file-dokumen');
        var fileName = uploadFileDok.files[0].name;

        $('.upload-file-dokumen').html(fileName + '<i class="fa-solid fa-check"></i>');
    })

    $('.upload-file-pengukuran').change(function () {
        var uploadFileDok = document.getElementById('upload-file-dokumen');
        var fileName = uploadFileDok.files[0].name;

        $('.upload-file-dokumen').html(fileName + '<i class="fa-solid fa-check"></i>');
    })
})