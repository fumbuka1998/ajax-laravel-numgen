<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Number;
use App\Helpers\Helper;

class numbergenController extends Controller
{
    //a function that generate nums goes here
    public static function numGen(){
        //my num gen fro helper function
        $number = Helper::IdGen(new Number, "number", "STD/SHBN/2022/", 4);
        // generate unique number
       // $number = uniqid();

        // insert number into database
        DB::table('numbers')->insert(['number' => $number]);

        // return number as JSON
        return response()->json(['number' => $number]);
    }
}
