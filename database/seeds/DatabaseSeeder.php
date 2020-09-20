<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UfSeeder::class,
                OmSeeder::class,
                FormacaoMilitarSeedd::class,
                CursoSeed::class,
                UsersTableSeeder::class
            ]
        );
    }
}
