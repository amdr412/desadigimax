<?php if ($content == "data-admin") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah RT -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/admin/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_lengkap" required placeholder="masukkan nama lengkap" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nomor Telepon</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="no_telepon" required placeholder="masukkan nomor telepon" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" name="password" required placeholder="masukkan password" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">RT</label>
                                                <div class="col-md-9">
                                                    <select class="form-control select" data-live-search="true" name="id_rt" required>
                                                        <option>-- Pilih RT --</option>
                                                        <?php foreach ($data_rt as $rt): ?>
                                                            <option value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah RT -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>RT</th>
                                <th>No. Telepon</th>
                                <th>Dibuat</th>
                                <th>Login</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap ?></td>
                                <td><?= 'RT 0'.$key->id_rt ?></td>
                                <td><?= $key->no_telepon ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td><?= $key->login ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editadmin<?= $key->id_admin ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/admin/delete/'.$key->id_admin) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Admin?\n<?= $key->nama_lengkap ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_admin ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah RT -->
    <div class="modal" id="editadmin<?= $key->id_admin ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/admin/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_lengkap" required placeholder="masukkan nama lengkap" class="form-control" value="<?= $key->nama_lengkap ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nomor Telepon</label>
                            <div class="col-md-9">
                                <input type="text" name="no_telepon" required placeholder="masukkan nomor telepon" class="form-control" value="<?= $key->no_telepon ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" required placeholder="masukkan password" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">RT</label>
                            <div class="col-md-9">
                                <select class="form-control select" data-live-search="true" name="id_rt" required>
                                    <option>-- Pilih RT --</option>
                                    <?php foreach ($data_rt as $rt): ?>
                                        <option <?= $key->id_rt == $rt->id_rt ? "selected":"" ?> value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                    <?php endforeach ?>
                                </select>
                                <input type="hidden" name="id_admin" value="<?= $key->id_admin ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah RT -->
<?php } } ?>

<?php if ($content == "data-rt") { ?>
	<div class="row">
		<div class="col-md-12">
		    <div class="panel panel-info">
		        <div class="panel-heading">
		            <h3 class="panel-title"><?= $subtitle ?></h3>
		            <ul class="panel-controls">
		                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
		                <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahrt" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah RT -->
                        <div class="modal" id="tambahrt" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah RT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rt/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama RT</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="rt" required placeholder="masukkan nama rt" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Ketua RT</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="ketua_rt" required placeholder="masukkan ketua rt" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah RT -->
		            </ul>
		        </div>
		        <div class="panel-body table-responsive">
		            <table class="table datatable table-bordered table-condensed table-hover table-striped">
		                <thead>
		                    <tr>
		                        <th>No.</th>
		                        <th>RT</th>
		                        <th>Ketua RT</th>
		                        <th>Aksi</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php $no = 1; foreach ($data as $key): ?>
		                    <tr>
		                        <td><?= $no++ ?></td>
		                        <td><?= $key->rt ?></td>
		                        <td><?= $key->ketua_rt ?></td>
		                        <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editrt<?= $key->id_rt ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/rt/delete/'.$key->id_rt) ?>" onclick="return confirm('Apakah anda yakin akan menghapus RT?\n<?= $key->rt ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_rt ?>">Hapus</a>
		                        </td>
		                    </tr>
		                    <?php endforeach ?>
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
	</div>
<?php foreach ($data as $key){ ?>
    <!-- Modal edit rt -->
    <div class="modal" id="editrt<?= $key->id_rt ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah RT</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rt/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama RT</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->rt ?>" name="rt" required placeholder="masukkan nama rt" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Ketua RT</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->ketua_rt ?>" name="ketua_rt" required placeholder="masukkan ketua rt" class="form-control" value=""/>
                                <input type="hidden" name="id_rt" value="<?= $key->id_rt ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit rt -->
<?php } } ?>

