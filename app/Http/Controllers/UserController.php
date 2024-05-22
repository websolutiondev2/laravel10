<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Http\Controllers\UserController;


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
        $arr_add = Arr::add($arr,'6','Codigniter');     //Add Element into an array
        $as = Arr::collapse([$s_arr,$arr]);         //Array Collapse to join two arrays
        $arr_cross = Arr::crossJoin($arr,$s_arr);   //Array Crossjoin
        
        echo "<pre>";
        // var_dump($accessible);
        print_r($arr_cross);
        exit;
    }

    public function stringHelpers()
    {

        $classstring= class_basename("App\Http\Controllers\UserController");
        $string = "This event will be start form :start and end on :end.  :total";
        $replaced = preg_replace_array('/:[a-z_]+/',['8:30','9:30','12:45'],$string);
        $slice = Str::afterLast('App\Http\Controllers\UserController','\\');
        echo"<pre>";
        print_r($slice);
        exit();

    }

    public function fluentStringHelpers()
    {
        $str="Welcome to learnvearn";
        $str=Str::lower($str);
        $str=Str::ucfirst($str);
        $str=Str::title($str);

        echo $str;
    }

    function urlHelpers()
    {
        $action = action(UserController::class. '@fluentStringHelpers');
        return $action;
    }
}
