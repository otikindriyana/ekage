<?php
/**
 * Created by PhpStorm.
 * User: Tri Hutama
 * Date: 22/01/2018
 * Time: 11:45
 */
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubah Password
            <small>Ubah password baru untuk admin </small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Masukan Detail</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="form-ubahPassword" action="" method="post">
                        <input type="hidden" name="idUser" value="<?php echo $this->session->userdata('userId')?>">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputPassword1">Password Lama</label>
                                        <input type="password" class="form-control" id="passwordLama" placeholder="Password Lama" name="passwordLama" maxlength="20" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputPassword1">Password Baru</label>
                                        <input type="password" class="form-control" id="passwordBaru" placeholder="Password Baru" name="passwordBaru" maxlength="20" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputPassword2">Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" id="passwordBaru2" placeholder="Konfirmasi password Baru" name="cpasswordBaru" maxlength="20" required>
                                        <div id="pesan"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <div class="col-md-3 col-sm-3 col-xs-3 text-left">
                                <a href="<?php echo site_url('dashboard')?>" class="btn btn-warning btn-sm raised">Kembali</a>

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
