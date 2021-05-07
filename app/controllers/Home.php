<?php

class Home extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        $data = $this->model('MintaTolong_model')->getAllData();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['tags'] = explode(", ", $data[$i]['tags']);
        }
        $this->view('templates/header');
        $this->view('templates/sidebar-beranda', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-beranda');
        $this->view('home/index', $data);
    }

    public function mintaTolong()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        $this->view('templates/header');
        $this->view('templates/sidebar-kosong', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-kosong');
        $this->view('home/mintatolong');
    }

    public function tambahForm()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        if ($this->model('MintaTolong_model')->tambahData($_POST) > 0) {
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            $this->index();
        }
    }
}
