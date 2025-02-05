<?php
namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home', [
            'title'=>'Home page',
            'menu' => $this->renderMenu()
        ]);
    }

    public function dashboard()
    {

        return view('dashboard', [
            'title'=>'dashboard'
        ]);
    }

    public function contact()
    {
        return "contact page";
    }


}