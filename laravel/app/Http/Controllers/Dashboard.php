<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
  public function index()
  {
      $data['result_uang'] = \App\Muzaqi_uang::count();
      $data['result_beras'] = \App\Muzaqi_beras::count();
      return view("template/dashboard")->with($data);
  }

  public function tentang()
  {
      return view("template/tentang");
  }
}
