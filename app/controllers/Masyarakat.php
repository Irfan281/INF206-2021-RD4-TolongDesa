<?php

class Masyarakat extends Controller
{
    public function index()
    {
        $this->registrasi();
    }

    public function registrasi()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        $this->view('templates/header');
        $this->view('masyarakat/registrasi');
    }

    public function login()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/home");
            exit;
        }
        $this->view('templates/header');
        $this->view('masyarakat/login');
    }

    public function tambah()
    {
        if ($this->model('Masyarakat_model')->tambahDataMasyarakat($_POST) > 0) {
            header('Location: ' . BASEURL . '/masyarakat/login');
            exit;
        } else {
            $this->index();
        }
    }

    public function masuk()
    {
        if ($this->model('Masyarakat_model')->cekEmailPassword($_POST) > 0) {
            header('Location: ' . BASEURL . '/home/index');
            exit;
        } else {
            $this->login();
        }
    }

    public function profil()
    {
        session_start();
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
