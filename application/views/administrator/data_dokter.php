<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-injured"></i> Data Dokter
	</div>

	<?php echo $this->session->flashdata('pesan') ?>
	
	<?php echo anchor('administrator/data_dokter/tambah_data_dokter','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Dokter</button>
		') ?>
	
	<table class="table table-bordered table-striped tabel-hover">
		<tr>
			<th>NO</th>
			<th>NIDN</th>
			<th>NAMA DOKTER</th>
			<th>JADWAL PRAKTIK</th>
			<th>FOTO</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php
		$no = 1;
		foreach ($data_dokter as $dtd) : ?>
		<tr> 
			<td width="20px"><?php echo $no++ ?></td>
			<td><?php echo $dtd->nidn ?></td>
			<td><?php echo $dtd->nama_dokter ?></td>
			<td><?php echo $dtd->jadwal_praktik ?></td>
			<td><?php echo $dtd->foto ?></td>
			<td width="20px"><?php echo anchor('administrator/data_dokter/detail/'.$dtd->nidn,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
			<td width="20px"><?php echo anchor('administrator/data_dokter/update/'.$dtd->nidn,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
			<td width="20px"><?php echo anchor('administrator/data_dokter/delete/'.$dtd->nidn,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>


		</tr>
	<?php endforeach; ?>
	</table>
</div>