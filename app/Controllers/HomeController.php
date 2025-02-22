<?php
namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string|\PHPFrw\View
    {
        $lastWorks = db()->query("select * from works order by id desc limit 3")->get();
        return view('home', [
            'title'=>' :: Главная',
            'menu' => $this->renderMenu(),
            'lastWorks' => $lastWorks
        ]);
    }

    public function law(): string|\PHPFrw\View
    {
        return view('law', [
            'title' => ' :: Закон',
            'menu' => $this->renderMenu()
        ]);
    }

    public function service(): string|\PHPFrw\View
    {
        return view('service', [
            'title' => ' :: Дополнительные услуги',
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