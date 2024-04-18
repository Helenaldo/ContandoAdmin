<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenantUpdateRequest;
use App\Models\Cidade;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    // Definição da propriedade para ser usada em todas as views
    protected $activeRoute = 'tenants';

    public function index() {

        $tenants = Tenant::paginate(10);

        return view('admin.tenant-listar', [
            'tenants' => $tenants,
            'activeRoute' => $this->activeRoute
        ]);
    }

    public function edit(string $id) {

        $tenant = Tenant::find($id);
        $cidades = Cidade::all();
        // dd($tenant);

        if ($tenant) {
            return view('admin.tenant-edit',  [
                'tenant' => $tenant,
                'cidades' => $cidades,
                'activeRoute' => $this->activeRoute
            ]);
        }
        return redirect()->route('tenant.listar');
    }

    public function update(TenantUpdateRequest $request) {
        $tenantId = $request->query('id');
        $tenant = Tenant::find($tenantId);

        if($tenant) {
            $data = $request->only([
                'nome',
                'email',
                'cep',
                'logradouro',
                'numero',
                'bairro',
                'complemento',
                'cidade_id',
                'telefone',
                'data_saida',
            ]);
            $tenant->fill($data)->save();
            return redirect()->route('tenant.listar')->with('success', 'Cliente alterado com sucesso');


        }
        return redirect()->route('tenant.listar')->with('error', 'Cliente não alterado');
    }
}
