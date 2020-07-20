<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-eye"></i> Detail Data Pasien
	</div>

	<table class="table table-hover table-striped table-bordered">

		<?php foreach ($detail as $dt) : ?>
		<tr>
			<th>No Rekam Medis</th>
			<td><?php echo $dt->no_rekam_medis; ?></td>
		</tr>

		<tr>
			<th>Nama Pasien</th>
			<td><?php echo $dt->nama_pasien; ?></td>
		</tr>

		<tr>
			<th>Gender</th>
			<td><?php echo $dt->gender; ?></td>
		</tr>

		<tr>
			<th>Gol. Darah</th>
			<td><?php echo $dt->gol_darah; ?></td>
		</tr>

		<tr>
			<th>Tempat Lahir</th>
			<td><?php echo $dt->tempat_lahir; ?></td>
		</tr>

		<tr>
			<th>Tanggal Lahir</th>
			<td><?php echo $dt->tanggal_lahir; ?></td>
		</tr>

		<tr>
			<th>Penanggung Jawab</th>
			<td><?php echo $dt->penanggung_jawab; ?></td>
		</tr>

		<tr>
			<th>Alamat</th>
			<td><?php echo $dt->alamat; ?></td>
		</tr>

		<tr>
			<th>No Rekam Medis</th>
			<td><?php echo $dt->no_hp; ?></td>
		</tr>

		<?php endforeach; ?>
	</table>

	<?php echo anchor('administrator/data_pasien','<div class="btn btn-sm btn-primary">Kembali</div>') ?>


</div>