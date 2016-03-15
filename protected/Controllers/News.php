<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class News
    extends Controller
{

    public function actionDefault()
    {

        $this->data->news = \App\Models\News::findAll();
    }
}