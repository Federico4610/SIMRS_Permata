<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-injured"></i> Data Pasien
	</div>

	<?php echo $this->session->flashdata('pesan') ?>
	
	<?php echo anchor('administrator/data_pasien/tambah_data_pasien','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Pasien</button>
		') ?>
	
	<table class="table table-bordered table-striped tabel-hover">
		<tr>
			<th>NO</th>
			<th>NO. REKAM MEDIS</th>
			<th>NAMA PASIEN</th>
			<th>GENDER</th>
			<th>GOL. DARAH</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>PENANGGUNG JAWAB</th>
			<th>ALAMAT</th>
			<th>NO. HP</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php
		$no = 1;
		foreach ($data_pasien as $dtp) : ?>
		<tr> 
			<td width="20px"><?php echo $no++ ?></td>
			<td><?php echo $dtp->no_rekam_medis ?></td>
			<td><?php echo $dtp->nama_pasien ?></td>
			<td><?php echo $dtp->gender ?></td>
			<td><?php echo $dtp->gol_darah ?></td>
			<td><?php echo $dtp->tempat_lahir ?></td>
			<td><?php echo $dtp->tanggal_lahir ?></td>
			<td><?php echo $dtp->penanggung_jawab ?></td>
			<td><?php echo $dtp->alamat ?></td>
			<td><?php echo $dtp->no_hp ?></td>
			<td width="20px"><?php echo anchor('administrator/data_pasien/detail/'.$dtp->no_rekam_medis,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
			<td width="20px"><?php echo anchor('administrator/data_pasien/update/'.$dtp->no_rekam_medis,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
			<td width="20px"><?php echo anchor('administrator/data_pasien/delete/'.$dtp->no_rekam_medis,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>


		</tr>
	<?php endforeach; ?>
	</table>
</div>