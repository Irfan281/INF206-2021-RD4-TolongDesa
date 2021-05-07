<?php

class Masyarakat extends Controller
{
    public function index()
    {
        $this->registrasi();
    }

    public function registrasi()
    {
        if (isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        $this->view('templates/header');
        $this->view('masyarakat/registrasi');
    }

    public function login()
    {
        if (isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        $this->view('templates/header');
        $this->view('masyarakat/login');
    }

    public function tambah()
    {
        if ($this->model('Masyarakat_model')->cekEmail($_POST) > 0) {
            $_SESSION['registrasi'] = false;
            header('Location: ' . BASEURL . '/masyarakat/registrasi');
            exit;
        }
        if ($this->model('Masyarakat_model')->tambahDataMasyarakat($_POST) > 0) {
            $_SESSION['registrasi'] = true;
            header('Location: ' . BASEURL . '/masyarakat/login');
            exit;
        }
        header('Location: ' . BASEURL . '/masyarakat/registrasi');
        exit;
    }

    public function masuk()
    {
        if ($this->model('Masyarakat_model')->cekEmail($_POST) > 0) {
            header('Location: ' . BASEURL . '/home/index');
            exit;
        } else {
            $this->login();
        }
    }

    public function profil()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        $data = $this->model('Masyarakat_model')->getMasyarakatById($_SESSION['id']);
        $this->view('templates/header');
        $this->view('templates/sidebar-profil', [$_SESSION['nama'], $_SESSION['peran']]);
        $this->view('templates/navbar-profil');
        $this->view('masyarakat/profil', $data);
    }

    public function logout()
    {
    }
}
