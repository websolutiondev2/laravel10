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

        $s_arr=[
            'S90',
            'BMW',
            'SCODA',
            'BUGATI'
        ];

        $str = "Welcome to LearnVern.";
        $bjt = new \stdClass();
        $collection =   new  Collection;
        $accessible = Arr::accessible($arr);
        $arr_add = Arr::add($arr,'6','Codigniter');
        $as = Arr::collapse([$s_arr,$arr]);
        $arr_cross = Arr::crossJoin($arr,$s_arr);

        echo "<pre>";
        // var_dump($accessible);
        print_r($arr_cross);
        exit;
    }
}
