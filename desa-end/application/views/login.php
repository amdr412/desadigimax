
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title><?= $title ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="asset/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="asset/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Selamat Datang</strong>, Silahkan masuk</div>
                    <form action="<?= site_url('auth') ?>" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" autofocus name="no_telepon" required class="form-control" placeholder="Nomor Telepon"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="pass" required class="form-control" placeholder="Password"/>
                                <input type="hidden" name="ref" value="login">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <div class="col-md-6">
                                <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                            </div> -->
                            <div class="col-md-6 pull-right">
                                <button class="btn btn-info btn-block">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <?= date('Y').' '.$title ?>
                    </div>
                    <!-- <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div> -->
                </div>
            </div>
            
        </div>
        <script type="text/javascript" src="asset/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap.min.js"></script>  
        <script type='text/javascript' src='asset/js/plugins/noty/jquery.noty.js'></script>
        <script type='text/javascript' src='asset/js/plugins/noty/layouts/topCenter.js'></script>
        <script type='text/javascript' src='asset/js/plugins/noty/layouts/topLeft.js'></script>
        <script type='text/javascript' src='asset/js/plugins/noty/layouts/topRight.js'></script>            
        
        <script type='text/javascript' src='asset/js/plugins/noty/themes/default.js'></script>
        <?php if (!empty($this->session->flashdata('notif'))): ?>
            <script type="text/javascript">                                            
                noty({
                    text: '<?= $this->session->flashdata('notif') ?>',
                    layout: 'topRight',
                    type: '<?= $this->session->flashdata('type') ?>',
                    timeout: 3000
                });                                           
            </script>
        <?php endif ?>
    </body>
</html>