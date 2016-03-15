<?php

namespace App\Controllers;

use T4\Mvc\Controller;
use App\Models\History;
use App\Models\News;

class Admin
    extends Controller
{

    public function actionDefault()
    {
        $this->data->news = News::findAll();
        $this->data->history = History::findByPK(1);
    }

    public function actionEdit()
    {
        $this->data->history = History::findByPK(1);
        if (isset($_POST['edit'])) {
            if (empty((int)$_POST['id'])) {
                $article = new History();
            } else {
                $article = History::findByPK((int)$_POST['id']);
            }
            $this->data->history = $article->fill($this->app->request->post);
        }
        if (isset($_POST['save'])) {
            if (empty((int)$_POST['id'])) {
                $article = new History();
            } else {
                $article = History::findByPK((int)$_POST['id']);
            }
            $article->fill($this->app->request->post);
            $article->save();
            header('Location: /admin.html');
        }
    }

}