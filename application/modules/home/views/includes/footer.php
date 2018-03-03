<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: trihut-->
<!-- * Date: 18/12/2017-->
<!-- * Time: 14:50-->
<!-- */-->
<footer id="footer">
    <div class="container">
        <div class="d-inline-flex"></div>
        <?php if (isset($menu)) : ?>
            <div class="float-left col-6">
                <a href="<?php echo site_url() ?>">Home</a>
                <?php if ($menu != "cekHarga") : ?>
                    |  <a href="<?php echo site_url('cekharga') ?>">Cek Harga</a>
                <?php endif; ?>
                <?php if ($menu != "transaksi") : ?>
                    |  <a href="<?php echo site_url('transaksi') ?>">Transaksi</a>
                <?php endif; ?>
                <?php if ($menu != "login") : ?>
                    |  <a href="<?php echo site_url('login') ?>">Login</a>
                <?php endif; ?>
            </div>

        <?php endif ?>
            <div class="float-right col6">
                <h5>Tim Developer</h5>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery UI 1.11.2 -->
<!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="--><?php //echo base_url(); ?><!--assets/js/jquery.validate.js" type="text/javascript"></script>-->
<!--<script src="--><?php //echo base_url(); ?><!--assets/js/validation.js" type="text/javascript"></script>-->
<script type="text/javascript">
    var windowURL = window.location.href;
    pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
    var x = $('a[href="' + pageURL + '"]');
    x.addClass('active');
    x.parent().addClass('active');
    var y = $('a[href="' + windowURL + '"]');
    y.addClass('active');
    y.parent().addClass('active');
</script>
<script>
    $(document).ready(function () {
        var docHeight = $(window).height();
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('#footer').css('margin-top', (docHeight - footerTop - 20) + 'px');
        }
    });
</script>
</body>
</html>