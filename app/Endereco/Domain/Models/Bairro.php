<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bairro extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    protected $table = 'bairros';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'updated_at', 'created_at'];
    protected $fillable = [
        'id',
        'uf',
        'localidade_id',
        'nome',
        'abrev_nome'
    ];
}
