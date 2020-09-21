<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_produk;
 
class Login extends Controller
{
    public function index()
    {      
        echo view('login_view');
    }
}