<?php

class Home extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        $this->view('templates/header');
        $this->view('templates/sidebar-beranda');
        $this->view('templates/navbar-beranda');
        $this->view('home/index');
    }

    public function profil()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        $this->view('templates/header');
        $this->view('masyarkat/profil');
    }

    public function mintatolong()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . "/masyarakat/login");
            exit;
        }
        $this->view('templates/header');
        $this->view('templates/sidebar-kosong');
        $this->view('templates/navbar-kosong');
        $this->view('home/mintatolong');
    }
}
