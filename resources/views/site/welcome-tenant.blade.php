@extends('layouts.site-layout')
@section('title', 'Cadastro')

@section( 'content' )


<div class="section">
    <div class="container">
        <div class="row content-items">
            <div class="col-12">

            </div>
            <div class="col-xl-12 col-md-12 content-item">
                <div class="contact-info section-bgc">
                    <h3>Bem vindo ao Contando</h3>
                    <h6>Sistema 100% Online de gestão do seu escritório de contabilidade.</h4>

                        <ul class="contact-list">
                        <li>
                            <i class="material-icons material-icons-outlined md-22">email</i>
                            <div class="footer-contact-info">
                                <p>Você receberá instruções de validação da sua conta no seu e-mail.</p>

                            </div>
                        </li>

                        <li>
                            <a href="{{route('home')}}"><i class="material-icons material-icons-outlined md-22">home</i></a>
                            <div class="footer-contact-info">
                                <a href="{{route('home')}}">Home</a>

                            </div>
                        </li>



                    </ul>
                </div>
            </div>



        </div>
    </div>
</div>



@endsection
