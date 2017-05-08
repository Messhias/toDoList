<?php

use Illuminate\Database\Seeder;

class listaDeTarefas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('listaDeTarefas')->insert([
        	'texto'			=>	'Comprar passages aéreas',
        	'autor'			=>	'John Doe',
        	'status'		=>	'Concluido',
        	'created_at'	=>	date('Y-m-d H:i:s')
        ]);

        DB::table('listaDeTarefas')->insert([
        	'texto'			=>	'Reservar hotel',
        	'autor'			=>	'John Doe',
        	'status'		=>	'Concluido',
        	'created_at'	=>	date('Y-m-d H:i:s')
        ]);

        DB::table('listaDeTarefas')->insert([
        	'texto'			=>	'Preparar slides para apresentação',
        	'autor'			=>	'John Doe',
        	'status'		=>	'Pendente',
        	'created_at'	=>	date('Y-m-d H:i:s')
        ]);
    }
}
