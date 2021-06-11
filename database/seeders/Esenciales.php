<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Esenciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //Valor Documetal------------------------------------------------------------
        DB::table('ValorDocumental')->insert([

            'descripcion'=>'Administracion'

        ]);
        DB::table('ValorDocumental')->insert([

            'descripcion'=>'Contable'


        ]);

        DB::table('ValorDocumental')->insert([

            'descripcion'=>'Fiscal'


        ]);
        DB::table('ValorDocumental')->insert([

            'descripcion'=>'Legal'


        ]);

                // valor Informacion ----------------------------------------------------------

        DB::table('ValorInformacion')->insert([

            'descripcion'=>'Confidencial'

        ]);

        DB::table('ValorInformacion')->insert([

            'descripcion'=>'Reservado'

        ]);


                /// base VigTramites-----------------------------------------------------------
         $arrays = range(1,3);
        foreach ($arrays as $valor) {
          DB::table('VigTramites')->insert([               
              'descripcion' => $valor . ' Años'
              
          ]);
      }



        

        // table VigConcentracion------------------------------------------------------

        $arrays = range(1,12);
        foreach ($arrays as $valor) {
          DB::table('VigConcentracion')->insert([               
              'descripcion' => $valor . ' Años'
              
          ]);
      }


      //  Table  destinoFinal----------------------------------------------------------------------



       DB::table('destinoFinal')->insert([

            'descripcion'=>'Conservacion'

        ]);
        DB::table('destinoFinal')->insert([

            'descripcion'=>'Eliminacion'


        ]);




  }


}
