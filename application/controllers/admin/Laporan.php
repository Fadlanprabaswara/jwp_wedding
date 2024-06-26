<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('message',  '<div class="alert alert-danger" role="alert"><strong>Upss </strong>Anda tidak memiliki Akses, silahkan login</div>');
            redirect('login');
        }    
        $this->load->model('pesanan_model');
    }        


	public function index()
	{


        $data = array(
            'title' => 'JeWepe Wedding Organizer',
            'page' => 'admin/laporan',
            'getAllLaporan'=> $this->pesanan_model->get_all_laporan()->result(),
            'PesananMenunggu'=> $this->pesanan_model->get_count_pesanan('requested')->num_rows(),
            'PesananDiterima'=> $this->pesanan_model->get_count_pesanan('approved')->num_rows(),
        );


		$this->load->view('admin/template/main',$data);
	}

    public function pdf(){
       $this->load->library('dompdf_gen');

       $data['laporan'] = $this->pesanan_model->tampil_data('tb_order')->result();

       $this->load->view('admin/laporan_pdf',$data);

       $paper_size ='F4';
       $orientation = 'potrait';
       $html = $this->output->get_output();
       $this->dompdf->set_paper($paper_size, $orientation);

       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("laporan_order.pdf", array('Attachment' =>0));
    }

}
