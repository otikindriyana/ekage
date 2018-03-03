
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-archive"></i> Kelola Data Barang
            <small>Edit Barang</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->


                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Ubah Detail Barang</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="editBarang" action="<?php echo site_url('barang/update_data_barang') ?>" method="post">
                        <div class="box-body">
                            <?php if (!empty($data_barang)){
                            foreach ($data_barang

                            as $barang):
                            ?>
                            <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="kd_barang">Kode Barang</label>
                                        <input type="text" class="form-control required" id="kode_barang"
                                               name="kode_barang" maxlength="128"
                                               value="<?php echo $barang->kode_barang ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama Barang</label>
                                        <input type="text" class="form-control required email" id="nama_barang"
                                               name="nama_barang" maxlength="128" value="<?php echo $barang->nm_barang ?>">
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
                                                   name="harga_beli" maxlength="10"
                                                   value="<?php echo $barang->harga_beli ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga_jual">Harga Jual</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp.</div>
                                            <input type="number" class="form-control required equalTo" id="harga_jual"
                                                   name="harga_jual" maxlength="10"
                                                   value="<?php echo $barang->harga_jual ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Stok</label>
                                        <input type="number" class="form-control required digits" id="stok"
                                               name="stok" maxlength="10" value="<?php echo $barang->stok ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control required" id="kategori" name="kategori">
                                            <option value="<?php echo $barang->id_kategori ?>"><?php echo $barang->nm_kategori ?></option>
                                            <?php
                                            if (!empty($kategori)) {
                                                foreach ($kategori as $kt) {
                                                    if ($kt->id_kategori != $barang->id_kategori) {
                                                        ?>
                                                        <option value="<?php echo $kt->id_kategori ?>"><?php echo $kt->nm_kategori ?></option>
                                                        <?php
                                                    }
                                                }

                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <?php
                                endforeach;
                                } ?>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <div class="col-md-3 col-sm-3 col-xs-3 text-left">
                                <a href="<?php echo site_url('Barang')?>" class="btn btn-warning btn-sm raised">Kembali</a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 text-right">
                                <input type="submit" class="btn btn-primary btn-sm raised" value="Submit"/>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>