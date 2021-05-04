<?php

class LandingPage extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('landingpage/index');
    }
}
