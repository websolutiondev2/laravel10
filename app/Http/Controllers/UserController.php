<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    //
    public function arrayHelpers()
    {
        $arr = [
            'Core PHP',
            'Laravel',
            'React',
            'Advance PHP',
            'Wordpress',
            'Angular JS'
        ];

        $str = "Welcome to LearnVern.";
        $bjt = new \stdClass();
        $collection =   new  Collection;
        $accessible = Arr::accessible($arr);
        $arr_add = Arr::add($arr,'6','Codigniter');
        echo "<pre>";
        // var_dump($accessible);
        print_r($arr_add);
        exit;
    }
}
