<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * Class ExpedienteController
 * @package App\Http\Controllers
 */
class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $contrato)
    {

         $expediente = Expediente::where('contrato_id', $contrato)->first();


        //$expedientes = Expediente::findorfail;
        

        if($expediente){
            return $expediente;
        $valorDocumental_id = DB::table('ValorDocumental')->where('id',$expediente->valorDocumental_id)->get();
         //return $valorDocumental_id->descripci;
        //$expediente->valorDocumental_id= get('descripcion');
        //return $valorDocumental_id;


        //return $expediente->valorDocumental_id;
        

        $valorinformacion = DB::table('ValorInformacion')->get(['id','descripcion']);  
       $valorDocumental = DB::table('ValorDocumental')->get(['id','descripcion']);
       $vigTramites = DB::table('VigTramites')->get(['id','descripcion']);
       $vigconcentracion = DB::table('VigConcentracion')->get(['id','descripcion']);
       $destinoFinal = DB::table('destinoFinal')->get(['id','descripcion']);

             return view('expediente.index',compact(['expediente','valorDocumental_id']));

        }else {
            //return $contrato;
            return redirect()->route('expedientes.create',compact('contrato'));
        }
       
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($contrato)
    {
        
       // return $contrato;
         
         $valorinformacion = DB::table('ValorInformacion')->get(['id','descripcion']);  
       $valorDocumental = DB::table('ValorDocumental')->get(['id','descripcion']);
       $vigTramites = DB::table('VigTramites')->get(['id','descripcion']);
       $vigconcentracion = DB::table('VigConcentracion')->get(['id','descripcion']);
       $destinoFinal = DB::table('destinoFinal')->get(['id','descripcion']);
       
   
   //return $valorinformacion;
       $expediente = new Expediente();

    return view('expediente.create', compact(['expediente', 'valorDocumental','valorinformacion','vigTramites','vigconcentracion','destinoFinal','contrato']));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $contrato = $request->contrato_id;
      //  request()->validate(Expediente::$import_request_variables(types)    );

       $expediente = Expediente::create($request->all());
       // $contrato = $request->caja_id;
      //  dd  ('contrato');

       return redirect()->route('expedientes.index',compact('contrato') )
            ->with('success', 'Expediente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expediente = Expediente::find($id);

        return view('expediente.show', compact('expediente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expediente = Expediente::find($id);

        return view('expediente.edit', compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Expediente $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expediente $expediente)
    {
        request()->validate(Expediente::$rules);

        $expediente->update($request->all());

        return redirect()->route('expedientes.index')
            ->with('success', 'Expediente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expediente = Expediente::find($id)->delete();

        return redirect()->route('expedientes.index')
            ->with('success', 'Expediente deleted successfully');
    }
}