<?php if ($content == "data-rw") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahrw" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah RT -->
                        <div class="modal" id="tambahrw" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah RW</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rw/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama RW</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="rw" required placeholder="masukkan nama rw" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Ketua RW</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="ketua_rw" required placeholder="masukkan ketua rw" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah RT -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>RW</th>
                                <th>Ketua RW</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->rw ?></td>
                                <td><?= $key->ketua_rw ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editrw<?= $key->id_rw ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/rw/delete/'.$key->id_rw) ?>" onclick="return confirm('Apakah anda yakin akan menghapus RW?\n<?= $key->rw ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_rw ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal edit rw -->
    <div class="modal" id="editrw<?= $key->id_rw ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah RW</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rw/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama RW</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->rw ?>" name="rw" required placeholder="masukkan nama rw" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Ketua RW</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->ketua_rw ?>" name="ketua_rw" required placeholder="masukkan ketua rw" class="form-control" value=""/>
                                <input type="hidden" name="id_rw" value="<?= $key->id_rw ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit rw -->
<?php } } ?>

<?php if ($content == "data-warga") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahwarga" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Warga -->
                        <div class="modal" id="tambahwarga" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/warga/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nik</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="nik" required placeholder="masukkan NIK" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Warga</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_lengkap_warga" required placeholder="masukkan nama warga" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">RT</label>
                                                <div class="col-md-9">
                                                    <select class="form-control select" data-live-search="true" name="id_rt" required>
                                                        <option>-- Pilih RT --</option>
                                                        <?php foreach ($data_rt as $rt): ?>
                                                            <option value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Warga -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama Warga</th>
                                <th>RT/RW</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nik ?></td>
                                <td><?= $key->nama_lengkap_warga ?></td>
                                <td><?= $key->rt."/".$key->rw ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editwarga<?= $key->id_warga ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/warga/delete/'.$key->id_warga) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Warga?\n<?= $key->nama_lengkap_warga ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_warga ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal edit rw -->
    <div class="modal" id="editwarga<?= $key->id_warga ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Edit Warga</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/warga/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">NIK</label>
                            <div class="col-md-9">
                                <input type="number" name="nik" value="<?= $key->nik ?>" required placeholder="masukkan NIK warga" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Warga</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_lengkap_warga" value="<?= $key->nama_lengkap_warga ?>" required placeholder="masukkan nama warga" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">RT</label>
                            <div class="col-md-9">
                                <select class="form-control select" data-live-search="true" name="id_rt" required>
                                    <option>-- Pilih RT --</option>
                                    <?php foreach ($data_rt as $rt): ?>
                                        <option <?= $key->id_rt == $rt->id_rt ? "selected":"" ?> value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                    <?php endforeach ?>
                                </select>
                                <input type="hidden" name="id_warga" value="<?= $key->id_warga ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Warga -->
<?php } } ?>

<?php if ($content == "data-kegiatan") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahkegiatan" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Warga -->
                        <div class="modal" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/kegiatan/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Kegiatan</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_kegiatan" required placeholder="masukkan nama kegiatan" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Anggaran</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="anggaran" required placeholder="masukkan anggaran" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Iuran</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="iuran" required placeholder="masukkan iuran" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Mulai</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="mulai" required placeholder="waktu mulai" class="form-control datepicker"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Selesai</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="selesai" required placeholder="waktu selesai" class="form-control datepicker"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Warga -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Kegiatan</th>
                                <th>Anggaran</th>
                                <th>Iuran</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_kegiatan ?></td>
                                <td><?= rp($key->anggaran) ?></td>
                                <td><?= rp($key->iuran) ?></td>
                                <td><?= $key->mulai ?></td>
                                <td><?= $key->selesai ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editkegiatan<?= $key->id_kegiatan ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/kegiatan/delete/'.$key->id_kegiatan) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Kegiatan?\n<?= $key->nama_kegiatan ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_kegiatan ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah Warga -->
    <div class="modal" id="editkegiatan<?= $key->id_kegiatan ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/kegiatan/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Kegiatan</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->nama_kegiatan ?>" name="nama_kegiatan" required placeholder="masukkan nama kegiatan" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Anggaran</label>
                            <div class="col-md-9">
                                <input type="number" value="<?= $key->anggaran ?>" name="anggaran" required placeholder="masukkan anggaran" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Iuran</label>
                            <div class="col-md-9">
                                <input type="number" value="<?= $key->iuran ?>" name="iuran" required placeholder="masukkan iuran" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mulai</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->mulai ?>" name="mulai" required placeholder="waktu mulai" class="form-control datepicker"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Selesai</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->selesai ?>" name="selesai" required placeholder="waktu selesai" class="form-control datepicker"/>
                                <input type="hidden" name="id_kegiatan" value="<?= $key->id_kegiatan ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Warga -->
