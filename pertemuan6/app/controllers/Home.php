<?php

class Home extends Controller {
    
    public function index() {
        // method view ini disimpan dicontroller yang ada di folder core
        $data["judul"] = 'Home'; // judul yang dinamis
        
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}