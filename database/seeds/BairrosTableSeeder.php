<?php

use App\Endereco\Domain\Models\Bairro;
use Illuminate\Database\Seeder;

class BairrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arquivo = storage_path('app/addresses/LOG_BAIRRO.TXT');
        $contents = file_get_contents($arquivo);
        $contents = mb_convert_encoding($contents, 'UTF-8', mb_detect_encoding($contents, 'UTF-8, ISO-8859-1', true));
        $linhas = explode("\n", $contents, -1);

        foreach ($linhas as $key => $linha) {
            list($bairro['id'], $bairro['uf'], $bairro['localidade_id'], $bairro['nome'], $bairro['abrev_nome']) = explode('@', $linha);

            $bairro = new Bairro([
                'id' => (integer)$bairro['id'],
                'uf' => (string)$bairro['uf'],
                'localidade_id' => (integer)$bairro['localidade_id'],
                'nome' => (string)$bairro['nome'],
                'abrev_nome' => (string)$bairro['abrev_nome'],
            ]);

            $bairro->save();
        }
    }
}
