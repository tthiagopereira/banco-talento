<?php

use Illuminate\Database\Seeder;

class OmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $register = [
            ['nome' => '12ª RM'],
            ['nome' => '2º GPTPE'],
            ['nome' => '7º BPE'],
            ['nome' => '4º BA VEX'],
            ['nome' => '1º B COM SL'],
            ['nome' => '12º BSUP'],
            ['nome' => '1º BIS(AMV)'],
            ['nome' => '12º GAAAE SL'],
            ['nome' => '12ª ICFEX'],
            ['nome' => '4º CGEO'],
            ['nome' => '4º CTA'],
            ['nome' => 'CECMA'],
            ['nome' => 'CIGS'],
            ['nome' => 'CMM'],
            ['nome' => 'CRO 12'],
            ['nome' => 'HMAM'],
            ['nome' => 'PQRMT/12ªRM'],
            ['nome' => 'CIA C/12ª RM'],
            ['nome' => 'CIA C 2º GPTO'],
            ['nome' => '3ª CIA F ESP'],
            ['nome' => '4ª CIA INTLG'],
            ['nome' => '2º GEC'],
            ['nome' => '3ª CiaFEsp'],
            ['nome' => 'Cia Cmdo CMA'],
            ['nome' => 'Sem om']
        ];

        DB::table('oms')->insert($register);

    }

}