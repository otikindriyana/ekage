
$(document).ready(function () {
    $('#tableBarang').dataTable();
    /* attach a submit handler to the form */
    $("#editBarang").submit(function(event) {
        /* stop form from submitting normally */
        event.preventDefault();
        var idBarang = $('[name=id_barang]').val();
        var kdBarang = $('[name=kode_barang]').val();
        var nmBarang = $('[name=nama_barang]').val();
        var hargaBeli = $('[name=harga_beli]').val();
        var hargaJual = $('[name=harga_jual]').val();
        var stok = $('[name=stok]').val();
        var kategori = $('[name=kategori]').val();
        console.log(idBarang+','+kdBarang+','+nmBarang+','+hargaBeli+','+hargaJual+','+stok+','+kategori);
        var url = "http://localhost/ekage/barang/update_data_barang";
        $.ajax({
            url: url,
            type: 'POST',
            dataType : 'json',
            //masukan parameter
            data: {
                id_barang: idBarang,
                kode_barang: kdBarang,
                nama_barang: nmBarang,
                harga_beli: hargaBeli,
                harga_jual: hargaJual,
                stok: stok,
                kategori: kategori

            },
            success: function (data) {
                //menampilkan data di console log
                console.log("masuk");
                console.log(data);
                swal({
                    position: 'center',
                    type: 'success',
                    title: 'Data Barang Berhasil Diubah !',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function () {
                    window.location.replace("http://localhost/ekage/barang");

                },1500);

            },
            error: function (data) {
                console.log(data);
                swal({
                    position: 'center',
                    type: 'error',
                    title: 'Data Barang Gagal Diubah !',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });


    });
    $("#form-tambahBarang").submit(function(event) {
        /* stop form from submitting normally */
        event.preventDefault();
        var kdBarang = $('[name=kode_barang]').val();
        var nmBarang = $('[name=nama_barang]').val();
        var hargaBeli = $('[name=harga_beli]').val();
        var hargaJual = $('[name=harga_jual]').val();
        var stok = $('[name=stok]').val();
        var kategori = $('[name=kategori]').val();
        var url = "http://localhost/ekage/barang/insert_barang";
        $.ajax({
            url: url,
            type: 'POST',
            dataType : 'json',
            //masukan parameter
            data: {
                kode_barang: kdBarang,
                nama_barang: nmBarang,
                harga_beli: hargaBeli,
                harga_jual: hargaJual,
                stok: stok,
                kategori: kategori

            },
            success: function (data) {
                //menampilkan data di console log
                console.log("masuk");
                console.log(data);
                if (data.message == "Duplicate"){
                    swal({
                        position: 'center',
                        type: 'error',
                        title: 'Data Barang Sudah Ada !',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }else{
                    swal({
                        position: 'center',
                        type: 'success',
                        title: 'Data Barang Berhasil Ditambahkan !',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function () {
                        window.location.replace("http://localhost/ekage/barang");

                    },1500);
                }
            },
            error: function (data) {
                console.log(data);
                swal({
                    position: 'center',
                    type: 'error',
                    title: 'Data Barang Gagal Ditambahkan !',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        })
    });
    $(".deleteBarang").click(function () {
        var idBarang = $(this).data('idbarang');
        var nmBarang = $(this).data('namabarang');
        swal({
            title: 'anda yakin ingin menghapus '+nmBarang+'?',
            text: "Data yang dihapus tidak dapat dikembalikan !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!',
            cancelButtonText: 'Batal !',
        }).then((result) => {
            if (result.value) {
            var url = "http://localhost/ekage/barang/hapus_barang";
            $.ajax({
                url: url,
                type: 'POST',
                dataType : 'json',
                //masukan parameter
                data: {
                    id_barang : idBarang
                },
                success: function (data) {
                    //menampilkan data di console log
                    console.log("masuk");
                    console.log(data);
                    swal({
                        position: 'center',
                        type: 'success',
                        title: 'Data Barang Berhasil Dihapus !',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function () {
                        window.location.replace("http://localhost/ekage/barang");

                    },1500);

                },
                error: function (data) {
                    console.log(data);
                    swal({
                        position: 'center',
                        type: 'error',
                        title: 'Data Barang Gagal Dihapus !',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }
    })

    });

});
