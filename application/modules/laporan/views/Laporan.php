<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-history"></i> Laporan Transaksi
      <!-- <small>Tambah, Edit, hapus</small> -->
    </h1>
  </section>
  <section class="content">
    <!-- <div class="row">
    <div class="col-xs-12 text-left">
    <div class="form-group">
    <a class="btn btn-primary raised btn-sm" href="<?php echo site_url('tambah') ?>"><i
    class="fa fa-plus"></i> Tambah Barang</a>
  </div>
</div>
</div> -->
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Laporan Transaksi</h3>


      </div><!-- /.box-header -->

      <div class="box-body table-responsive no-padding">
        <table class="table table-hover"  id="tableBarang">
          <thead>
            <tr>
              <th style="text-align:center;width:40px;">No</th>
              <th>Laporan</th>
              <th style="width:100px;text-align:center;">Aksi</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td style="text-align:center;vertical-align:middle">1</td>
              <td style="vertical-align:middle;">Laporan Data Barang</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:middle">2</td>
              <td style="vertical-align:middle;">Laporan Stok Barang</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/laporan/lap_stok_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:middle">3</td>
              <td style="vertical-align:middle;">Laporan Penjualan</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/laporan/lap_data_penjualan'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:middle">4</td>
              <td style="vertical-align:middle;">Laporan Penjualan PerTanggal</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="#lap_jual_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:middle">5</td>
              <td style="vertical-align:middle;">Laporan Penjualan PerBulan</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="#lap_jual_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:middle">6</td>
              <td style="vertical-align:middle;">Laporan Penjualan PerTahun</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="#lap_jual_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:middle">7</td>
              <td style="vertical-align:middle;">Laporan Laba/Rugi</td>
              <td style="text-align:center;">
                <a class="btn btn-sm btn-default" href="#lap_laba_rugi" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div><!-- /.box-body -->

    </div><!-- /.box -->

  </div>
</div>
<!-- ============ MODAL ADD =============== -->
<div class="modal fade" id="lap_jual_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
    </div>
    <form class="form-horizontal" method="post" action="" target="_blank">
        <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Tanggal</label>
                <div class="col-xs-9">
                    <div class='input-group date' id='datepicker' style="width:300px;">
                        <input type='text' name="tgl" class="form-control" value="" placeholder="Tanggal..." required/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
              <label>Date:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker">
              </div>
              <!-- /.input group -->
            <!-- </div> --> 


        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
        </div>
    </form>
    </div>
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
<script type="text/javascript">
        $(function () {
            // $('#datetimepicker').datetimepicker({
            //     format: 'DD MMMM YYYY HH:mm',
            // });
            //
            // $('#datepicker').datetimepicker({
            //     format: 'YYYY-MM-DD',
            // });
            // $('#datepicker2').datetimepicker({
            //     format: 'YYYY-MM-DD',
            // });
            //
            // $('#timepicker').datetimepicker({
            //     format: 'HH:mm'
            // });
            $('#datepicker').datepicker({
              autoclose: true
            })
        });
//   $('#datepicker').datepicker({
//   format: 'mm/dd/yyyy',
// });
</script>
