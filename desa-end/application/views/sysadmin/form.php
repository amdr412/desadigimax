<?php if ($content == "tambah-data-berita"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <form class="form-horizontal" action="<?= site_url('sysadmin/berita/insert') ?>" method="POST" enctype="multipart/form-data">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	                <div class="form-group">
	                    <label class="col-md-2 col-xs-12 control-label">Judul Berita</label>
	                    <div class="col-md-10 col-xs-12">                                            
	                        <input type="text" autofocus maxlength="200" name="judul_berita" required placeholder="Judul Berita" class="form-control"/>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-2 col-xs-12 control-label">Foto Berita</label>
	                    <div class="col-md-10 col-xs-12">                                            
	                        <input type="file" name="foto_berita" required class="form-control"/>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-2 col-xs-12 control-label">Isi Berita</label>
	                    <div class="col-md-10 col-xs-12">                                            
	                        <textarea class="summernote" name="isi_berita" placeholder="Tulis berita di sini..."></textarea>
	                    </div>
	                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } ?>

<?php if ($content == "edit-data-berita"){
	foreach ($data as $key) { ?>
	<div class="row">
	    <div class="col-md-12">
	        <form class="form-horizontal" action="<?= site_url('sysadmin/berita/update') ?>" method="POST" enctype="multipart/form-data">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	                <div class="form-group">
	                    <label class="col-md-2 col-xs-12 control-label">Judul Berita</label>
	                    <div class="col-md-10 col-xs-12">                                            
	                        <input type="text" autofocus maxlength="200" value="<?= $key->judul_berita ?>" name="judul_berita" required placeholder="Judul Berita" class="form-control"/>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-2 col-xs-12 control-label">Foto Berita</label>
	                    <div class="col-md-10 col-xs-12">                                            
	                        <input type="file" name="foto_berita" class="form-control"/>
	                        <input type="hidden" name="foto_berita_lama" value="<?= $key->foto_berita ?>">
	                        <input type="hidden" name="id_berita" value="<?= $key->id_berita ?>">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-2 col-xs-12 control-label">Isi Berita</label>
	                    <div class="col-md-10 col-xs-12">                                            
	                        <textarea class="summernote" name="isi_berita" placeholder="Tulis berita di sini..."><?= $key->isi_berita ?></textarea>
	                    </div>
	                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	        
	    </div>
	</div>             
<?php } } ?>