<?php } } ?>

<?php if ($content == "data-penarikan-dana") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;" rowspan="2">No.</th>
                                <th style="text-align: center;" rowspan="2">Nama Kegiatan</th>
                                <th style="text-align: center;" colspan="4" style="text-align: center;">Dana</th>
                                <th style="text-align: center;" rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">RT 1</th>
                                <th style="text-align: center;">RT 2</th>
                                <th style="text-align: center;">RT 3</th>
                                <th style="text-align: center;">RT 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_kegiatan ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt1) ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt2) ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt3) ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt4) ?></td>
                                <td>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/input?id_kegiatan='.$key->id_kegiatan) ?>" data-toggle="tooltip" data-placement="top" title="Input dana kegiatan" class="btn btn-xs btn-warning">Input Dana</a>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/rinci?id_kegiatan='.$key->id_kegiatan) ?>" data-toggle="tooltip" data-placement="top" title="Rincian dana kegiatan per RT" class="btn btn-xs btn-success">Rinci</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-rinci-penarikan-dana") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="<?= site_url('sysadmin/penarikan-dana/delete?id_kegiatan='.$this->input->get('id_kegiatan')) ?>" onclick="return confirm('Apakah anda yakin akan menghapus semua data penarikan dana?')" data-toggle="tooltip" data-placement="top" title="Hapus semua penarikan dana" class="panel-delete"><span class="fa fa-trash-o"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">RT</th>
                                <th style="text-align: center;">Perolehan Dana</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tdana = 0; $no = 1; foreach ($data as $key): $tdana += $key->dana ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= "RT 0".$key->id_rt ?></td>
                                <td style="text-align: right;"><?= rp($key->dana) ?></td>
                                <td>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/rinci-warga?id_kegiatan='.$key->id_kegiatan.'&id_rt='.$key->id_rt) ?>" data-toggle="tooltip" data-placement="top" title="Rincian dana per warga" class="btn btn-xs btn-success">Rinci</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <th style="text-align: right;" colspan="2">Total</th>
                            <th style="text-align: right;"><?= rp($tdana) ?></th>
                            <th></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-rinci-penarikan-dana-warga") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Nama Warga</th>
                                <th style="text-align: center;">Perolehan Dana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tdana = 0; $no = 1; foreach ($data as $key): $tdana += $key->dana ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap_warga ?></td>
                                <td style="text-align: right;"><?= rp($key->dana) ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <th style="text-align: right;" colspan="2">Total</th>
                            <th style="text-align: right;"><?= rp($tdana) ?></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "input-penarikan-dana") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="pull-left">
                    	<select class="select" data-live-search="true" id="rt" onchange="rt_change()">
                    		<option>-- Pilih RT --</option>
                    		<?php foreach ($data_rt as $rt): ?>
                    		<option <?= $this->input->get('rt') == $rt->id_rt ? "selected":"" ?> value="<?= $rt->id_rt ?>"><?= $rt->rt ?></option>
                    		<?php endforeach ?>
                    	</select>
                    	<script type="text/javascript">
                    		function rt_change(){
                    			var rt = document.getElementById("rt");
                    			window.location = "<?= site_url('sysadmin/penarikan-dana/input?id_kegiatan='.$this->input->get('id_kegiatan').'&rt=') ?>"+rt.value;
                    		}
                    	</script>
                    </ul>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <form action="<?= site_url('sysadmin/penarikan-dana/save') ?>" method="POST">
                <div class="panel-body table-responsive">
                    <div class="col-md-6 col-md-offset-3">
                    	<table class="table table-bordered table-condensed table-hover table-striped">
	                        <thead>
	                            <tr>
	                                <th>Warga</th>
	                                <th>Dana</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php $no = 1; foreach ($data as $key): ?>
	                            <tr>
	                                <td><?= $key->nama_lengkap_warga ?></td>
	                                <td>
	                                	<input class="form-control" type="number" name="jumlah<?= $key->id_warga ?>" placeholder="Jumlah">
	                                </td>
	                            </tr>
	                            <?php endforeach ?>
	                        </tbody>
	                    </table>
	                    <input type="hidden" name="id_kegiatan" value="<?= $this->input->get('id_kegiatan') ?>">
	                    <input type="hidden" name="id_rt" value="<?= $this->input->get('rt') ?>">
                    </div>
                </div>
                <div class="panel-footer">
                	<center>
                		<button class="btn btn-success" type="submit">Simpan</button>
                		<a href="<?= site_url('sysadmin/penarikan-dana') ?>" class="btn btn-danger">Batal</a>
                	</center>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-berita") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="<?= site_url('sysadmin/berita/tambah') ?>" data-toggle="tooltip" title="Tambah Data Berita" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul Berita</th>
                                <th>Foto</th>
                                <th>Isi Berita</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->judul_berita ?></td>
                                <td>
                                    <img class="img img-responsive" src="<?= base_url() ?>/files/berita/<?= $key->foto_berita ?>">
                                </td>
                                <td><?= substr($key->isi_berita, 0, 300)."..." ?></td>
                                <td><?= date_indo($key->dibuat) ?></td>
                                <td>
                                    <a href="<?= site_url('sysadmin/berita/edit/'.$key->id_berita) ?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Edit Berita">Edit</a>
                                    <a data-toggle="tooltip" title="Hapus Berita" href="<?= site_url('sysadmin/berita/delete/'.$key->id_berita.'?foto_berita='.$key->foto_berita) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Berita?\n<?= $key->judul_berita ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                    <?php if ($key->publish == 1){ ?>
                                        <a href="<?= site_url('sysadmin/berita/unpublish/'.$key->id_berita) ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Batal Terbitkan Berita">Unpublish</a>
                                    <?php }else{ ?>
                                        <a href="<?= site_url('sysadmin/berita/publish/'.$key->id_berita) ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Terbitkan Berita">publish</a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-telepon") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Telepon -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Telepon</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/telepon/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Telepon</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_telepon" required placeholder="masukkan nama lengkap" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nomor Telepon</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nomor_telepon" required placeholder="masukkan nomor telepon" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Telepon -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Telepon</th>
                                <th>Nomor Telepon</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_telepon ?></td>
                                <td><?= $key->nomor_telepon ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edittelepon<?= $key->id_telepon ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/telepon/delete/'.$key->id_telepon) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Telepon?\n<?= $key->nama_telepon ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah Telepon -->
    <div class="modal" id="edittelepon<?= $key->id_telepon ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/telepon/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Telepon</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_telepon" required placeholder="masukkan nama telepon" class="form-control" value="<?= $key->nama_telepon ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nomor Telepon</label>
                            <div class="col-md-9">
                                <input type="text" name="nomor_telepon" required placeholder="masukkan nomor telepon" class="form-control" value="<?= $key->nomor_telepon ?>"/>
                                <input type="hidden" name="id_telepon" value="<?= $key->id_telepon ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Telepon -->
<?php } } ?>

