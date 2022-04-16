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

    public function add()
    {
        try {
            //code...
            if ($this->model('Seiyuu_model')->addDataSeiyuu($_POST) > 0) {
                Flasher::setFlash('has been', 'added', 'success');
                header('Location:' . BASEURL . '/seiyuu');
                exit;
            } else {
                Flasher::setFlash('failed to', 'added', 'danger');
                header('Location:' . BASEURL . '/seiyuu');
                exit;
            }
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function delete($id)
    {
        try {
            if ($this->model('Seiyuu_model')->deleteDataSeiyuu($id) > 0) {
                Flasher::setFlash('has been', 'deleted', 'success');
                header('Location:' . BASEURL . '/seiyuu');
                exit;
            } else {
                Flasher::setFlash('failed to', 'deleted', 'danger');
                header('Location:' . BASEURL . '/seiyuu');
                exit;
            }
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}
