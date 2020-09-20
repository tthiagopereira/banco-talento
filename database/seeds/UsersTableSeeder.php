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
            ['name' => 'Administrador'                          ,'email' => 'admin@admin.com'                   ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'000.000.000-00','telefone'=> '(92) 99153-2102'],
            ['name' => 'JOSE RIBAMAR BARROS CASTRO'             ,'email' => 'ribamarcastro18@gmail.com'         ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'153.074.930-10','telefone'=> '(92) 99153-2102'],
            ['name' => 'ALEXANDRE MOURA DE SOUZA'               ,'email' => 'moura95@gmail.com'                 ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'168.623.278-01','telefone'=> '(92) 99256-0775'],
            ['name' => 'ANDREIA DE SOUZA RODRIGUES'             ,'email' => 'andreiarodrigues57@hotmail.com'    ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'633.048.562-34','telefone'=> '(92) 99355-0534'],
            ['name' => 'GUSTAVO SILVA OLIVEIRA'                 ,'email' => 'gustavooliveira98@gmail.com'       ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'893.697.696-68','telefone'=> '(92) 00000-0000'],
            ['name' => 'JUAN CARLOS DE OLIVEIRA BOUZON'         ,'email' => 'juan@12rm.eb.mil.br'               ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'944.192.997-20','telefone'=> '(92) 98126-1400'],
            ['name' => 'CÃ‰SAR AUGUSTO  CORREIA DA SILVA'       ,'email' => 'cesaraugustocds@hotmail.com'       ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'164.826.327-50','telefone'=> '(92) 00000-0000'],
            ['name' => 'ITAMAR DOS SANTOS NOGUEIRA'             ,'email' => 'itanog10@gmail.com'                ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'242.656.242-00','telefone'=> '(92) 98833-6587'],
            ['name' => 'CARLOS ALBERTO MACIEL TEIXEIRA'         ,'email' => 'teixeira@dec.eb.mil.br'            ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'485.141.107-30','telefone'=> '(92) 99355-0534'],
            ['name' => 'MARCELO TEIXEIRA DIAS'                  ,'email' => 'm.teixeira.dias@bol.com.br'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'694.418.170-30','telefone'=> '(92) 99263-7371'],
            ['name' => 'THIAGO PEREIRA DOS SANTOS'              ,'email' => 'tthiagopereira7@gmail.com'         ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>1 ,'cpf'=>'259.474.126-40','telefone'=> '(92) 98481-9707'],
            ['name' => 'BRUNO RAMOS CAMPANA SILVA'              ,'email' => 'brunoramoscampana@gmail.com'       ,'tipo'=>'Administrador'    ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>11,'cpf'=>'116.342.297-54','telefone'=> '(92) 99113-8899'],
            ['name' => 'JÃšLIO CÃ‰SAR BRASIL'                   ,'email' => 'juliocesar@4cta.eb.mil.br'         ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>11,'cpf'=>'168.618.608-83','telefone'=> '(92) 98416-9401'],
            ['name' => 'JORGE HENRIQUE ALVES'                   ,'email' => 'henriquealves@4cta.eb.mil.br'      ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>11,'cpf'=>'123.589.171-00','telefone'=> '(21) 99263-0391'],
            ['name' => 'ANDRÃ‰ LUIZ RODRIGUES GOMES DOS SANTOS' ,'email' => 'andreluiz@4cta.eb.mil.br'          ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>11,'cpf'=>'242.596.673-00','telefone'=> '(21) 99580-1250'],
            ['name' => 'CARLOS ALBERTO CAMPELO DA SILVA'        ,'email' => 'alberto@4cta.eb.mil.br'            ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>11,'cpf'=>'407.562.648-20','telefone'=> '(92) 98138-7255'],
            ['name' => 'DAVI MARQUES DE OLIVEIRA'               ,'email' => 'davi.marques@eb.mil.br'            ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>15,'cpf'=>'102.654.997-39','telefone'=> '(92) 98471-8605'],
            ['name' => 'ANTONIO CARLOS PEREIRA LEAL'            ,'email' => 'diretoriahmam@gmail.com'           ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>16,'cpf'=>'505.309.769-00','telefone'=> '(21) 9801-20165'],
            ['name' => 'JULIMAR NUNES BISPO'                    ,'email' => 'julimar.nunes@eb.mil.br'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>16,'cpf'=>'585.229.481-00','telefone'=> '(92) 9821-17633'],
            ['name' => 'PAULA LARISSA MARIANO BUENO'            ,'email' => 'sgtlari@hotmail.com'               ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>16,'cpf'=>'793.333.261-70','telefone'=> '(50) 982-206123'],
            ['name' => 'RAFAELA BEZERRA CARREIRO'               ,'email' => 'carreiro_rafa@hotmail.com'         ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>16,'cpf'=>'894.502.212-00','telefone'=> '(92) 9935-50534'],
            ['name' => 'MARCIO RODRIGUES RIBAS'                 ,'email' => 'ribas1534@gmail.com'               ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>7 ,'cpf'=>'950.888.300-68','telefone'=> '(92) 00000-0000'],
            ['name' => 'JACKSON NEVES DE SOUZA'                 ,'email' => 'neves@b1bis.eb.mil.br'             ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>7 ,'cpf'=>'828.879.009-78','telefone'=> '(92) 00000-0000'],
            ['name' => 'JOÃƒO BATISTA PEREIRA BEZERRA'          ,'email' => 'jbpbezerra104@gmail.com'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>7 ,'cpf'=>'664.092.173-15','telefone'=> '(92) 00000-0000'],
            ['name' => 'ROBERTO PEREIRA ANGRIZANI'              ,'email' => 'robertoangrizane@gmail.com'        ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>7 ,'cpf'=>'879.949.506-63','telefone'=> '(92) 00000-0000'],
            ['name' => 'RAFAEL ALEXANDRE DA SILVA DE SA'        ,'email' => 'rafael22sa@outlook.com'            ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>7 ,'cpf'=>'123.029.957-24','telefone'=> '(92) 00000-0000'],
            ['name' => 'VINICIUS CARVALHO DE FIGUEIREDO'        ,'email' => 'cmtciac@2gpte.eb.mil.br'           ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>22,'cpf'=>'752.187.802-78','telefone'=> '(92) 99421-1572'],
            ['name' => 'FRANCISCO JOSÃ‰ ALBUQUERQUE'            ,'email' => '	adjcmdo@2gpte.eb.mil.br	'       ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>22,'cpf'=>'368.526.603-97','telefone'=> '(92) 99372-4295'],
            ['name' => 'ROBSON MACIEL DOMINGUES'                ,'email' => 'rmdomingues51@gmail.com'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>22,'cpf'=>'433.826.193-50','telefone'=> '(92) 98102-0739'],
            ['name' => 'JOSÃ‰ PORFÃRIO DA SILVA JUNIOR'       ,'email' => 'porfirio.jose@eb.mil.br'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>23,'cpf'=>'108.733.670-80','telefone'=> '(92) 99939-6751'],
            ['name' => 'BRUNO LUIZ PRATES FIRMINO'              ,'email' => 'prec433@gmail.com'                 ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>23,'cpf'=>'943.622.476-10','telefone'=> '(21) 96990-3027'],
            ['name' => 'CELSO ROGERIO VIANNA DA CONCEIÃ‡ÃƒO'    ,'email' => 'celso.vianna@eb.mil.br'            ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>23,'cpf'=>'201.719.508-10','telefone'=> '(92) 99116-5670'],
            ['name' => 'MARIO FLAVIO ALBUQUERQUE BRAYNER'       ,'email' => 'gac@cigs.eb.mil.br'                ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>13,'cpf'=>'761.510.770-00','telefone'=> '(92) 99126-8406'],
            ['name' => 'LEANDRO RONCHI WITSCHORECK'             ,'email' => 'stenronchi@gmail.com'              ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>13,'cpf'=>'697.422.860-00','telefone'=> '(92) 98169-2187'],
            ['name' => 'MARCOS AURELIO DE CASTRO'               ,'email' => 'cmt@4bavex.eb.mil.br'              ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>4 ,'cpf'=>'856.802.309-68','telefone'=> '(92) 99153-2102'],
            ['name' => 'JULIO CESAR DOS SANTOS'                 ,'email' => 's1@4bavex.eb.mil.br'               ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>4 ,'cpf'=>'123.443.067-30','telefone'=> '(92) 98243-7777'],
            ['name' => 'HUDSON CARLOS PEREIRA'                  ,'email' => 'baadm.servmil@4bavex.eb.mil.br'    ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>4 ,'cpf'=>'441.483.212-87','telefone'=> '(92) 98139-0439'],
            ['name' => 'ALEXANDRE SANTANA MOREIRA'              ,'email' => 'cmt@1bcomsl.eb.mil.br'             ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>5 ,'cpf'=>'180.778.968-39','telefone'=> '(92) 99116-5655'],
            ['name' => 'LEANDRO SILVA DUTRA'                    ,'email' => 'adj.cmdo@1bcomsl.eb.mil.br'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>5 ,'cpf'=>'884.428.880-04','telefone'=> '(54) 99942-7044'],
            ['name' => 'DAVID ANGELO NASCMENTO RABELO'          ,'email' => 'davidrabelo88@gmail.com'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>5 ,'cpf'=>'734.454.945-00','telefone'=> '(92) 98428-2309'],
            ['name' => 'GLAUBER GARCIA DE OLIVEIRA'             ,'email' => 'glaubergarciasgt@gmail.com'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>5 ,'cpf'=>'111.817.177-28','telefone'=> '(92) 99195-1768'],
            ['name' => 'RAFAEL DOS SANTOS PEREIRA'              ,'email' => 'santospereira217@gmail.com'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>5 ,'cpf'=>'591.340.717-61','telefone'=> '(92) 99104-0887'],
            ['name' => 'IVAN JOSE DO NASCIMENTO'                ,'email' => 'ivanjnascimento@yahoo.com.br'      ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>6 ,'cpf'=>'741.831.844-87','telefone'=> '(92) 98124-7777'],
            ['name' => 'MARÃ‡AL BEEDA VIEIRA'                   ,'email' => '1secao.12bsup@gmail.com'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>6 ,'cpf'=>'116.355.957-11','telefone'=> '(92) 98224-6203'],
            ['name' => 'ERIK COZZO BETAT DE SOUZA'              ,'email' => 'erikbetat@hotmail.com'             ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>6 ,'cpf'=>'201.719.938-96','telefone'=> '(92) 98402-6768'],
            ['name' => 'MARCIO CESAR SILVA DOS SANTOS'          ,'email' => 'stencesar@gmail.com'               ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>6 ,'cpf'=>'476.607.779-20','telefone'=> '(92) 98121-2550'],
            ['name' => 'ABSALÃ‚O CARLOS DE ALMEIDA FILHO'       ,'email' => 'absalao_carlos@hotmail.com'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>17,'cpf'=>'346.704.402-68','telefone'=> '(92) 98144-4670'],
            ['name' => 'DANIEL RICARDO DA FONSECA'              ,'email' => 'danielricardofonsecabis@gmail.com' ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>17,'cpf'=>'652.207.732-91','telefone'=> '(92) 99149-8460'],
            ['name' => 'RODRIGO BORDEAUX MATTOS'                ,'email' => 'bordeaux.mattos@eb.mil.br'         ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>17,'cpf'=>'201.718.338-56','telefone'=> '(92) 99284-2561'],
            ['name' => 'RENATO JOSÃ‰ RIBEIRO FERREIRA'          ,'email' => 'renatofitarony@gmail.com'          ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>17,'cpf'=>'894.868.977-00','telefone'=> '(92) 98208-2913'],
            ['name' => 'NILSON JOSE DE OLIVEIRA'                ,'email' => 'nilson.o@ig.com.br'                ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>17,'cpf'=>'920.657.874-91','telefone'=> '(92) 99999-0272'],
            ['name' => 'JION SCOVINO BOECHAT'                   ,'email' => 'jionboechat@gmail.com'             ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>17,'cpf'=>'111.185.607-95','telefone'=> '(21) 98094-1294'],
            ['name' => 'ALEXANDRE RAMOS FERREIRA'               ,'email' => 'secretario@cecma.eb.mil.br'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>12,'cpf'=>'118.103.776-00','telefone'=> '(21) 99791-0817'],
            ['name' => 'JADER DOS SANTOS PENHA'                 ,'email' => 'mobilizador@cecma.eb.mil.br'       ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>12,'cpf'=>'732.233.010-00','telefone'=> '(92) 99399-7070'],
            ['name' => 'EDUARDO BORDEAUX MATTOS'                ,'email' => 'comandante@cecma.eb.mil.br'        ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>12,'cpf'=>'249.627.671-00','telefone'=> '(92) 98802-1224'],
            ['name' => 'ROBSON MARTINS BATISTA'                 ,'email' => 'adjcmdo@cecma.eb.mil.br'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>12,'cpf'=>'129.966.975-10','telefone'=> '(92) 99223-4130'],
            ['name' => 'RODRIGO GOMES RIBEIRO'                  ,'email' => 'rodrigo79228@hotmail.com'          ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>18,'cpf'=>'114.348.337-55','telefone'=> '(21) 98029-7707'],
            ['name' => 'ION DE CASTRO LIMA FERNANDES'           ,'email' => 'castrolima.ion@eb.mil.br'          ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>18,'cpf'=>'800.988.275-53','telefone'=> '(98) 99818-3332'],
            ['name' => 'PEDRO FELIPE BASTOS DE ARAUJO'          ,'email' => 'pedrofelipe775@hotmail.com'        ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>18,'cpf'=>'269.258.728-60','telefone'=> '(92) 99505-1290'],
            ['name' => 'JOSEVAN LIMA DA SILVA'                  ,'email' => 'josevansilva@gmail.com'            ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>18,'cpf'=>'797.096.644-68','telefone'=> '(92) 99961-8266'],
            ['name' => 'CHARLES PAULO ARAUJO DE ALMEIDA'        ,'email' => 'guerra4396@icloud.com'             ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>24,'cpf'=>'587.626.860-70','telefone'=> '(92) 99116-5639'],
            ['name' => 'CARLOS HENRIQUE DOS SANTOS'             ,'email' => 'familiachsantos@yahoo.com.br'      ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>24,'cpf'=>'603.151.056-15','telefone'=> '(92) 98260-0856'],
            ['name' => 'JANDERSON OLIVEIRA DA SILVA'            ,'email' => 'jandersondasilva060@gmail.com'     ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>24,'cpf'=>'351.426.426-00','telefone'=> '(92) 99183-5011'],
            ['name' => 'bemol'                                  ,'email' => 'bemol@gmail.com'                   ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'234.556.799-22','telefone'=> '(94) 95569-9999'],
            ['name' => 'GEOVANE DE ABREU SILVA'                 ,'email' => 'geovane.abreu@eb.mil.br'           ,'tipo'=>'Cadastrador'      ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>8 ,'cpf'=>'660.816.296-00','telefone'=> '(92) 98139-1070'],
            ['name' => 'LEONARDO WERDAN TORRES'                 ,'email' => 'werdan97@hotmail.com'              ,'tipo'=>'Comandante'       ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>8 ,'cpf'=>'201.719.338-00','telefone'=> '(61) 99186-1032'],
            ['name' => 'THAMAZARY THANNY GONÃ‡ALVES DE ARAUJO'  ,'email' => 'thamazarythanny@bemol.com.br'      ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'353.932.620-00','telefone'=> '(92) 98170-8156'],
            ['name' => 'ISABEL ALBUQUERQUE DA SILVA CORDEIRO'   ,'email' => 'isabelcordeiro@bemol.com.br'       ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'866.595.702-25','telefone'=> '(92) 98829-5003'],
            ['name' => 'WILLHIAM MOTA DOS SANTOS'               ,'email' => 'willhiamsantos@bemol.com.br'       ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'158.620.224-30','telefone'=> '(92) 99451-8223'],
            ['name' => 'KAROLLINY ALBUQUERQUE TEIXEIRA BALBINA' ,'email' => 'karollinyteixeira@bemol.com.br'    ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'906.130.582-91','telefone'=> '(9,) 29811-1111'],
            ['name' => 'TALITA DA SILVA ERMELINDO'              ,'email' => 'talitasilva@bemol.com.br'          ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'528.071.342-20','telefone'=> '(92) 98417-7305'],
            ['name' => 'EMILYN YASMIN ROCHA DE ARRUDA'          ,'email' => 'emilyn.arruda@aegea.com.br'        ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'447.369.016-40','telefone'=> '(92) 98415-3284'],
            ['name' => 'ROAN KLINGER DE ANDRADE TAVARES'        ,'email' => 'roman_gerrh@tvlar.com.br'          ,'tipo'=>'Empresa'          ,'status' => 'Ativo','password' => bcrypt('123123'),'om_id'=>25,'cpf'=>'442.073.792-15','telefone'=> '(92) 99250-0717'],
        ];
        
        DB::table('users')->insert($users);
    
    }
}
