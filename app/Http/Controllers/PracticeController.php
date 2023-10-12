<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestFourService;

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

    public function CategorizeData(TestFourService $groupByOwnersService)
    {
        // Your code here
        $data =["insurance.txt" => "Company A", "letter.docx" => "Company A", "Contract.docx" => "Company B"];

        $result = $groupByOwnersService->performCategorization($data);

        dd($result);
    }
}
