<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logradouro extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'logradouros';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'uf',
        'localidade_id',
        'bairro_ini_id',
        'bairro_final_id',
        'nome',
        'complemento',
        'cep',
        'tipo',
        'utilizacao_tipo',
        'abrev_nome'
    ];
}
