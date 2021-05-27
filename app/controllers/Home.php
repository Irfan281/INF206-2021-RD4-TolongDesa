<?php

class Home extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
    }

    public function index()
    {
        $data = $this->model('MintaTolong_model')->getAllData();
        for ($i = 0; $i <= count($data) - 1; $i++) {
            $data[$i]['tags'] = explode(", ", $data[$i]['tags']);
        }
        $data['data_poin'] = $this->model('Masyarakat_model')->getOrderedPoin();
        $this->view('templates/header');
        $this->view('templates/sidebar-beranda', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-beranda');
        $this->view('home/index', $data);
    }

    public function mintaTolong()
    {
        $this->view('templates/header');
        $this->view('templates/sidebar-kosong', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-kosong');
        $this->view('home/mintatolong');
    }

    public function tambahForm()
    {
        if ($this->model('MintaTolong_model')->tambahData($_POST) > 0) {
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            $this->index();
        }
    }

    public function detail($id_mintatolong)
    {
        $data = $this->model('MintaTolong_model')->getDataById($id_mintatolong);
        $data['tags'] = explode(", ", $data['tags']);
        $data['penolong'] = $this->model('Menolong_model')->getPenolong($id_mintatolong)['penolong'];
        $this->view('templates/header');
        $this->view('templates/sidebar-kosong', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-kosong');
        $this->view('home/detail', $data);
    }

    public function riwayat()
    {
        $data['minta_tolong'] = $this->model('Mintatolong_model')->getRiwayat($_SESSION['id']);
        for ($i = 0; $i <= count($data['minta_tolong']) - 1; $i++) {
            if ($data['minta_tolong'][$i]['status'] != 'belum') {
                $data['minta_tolong'][$i]['penolong'] = $this->model('Menolong_model')->getPenolong($data['minta_tolong'][$i]['id_mintatolong'])['penolong'];
            }
        }
        $data['menolong'] = $this->model('Menolong_model')->getRiwayat($_SESSION['id']);
        $this->view('templates/header');
        $this->view('templates/sidebar-riwayat', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-riwayat');
        $this->view('home/riwayat', $data);
    }

    public function menolong($id_mintatolong)
    {
        if ($this->model('Menolong_model')->tambahData($id_mintatolong, $_SESSION["id"]) > 0) {
            if ($this->model('MintaTolong_model')->setStatus($id_mintatolong, 'proses') > 0) {
                header('Location: ' . BASEURL . '/home/detail/' . $id_mintatolong);
                exit;
            }
        }
    }
}
