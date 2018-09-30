<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnidadeOperacional extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'unidade_operacional';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'uf',
        'localidade_id',
        'bairro_id',
        'logradouro_id',
        'nome',
        'endereco',
        'cep',
        'caixa_postal_indicador',
        'abrev_nome'
    ];
}
