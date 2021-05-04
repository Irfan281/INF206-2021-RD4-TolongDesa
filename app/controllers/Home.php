<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('home/index');
    }

    public function profil()
    {
        $this->view('templates/header');
        $this->view('masyarkat/profil');
    }
}
