<?php

class Seiyuu extends Controller
{
    public function index()
    {

        $data['judul'] = 'Seiyuu List';
        $data['seiyuu'] = $this->model('Seiyuu_model')->getSeiyuu();
        $this->view('templates/header', $data);
        $this->view('seiyuu/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Seiyuu List';

        $data['seiyuu'] = $this->model('Seiyuu_model')->getSeiyuuById($id);
        $this->view('templates/header', $data);
        $this->view('seiyuu/detail', $data);
        $this->view('templates/footer');
    }
}
