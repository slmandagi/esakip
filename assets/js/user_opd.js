

// $(document).ready(function () {

//     $('.btn-block-user').click(function () {
//         var id = $(this).attr('uid'); //get attribute value in variable
//         var status = $(this).attr('ustatus'); //get attribute value in variable

//         $('#user_id').val(id); //pass attribute value in ID
//         $('#user_status').val(status);  //pass attribute value in ID
//     })

// })




$(document).ready(function () {

    $('.btn-edit-user').click(function () {
        var id = $(this).attr('uid'); //get attribute value in variable
        var name = $(this).attr('uname'); //get attribute value in variable
        var email = $(this).attr('uemail'); //get attribute value in variable
        var jenis = $(this).attr('ujenis'); //get attribute value in variable
       
        $('#user_id').val(id); //pass attribute value in ID
        $('#user_name').val(name); //pass attribute value in ID
        $('#user_email').val(email); //pass attribute value in ID
        $('#Jenis_user').val(jenis); //pass attribute value in ID
        
    })

})
