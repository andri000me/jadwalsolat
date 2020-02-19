<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Dipantau Raspi - <?= $title; ?></title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0"><a href="index.html" class="logo logo-admin"><img
                            src="<?=base_url();?>assets/images/logo.png" height="55" alt="logo"></a></h3>
                <div class="p-3">
                    <h4 class="text-muted font-18 mb-3 text-center">Change Password For</h4>
                    <h4 class="text-muted font-18 mb-3 text-center"><?= $this->session->userdata('reset_email') ?></h4>
                    <?= $this->session->flashdata('message'); ?>
                    <!-- <div class="alert alert-info" role="alert">Enter your New Password
                    </div> -->
                    <form class="form-horizontal m-t-30" method="post" action="<?= base_url('login/changepassword'); ?>">
                        <div class="form-group">
                            <label for="useremail">New password</label> 
                            <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Enter New password"></div>
                            <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-group">
                            <label for="useremail">Confirm password</label> 
                            <input type="password" class="form-control" name="pass2" id="pass2" placeholder="repeat password"></div>
                            <?= form_error('pass2', '<small class="text-danger pl-3">', '</small>'); ?>

                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light"
                                    type="submit">Reset</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="m-t-40 text-center">
            <p>Remember It ? <a href="pages-login.html" class="text-primary">Sign In Here</a></p>
            <p>© 2018 - 2019 Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
        </div> -->
    </div><!-- jQuery  -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js -->
    <script src="<?= base_url(); ?>assets/js/app.js"></script>
</body>

</html>