<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenantCreateRequest;
use App\Models\Cidade;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Services\ContractIdentifierService;

class TenantCreateController extends Controller
{
    protected $identifierService;

    public function __construct(ContractIdentifierService $identifierService)
    {
        $this->identifierService = $identifierService;
    }

    public function create()
    {
        $cidades = Cidade::all();
        return view('site.cadastro-tenant', compact(['cidades']));
    }


    public function store(TenantCreateRequest $request)
    {

        $tenant = $request->only([
            'tipo_identificacao', // CNPJ ou CPF
            'cnpj_cpf',
            'nome',
            'email',
            'cep',
            'logradouro',
            'numero',
            'bairro',
            'complemento',
            'telefone',
            'cidade_id',
        ]);
        // Converter email para minúsculas
        $tenant['email'] = Str::lower($tenant['email']);

        // Gerando um contrato para o Tenant
        $tenant['contrato'] = $this->identifierService->generateUniqueIdentifier();

        // Salvando na tabela Tenant
        $createdTenant = Tenant::create($tenant);

        // Salvando o primeiro usuário do Tenant
        $user = [
            'tenant_id' => $createdTenant->id, // Utilizando o ID do Tenant recém-criado
            'tenant_contrato' => $createdTenant['contrato'], // Utilizando o contrato do Tenant recém-criado
            'name' => $tenant['nome'],
            'email' => $tenant['email'], // O email já está em minúsculas
            'password' => Hash::make('password'), // Senha provisória 'password'
        ];
        User::create($user);

        //retornar a página com boas vindas e orientação para validar o email
        return redirect()->route('tenant.welcome')->with('success', 'Cadastrato realizado com sucesso!');
    }

    public function welcome()
    {
        return view('site.welcome-tenant');
    }
}