<?php if ($content == "data-slider") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Telepon -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Slider</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Slider/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Foto SLider</label>
                                                <div class="col-md-9">
                                                    <input type="file" name="foto_slider" required class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Caption</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="caption" maxlength="200" required placeholder="masukkan caption" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Telepon -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Foto Slider</th>
                                <th>Caption</th>
                                <th>Dibuat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img width="20%" height="20%" class="img img-responsive" src="<?= base_url() ?>files/slider/<?= $key->foto_slider ?>">
                                </td>
                                <td><?= $key->caption ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td><?= $key->aktif == 1 ? "Aktif":"Nonaktif" ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editslider<?= $key->id_slider ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/slider/delete/'.$key->id_slider.'?foto_slider='.$key->foto_slider) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Slider?\n<?= $key->caption ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                    <?php if ($key->aktif == 1) { ?>
                                        <a href="<?= site_url('sysadmin/slider/nonaktif/'.$key->id_slider) ?>" class="btn btn-xs btn-warning">NonAktifkan</a>
                                    <?php }else{ ?>
                                        <a href="<?= site_url('sysadmin/slider/aktif/'.$key->id_slider) ?>" class="btn btn-xs btn-warning">Aktifkan</a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah SLider -->
    <div class="modal" id="editslider<?= $key->id_slider ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Slider/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Foto SLider</label>
                            <div class="col-md-9">
                                <input type="file" name="foto_slider" class="form-control"/>
                                <input type="hidden" name="foto_slider_lama" value="<?= $key->foto_slider ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Caption</label>
                            <div class="col-md-9">
                                <input type="text" name="caption" maxlength="200" value="<?= $key->caption ?>" required placeholder="masukkan caption" class="form-control"/>
                                <input type="hidden" name="id_slider" value="<?= $key->id_slider ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah slider -->
<?php } } ?>

