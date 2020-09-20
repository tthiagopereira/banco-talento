<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Administrador'                          ,'email' => 'admin@admin.com'                   ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'000.000.000-00','telefone'=> '(92) 99153-2102']
        ];
        
        DB::table('users')->insert($users);
    
    }
}
