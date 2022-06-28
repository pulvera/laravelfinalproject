<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }
    public function delete()
    {
        return view('delete');
    }
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function registered()
    {
        return view('registered');
    }
    public function SQLConnect()
    {
        return view('SQLConnect');
    }
    public function update()
    {
        return view('update');
    }
    public function editupdate()
    {
        return view('editupdate');
    }
    public function add()
    {
        return view('add');
    }

    
   
}
