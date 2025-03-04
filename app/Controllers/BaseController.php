<?php


namespace App\Controllers;


use PHPFrw\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->renderMenu();
//        if (!$menu = cache()->get('menu')){
//            cache()->set('menu', $this->renderMenu());
//        }
    }

    public function renderMenu(): string
    {
        return view()->renderPartial('incs/menu',[
            'categories' => [],
        ]);
    }

    public function renderProcedure(): string
    {
        $id = request()->get('step_id');
        if (!isset($id)){
            $id = 1;
        }
        return view()->renderPartial("incs/procedure/step_{$id}");
    }

}