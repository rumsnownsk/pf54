<?php
namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $lastWorks = db()->query("select * from works order by id desc limit 3")->get();
        return view('home', [
            'title'=>'Home page',
            'menu' => $this->renderMenu(),
            'lastWorks' => $lastWorks
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