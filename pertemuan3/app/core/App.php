<?php

class App {
    public function __construct() {
        $url = $this->parseURL();
       var_dump($url);
    }

    // parsing URL
    public function parseURL() {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/'); // menghapus tanda slash di akhir
            $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan dari karakter2 yang memungkinkan hacker untuk membobol aplikasi kita
            $url = explode('/', $url); // pecah karakter2nya berdasarkan karakter slash
            return $url;
        }
    }
}