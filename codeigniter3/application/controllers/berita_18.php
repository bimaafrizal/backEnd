<?php
defined('BASEPATH') or exit('No direct script access allowed');

class berita_18 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $news = $this->Berita_model->data_berita();
        $data = array(
            'isi_berita' => $news,
        );

        $this->load->view('berita/list_data', $data);
    }
}
