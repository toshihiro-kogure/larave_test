<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $sort = $request->input('sort');
        $arr = $request->input('array');
        $array = explode(",",$arr);
        $inint = $request->input('int');
        $max = $array[0];
        $temp = 0;
        $time_start = microtime(true);
        
        for ($e = $inint; $e >= 2; $e--) {
           
            for ($i = 1; $i <= $inint; $i++) {
                if($i < count($array)){
                    //昇順
                    if($sort == "1"){
                        if ($array[$i-1] > $array[$i]) {
                            $temp = $array[$i];
                            $array[$i] = $array[$i-1];
                            $array[$i-1] = $temp;
                        }               
                    }else{
                    //降順
                        if ($array[$i-1] < $array[$i]) {
                            $temp = $array[$i];
                            $array[$i] = $array[$i-1];
                            $array[$i-1] = $temp;
                        }
                    }
                }
            }
        }

        $time = microtime(true) - $time_start;
        
    return view('result')->with([
        'array' =>$array,
        'sort' => $sort,
        'int' => $inint,
        'time' => $time,
    ]);
    }
}