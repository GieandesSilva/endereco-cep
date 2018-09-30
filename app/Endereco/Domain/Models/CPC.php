<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CPC extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'cpcs';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'updated_at', 'created_at'];
    protected $fillable = [
        'id',
        'uf',
        'localidade_id',
        'nome',
        'endereco',
        'cep'
    ];
}
