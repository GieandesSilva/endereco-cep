<?php

namespace App\Endereco\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CPCFaixa extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'cpcs_faixa';
    protected $connection = 'mysql';
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'num_inicial',
        'num_final',
        'cpc_id'
    ];
}
