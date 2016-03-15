<?php

namespace App\Controllers;

use App\Models\History;
use T4\Mvc\Controller;

class About
    extends Controller
{
    public function actionDefault()
    {
        $this->data->article = History::findByPK(1);
    }

}