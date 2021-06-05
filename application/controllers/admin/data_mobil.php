<?php

class Data_mobil extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
           </div>');
           redirect('auth/login');
        }
    }
    
    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('produk')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_mobil',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_mobil();
        }else{
            $nama_produk                       = $this->input->post('nama_produk');
            $no_plat                    = $this->input->post('no_plat');
            $warna                      = $this->input->post('warna');
            $tahun                      = $this->input->post('tahun');
            $status                     = $this->input->post('status');
            $harga_sewa                 = $this->input->post('harga_sewa');
            $denda                      = $this->input->post('denda');
            $transmisi                  = $this->input->post('transmisi');
            $gambar                     = $_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config ['upload_path']     =   './assets/upload';
                $config ['allowed_types']   =   'jpg|jpeg|png|tiff';
            
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Mobil Gagal Diupload!";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_produk'          =>  $nama_produk,
                'no_plat'       =>  $no_plat,
                'tahun'         =>  $tahun,
                'warna'         =>  $warna,
                'status'        =>  $status,
                'harga_sewa'    =>  $harga_sewa,
                'denda'         =>  $denda,
                'transmisi'     =>  $transmisi,
                'gambar'        =>  $gambar
            );

            $this->rental_model->insert_data($data,'mobil');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Mobil Berhasil Ditambahkan!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            redirect('admin/data_mobil');
        }
    }

    public function update_mobil($id){
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->db->query("SELECT * FROM mobil WHERE id_mobil='$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_mobil',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_mobil_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE)
        {
            $this->update_mobil();
        }else{
            $id                         = $this->input->post('id_mobil');
            $merk                       = $this->input->post('merk');
            $no_plat                    = $this->input->post('no_plat');
            $warna                      = $this->input->post('warna');
            $tahun                      = $this->input->post('tahun');
            $status                     = $this->input->post('status');
            $harga_sewa                 = $this->input->post('harga_sewa');
            $denda                      = $this->input->post('denda');
            $transmisi                  = $this->input->post('transmisi');
            $gambar                     = $_FILES['gambar']['name'];
            if($gambar){
                $config ['upload_path']     =   './assets/upload';
                $config ['allowed_types']   =   'jpg|jpeg|png|tiff';
            
                $this->load->library('upload', $config);
                
                if($this->upload->do_upload('gambar')){
                    $gambar=$this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $data = array (
                'merk'          =>  $merk,
                'no_plat'       =>  $no_plat,
                'tahun'         =>  $tahun,
                'warna'         =>  $warna,
                'status'        =>  $status,
                'harga_sewa'    =>  $harga_sewa,
                'denda'         =>  $denda,
                'transmisi'     =>  $transmisi,
            );

            $where = array (
                'id_mobil' => $id
            );

            $this->rental_model->update_data('mobil',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Mobil Berhasil Diupdate!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            redirect('admin/data_mobil');
        }

    }

    public function _rules()
    {
        $this->form_validation->set_rules('merk','Merk','required');
        $this->form_validation->set_rules('no_plat','No. Plat','required');
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('warna','Warna','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('harga_sewa','Harga_sewa','required');
        $this->form_validation->set_rules('denda','Denda','required');
        $this->form_validation->set_rules('transmisi','transmisi','required');
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_mobil',$data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_mobil($id){
        $where = array('id_mobil' => $id);
        $this->rental_model->delete_data($where,'mobil');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data Mobil Berhasil Dihapus!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/data_mobil');
    }
}
?>
