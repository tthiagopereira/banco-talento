<?php

use Illuminate\Database\Seeder;

class FormacaoMilitarSeedd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registros = [
            ['nome' => 'Instrução Básica e/ou Qualificação de Soldados'],
            ['nome' => 'Curso de Formação de Cabos'],
            ['nome' => 'Sargento Técnico Temporário - Administração'],
            ['nome' => 'Sargento Técnico Temporário - Tecnologia da informação'],
            ['nome' => 'Sargento temporário Combatente'],
            ['nome' => 'Sargento temporário Logística'],
            ['nome' => 'Sargento temporário Saúde'],
            ['nome' => 'Oficial Temporário'],
            ['nome' => 'Oficial Administração'],
            ['nome' => 'Oficial Tecnologia da Informação'],
            ['nome' => 'Oficial Temporário Direito'],
            ['nome' => 'Oficial Temporário Saúde'],
            ['nome' => 'Oficial Temporário Combatente'],
            ['nome' => 'Oficial Temporário Logística'],
            ['nome' => 'STT/ MATERIAL BÉLICO'],
            ['nome' => 'STT TÉCNICO EM MANUTENÇÃO DE AERONAVES'],
            ['nome' => 'QMG 15 AVIAÇÃO APOIO/QMP 94 - AUXILIAR DE ABASTECIMENTO'],
            ['nome' => 'QMG 15 AVIAÇÃO APOIO/QMP 98 - AUXILIAR DE BUSCA E SALVAMENTO'],
        ];

        DB::table('formacao_militars')->insert($registros);
    }
}
