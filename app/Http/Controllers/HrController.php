<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
    public function GetData(Request $request,$pid=null){

        $pname="Md Shariful Islam Uzzal";
        $page="41 Year";
        
        $data=array(['id'=>$pid,'name'=>$pname,'age'=>$page]);

        $name="access_token";
        $value="123-XYZ";
        $minutes=1;
        $path="/";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;
        
        return response($data,200)->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);

    }
}
