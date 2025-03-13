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
//            'categories' => [],
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

    public function renderWorksByCategoryId($works): string
    {
        return view()->renderPartial("incs/listWorks", [
            'works' => $works
        ]);
    }

    protected function date_ru($timestamp, $show_time = false): string
    {
        if (empty($timestamp)){
            return '-';
        } else {
            $value = explode(' ', date('Y n j H i', $timestamp));
            $month = array(
                '', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
            );
            $out = $value[2] . ' ' . $month[$value[1]] . ' ' . $value[0];
            if ($show_time) {
                $out .= ' в ' . $value[3] . ':' . $value[4];
            }
            return $out;
        }
    }

}