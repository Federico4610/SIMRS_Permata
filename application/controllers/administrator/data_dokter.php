<?php

Class data_dokter extends CI_Controller{
	public function index() 
	{
		$data['data_dokter']	=$this->data_dokter_model->tampil_data('data_dokter')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_dokter',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_data_dokter()
	{
		$data['data_dokter']  = $this->data_dokter_model->tampil_data('data_dokter')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_dokter_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_data_dokter_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_data_dokter();
		}else{
			$nidn				= $this->input->post('nidn');
			$nama_dokter		= $this->input->post('nama_dokter');
			$alamat				= $this->input->post('alamat');
			$jenis_kelamin		= $this->input->post('jenis_kelamin');
			$email				= $this->input->post('email');
			$telp				= $this->input->post('telp');
			$foto 				= $this->input->post('foto');
			$jadwal_praktik		= $this->input->post('jadwal_praktik');
			$data = array(
				'nidn' 		=> $nidn,
				'nama_dokter' 			=> $nama_dokter,
				'alamat' 		=> $alamat,
				'jenis_kelamin' 		=> $jenis_kelamin,
				'email' 	=> $email,
				'telp' 	=> $telp,
				'foto' 			=> $foto,
				'jadwal_praktik' 			=> $jadwal_praktik,
				);

			$this->data_dokter_model->insert_data($data,'data_dokter');

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
						Data Dokter berhasil Ditambahkan! 
						<button type="button" class="close" data-sismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
						</button>
						</div>');
				redirect('administrator/data_dokter');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nidn','nidn','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('nama_dokter','nama_dokter','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('alamat','alamat','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('email','email','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('telp','telp','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('foto','foto','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('jadwal_praktik','jadwal_praktik','required',[
			'required' => 'Wajib Di Isi!'
		]);
	}

	public function detail($id)
	{
		$data['detail'] = $this->data_dokter_model->nidn($id);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_dokter_detail',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function update($id)
	{
		$where= array('nidn' => $id);
		$data['data_dokter']= $this->data_dokter_model->edit_data($where, 'data_dokter')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_dokter_update',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi($id)
	{
		$nidn				= $this->input->post('nidn');
		$nama_dokter		= $this->input->post('nama_dokter');
		$alamat				= $this->input->post('alamat');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$email				= $this->input->post('email');
		$telp				= $this->input->post('telp');
		$foto 				= $this->input->post('foto');
		$jadwal_praktik		= $this->input->post('jadwal_praktik');

		$data = array(
				'nidn' 		=> $nidn,
				'nama_dokter' 			=> $nama_dokter,
				'alamat' 		=> $alamat,
				'jenis_kelamin' 		=> $jenis_kelamin,
				'email' 	=> $email,
				'telp' 	=> $telp,
				'foto' 			=> $foto,
				'jadwal_praktik' 			=> $jadwal_praktik,
				);
		$where = array(
			'nidn' => $id
		);

		$this->data_dokter_model->update_data($where,$data,'data_dokter');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
						Data Dokter berhasil Di Update! 
						<button type="button" class="close" data-sismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
						</button>
						</div>');
		redirect('administrator/data_dokter');
	}

	public function delete($id)
	{
		$where = array('nidn' => $id);
		$this->data_dokter_model->hapus_data($where,'data_dokter');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
						Data Dokter berhasil Di Hapus! 
						<button type="button" class="close" data-sismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
						</button>
						</div>');
		redirect('administrator/data_dokter');
	}
	
}