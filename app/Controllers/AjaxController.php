<?php


namespace App\Controllers;

class AjaxController extends BaseController
{
    //TODO чтобы не запрашивать Все работы при любой странице сайта
    public function allWorks()
    {
        $where = "";
        $limit = "limit 9";
        $catId = request()->get('catId');
        $countClick = '';

        if (request()->get('countClick')){
            $countClick = request()->get('countClick');
            $startIndex = $countClick * 9;
            $limit = "limit $startIndex, 9";
        }

        if (!empty($catId)){
            $where = "where category_id = {$catId} and publish = 1";
        };

        $works = db()
            ->query("select `id`,`title`,`photoName`,`timeCreate`,`category_id`
                            from works
                            {$where}
                            order by timeCreate                        
                            DESC
                            {$limit}")
            ->get();
        foreach ($works as $k => $v) {
            $works[$k]['timeCreate'] = $this->date_ru($v['timeCreate']);
        }

        if (request()->isAjax()) {
            echo json_encode([
                'message' => $where,
                'status' => 'success',
                'worksPage' => $this->renderWorksByCategoryId($works),
                'countClick' => $countClick,
                'catId' => request()->get('catId')
            ]);
            die;
        }
        echo 'ошибка в worksByCategoryId()';die;
    }

    public function loadMore()
    {
        $where = "";
        $limit = "limit 9";
        $catId = request()->get('catId');
        $countClick = '';

        if (request()->get('countClick')){
            $countClick = request()->get('countClick');
            $startIndex = $countClick * 9;
            $limit = "limit $startIndex, 9";
        }

        if (!empty($catId)){
            $where .= "where category_id = {$catId} and publish = 1";
        };

        $works = db()
            ->query("select `id`,`title`,`photoName`,`timeCreate`,`category_id`
                            from works
                            {$where}
                            order by timeCreate                        
                            DESC
                            {$limit}")
            ->get();
        foreach ($works as $k => $v) {
            $works[$k]['timeCreate'] = $this->date_ru($v['timeCreate']);
        }

        empty($works) ? $status = false : $status = true;

        if (request()->isAjax()) {
            echo json_encode([
                'message' => $where,
                'status' => $status,
                'worksPage' => $this->renderWorksByCategoryId($works),
                'countClick' => $countClick,
                'catId' => request()->get('catId')
            ]);
            die;
        }
        echo 'ошибка в worksByCategoryId()';die;
    }

    public function worksByCategoryId()
    {
        $where = "";
        $limit = "limit 9";
        $catId = request()->get('catId');
        $countClick = '';

        if (request()->get('countClick')){
            $countClick = request()->get('countClick');
            $startIndex = $countClick * 9;
            $limit = "limit $startIndex, 9";
        }

        if (!empty($catId)){
            $where = "where category_id =  {$catId} and publish = 1";
        };

        $works = db()
            ->query("select `id`,`title`,`photoName`,`timeCreate`,`category_id`
                            from works
                            {$where}
                            order by timeCreate                        
                            DESC
                            {$limit}")
            ->get();
        foreach ($works as $k => $v) {
            $works[$k]['timeCreate'] = $this->date_ru($v['timeCreate']);
        }

        if (request()->isAjax()) {
            echo json_encode([
                'message' => $where,
                'status' => 'success',
                'worksPage' => $this->renderWorksByCategoryId($works),
                'countClick' => $countClick,
                'catId' => request()->get('catId')
            ]);
            die;
        }
        echo 'ошибка в worksByCategoryId()';die;
    }
}