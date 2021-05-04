<?php

class Masyarakat extends Controller
{
    public function index()
    {
        $this->registrasi();
    }

    public function registrasi()
    {
        $this->view('templates/header');
        $this->view('masyarakat/registrasi');
    }

    public function login()
    {
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
        $this->view('templates/header');
        $this->view('masyarakat/profil');
    }

    public function logout()
    {
    }
}
