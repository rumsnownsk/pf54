<?php

namespace App\Controllers;

use App\Models\Work;
use PHPFrw\Auth;
use PHPFrw\File;

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
        $works = db()->query("
            select works.id, works.title, works.photoName, works.timeCreate, publish.title as publish, categories.title as category
            from works
            join publish on works.publish=publish.publish_id
            join categories on works.category_id=categories.id
            order by id
            desc
            ")->get();
        foreach ($works as $k => $v) {
            $works[$k]['timeCreate'] = $this->date_ru($v['timeCreate']);
        }
        return view('admin/index', [
            'works' => $works
        ]);
    }

    public function create()
    {
        if (request()->isGet()){
            return view('admin/create',[
                'categories'=> db()->query("select * from categories")->get()
            ]);
        }

        $file = new File();

        $model = new Work();
        $model->loadData();
        $model->attributes['timeCreate'] = strtotime($model->attributes['timeCreate']);
        $model->attributes['publish'] = $model->attributes['publish'] ? 1 : 0;

        request()->isFileUploaded() ?? $model->attributes['photoName'] = $file->imageNameDb;

        if ($model->save()){
            $file->save();
        };

        response()->redirect('/admin');
    }

    public function build()
    {
        $id = get_route_param('id');
        $work = db()->findOrFail('works', $id);
        $categories = db()->query("select * from categories")->get();

        return view('admin/build', [
            'work' => $work,
            'categories' => $categories
        ]);
    }

    public function store(){
        $id = get_route_param('id');

        $work = new Work();
        $work->loadData();

        $work->attributes['timeCreate'] = strtotime($work->attributes['timeCreate']);
        $work->attributes['publish'] = $work->attributes['publish'] ? 1 : 0;

        if(request()->isFileUploaded()){
            $oldFileName = db()->query("select photoName from works where id = $id")->getOne();

            File::remove(IMAGES.'/works', $oldFileName['photoName']);
            $file = new File();
            $work->attributes['photoName'] = $file->imageNameDb;
            $file->save();
        };
        $work->update('works', $id);

        response()->redirect(base_url('/admin/build/'.$id));
    }

    public function remove(): void
    {
        $id = get_route_param('id');
        if ($work = db()->findOrFail('works', $id)){
            File::remove(IMAGES.'/works', $work['photoName']);
            db()->query("delete from works where id = {$id}");
        };
        response()->redirect('/admin');
    }

    public function resetId(){
        db()->query("ALTER TABLE works AUTO_INCREMENT = 1");
        db()->query('SET @i=0; UPDATE works SET id=(@i:=@i+1)');
        session()->setFlash('success', 'AUTO_INCREMENT has been reset');
        response()->redirect('/admin');
    }
}