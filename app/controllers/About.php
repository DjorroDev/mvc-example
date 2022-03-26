<?php  

class About extends Controller {

    public function index($angka = '59')
    {
        $data['angka'] = $angka;
        $data['judul'] = 'About Page';
        $this->view('templates/header', $data );
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }

    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data );
        $this->view('about/page');
        $this->view('templates/footer');

    }
}