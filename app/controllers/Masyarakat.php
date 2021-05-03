<?php

class Masyarakat extends Controller
{
    public function index()
    {
        $this->registrasi();
    }

    public function registrasi()
    {
        $this->view('masyarakat/registrasi');
    }

    public function login()
    {
        $this->view('masyarakat/login');
    }

    public function tambah()
    {
        if ($this->model('Masyarakat_model')->tambahDataMasyarakat($_POST) > 0) {
            header('Location: ' . BASEURL . '/masyarakat/login');
            exit;
        }
    }
}
