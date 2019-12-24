<?php

// ini adalah class utama
class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    } 
}