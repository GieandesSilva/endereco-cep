<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogradouroVariacao extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'logradouros_variacao';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'ordem_denominacao',
        'tipo_variacao',
        'nome_variacao'
    ];
}
