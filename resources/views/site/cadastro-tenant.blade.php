@extends('layouts.site-layout')
@section('title', 'Cadastro')

@section( 'content' )


<div class="section">
    <div class="container">
        <div class="row content-items">
            <div class="col-12">
                <div class="section-heading">
                    <div class="section-subheading">Nós somos 100% online</div>
                    <h1>Cadastre-se</h1>
                </div>
            </div>
            <div class="col-xl-4 col-md-5 content-item">
                <div class="contact-info section-bgc">
                    <h3>Get in Touch</h3>
                    <ul class="contact-list">
                        <li>
                            <i class="material-icons material-icons-outlined md-22">location_on</i>
                            <div class="footer-contact-info">
                                <a href="https://goo.gl/maps/2Ygp5S2Ssm1G5o329">
                                    4730 Crystal Springs Dr, Los Angeles, CA
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="material-icons material-icons-outlined md-22">smartphone</i>
                            <div class="footer-contact-info">
                                <a href="tel:+13239134688" class="formingHrefTel">+1 323-913-4688</a>
                                <a href="tel:+13238884554" class="formingHrefTel">+1 323-888-4554</a>
                            </div>
                        </li>
                        <li>
                            <i class="material-icons material-icons-outlined md-22">email</i>
                            <div class="footer-contact-info">
                                <a href="#">mail@example.com</a>
                                <a href="#">info@example.com</a>
                            </div>
                        </li>
                        <li>
                            <i class="material-icons material-icons-outlined md-22">schedule</i>
                            <div class="footer-contact-info"><p>Mon - Fri: 9:00 - 18:00</p></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-md-7 content-item">
                <div>
                    <form action="{{route('tenant.store')}}" method="POST">
                        @csrf
                        <div class="row gutters-default">
                            <div class="col-12">
                                <h3>Informe seus dados</h3>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    {{-- <label for="tipo_identificacao" class="form-field-label">Selecione CNPJ ou CPF</label> --}}
                                    <select name="tipo_identificacao" id="tipo_identificacao" class="form-field-select" required>
                                        <option value="" disabled selected>Selecione CNPJ ou CPF*</option>
                                        <option value="CNPJ" @if(old('tipo_identificacao') == 'CNPJ') selected @endif>CNPJ</option>
                                        <option value="CPF" @if(old('tipo_identificacao') == 'CPF') selected @endif>CPF</option>
                                    </select>
                                </div>
                                @error('tipo_identificacao')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="cnpj_cpf" id="cnpjCpfLabel" class="form-field-label">CNPJ/CPF*</label>
                                    <input type="text" class="form-field-input" id="cnpj_cpf" name="cnpj_cpf" value="{{ old('cnpj_cpf')}}" required>
                                    @error('cnpj_cpf')
                                        <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-field">
                                    <label for="nome" class="form-field-label">Nome ou Nome Empresarial*</label>
                                    <input type="text" class="form-field-input" name="nome" value="{{old('nome')}}" required>
                                </div>
                                @error('nome')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">E-mail</label>
                                    <input type="email" class="form-field-input" name="email" value="{{old('email')}}" required>
                                </div>
                                @error('email')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="cep" class="form-field-label">CEP*</label>
                                    <input type="text" id="cep" onblur="pesquisacep(this.value);" class="form-field-input" name="cep" value="{{ old('cep') }}" required>
                                </div>
                                @error('cep')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-12">
                                <div class="form-field">
                                    <label for="logradouro" class="form-field-label">Logradouro*</label>
                                    <input type="text" id="logradouro" class="form-field-input" name="logradouro" value="{{old('logradouro')}}" required>
                                </div>
                                @error('logradouro')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="numero" class="form-field-label">Número*</label>
                                    <input type="text" class="form-field-input" name="numero" value="{{old('numero')}}" required>
                                </div>
                                @error('numero')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="bairro" class="form-field-label">Bairro*</label>
                                    <input type="text" id="bairro" class="form-field-input" name="bairro" value="{{old('bairro')}}" required>
                                </div>
                                @error('bairro')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="complemento" class="form-field-label">Complemento</label>
                                    <input type="text" class="form-field-input" name="complemento" value="{{old('complemento')}}">
                                </div>
                                @error('complemento')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="tekefone" class="form-field-label">Telefone*</label>
                                    <input type="tel" class="form-field-input" id="telefone" name="telefone" value="{{old('telefone')}}" required>
                                </div>
                                @error('telefone')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <input type="hidden" id="cidade" value="">
                                    <input type="hidden" id="uf" value="">
                                    <select name="cidade_id" id="cidade_id" class="form-field-select select2" required>
                                        <option value="">Selecione a Cidade*</option>
                                        @foreach ($cidades as $cidade)
                                        <option value="{{ $cidade->id }}" @if(old('cidade_id') == '{{ $cidade->id }}') selected @endif>{{$cidade->municipio . ' - ' . $cidade->UF}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('cidade_id')
                                    <div class="text-danger"> <i class="icon fas fa-ban"></i> {{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-btn">
                                <button type="submit" class="btn btn-w240 ripple"><span>Enviar Cadastro</span></button>
                            </div>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>
</div>



@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="/assets/js/cep.js"></script>
    <script src="/assets/js/mascaras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
        <style>
            .select2-selection__rendered {
                line-height: 50px !important;
            }
            .select2-container .select2-selection--single {
                height: 50px !important;
                border-color: #cccc;
            }
            .select2-selection__arrow {
                height: 50px !important;
            }
            </style>
@endsection
