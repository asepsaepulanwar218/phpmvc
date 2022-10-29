<?php

class About {

    public function index($nama = 'Asep Saepul', $pekerjaan = 'QA') {
        echo "Hai, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() {
        echo 'about/page';
    }
}