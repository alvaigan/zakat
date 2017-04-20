<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController.php extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
      $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
      return view('login');
    }

    public function username()
    {
      return 'username';
    }
}
