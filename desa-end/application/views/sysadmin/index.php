<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?= $title ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?= base_url() ?>asset/favicon.png" type="image/png" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>asset/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->          
        
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                            
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top-fixed">
            
            <!-- START PAGE SIDEBAR -->
            <?php $this->load->view('sysadmin/sidebar'); ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <?php $this->load->view('sysadmin/header'); ?>
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?= site_url('sysadmin') ?>">Dashboard</a></li>
                    <?php
                      if (@$jumlah >= 1) {
                        for ($i=1; $i <= $jumlah ; $i++) {
                          if ($i == 1) { ?>
                            <li><a href="<?= $b1a ?>"> <?= $b1 ?></a></li>
                        <?php }elseif($i == 2){ ?>
                            <li><a href="<?= $b2a ?>"> <?= $b2 ?></a></li>
                        <?php }elseif($i == 3){ ?>
                            <li><a href="<?= $b3a ?>"> <?= $b3 ?></a></li>
                        <?php }elseif($i == 4){ ?>
                            <li><a href="<?= $b4a ?>"> <?= $b4 ?></a></li>
                        <?php }elseif($i == 5){ ?>
                            <li><a href="<?= $b5a ?>"> <?= $b5 ?></a></li>
                        <?php }elseif($i == 6){ ?>
                            <li><a href="<?= $b6a ?>"> <?= $b6 ?></a></li>
                        <?php }elseif($i == 7){ ?>
                            <li><a href="<?= $b7a ?>"> <?= $b7 ?></a></li>
                        <?php }elseif($i == 8){ ?>
                            <li><a href="<?= $b8a ?>"> <?= $b8 ?></a></li>    
                        <?php }elseif($i == 9){ ?>
                            <li><a href="<?= $b9a ?>"> <?= $b9 ?></a></li>    
                        <?php }elseif($i == 10){ ?>
                            <li><a href="<?= $b10a ?>"> <?= $b10 ?></a></li>  
                        <?php }elseif($i == 11){ ?>
                            <li><a href="<?= $b11a ?>"> <?= $b11 ?></a></li>  
                        <?php }elseif($i == 12){ ?>
                            <li><a href="<?= $b12a ?>"> <?= $b12 ?></a></li>            
                        <?php } } } ?>
                </ul>
                <!-- END BREADCRUMB -->             
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <?php $this->load->view('sysadmin/content'); ?>
                </div>
                <!-- PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Keluar dari <strong>Sistem</strong> ?</div>
                    <div class="mb-content">
                        <p>Apakah anda yakin akan keluar?</p>                    
                        <p>Tekan ya untuk keluar. Tekan Tidak untuk membatalkan.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?= site_url('logout') ?>" class="btn btn-success btn-lg">Ya</a>
                            <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?= base_url() ?>asset/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?= base_url() ?>asset/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->               

    <!-- START SCRIPTS -->

        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/icheck/icheck.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/noty/jquery.noty.js'></script>
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/noty/layouts/topCenter.js'></script>
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/noty/layouts/topLeft.js'></script>
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/noty/layouts/topRight.js'></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins/summernote/summernote.js"></script>
        
        <script type='text/javascript' src='<?= base_url() ?>asset/js/plugins/noty/themes/default.js'></script>
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
        <!-- END PAGE PLUGINS -->       
        
        <script type="text/javascript" src="<?= base_url() ?>asset/js/plugins.js"></script>        
        <script type="text/javascript" src="<?= base_url() ?>asset/js/actions.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>asset/js/demo_dashboard.js"></script>       
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>