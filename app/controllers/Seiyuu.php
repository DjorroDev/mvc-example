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
        // Since uploaded image not from POST need to added new data
        $image = $this->upload();

        try {
            //code...
            if ($this->model('Seiyuu_model')->addDataSeiyuu($_POST, $image) > 0) {
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

    public function getchange()
    {
        // var_dump(($this->model('Seiyuu_model')->getSeiyuuById($_POST['id'])));
        echo json_encode($this->model('Seiyuu_model')->getSeiyuuById($_POST['id']));
    }

    public function change()
    {
        $image = $this->upload();

        try {
            if ($this->model('Seiyuu_model')->changeDataSeiyuu($_POST, $image) > 0) {
                Flasher::setFlash('has been', 'changed', 'success');
                header('Location:' . BASEURL . '/seiyuu');
                exit;
            } else {
                Flasher::setFlash('failed to', 'changed', 'danger');
                header('Location:' . BASEURL . '/seiyuu');
                exit;
            }
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function search()
    {
        $data['judul'] = 'Seiyuu List';

        try {
            $data['seiyuu'] = $this->model('Seiyuu_model')->searchSeiyuu();
        } catch (\Throwable $th) {
            throw $th;
        }

        $this->view('templates/header', $data);
        $this->view('seiyuu/index', $data);
        $this->view('templates/footer');
    }

    public function upload()
    {
        $name = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];

        if ($error === 4) {
            return '';
        }

        $format = pathinfo($name, PATHINFO_EXTENSION);

        $newName = uniqid();
        $newName .= '.';
        $newName .= $format;


        move_uploaded_file($tmpName, 'img/people/' . $newName);
        return $newName;
    }
}
