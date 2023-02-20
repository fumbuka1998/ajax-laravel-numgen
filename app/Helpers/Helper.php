<?php
namespace App\Helpers;


class Helper{
    public static function IdGen($model,$trow, $prefix,$length=4)
    {
        $data = $model::orderBy('id', 'desc')->first();
        if (!$data) {
            $og_length = $length;
            $last_number = '';
        } else {
            $code = substr($data->$trow, strlen($prefix) + 1);
            $actual_last_number = ((int)$code / 1) * 1;
            $increment_last_number = (int)$actual_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - (int)$last_number_length;
            $last_number = $increment_last_number;
        }

        $zeros = '';
        for ($i = 0; $i < (int)$og_length; $i++) {
            $zeros .= "0";
        }

        return $prefix.''.$zeros.$last_number;

    }

}











?>