<?php if ($content == "data-banner") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Banner -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Banner</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Banner/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Caption</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="caption" maxlength="200" required placeholder="masukkan caption" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jenis</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="jenis" maxlength="200" required placeholder="masukkan jenis" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Foto Banner</label>
                                                <div class="col-md-9">
                                                    <input type="file" name="slider" required class="form-control"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Banner -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Banner</th>
                                <th>Caption</th>
                                <th>Jenis</th>
                                <th>Dibuat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img width="20%" height="20%" class="img img-responsive" src="<?= base_url() ?>files/slider/<?= $key->slider ?>">
                                </td>
                                <td><?= $key->caption ?></td>
                                <td><?= $key->jenis ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td><?= $key->aktif == 1 ? "Aktif":"Nonaktif" ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editbanner<?= $key->id_slider ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/banner/delete/'.$key->id_slider.'?slider='.$key->slider) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Banner?\n<?= $key->caption ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                    <?php if ($key->aktif == 1) { ?>
                                        <a href="<?= site_url('sysadmin/banner/nonaktif/'.$key->id_slider) ?>" class="btn btn-xs btn-warning">NonAktifkan</a>
                                    <?php }else{ ?>
                                        <a href="<?= site_url('sysadmin/banner/aktif/'.$key->id_slider) ?>" class="btn btn-xs btn-warning">Aktifkan</a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal Edit Banner -->
    <div class="modal" id="editbanner<?= $key->id_slider ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Banner/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner</label>
                            <div class="col-md-9">
                                <input type="file" name="slider" class="form-control"/>
                                <input type="hidden" name="slider_lama" value="<?= $key->slider ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Caption</label>
                            <div class="col-md-9">
                                <input type="text" name="caption" maxlength="200" value="<?= $key->caption ?>" required placeholder="masukkan caption" class="form-control"/>
                                <input type="hidden" name="id_slider" value="<?= $key->id_slider ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jenis</label>
                            <div class="col-md-9">
                                <input type="text" name="jenis" maxlength="200" value="<?= $key->jenis ?>" required placeholder="masukkan jenis" class="form-control"/>
                                <input type="hidden" name="id_slider" value="<?= $key->id_slider ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit Banner -->
<?php } } ?>


