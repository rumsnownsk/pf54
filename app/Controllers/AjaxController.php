<?php


namespace App\Controllers;


class AjaxController extends BaseController
{
    public function worksById()
    {
        $cat_id = request()->get('category_id');
        $works = db()
            ->query("select `id`,`title`,`photoName`,`created_at`  from works where category_id = $cat_id order by created_at DESC")
            ->get();
        foreach ($works as $k => $v) {
            $works[$k]['created_at'] = $this->date_ru($v['created_at']);
        }
//            dump($works);
//        dd($works);
//        die;
        if (request()->isAjax()) {
            echo json_encode([
//                'id' => $cat_id,
                'status' => 'success',
                'works' => $this->renderWorksByCategoryId($works)

            ]);
            die;
        }
        echo 'ошибка в worksById()';die;
//        echo 'upa';die;
    }
}