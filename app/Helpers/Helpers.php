<?php
namespace App\Helpers;

class  Helpers

{
    public static function IDGenerators($model, $trow, $length = 5, $prefix)
    {
        $data = $model::orderBy('id', 'desc')->first();
    
        if (!$data) {
            $last_number = '';
        } else {
            $last_number = intval(substr($data->$trow, strlen($prefix) + 1)) + 1;
        }
    
        $last_number_length = strlen($last_number);
        $zeroes_length = max(0, $length - $last_number_length);
        $zeros = str_repeat('0', $zeroes_length);
    
        return $prefix . '-' . $zeros . $last_number;
    }
}

?>