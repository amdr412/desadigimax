<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?= $title ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="asset/favicon.png" type="image/png" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="asset/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->          
        
        <!-- START PLUGINS -->
        <script type="text/javascript" src="asset/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap.min.js"></script> 
        <!-- EOF CSS INCLUDE -->                                      
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top">            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <?php $this->load->view('home/header'); ?>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <!-- <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Layouts</a></li>
                    <li class="active">Navigation Top</li>
                </ul> -->
                <!-- END BREADCRUMB -->
                <div class="page-content-wrap">
                   <div class="row">
                        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>       
                                </ol>
                     
                                <!-- deklarasi carousel -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="asset/img/slider/slider1.jpg" alt="www.malasngoding.com">
                                        <div class="carousel-caption">
                                            <!-- <h3>www.malasngoding.com</h3>
                                            <p>Tutorial belajar pemrograman web, mobile dan design.</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="asset/img/slider/slider3.jpg" alt="www.malasngoding.com">
                                        <div class="carousel-caption">
                                            <!-- <h3>Tutorial Bootstrap</h3>
                                            <p>Belajar tutorial bootstrap dasar di www.malasngoding.com</p> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="asset/img/slider/slider2.jpg" alt="www.malasngoding.com">
                                        <div class="carousel-caption">
                                            <!-- <h3>Tutorial Android</h3>
                                            <p>Tutorial membuat aplikasi android.</p> -->
                                        </div>
                                    </div>              
                                </div>
                     
                                <!-- membuat panah next dan previous -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                   </div>
                    <div class="row">
                        <?php $no = 1; foreach ($dana as $key): ?>
                        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px; margin-top: 10px">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?= $key->nama_kegiatan ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-3">
                                        <!-- START WIDGET REGISTRED -->
                                        <div class="widget widget-info widget-item-icon">
                                            <div class="widget-item-left">
                                                <span class="fa fa-money"></span>
                                            </div>
                                            <div class="widget-data">
                                                <div class="widget-title">RT 1</div>
                                                <div class="widget-subtitle">Perolehan dana RT 1</div>
                                                <div class="widget-int num-count"><?= rp($key->jml_rt1) ?></div>
                                            </div>
                                            <div class="widget-controls">                                
                                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                            </div>                            
                                        </div>                            
                                        <!-- END WIDGET REGISTRED -->
                                    </div>
                                    <div class="col-md-3">
                                        <!-- START WIDGET REGISTRED -->
                                        <div class="widget widget-danger widget-item-icon">
                                            <div class="widget-item-left">
                                                <span class="fa fa-money"></span>
                                            </div>
                                            <div class="widget-data">
                                                <div class="widget-title">RT 2</div>
                                                <div class="widget-subtitle">Perolehan dana RT 2</div>
                                                <div class="widget-int num-count"><?= rp($key->jml_rt2) ?></div>
                                            </div>
                                            <div class="widget-controls">                                
                                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                            </div>                            
                                        </div>                            
                                        <!-- END WIDGET REGISTRED -->
                                    </div>
                                    <div class="col-md-3">
                                        <!-- START WIDGET REGISTRED -->
                                        <div class="widget widget-warning widget-item-icon">
                                            <div class="widget-item-left">
                                                <span class="fa fa-money"></span>
                                            </div>
                                            <div class="widget-data">
                                                <div class="widget-title">RT 3</div>
                                                <div class="widget-subtitle">Perolehan dana RT 3</div>
                                                <div class="widget-int num-count"><?= rp($key->jml_rt3) ?></div>
                                            </div>
                                            <div class="widget-controls">                                
                                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                            </div>                            
                                        </div>                            
                                        <!-- END WIDGET REGISTRED -->
                                    </div>
                                    <div class="col-md-3">
                                        <!-- START WIDGET REGISTRED -->
                                        <div class="widget widget-primary widget-item-icon">
                                            <div class="widget-item-left">
                                                <span class="fa fa-money"></span>
                                            </div>
                                            <div class="widget-data">
                                                <div class="widget-title">RT 4</div>
                                                <div class="widget-subtitle">Perolehan dana RT 4</div>
                                                <div class="widget-int num-count"><?= rp($key->jml_rt4) ?></div>
                                            </div>
                                            <div class="widget-controls">                                
                                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                            </div>                            
                                        </div>                            
                                        <!-- END WIDGET REGISTRED -->
                                    </div>
                                    <div class="col-md-3">
                                        <!-- START WIDGET REGISTRED -->
                                        <div class="widget widget-success widget-item-icon">
                                            <div class="widget-item-left">
                                                <span class="fa fa-money"></span>
                                            </div>
                                            <div class="widget-data">
                                                <div class="widget-title">Total Semua Dana</div>
                                                <div class="widget-subtitle">Perolehan dana semua RT</div>
                                                <div class="widget-int num-count"><?= rp($key->jml_rt1+$key->jml_rt2+$key->jml_rt3+$key->jml_rt4) ?></div>
                                            </div>
                                            <div class="widget-controls">                                
                                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                            </div>                            
                                        </div>                            
                                        <!-- END WIDGET REGISTRED -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
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
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

         <!-- START PRELOADS -->
        <audio id="audio-alert" src="asset/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="asset/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->               

    <!-- START SCRIPTS -->

        <!-- THIS PAGE PLUGINS -->
        <script type="text/javascript" src="asset/js/plugins/icheck/icheck.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="asset/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="asset/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="asset/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="asset/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src="asset/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script type='text/javascript' src="asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>                
        <script type='text/javascript' src="asset/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="asset/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="asset/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="asset/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <script type='text/javascript' src="asset/js/plugins/noty/jquery.noty.js"></script>
        <script type='text/javascript' src="asset/js/plugins/noty/layouts/topLeft.js"></script>
        <script type='text/javascript' src="asset/js/plugins/noty/layouts/topRight.js"></script>            
        
        <script type='text/javascript' src="asset/js/plugins/noty/themes/default.js"></script>
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
        
        <script type="text/javascript" src="asset/js/plugins.js"></script>        
        <script type="text/javascript" src="asset/js/actions.js"></script>
        <script type="text/javascript" src="asset/js/demo_dashboard.js"></script>       
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->             
    </body>
</html>