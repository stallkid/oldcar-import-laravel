<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'usuario';
    public $timestamps = false;
    protected $primaryKey = 'IDUSUARIO';
    protected $keyType = 'int';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'EMAIL',
        'SENHA'
    ];
}
