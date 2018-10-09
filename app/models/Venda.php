<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'venda';
    public $timestamps = false;
    protected $primaryKey = 'IDVENDA';
    protected $keyType = 'int';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'FK_IDCOLABORADOR',
        'FK_IDCLIENTE',
        'FK_IDVEICULO',
        'TIPO_VENDA'
    ];

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'IDCLIENTE', 'FK_IDCLIENTE');
    }

    public function colaborador()
    {
        return $this->hasOne(Colaborador::class, 'IDCOLABORADOR', 'FK_IDCOLABORADOR');
    }

    public function veiculo()
    {
        return $this->hasOne(Veiculo::class, 'IDVEICULO', 'FK_IDVEICULO');
    }

}
