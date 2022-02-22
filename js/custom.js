$(document).ready(function () {
    

    $('.checking_phone').keyup(function (e) {

        var phone = $('.checking_phone').val();
        //alert(email);
        $.ajax({
            type: "POST",
            url: "backEnd.php",
            data: {
                "check_submit_btn": 1,
                "phone_id": phone,
            },
            success: function (response) {
                // alert(response);
                $('.error_phone').text(response);
            }
        });

    });

});