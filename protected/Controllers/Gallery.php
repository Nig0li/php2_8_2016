<?php

namespace App\Controllers;

use App\Models\Image;
use T4\Mvc\Controller;

class Gallery
    extends Controller
{

    public function actionDefault()
    {
        $this->data->images = Image::findAll();
    }

}