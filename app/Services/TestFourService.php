<?php

namespace App\Services;

class TestFourService
{
    
    public static function performCategorization($array = []){
        $categorizeArray = [];

        foreach ($array as $key => $value) {
            
            if (array_key_exists($value, $categorizeArray)) {
                
                array_push($categorizeArray[$value],$key);

            } else {
                
                $categorizeArray[$value] = [$key];
            }
            
        }
        return $categorizeArray;
    }
}

?>