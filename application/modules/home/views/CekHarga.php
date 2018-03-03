<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: trihut-->
<!-- * Date: 26/12/2017-->
<!-- * Time: 16:11-->
<!-- */-->
<body class="home-page">
<div class="container ">
    <h1>E-Kage</h1>
    <div class="text-center">
        <h4>Cek Harga</h4>
    </div>
    <form action="<?php echo site_url('cekharga') ?>" method="post">
        <div class="col-centered">
            <div class="form-row text-center">
                <div class="col-md-4 col-md-offset-4">
                    <label class="sr-only" for="inlineFormInputGroupKodeBarang">Masukan Kode Barang ....</label>

                    <div class="input-group mb-2 mb-sm-0">
                        <input type="text" autofocus="autofocus" class="form-control" id="inlineFormInputGroupKodeBarang"
                               placeholder="Masukan Kode Barang ...." name="cari"
                               value="<?php if (!empty($cari)) echo $cari ?>">
                        <div class="input-group-addon"><i class="fas fa-search"></i></div>

                    </div>

                </div>
            </div>
    </form>


    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box text-center" style="padding: 50px;">
                    <br>
                    <br>
                    <?php if (!empty($data_barang)) {
                        foreach ($data_barang as $barang) {
                            ?>
                            <div class="harga-barang" style="font-size: 125px; color:white"><b><?php echo $barang->harga_jual ?></b></div>
                            <div class="nama-barang" style="font-size: 30px; color:white"><?php echo $barang->nm_barang ?></div>

                            <?php
                        }
                    } elseif (!empty($cari)) {

                        ?><br>
                        <br>
                        <div class="row text-center"><h4>Data Tidak Ditemukan</h4></div>
                        <?php
                    }
                    ?>
                    </table>

                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div>
</div>
<script type="text/javascript">
    document.getElementById("inlineFormInputGroupKodeBarang").value = "";
</script>
