<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
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
      
    	 
       return view('reporte',compact('registro'));

      
       
   
    }

 







   public function imprimirReporte(Request $request){
      $var = $this->repote();
      

      return $request;
      //$registro = Registro::find($id);

        //$request = get();
       //$pdf = PDF::loadView('reporte', compact('request'));


      
      //return $pdf->stream('prestamo.pdf'); 

    }  

    //->setOptions([ 'defaultFont' => 'arial'])



    
}
