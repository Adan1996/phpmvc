<?php

class About {
    public function index($nama = 'Nama', $pekerjaan = 'Pekerjaan') {
        echo "Halo, nama saya $nama, saya seorang $pekerjaan";
    }

    public function page() {
        echo 'about/page';
    }
}