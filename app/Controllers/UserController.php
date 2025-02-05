<?php
namespace App\Controllers;

use App\Models\User;
use PHPFrw\Pagination;

class UserController extends BaseController
{


    public function index()
    {
//        if ($page = cache()->get(request()->rawUri)){
//            return $page;
//        }

        $users_cnt = db()->query("select count(*) from users")->getColumn();

        $limit = PAGINATION_SETTINGS['perPage'];
        $pagination = new Pagination($users_cnt);
        $users = db()->query("select * from users limit $limit offset {$pagination->getOffset()}")->get();

        return view('user/index',[
            'title' => 'all users',
            'users' => $users,
            'pagination' => $pagination,
            'menu' => $this->renderMenu()
        ]);
    }

    public function register()
    {
        return view('user/register', [
            'title' => 'register page',

        ]);
        //return "reg page";
    }

    public function login()
    {

        return view('user/login', [
            'title' => 'login page',
            'menu' => $this->renderMenu(),
            'styles' => [
                base_url('/assets/css/test.css'),
            ],
            'header_scripts' => [
                base_url('/assets/js/test.js'),
                base_url('/assets/js/test2.js'),
            ],
            'footer_scripts' => [
                base_url('/assets/js/test.js'),
                base_url('/assets/js/test3.js'),
            ]
        ]);
    }

    public function store()
    {
        $model = new User();
        $model->loadData();

        if (request()->isAjax()){
            echo json_encode([
                'status' => 'success',
                'data' => 'is all gooood. Your Id = ...'
            ]);
            die;
        }

        if(!$model->validate()){
            session()->setFlash('error', 'valid error');
            session()->set('form_errors', $model->getErrors());
            session()->set('form_data', $model->attributes);
        } else {
            $model->attributes['password'] = password_hash
            (
                $model->attributes['password'],
                PASSWORD_DEFAULT
            );
            if ($id = $model->save()){
                session()->setFlash('info', 'is all gooood. Your Id = '. $id);
            } else{
                session()->setFlash('error', 'error registration');
            };
        };
        responce()->redirect('/register');
    }



}