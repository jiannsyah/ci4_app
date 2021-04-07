<?php

namespace App\Controllers;

class Pages extends BaseController
{
     public function index()
     {
          $data = [
               'title' => ' Home | DIS32',
               'tes' => ['satu', 'dua', 'tiga']
          ];
          echo view('layout/header', $data); //home.php dalam folder views
          echo view('pages/home', $data); //home.php dalam folder views
          echo view('layout/footer'); //home.php dalam folder views
     }
     public function about()
     {
          $data = [
               'title' => ' About me | DIS32'
          ];

          echo view('layout/header', $data); //home.php dalam folder views
          echo view('pages/about');
          echo view('layout/footer'); //home.php dalam folder views
     }
}
