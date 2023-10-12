<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function findDuplicate(){

        $DataArray = [1,1,23,45,5,6,5,3,8,6,9,15,6];
        $duplicateData = [];
        $tempData = [];
        
        foreach ($DataArray as $value) {
            if(in_array($value,$tempData)){
                if(!in_array($value,$duplicateData))
                    $duplicateData[] = $value;
            }else{
                $tempData[] = $value;
            }
        }

        dd($duplicateData);
    }
}
