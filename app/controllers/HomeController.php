<?php

namespace app\controllers;

use app\classes\view;


class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($params = null)
    {
        $response = [
            'title' => 'SOA',
            'code' => 200
        ];
        view::render('user/home', $response);
    }
    
}
