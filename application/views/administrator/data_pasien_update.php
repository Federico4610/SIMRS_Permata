<div class= "container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-user-injured"></i> From Update Data Pasien

	</div>

	<?php foreach($data_pasien as $dtp) : ?>

		<form method="post" action="<?php echo base_url('administrator/data_pasien/update_aksi') ?>">
			
			<div class="form-group">
				<label>Nama Pasien</label>
				<input type="hidden" name="nama_pasien" value="<?php echo $dtp->no_rekam_medis ?>">
				<input type="text" name="nama_pasien" class="form-control" value="<?php echo $dtp->nama_pasien ?>">
			</div>

			<div class="form-group">
			<label>Gender</label>
			<input type="text" name="gender" class="form-control" value="<?php echo $dtp->gender ?>">
			</div>


			<div class="form-group">
				<label>Gol. Darah</label>
				<input type="text" name="gol_darah" class="form-control" value="<?php echo $dtp->gol_darah ?>">
			</div>

			<div class="form-group">
				<label>Tempat Lahir</label>
				<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $dtp->tempat_lahir ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" id="date" name="tanggal_lahir" class="form-control" value="<?php echo $dtp->tanggal_lahir ?>">
			</div>

			<div class="form-group">
				<label>Penanggung Jawab</label>
				<input type="text" name="penanggung_jawab" class="form-control" value="<?php echo $dtp->penanggung_jawab ?>">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $dtp->alamat ?>">
			</div>

			<div class="form-group">
				<label>No. HP</label>
				<input type="text" name="no_hp" class="form-control" value="<?php echo $dtp->no_hp ?>">
			</div>
			<button type="submit" class="btn btn-primary ">Simpan</button>
		</form>
	<?php endforeach; ?>
</div>