<?php if ($content == "data-menu") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Menu-->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Menu</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Menu/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="title_menu_app" maxlength="200" required placeholder="masukkan title menu app" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Subtitle Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="subtitle_menu_app" maxlength="200" required placeholder="masukkan subtitle menu app" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image Menu</label>
                                                <div class="col-md-9">
                                                    <input type="file" name="image_menu_app" required class="form-control"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Menu -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img width="20%" height="20%" class="img img-responsive" src="<?= base_url() ?>files/slider/<?= $key->image_menu_app ?>">
                                </td>
                                <td><?= $key->title_menu_app ?></td>
                                <td><?= $key->subtitle_menu_app ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editmenu<?= $key->id_menu_app ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/menu/delete/'.$key->id_menu_app.'?image_menu_app='.$key->image_menu_app) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Menu?\n<?= $key->subtitle_menu_app ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal Edit Menu -->
    <div class="modal" id="editmenu<?= $key->id_menu_app ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Menu/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image_menu_app" class="form-control"/>
                                <input type="hidden" name="menu_lama" value="<?= $key->image_menu_app ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title_menu_app" maxlength="200" value="<?= $key->title_menu_app ?>" required placeholder="masukkan title" class="form-control"/>
                                <input type="hidden" name="id_menu_app" value="<?= $key->id_menu_app ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Subtitle</label>
                            <div class="col-md-9">
                                <input type="text" name="subtitle_menu_app" maxlength="200" value="<?= $key->subtitle_menu_app ?>" required placeholder="masukkan subtitle" class="form-control"/>
                                <input type="hidden" name="id_menu_app" value="<?= $key->id_menu_app ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit Menu -->
<?php } } ?>


<?php if ($content == "data-submenu") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah SubMenu-->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Sub Menu</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Submenu/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title Sub Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="title_submenu_app" maxlength="200" required placeholder="masukkan title submenu app" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Subtitle Sub Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="subtitle_submenu_app" maxlength="200" required placeholder="masukkan subtitle submenu app" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image Sub Menu</label>
                                                <div class="col-md-9">
                                                    <input type="file" name="image_submenu_app" required class="form-control"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Menu -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img width="20%" height="20%" class="img img-responsive" src="<?= base_url() ?>files/slider/<?= $key->image_submenu_app ?>">
                                </td>
                                <td><?= $key->title_submenu_app ?></td>
                                <td><?= $key->subtitle_submenu_app ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editsubmenu<?= $key->id_submenu_app ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/submenu/delete/'.$key->id_submenu_app.'?image_submenu_app='.$key->image_submenu_app) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Sub Menu?\n<?= $key->subtitle_submenu_app ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal Edit Sub Menu -->
    <div class="modal" id="editsubmenu<?= $key->id_submenu_app ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Submenu/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image_submenu_app" class="form-control"/>
                                <input type="hidden" name="submenu_lama" value="<?= $key->image_submenu_app ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title_submenu_app" maxlength="200" value="<?= $key->title_submenu_app ?>" required placeholder="masukkan title" class="form-control"/>
                                <input type="hidden" name="id_submenu_app" value="<?= $key->id_submenu_app ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Subtitle</label>
                            <div class="col-md-9">
                                <input type="text" name="subtitle_submenu_app" maxlength="200" value="<?= $key->subtitle_submenu_app ?>" required placeholder="masukkan subtitle" class="form-control"/>
                                <input type="hidden" name="id_submenu_app" value="<?= $key->id_submenu_app ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit Menu -->
<?php } } ?>


