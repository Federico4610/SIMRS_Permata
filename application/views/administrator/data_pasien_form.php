<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Form Pendaftaran Pasien
	</div>

		<form method="post" action="<?php echo base_url('administrator/data_pasien/tambah_data_pasien_aksi') ?>">

		<div class="form-group">
			<label>Nama Pasien</label>
			<input type="text" name="nama_pasien" class="form-control">
			<?php echo form_error('nama_pasien','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Gender</label>
			<select name="gender" class="form-control">
				<option>...</option>
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
		
		</div>

		<div class="form-group">
			<label>Gol. Darah</label>
			<select name="gol_darah" class="form-control">
				<option>...</option>
				<option>A</option>
				<option>B</option>
				<option>AB</option>
				<option>O</option>
			</select>
		
		</div>

		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" class="form-control">
			<?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" id="date" name="tanggal_lahir" class="form-control">
			<?php echo form_error('tanggal_lahir','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Penanggung Jawab</label>
			<input type="text" name="penanggung_jawab" class="form-control">
			<?php echo form_error('penanggung_jawab','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control">
			<?php echo form_error('alamat','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>No. HP</label>
			<input type="text" name="no_hp" class="form-control">
			<?php echo form_error('no_hp','<div class="text-danger small ml-3">') ?>
		
		</div>
		<button type="submit" class="btn btn-primary mb-5">Simpan</button>

		
	</form>
</div>
