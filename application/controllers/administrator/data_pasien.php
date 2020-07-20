<?php

Class data_pasien extends CI_Controller{
	public function index() 
	{
		$data['data_pasien']	=$this->data_pasien_model->tampil_data('data_pasien')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_pasien',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_data_pasien()
	{
		$data['data_pasien']  = $this->data_pasien_model->tampil_data('data_pasien')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_pasien_form',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_data_pasien_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_data_pasien();
		}else{
			$nama_pasien		= $this->input->post('nama_pasien');
			$gender				= $this->input->post('gender');
			$gol_darah			= $this->input->post('gol_darah');
			$tempat_lahir		= $this->input->post('tempat_lahir');
			$tanggal_lahir		= $this->input->post('tanggal_lahir');
			$penanggung_jawab	= $this->input->post('penanggung_jawab');
			$alamat				= $this->input->post('alamat');
			$no_hp				= $this->input->post('no_hp');
			$data = array(
				'nama_pasien' 		=> $nama_pasien,
				'gender' 			=> $gender,
				'gol_darah' 		=> $gol_darah,
				'tempat_lahir' 		=> $tempat_lahir,
				'tanggal_lahir' 	=> $tanggal_lahir,
				'penanggung_jawab' 	=> $penanggung_jawab,
				'alamat' 			=> $alamat,
				'no_hp' 			=> $no_hp,
				);

			$this->data_pasien_model->insert_data($data,'data_pasien');

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
						Data Pasien berhasil Ditambahkan! 
						<button type="button" class="close" data-sismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
						</button>
						</div>');
				redirect('administrator/data_pasien');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_pasien','nama pasien','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('gender','gender','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('gol_darah','gol darah','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('tempat_lahir','tempat lahir','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('penanggung_jawab','penanggung_jawab','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('alamat','alamat','required',[
			'required' => 'Wajib Di Isi!'
		]);
		$this->form_validation->set_rules('no_hp','no_hp','required',[
			'required' => 'Wajib Di Isi!'
		]);
	}

	public function detail($rekam)
	{
		$data['detail'] = $this->data_pasien_model->ambil_no_rekam_medis($rekam);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_pasien_detail',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function update($rekam)
	{
		$where= array('no_rekam_medis' => $rekam);
		$data['data_pasien']= $this->data_pasien_model->edit_data($where, 'data_pasien')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/data_pasien_update',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function update_aksi($rekam)
	{
		$rekam = $this->input->post('no_rekam_medis');
		$nama_pasien = $this->input->post('nama_pasien');
		$gender = $this->input->post('gender');
		$gol_darah = $this->input->post('gol_darah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$penanggung_jawab = $this->input->post('penanggung_jawab');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'nama_pasien' => $nama_pasien,
			'gender' => $gender,
			'gol_darah' => $gol_darah,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'penanggung_jawab' => $penanggung_jawab,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);
		$where = array(
			'no_rekam_medis' => $rekam
		);

		$this->data_pasien_model->update_data($where,$data,'data_pasien');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
						Data Pasien berhasil Di Update! 
						<button type="button" class="close" data-sismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
						</button>
						</div>');
		redirect('administrator/data_pasien');
	}

	public function delete($rekam)
	{
		$where = array('no_rekam_medis' => $rekam);
		$this->data_pasien_model->hapus_data($where,'data_pasien');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
						Data Pasien berhasil Di Hapus! 
						<button type="button" class="close" data-sismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
						</button>
						</div>');
		redirect('administrator/data_pasien');
	}
	
}