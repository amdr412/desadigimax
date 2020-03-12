<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$maintenis = FALSE;

if ($maintenis) { ?>	
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Sedang Perawatan - SIMPEL</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?= base_url() ?>asset/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>asset/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">:-)</div>
            <div class="error-text">Sedang Perawatan</div>
            <div class="error-subtext">Untuk menambah performa dan memperbaiki kesalahan pada website SIMPEL. Terima kasih atas perhatiannya.</div>
        </div>                 
    </body>
</html>
<?php die(); } ?>