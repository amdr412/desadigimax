<div class="row">
<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $subtitle ?></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span> Refresh</a></li>
                    </ul>                                        
                </li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="row">
    <div class="col-md-3">
        
        <!-- START WIDGET SLIDER -->
        <div class="widget widget-info widget-carousel">
            <div class="owl-carousel" id="owl-example">
                <div>                                    
                    <div class="widget-title">WARGA RT 1</div>                                                                        
                    <div class="widget-subtitle">Data Rumah Warga RT 1</div>
                    <div class="widget-int"><?= $rt1 ?></div>
                </div>
                <div>                                    
                    <div class="widget-title">WARGA RT 2</div>                                                                        
                    <div class="widget-subtitle">Data Rumah Warga RT 2</div>
                    <div class="widget-int"><?= $rt2 ?></div>
                </div>
                <div>                                    
                    <div class="widget-title">WARGA RT 3</div>                                                                        
                    <div class="widget-subtitle">Data Rumah Warga RT 3</div>
                    <div class="widget-int"><?= $rt3 ?></div>
                </div>
                <div>                                    
                    <div class="widget-title">WARGA RT 4</div>                                                                        
                    <div class="widget-subtitle">Data Rumah Warga RT 4</div>
                    <div class="widget-int"><?= $rt4 ?></div>
                </div>
            </div>                            
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                             
        </div>         
        <!-- END WIDGET SLIDER -->
        
    </div>
    <div class="col-md-3">
        
        <!-- START WIDGET MESSAGES -->
        <div class="widget widget-warning widget-item-icon" onclick="location.href='<?= site_url('sysadmin/kegiatan') ?>';">
            <div class="widget-item-left">
                <span class="fa fa-cogs"></span>
            </div>                             
            <div class="widget-data">
                <div class="widget-int num-count"><?= $kegiatan ?></div>
                <div class="widget-title">Kegiatan</div>
                <div class="widget-subtitle">Semua kegiatan</div>
            </div>      
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>
        </div>                            
        <!-- END WIDGET MESSAGES -->
        
    </div>
    <div class="col-md-3">
        
        <!-- START WIDGET REGISTRED -->
        <div class="widget widget-primary widget-item-icon" onclick="location.href='pages-address-book.html';">
            <div class="widget-item-left">
                <span class="fa fa-users"></span>
            </div>
            <div class="widget-data">
                <div class="widget-int num-count">4334</div>
                <div class="widget-title">Pengguna</div>
                <div class="widget-subtitle">Di semua Satker</div>
            </div>
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                            
        </div>                            
        <!-- END WIDGET REGISTRED -->
        
    </div>
    <div class="col-md-3">
        
        <!-- START WIDGET CLOCK -->
        <div class="widget widget-danger widget-padding-sm">
            <div class="widget-big-int plugin-clock">00:00</div>                            
            <div class="widget-subtitle plugin-date">Loading...</div>
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                            
            <div class="widget-buttons widget-c3" style="color: white">
                <div class="col">
                    <a href="#"><span class="fa fa-clock-o"></span></a>
                </div>
                <div class="col">
                    <a href="#"><span class="fa fa-bell"></span></a>
                </div>
                <div class="col">
                    <a href="#"><span class="fa fa-calendar"></span></a>
                </div>
            </div>                            
        </div>                        
        <!-- END WIDGET CLOCK -->
        
    </div>
</div>