<?php if ($content == "data-konten") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah SubMenu-->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Konten</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Konten/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title Konten Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="title_konten_app" maxlength="200" required placeholder="masukkan title Konten app" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Subtitle Konten Menu</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="subtitle_konten_app" maxlength="200" required placeholder="masukkan subtitle Konten app" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image Konten Menu</label>
                                                <div class="col-md-9">
                                                    <input type="file" name="image_konten_app" required class="form-control"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Menu -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img width="20%" height="20%" class="img img-responsive" src="<?= base_url() ?>files/slider/<?= $key->image_konten_app ?>">
                                </td>
                                <td><?= $key->title_konten_app ?></td>
                                <td><?= $key->subtitle_konten_app ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editkonten<?= $key->id_konten_app ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/konten/delete/'.$key->id_konten_app.'?image_konten_app='.$key->image_konten_app) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Konten?\n<?= $key->subtitle_konten_app ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal Edit Sub Menu -->
    <div class="modal" id="editkonten<?= $key->id_konten_app ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?= site_url('sysadmin/Konten/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image_konten_app" class="form-control"/>
                                <input type="hidden" name="konten_lama" value="<?= $key->image_konten_app ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title_konten_app" maxlength="200" value="<?= $key->title_konten_app ?>" required placeholder="masukkan title" class="form-control"/>
                                <input type="hidden" name="id_konten_app" value="<?= $key->id_konten_app ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Subtitle</label>
                            <div class="col-md-9">
                                <input type="text" name="subtitle_konten_app" maxlength="200" value="<?= $key->subtitle_konten_app ?>" required placeholder="masukkan subtitle" class="form-control"/>
                                <input type="hidden" name="id_konten_app" value="<?= $key->id_konten_app ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit Menu -->
<?php } } ?>

<?php if ($content == "data-surat") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Telepon -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Surat SKCK</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/surat/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_lengkap" required placeholder="masukkan nama lengkap" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat Lengkap</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="alamat_lengkap" required placeholder="masukkan Alamat Lengkap" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Telepon -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>ALamat Lengap</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap ?></td>
                                <td><?= $key->alamat_lengkap ?></td>
                                <td>
                                    <a href="<?= site_url('laporanpdf') ?>" onclick="return confirm('Apakah Benar Nama Anda \n<?= $key->id_surat ?>')" class="btn btn-xs btn-danger">Print</a>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editsurat<?= $key->id_surat ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/surat/delete/'.$key->id_surat) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Telepon?\n<?= $key->nama_lengkap ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah Telepon -->
    <div class="modal" id="editsurat<?= $key->id_surat ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Surat</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/surat/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_lengkap" required placeholder="masukkan Nama Lengkap" class="form-control" value="<?= $key->nama_lengkap ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alamat Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" name="alamat_lengkap" required placeholder="masukkan Alamat Lengkap" class="form-control" value="<?= $key->alamat_lengkap ?>"/>
                                <input type="hidden" name="id_surat" value="<?= $key->id_surat ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Telepon -->
<?php } } ?>

<?php if ($content == "data-wilayah") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Telepon -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Administratif RT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/wilayah/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama RT</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_rt" required placeholder="masukkan nama rt" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Luas</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="luas" required placeholder="masukkan  Luas" class="form-control" value=""/>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Batas</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="batas" required placeholder="masukkan  Batas" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Telepon -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama RT</th>
                                <th>Luas</th>
                                <th>Batas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_rt ?></td>
                                <td><?= $key->luas ?></td>
                                <td><?= $key->batas ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editwil<?= $key->id_wilayah ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/wilayah/delete/'.$key->id_wilayah) ?>" onclick="return confirm('Apakah anda yakin akan menghapus?\n<?= $key->nama_rt ?>')" class="btn btn-xs btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah Telepon -->
    <div class="modal" id="editwil<?= $key->id_wilayah ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Edit Letak Administratif</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/wilayah/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama RT</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_rt" required placeholder="masukkan Nama RT" class="form-control" value="<?= $key->nama_rt ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Luas</label>
                            <div class="col-md-9">
                                <input type="text" name="luas" required placeholder="masukkan luas" class="form-control" value="<?= $key->luas ?>"/>
                                <input type="hidden" name="id_wilayah" value="<?= $key->id_wilayah ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Batas</label>
                            <div class="col-md-9">
                                <input type="text" name="batas" required placeholder="masukkan batas" class="form-control" value="<?= $key->batas ?>"/>
                                <input type="hidden" name="id_wilayah" value="<?= $key->id_wilayah ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Telepon -->
<?php } } ?>