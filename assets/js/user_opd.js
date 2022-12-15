$(document).on('click','.user_status',function(){

    var id = $(this).attr('uid'); //get attribute value in variable
    var status = $(this).attr('ustatus'); //get attribute value in variable

    $('#user_id').val(id); //pass attribute value in ID
    $('#user_status').val(status);  //pass attribute value in ID

    // $('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup

});
