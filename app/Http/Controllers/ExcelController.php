<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reporte(Request $request){
       return view('reporte');
    }
}
