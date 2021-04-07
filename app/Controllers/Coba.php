<?php

namespace App\Controllers;

class Coba extends BaseController //tujuan base controller sebagai pusat pengaturan data class
//parent dari semua controller
{
     public function index()
     {
          echo __CLASS__;
          // echo "Hello world";
     }
     public function about($nama = '', $umur = 0)
     {
          // echo "Hallo nama Saya $this->nama";
          echo "Hallo nama Saya $nama , berumur $umur tahun";

          // echo "Hello world";
     }
}
