<?php

class Home extends Controller {
    
    public function index() {
        $data["judul"] = 'Home';
        // data nama berisi Class User_model yang menjalankan method getUser() yang berada di folder model
        $data["nama"] = $this->model('User_model')->getUser();
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}