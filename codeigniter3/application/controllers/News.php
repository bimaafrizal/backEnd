<?php
defined('BASEPATH') or exit('No direct script access allowed');
class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    }

    public function index()
    {
        $news = $this->News_model->get_all();
        $data =  array(
            'data_news' => $news,

        );
        $this->load->view('news/list_news', $data);
    }


    public function list_berita()
    {
        $news = $this->News_model->get_all();
        $data =  array(
            'data_news' => $news,

        );
        $this->load->view('news/list_news', $data);
    }


    public function add_data_news()
    {
        $this->load->view('news/add_news');
    }

    public function save()
    {

        if (isset($_POST['kirim'])) {
            $judul = $this->input->post('judul'); // Di Lempar dari View
            $berita = $this->input->post('berita');

            if ($judul and $berita) {
                $data = [
                    'title' => $judul,
                    'text' => $berita,
                ];

                /* echo $data['title']; echo "<br>";
						echo $data['text']; */

                $this->News_model->insert_data($data);
            }
            redirect('news');
        }
    }

    public function update($id)
    {

        $row = $this->News_model->get_by_id($id);
        if ($row) {
            $data = array(

                'id' => $row->id,
                'title' => $row->title,
                'text' =>  $row->text,
            );
        }

        $this->load->view('news/update_news', $data);
    }

    public function proses_update()
    {

        if (isset($_POST['kirim'])) {
            $id = $this->input->post('id');
            $judul = $this->input->post('judul'); // Di Lempar dari View
            $berita = $this->input->post('berita');

            if ($judul and $berita and $id) {
                $data = [
                    'id' => $id,
                    'title' => $judul,
                    'text' => $berita,
                ];

                /* echo $data['title']; echo "<br>";
						echo $data['text']; */

                $this->News_model->update_data($id, $data);
            }
            redirect('news');
        }
    }

    public function hapus_berita($id)
    {
        $row = $this->News_model->get_by_id($id);
        if ($row) {
            $this->News_model->hapus_data($id);

            redirect('news');
        } else {

            redirect(site_url('news'));
        }
    }
}
