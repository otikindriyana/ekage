$(document).ready(function () {
    /* attach a submit handler to the form */
    $("#form-ubahPassword").submit(function (event) {
        /* stop form from submitting normally */
        event.preventDefault();
        var password = $("#passwordBaru").val();
        var confirmPassword = $("#passwordBaru2").val();
        if (password != confirmPassword) {
            $("#pesan").html("Password tidak cocok !");
        }
        else {
            console.log('pass');
            var idUser = $('[name=idUser]').val();
            var passwordLama = $('[name=passwordLama]').val();
            var passwordBaru = $('[name=passwordBaru]').val();
            var cpasswordBaru = $('[name=cpasswordBaru]').val();
            var url = "http://localhost/ekage/user/change_pass";
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                //masukan parameter
                data: {
                    idUser: idUser,
                    passwordLama: passwordLama,
                    passwordBaru: passwordBaru,
                    cpasswordBaru: cpasswordBaru
                },
                success: function (data) {
                    //menampilkan data di console log
                    console.log("masuk");
                    console.log(data);
                    if (data.message == "Success") {
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Password Sukses Dirubah',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function () {
                            window.location.replace("dashboard");
                        }, 1500);
                    } else {
                        swal({
                            position: 'center',
                            type: 'warning',
                            title: 'Password Lama Tidak Cocok',
                            showConfirmButton: false,
                            timer: 1500
                        });

                    }
                },
                error: function (data) {
                    console.log(data);
                    swal({
                        position: 'center',
                        type: 'error',
                        title: 'Password Gagal Dirubah',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            })
        }
    });
    $("#passwordBaru2").keyup(function (event) {
        var password = $("#passwordBaru").val();
        var confirmPassword = $("#passwordBaru2").val();
        if (password == confirmPassword)
            $("#pesan").html("Password cocok !");
        else
            $("#pesan").html("<style='color:red'>Password tidak cocok !</style>");
    })
})
