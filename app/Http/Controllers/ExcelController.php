<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
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
      
    	 
       return view('registro.reporte',compact('registro'));

    


   
    }

 
   public function imprimirReporte(Request $request){

 //return $request;


       $pdf = PDF::loadView('registro.reporteImprimir', compact('request'));
       return $pdf->download('prestamo.pdf');

       


    }  
    


    



    
}

