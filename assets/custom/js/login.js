$(document).ready(function () {
    /* attach a submit handler to the form */
    $("#form-login").submit(function(event) {
        /* stop form from submitting normally */
        event.preventDefault();
        var username = $('[name=username]').val();
        var pass = $('[name=password]').val();
        var url = "login/loginMe";
            $.ajax({
                url: url,
                type: 'POST',
                dataType : 'json',
                //masukan parameter
                data: {
                    username: username,
                    password: pass,
                },
                success: function (data) {
                    //menampilkan data di console log
                    console.log("masuk");
                    console.log(data);
                    swal({
                        position: 'center',
                        type: 'success',
                        title: 'Login Sukses',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function () {
                        window.location.replace("dashboard");

                    },1500);


                },
                error: function (data) {
                    console.log(data);
                    swal({
                        position: 'center',
                        type: 'error',
                        title: 'Login Gagal',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            })


    });

})
