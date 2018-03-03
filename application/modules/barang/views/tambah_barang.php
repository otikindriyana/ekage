<?php
/**
 * Created by PhpStorm.
 * User: Tri Hutama
 * Date: 20/01/2018
 * Time: 19:04
 */
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-archive"></i> Kelola Data Barang
            <small>Tambah Barang</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->


                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Masukan Detail Barang</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="form-tambahBarang" action="<?php echo site_url('barang/insert_barang') ?>" method="post"
                          role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kd_barang">Kode Barang</label>
                                        <input type="text" class="form-control required" id="kode_barang"
                                               name="kode_barang" maxlength="128">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama Barang</label>
                                        <input type="text" class="form-control required email" id="nama_barang"
                                               name="nama_barang" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga_beli">Harga Beli</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp.</div>
                                            <input type="number" class="form-control required" id="harga_beli"
                                                   name="harga_beli" maxlength="10">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp.</div>
                                        <input type="number" class="form-control required equalTo" id="harga_jual"
                                               name="harga_jual" maxlength="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Stok</label>
                                        <input type="number" class="form-control required digits" id="stok"
                                               name="stok" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control required" id="kategori" name="kategori">
                                            <option value="0">Select Role</option>
                                            <?php
                                            if (!empty($kategori)) {
                                                foreach ($kategori as $kt) {
                                                    ?>
                                                    <option value="<?php echo $kt->id_kategori ?>"><?php echo $kt->nm_kategori ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <div class="col-md-3 col-sm-3 col-xs-3 text-left">
                                <a href="<?php echo site_url('barang')?>" class="btn btn-warning btn-sm raised">Kembali</a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 text-right">
                                <input type="submit" class="btn btn-primary btn-sm raised" value="Submit"/>
                                <input type="reset" class="btn btn-default btn-sm raised" value="Reset"/>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
