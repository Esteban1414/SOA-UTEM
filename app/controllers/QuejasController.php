<?php

namespace app\controllers;

use app\models\quejas;
use app\classes\redirect;
use app\classes\view;


class QuejasController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function createQuejas()
    {
        $quejas = new quejas;
        $data = filter_input_array(sanitizeString(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS));
        if (!empty($data)) {
            $res = $quejas->addQuejas($data);
            if ($res === false) {
            } else {
                echo json_encode(["r" => true]);
            }
        } else {
            echo json_encode(["r" => 'e']);
            exit();
        }
    }

    public function index($params = null)
    {
        $response = [
            'title' => 'SOA',
            'code' => 200
        ];
        view::render('user/quejas', $response);
    }
}
