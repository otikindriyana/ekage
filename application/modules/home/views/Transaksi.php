<body class="home-page">
  <div class="container ">
    <h1>E-Kage</h1>
    <section class="content">
      <div class="row">
        <div class="box box-info">

          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="No Transaksi" class="col-sm-2 control-label box-title"><font  size="5" color="white">No. Transaksi:</font></label>
                <div class="col-xs-3">
                  <input class="form-control" type="text" id="noTransaksi" name="noTransaksi" placeholder="Nomor Transaksi" readonly>
                </div>
                <label for="Total" class="col-sm-2 control-label box-title"><font  size="5" color="white">Total Harga:</font></label>
                <div class="col-xs-3">
                  <input type="number" class="form-control" id="jumlah" placeholder="Total Harga" readonly>
                </div>
              </div>
              
              <br><br>
              <div class="form-group">
                <!-- <label for="Kode" class="col-sm-2 control-label box-title">Kode Barang</label> -->
                <label for="Kode" class="col-sm-2 control-label box-title"><font  size="4" color="white">Kode Barang</font></label>
                <div class="col-xs-3">
                  <input type="text" class="form-control" id="kode" placeholder="Kode barang">
                </div>
                <label for="Jumlah" class="col-sm-2 control-label box-title"><font  size="4" color="white">Jumlah</font></label>
                <div class="col-xs-3">
                  <input type="number" class="form-control" id="jumlah" placeholder="Jumlah">
                </div>
              </div>
              <!-- /.box-body -->

              <!-- /.box-footer -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>
              <br>
              <br>
              <br>
              <br>
            </form>
            <table class="table table-bordered table-condensed" style="font-size:15px;margin-top:10px;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th style="text-align:center;">Jumlah</th>
                  <th style="text-align:center;">Harga(Rp)</th>
                  <th style="text-align:center;">Sub Total(Rp)</th>
                  <th style="width:100px;text-align:center;">Aksi</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                </tr>


              </tbody>
            </table>
            <form action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="Bayar" class="col-sm-2 control-label box-title"><font  size="4" color="white">Bayar</font></label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" id="bayar" placeholder="Bayar">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Kembali" class="col-sm-2 control-label box-title"><font  size="4" color="white">Kembali</font></label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" id="kembali" placeholder="Kembali">
                  </div>
                </div>

                <div class="box-footer pull-right">
                  <button type="submit" class="btn btn-danger">Batal</button> | <button type="submit" class="btn btn-info">Selesai</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      document.getElementById("inlineFormInputGroupKodeBarang").value = "";
      </script>
