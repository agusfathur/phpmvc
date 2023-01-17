<?php


class About extends Controller{

    public function index($nama = 'Agus Fathur', $pekerjaan = "Mahasiswa", $umur = 18)
    {   
    
        $data['judul'] = 'About me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {   
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}