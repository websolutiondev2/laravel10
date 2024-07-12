<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;


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

     function urlhelpers()
    {

        $action = action([UserController::class,'fluentStringHelpers']);
        print_r($action);

        
    }

    function httpclientCurl()
    {
        $curl = curl_init();
        curl_setopt_array($curl,[
            CURLOPT_URL => 'https://reqres.in/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 1000,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            
        ]);
        $respone = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if($err)
        {
            return ["error"=>true , "msg"=>$err];

        }

        $respone = json_decode($respone,true);
        return $respone;
    }


    function httpClient()
    {

        $response = Http::get('https://reqres.in/api/users');
                // $statusCode = $response->status();
                // $headers = $response->headers();
                $body = $response->body();
                // $json = $response->json();
                // dd($json);

        // return $response;

        // return Count($response);
        if ($response->successful()) {
            $users = $response->json();
    
            foreach ($users['data'] as $user) {

                echo "Name: {$user['first_name']} - Email: {$user['email']}". PHP_EOL;

            }
        } else {
            echo "Error: {$response->status()} - {$response->reasonPhrase()}". PHP_EOL;
        }
        
    }

    function loginmethod(Request $request)
    {
        $requestData = $request->all();
        echo '<pre>';
        print_r($requestData);
        echo 'working';
        
    }   

    public function sessionmethod(Request $request)
    {
        // Store data in Session
        $request->session()->put('Course', 'Laravel');
        // global Helper
        session(['course_using_global_helper'=>'advanced PHP']);

        // Retrive session data
        // Retrive data with specific key using key instance
        $course = $request->session()->get('course_using_global_helper1','no data found');               
        echo "Course: $course <br>";
        // Retrive data with specific key using global helper
        $data = session('Course','No data found!');
        echo  $data ."<br>";
        // Retrive all session data
        $allData = $request->session()->all();
        echo "<pre>";
        print_r($allData);
    }
    
}
