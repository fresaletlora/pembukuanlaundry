<?php

class Register extends CI_Controller{

    public function index()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('register_form');
        }else{
            $nama                   = $this->input->post('nama');
            $username               = $this->input->post('username');
            $alamat                 = $this->input->post('alamat');
            $no_telp	            = $this->input->post('no_telp');
            $no_ktp                 = $this->input->post('no_ktp');
            $password               = md5($this->input->post('password'));
            $role_id                = '2';

            $data = array (
                'nama'          => $nama,
                'username'      => $username,
                'alamat'        => $alamat,
                'no_telp'	    => $no_telp,
                'password'      => $password,
                'role_id'       => $role_id,
            );

            $this->rental_model->insert_data($data,'user');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Berhasil Daftar, Silahkan Login!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            redirect('register/register_success');
        }


    }

	public function register_success()
	{
            $this->load->view('account_created');
	}

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telp','No. Telepon','required');
        $this->form_validation->set_rules('password','Password','required');
    }
}

?>
