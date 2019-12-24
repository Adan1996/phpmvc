<?php

// ini adalah class utama
class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
    
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        // instansiasi class modelnya
        return new $model;
    }
}