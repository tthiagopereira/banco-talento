<?php

use Illuminate\Database\Seeder;

class EmpresaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['image_logo' => 'img/banco/bemol.png' , 'nome_empresa' =>'BEMOL','user_id'=>'67'],
            ['image_logo' => 'img/banco/bemol.png' , 'nome_empresa' =>'BEMOL','user_id'=>'68'],
            ['image_logo' => 'img/banco/bemol.png' , 'nome_empresa' =>'BEMOL','user_id'=>'69'],
            ['image_logo' => 'img/banco/bemol.png' , 'nome_empresa' =>'BEMOL','user_id'=>'70'],
            ['image_logo' => 'img/banco/bemol.png' , 'nome_empresa' =>'BEMOL','user_id'=>'71'],
            ['image_logo' => 'img/banco/tvlar.png' , 'nome_empresa' =>'TV LAR','user_id'=>'73'],
            ['image_logo' => 'img/banco/aegea.jpg' , 'nome_empresa' =>'AEGEA','user_id'=>'72'],
        ];
        DB::table('empresas')->insert($users);

    }
}
