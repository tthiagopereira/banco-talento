<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Administrador'                          ,'email' => 'admin@admin.com'                   ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'000.000.000-00','telefone'=> '(92) 00000-0000']
        ];
        DB::table('users')->insert($users);

    }
}
