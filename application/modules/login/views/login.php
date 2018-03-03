<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: trihut-->
<!-- * Date: 27/12/2017-->
<!-- * Time: 13:34-->
<!-- */-->
<body class="home-page">
<div class="container">
    <h1>E-Kage</h1>
    <div class="text-center">
        <h4>Login</h4>
    </div>
    <?php echo form_open('login/loginMe',array('id'=>'form-login','method'=>'post')) ?>
<!--    <form action="" method="post" id="form-login">-->
        <div class="col-12 justify-content-center ">
            <div class="form-group row ">
                <div class="col-md-4 col-md-offset-4 ">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Masukan Username</label>
                    <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                               placeholder="Masukan Username" name="username" required>
                        <div class="input-group-addon"><i class="fas fa-user"></i></div>
                    </div>
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-md-4 col-md-offset-4">
                    <label class="sr-only" for="inlineFormInputGroupPassword">Masukan password</label>
                    <div class="input-group mb-2 mb-sm-0">
                        <input type="password" class="form-control" id="inlineFormInputGroupPassword"
                               placeholder="Masukan Password" name="password" required>
                        <div class="input-group-addon"><i class="fas fa-key"></i></div>

                    </div>

                </div>
            </div>
            <div class="form-group row text-center">
                <button type="submit" class="btn btn-primary raised">Submit</button>
            </div>
    </form>
</div>
<script src="<?php base_url();?>assets/custom/js/login.js" ></script>