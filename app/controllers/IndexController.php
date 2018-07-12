<?php

namespace App\controllers;

use App\base\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $aData['page_title'] = 'SDVmvc framework';
        $aData['page_keywords'] = 'php, mvc, framework';
        $aData['page_description'] = 'SDVmvc framework';

        view('index.index', $aData);
    }
}