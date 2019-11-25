<?php
class About
{
    public function index($nama = "admin", $pekerjaan = "admin")
    {
        echo "Halo, Nama Saya $nama, Saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
