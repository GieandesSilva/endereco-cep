<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BairroVariacao extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['updated_at', 'created_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'bairros_variacao';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'updated_at', 'created_at'];
    protected $fillable = [
        'id',
        'ordem_denominacao',
        'nome_denominacao'
    ];
}
