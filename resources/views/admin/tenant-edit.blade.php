@extends('layouts.admin-layout')
@section('title', 'Alterar Tenant')

@section('content')



<section class="mt-3 content">
    <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Alterar Cadastro de Cliente</h3>
                </div>


                    <form action="{{ route('tenant.update', ['id' => $tenant->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                        {{-- Linha 1 GRID --}}
                        <div class="row">
                            <div class="form-group col-2">
                                <label for="tipo_identificacao">Tipo de Identificação</label>
                                <select name="tipo_identificacao" id="tipo_identificacao" class="form-control" disabled>
                                    <option value="">Selecione</option>
                                    <option value="CNPJ" @if($tenant->tipo_identificacao == 'CNPJ') selected @endif>CNPJ</option>
                                    <option value="CPF" @if($tenant->tipo_identificacao == 'CPF') selected @endif>CPF</option>
                                </select>
                                @error('tipo_identificacao')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-2">
                                <label for="cnpj_cpf">CNPJ/CPF</label>
                                <input type="text" name="cnpj_cpf" value="{{$tenant->cnpj_cpf}}" class="form-control @error('cnpj_cpf') is-invalid @enderror" id="cnpj_cpf" placeholder="CNPJ/CPF" disabled>
                                @error('cnpj_cpf')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-2">
                                <label for="contrato">Contrato</label>
                                <input type="text" name="contrato" value="{{$tenant->contrato}}" class="form-control @error('contrato') is-invalid @enderror" id="contrato" placeholder="Contrato" disabled>
                                @error('contrato')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label for="nome">Nome ou Nome Empresarial</label>
                                <input type="text" name="nome" value="{{$tenant->nome}}" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Nome ou Nome Empresarial">
                                @error('nome')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Linha 2 GRID --}}
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="email">E-mail (usado no login do Administrador)</label>
                                <input type="email" name="email" value="{{$tenant->email}}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-mail">
                                @error('email')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-3">
                                <label for="cep">CEP</label>
                                <input type="text" name="cep" value="{{$tenant->cep}}" class="form-control @error('cep') is-invalid @enderror" id="cep" placeholder="CEP">
                                @error('cep')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" name="logradouro" value="{{$tenant->logradouro}}" class="form-control @error('logradouro') is-invalid @enderror" id="logradouro" placeholder="Logradouro">
                                @error('logradouro')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Linha 3 GRID --}}
                        <div class="row">
                            <div class="form-group col-2">
                                <label for="numero">Número</label>
                                <input type="text" name="numero" value="{{$tenant->numero}}" class="form-control @error('numero') is-invalid @enderror" id="numero" placeholder="Número">
                                @error('numero')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-2">
                                <label for="bairro">Bairro</label>
                                <input type="text" name="bairro" value="{{$tenant->bairro}}" class="form-control @error('bairro') is-invalid @enderror" id="bairro" placeholder="Bairro">
                                @error('bairro')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="complemento">Complemento</label>
                                <input type="text" name="complemento" value="{{$tenant->complemento}}" class="form-control @error('complemento') is-invalid @enderror" id="complemento" placeholder="Complemento">
                                @error('complemento')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="cidade_id">Cidade</label>
                                <select type="text" name="cidade_id" class="form-control @error('cidade_id') is-invalid @enderror" id="cidade_id">
                                    @foreach ($cidades as $cidade)
                                        <option value="{{$cidade->id}}" @if($cidade->id == $tenant->cidade_id) selected @endif>{{$cidade->municipio . ' - ' . $cidade->UF}}</option>
                                    @endforeach
                                </select>
                                @error('cidade_id')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-2">
                                <label for="telefone">Telefone</label>
                                <input type="tel" name="telefone" value="{{$tenant->telefone}}" class="form-control @error('telefone') is-invalid @enderror" id="telefone" placeholder="Telefone">
                                @error('telefone')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Linha 4 GRID --}}
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="created_at">Cliente desde:</label>
                                <input type="date" name="created_at" value="{{$tenant->created_at->format('Y-m-d')}}" class="form-control @error('created_at') is-invalid @enderror" id="created_at" disabled>
                                @error('created_at')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-3">
                                <label for="data_saida">Data da Saída:</label>
                                <input type="date" name="data_saida" value="{{$tenant->data_saida}}" class="form-control @error('data_saida') is-invalid @enderror" id="data_saida">
                                @error('data_saida')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label for="contrato_assinado">Contrato assinado</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="contrato_assinado">
                                        <label class="custom-file-label" for="contrato_assinado">Anexar arquivo</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                        </div>



                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Alterar</button>
                        </div>
                    </form>

            </div>



    </div>

</section>




@endsection
