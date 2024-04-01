<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tenant extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = [
        'tipo_identificacao', // CNPJ ou CPF
        'cnpj_cpf',
        'contrato', // String com 4 números e 2 letras
        'nome',
        'email',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'complemento',
        'telefone',
        'cidade_id',
        'data_entrada',
        'data_saida',
        'tipo', // Matriz ou Filial
    ];

    // Vários Tenants tem uma cidade
    public function cidade(): BelongsTo {
        return $this->belongsTo(Cidade::class);
    }
}








