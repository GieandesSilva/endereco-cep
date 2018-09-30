<?php

use App\Endereco\Domain\Models\BairroFaixa;
use Illuminate\Database\Seeder;

class BairrosFaixaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arquivo = storage_path('app/addresses/LOG_FAIXA_BAIRRO.TXT');
        $contents = file_get_contents($arquivo);
        $contents = mb_convert_encoding($contents, 'UTF-8', mb_detect_encoding($contents, 'UTF-8, ISO-8859-1', true));
        $linhas = explode("\n", $contents, -1);

        foreach ($linhas as $key => $linha) {
            list($array['id'], $array['cep_inicial'], $array['cep_final']) = explode('@', $linha);

            $bairroFaixa = new BairroFaixa([
                'cep_inicial' => (string)$array['cep_inicial'],
                'cep_final' => (integer)$array['cep_final'],
                'bairro_id' => (string)$array['id']
            ]);

            $bairroFaixa->save();
        }
    }
}
