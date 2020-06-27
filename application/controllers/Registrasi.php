<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registrasi extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('nama','Nama','required', array(
				'required'		=> '%s harus diisi.'
		));
		
 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user.email]', array(
                'required'      => '%s harus diisi.',
                'is_unique'     => '%s sudah terdaftar.'
        )
);

		$this->form_validation->set_rules('password_1','Password','trim|required|min_length[6]|max_length[12]|matches[password_2]',  array(
				'required'		=> '%s harus diisi.',
				'matches'		=> '%s harus sama',
				'min_length'	=> '{field} tidak boleh kurang dari {param} karakter'
		));
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');

		if($this->form_validation->run() == FALSE) {
		$this->load->view('registrasi');
	}else {
		$data = array(
			'id_user'		=> '',
			'nama'		=> $this->input->post('nama'),
			'email'		=> $this->input->post('email'),
			'password'	=> $this->input->post('password_1'),
			'role_id'	=> 2,
			 'is_active' =>1,
			'data_created' => time()
		);

		$this->db->insert('tb_user',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat akun anda berhasil dibuat!</strong><br> Silahkan Login !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('auth');
	}
	}
}