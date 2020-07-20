<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Form Pendaftaran Dokter
	</div>

		<form method="post" action="<?php echo base_url('administrator/data_dokter/tambah_data_dokter_aksi') ?>">

		<div class="form-group">
			<label>NIDN</label>
			<input type="text" name="nidn" class="form-control">
			<?php echo form_error('nidn','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Nama Dokter</label>
			<input type="text" name="nama_dokter" class="form-control">
			<?php echo form_error('nama_dokter','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control">
			<?php echo form_error('alamat','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="gender" class="form-control">
				<option>...</option>
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
		
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
			<?php echo form_error('email','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Telepon</label>
			<input type="text" name="telp" class="form-control">
			<?php echo form_error('telp','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Foto</label>
			<input type="text" name="foto" class="form-control">
			<?php echo form_error('foto','<div class="text-danger small ml-3">') ?>
		
		</div>

		<div class="form-group">
			<label>Jadwal Praktik</label>
			<input type="text" name="jadwal_praktik" class="form-control">
			<?php echo form_error('jadwal_praktik','<div class="text-danger small ml-3">') ?>
		
		</div>

		<button type="submit" class="btn btn-primary mb-5">Simpan</button>

		
	</form>
</div>
