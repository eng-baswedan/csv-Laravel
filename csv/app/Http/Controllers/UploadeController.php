<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class UploadeController extends Controller
{

    public function index()
    {
        return view('upload');
    }
     public function showForm()
    {
        return view('upload');
    }

    public function showData(Request $request)
    {

    	$CSVFile=$request->file('upload-csv');
      // var_dump($CSVFile);
      if($CSVFile!=null){
    	$filePath=$CSVFile->getRealPath();

// --------------------  columns 1 2 3 .. --------------------------
      $AllData2=[];
      $AllData=[];
      $row = 1;
      $handle = fopen($filePath, "r");
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        array_push($AllData,$data);
        $AllData2=$data;
        if($num == 1){
        	$Exie=2;
        }else{
        	$Exie=1;
        }
      }
      fclose($handle);
      return view('uploadView')
        ->with("AllData",$AllData)
        ->with("AllData2",$AllData2)
        ->with("row",$row)
        ->with("Exie",$Exie)
        ;
      }else{
        return view('upload');
      }
    }

    
}
