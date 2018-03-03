<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-archive"></i> Barang
            <small>Tambah, Edit, hapus</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-left">
                <div class="form-group">
                    <a class="btn btn-primary raised btn-sm" href="<?php echo site_url('tambah') ?>"><i
                                class="fa fa-plus"></i> Tambah Barang</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Barang</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="tableBarang" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($data_barang)) {
                                $no = 0;
                                foreach ($data_barang as $barang) {
                                    ?>
                                    <tr>
                                        <td><?php echo ++$no ?></td>
                                        <td><?php echo $barang->kode_barang ?></td>
                                        <td><?php echo $barang->nm_barang ?></td>
                                        <td><?php echo $barang->harga_beli ?></td>
                                        <td><?php echo $barang->harga_jual ?></td>
                                        <td><?php echo $barang->nm_kategori ?></td>
                                        <td><?php echo $barang->stok ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info"
                                               href="<?php echo site_url('Barang/edit_barang/' . $barang->id_barang) ?>"><i
                                                        class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-danger deleteBarang" href="#"
                                               data-idbarang="<?php echo $barang->id_barang; ?>"
                                               data-namabarang="<?php echo $barang->nm_barang ?>"><i
                                                        class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>

                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
