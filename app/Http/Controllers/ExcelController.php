<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Registro;





class ExcelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reporte($id){
       
    	 $registro = Registro::find($id);
    	 
       return view('reporte',compact('registro'));

      
       
   
    }

 







   public function imprimirReporte($id){
      

      $registro = Registro::find($id);


        
       $pdf = PDF::loadView('reporte', compact('registro'));


      
      return $pdf->stream('prestamo.pdf'); 

    }  

    //->setOptions([ 'defaultFont' => 'arial'])



    
}
