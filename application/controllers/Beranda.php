<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    PUBLIC function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('katalog_model');
        $this->load->model('pesanan_model');
        $this->load->helper('text'); //helper utk word_limiter()
    }

	public function index()
	{


        $data = array(
            'title' => 'JeWepe Wedding Organizer',
            'page' => 'landing/beranda',
            'getAllKatalog'=> $this->katalog_model->get_all_katalog_landing()->result()
        );


		$this->load->view('landing/template/sites',$data);
	}

    public function detail()
    {
        if($this->input->get('id'))
        {
            $cek_data = $this->katalog_model->get_katalog_by_id($this->input->get('id'))->num_rows();

            if($cek_data > 0)
            {
                $data =  array
                (
                    'title' => 'JeWePe Wedding Organizer',
                    'page' => 'landing/detail',
                    'katalog' => $this->katalog_model->get_katalog_by_id($this->input->get('id'))->row()
                );
                $this->load->view('landing/template/sites', $data);
            } else {
              redirect('/');
            }
        } else {
            redirect('/');
        }
    }

    public function pesan() 
    {
        if($this->input->post())
        {
            $post = $this->input->post();
            $cek_data = $this->pesanan_model->cek_data_pesanan($post['id'], $post['name'], $post['email'], $post['wedding_date'])->num_rows();

            if($cek_data == 0)
            {
                //var_dump($post);
                //die;

                $datetime = date("Y-m-d  H:i:s");

                $data =  array 
                (
                    'catalogue_id' => $post['id'],
                    'name' => $post['name'],
                    'email' => $post['email'],
                    'phone_number' => $post['phone_number'],
                    'wedding_date' => $post['wedding_date'],
                    'status' => 'requested',
                    'created_at' => $datetime

                );

                $insert = $this->pesanan_model->insert($data);

                if($insert)
                {
                    $this->session->set_flashdata('message', '<div class="alert  alert-success alert-dismissible fade show "
                    role="alert"><strong>Success </strong>Terima Kasih, Permintaan Pesanan anda telah kami terima. Silahkan tunggu konfirmasi
                    kami melalui email.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>');
                    redirect('Beranda/detail?id='. $post['id']);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert  alert-danger alert-dismissible fade show "
                    role="alert"><strong>Success </strong>Maaf, Permintaan Pesanan Gagal!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>');
                    redirect('Beranda/detail?id='. $post['id']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert  alert-warning alert-dismissible fade show "
                    role="alert"><strong>Success </strong>Maaf, Paket dan tanggal pernikahan sudah anda pesan sebelumnya, silahkan tunggu
                    konfirmasi dari kami. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>');
                    redirect('Beranda/detail?id='. $post['id']);
            }
        } else {
            redirect('Beranda');
        }
    }
}
