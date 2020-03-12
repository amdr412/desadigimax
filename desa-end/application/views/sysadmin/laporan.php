<?php if ($content == "cetak-realisasi-belanja-langsung"){ ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?= $title ?></title>
		<script type="text/javascript">
			window.print();
		</script>
	</head>
	<body style="font-size: 12px;">
		<center>
			<h5>RINCIAN LAPORAN KEGIATAN BELANJA LANGSUNG<br>
				APBD KABUPATEN TEGAL TAHUN ANGGARAN <?= date('Y') ?><br>
				<?php foreach ($urusan_by_id as $urus){
					echo strtoupper($urus->nmurusan);
				} ?><br>
				BULAN <?php foreach ($bulan_by_id as $bln){
					echo $bln->nama;
				} ?></h5>
		</center>
		<table width="100%" cellpadding="5" border="1" style="border-collapse: collapse;">
			<tr>
				<th rowspan="3">NO</th>
				<th rowspan="3">Nama SKPD, Kegiatan, Pekerjaan</th>
				<th rowspan="3">Nilai Pagu DPA</th>
				<th colspan="2">Biaya Pelaksanaan</th>
				<th colspan="8">Realisasi Nilai Pelaksanaan</th>
				<th colspan="7">Persentase perkembangan pelaksanaan</th>
				<th rowspan="3">Ket</th>
			</tr>
			<tr>
				<th rowspan="2">Nilai AP / Penunjang Pelaksanaan / Swakelola (Rp.)</th>
				<th rowspan="2">Nilai yang diborongkan (Rp.)</th>
				<th rowspan="2">Nilai Kontrak (Rp.)</th>
				<th rowspan="2">Sisa Tender (Rp.)</th>
				<th rowspan="2">Metode Pengadaan (Rp.)</th>
				<th rowspan="2">Tanggal Kontrak</th>
				<th rowspan="2">Jangka Waktu Pelaksanaan (Hari)</th>
				<th rowspan="2">PHO</th>
				<th rowspan="2">FHO</th>
				<th rowspan="2">Pelaksana</th>
				<th rowspan="2">Target Fisik s/d Bln Ini (%)</th>
				<th colspan="2">Realisasi Fisik</th>
				<th colspan="2">Realisasi SP2D</th>
				<th colspan="2">Realisasi SPJ</th>
			</tr>
			<tr>
				<th>s/d Bln Lalu</th>
				<th>s/d Bln Ini</th>
				<th>s/d Bln Lalu</th>
				<th>s/d Bln Ini</th>
				<th>s/d Bln Lalu</th>
				<th>s/d Bln Ini</th>
			</tr>
			<tr style="text-align: center;">
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="2">Total</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td width="70%" style="vertical-align: top">
					<ul type="none">
						<li><b>Keterangan :</b></li>
						<?php foreach ($metode as $met): ?>
						<li><?= $met->kode." = ".$met->nama ?></li>
						<?php endforeach ?>
					</ul>
				</td>
				<td width="30%" style="vertical-align: top; text-align: center;">
					<p>Kajen, <?= date_indo($this->input->post('tgl_cetak')) ?><br>
					<?php foreach ($tanda_tangan as $ttd): ?>
						<?= $ttd->jabatan ?></p>
						<br>
						<br>
						<br>
						<p><u><?= $ttd->nama_jabat ?></u><br>
							<?= $ttd->pangkat ?><br>
							NIP. <?= $ttd->nip ?></p>
					<?php endforeach ?>
				</td>
			</tr>
		</table>
	</body>
	</html>
<?php } ?>

<?php if ($content == "cetak-realisasi-dak"){ ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?= $title ?></title>
		<script type="text/javascript">
			window.print();
		</script>
	</head>
	<body style="font-size: 12px">
		<center>
			<h5>LAPORAN DANA ALOKASI KHUSUS (DAK) KABUPATEN TEGAL<br>
				<?php foreach ($urusan_by_id as $urus){
					echo strtoupper($urus->nmurusan);
				} ?><br>
				DAK <?= strtoupper($this->input->post('jenis')) ?><br>
				TAHUN ANGGARAN <?= date('Y') ?><br>
				BULAN 
				<?php foreach ($bulan_by_id as $bln){
					echo $bln->nama;
				} ?>
			</h5>
		</center>
		<table width="100%" cellpadding="5" border="1" style="border-collapse: collapse;">
			<tr>
				<th rowspan="3">NO</th>
				<th rowspan="3">Nama SKPD, Kegiatan, Pekerjaan</th>
				<th rowspan="3">DAK Murni (Rp.)</th>
				<th rowspan="3">APBD Pendamping (Rp.)</th>
				<th rowspan="3">Jumlah (Rp.)</th>
				<th rowspan="3">Nilai Diborongkan (Rp.)</th>
				<th rowspan="3">Nilai Kontrak (Rp.)</th>
				<th rowspan="3">Sisa Tender (Rp.)</th>
				<th rowspan="3">Metode</th>
				<th rowspan="3">SPMK / SP (tgl)</th>
				<th rowspan="3">WKT (Hari)</th>
				<th rowspan="3">PHO</th>
				<th rowspan="3">FHO</th>
				<th rowspan="3">Pelaksana</th>
				<th colspan="6">Progress</th>
				<th rowspan="3">Ket</th>
			</tr>
			<tr>
				<th colspan="2">Fisik</th>
				<th colspan="2">SP2D</th>
				<th colspan="2">SPJ</th>
			</tr>
			<tr>
				<th>Renc (%)</th>
				<th>Real (%)</th>
				<th>(Rp.)</th>
				<th>(%)</th>
				<th>(Rp.)</th>
				<th>(%)</th>
			</tr>
			<tr style="text-align: center;">
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="2">Total</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td width="70%" style="vertical-align: top">
					<ul type="none">
						<li><b>Keterangan :</b></li>
						<?php foreach ($metode as $met): ?>
						<li><?= $met->kode." = ".$met->nama ?></li>
						<?php endforeach ?>
					</ul>
				</td>
				<?php if (!$this->input->post('ttd')){ ?>
					<td width="30%" style="vertical-align: top; text-align: center;">
						<p>Kajen, <?= date_indo($this->input->post('tgl_cetak')) ?><br>
						<?php foreach ($tanda_tangan as $ttd): ?>
							<?= $ttd->jabatan ?></p>
							<br>
							<br>
							<br>
							<p><u><?= $ttd->nama_jabat ?></u><br>
								<?= $ttd->pangkat ?><br>
								NIP. <?= $ttd->nip ?></p>
						<?php endforeach ?>
					</td>
				<?php } ?>
			</tr>
		</table>
	</body>
	</html>
<?php } ?>