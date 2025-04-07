<?php

namespace App\Controllers;


use JetBrains\PhpStorm\Pure;
use PHPFrw\Auth;

class AdminController extends BaseController
{
    public function __construct()
    {
        if (!Auth::isAuth()) {
            session()->setFlash('error', 'нужно зарегаться');
            response()->redirect(base_url('/'));
        } else if (Auth::isAuth() && Auth::getRole() == 0) {
            session()->setFlash('error', 'Доступ для вас закрыт');
            session()->remove('user');
            response()->redirect(base_url('/'));
        }
        $this->changeLayout('adminLayout');
    }


    public function index(): string
    {
        $works = db()->query("select `id`, `title`, `photoName`, `created_at` from works order by id desc")->get();
        foreach ($works as $k => $v) {
            $works[$k]['created_at'] = $this->date_ru($v['created_at']);
        }
        return view('admin/index', [
            'works' => $works
        ]);
    }

    public function edit()
    {
        $id = request()->get('id');
        $work = db()->query("select `id`, `title`, `photoName`, `created_at` from works where id = {$id}")->get();
        dd($work);
    }
}