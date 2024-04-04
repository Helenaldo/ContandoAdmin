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
                                <a href="mailto:mail@example.com">mail@example.com</a>
                                <a href="mailto:info@example.com">info@example.com</a>
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
                    <form action="#" method="post" class="form-submission contact-form contact-form-padding" novalidate>

                        <div class="row gutters-default">
                            <div class="col-12">
                                <h3>Informe seus dados</h3>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    {{-- <label for="tipo_identificacao" class="form-field-label">Selecione CNPJ ou CPF</label> --}}
                                    <select name="tipo_identificação" id="tipo_identificação" class="form-field-select" required>
                                        <option value="" disabled selected>Selecione CNPJ ou CPF</option>
                                        <option value="CNPJ">CNPJ</option>
                                        <option value="CPF">CPF</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="cnpj_cpf" class="form-field-label">CNPJ/CPF</label>
                                    <input type="text" class="form-field-input" name="cnpj_cpf" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-field">
                                    <label for="nome" class="form-field-label">Nome ou Nome Empresarial</label>
                                    <input type="text" class="form-field-input" name="nome" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
                                </div>
                            </div>



                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">E-mail</label>
                                    <input type="email" class="form-field-input" name="email" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="cep" class="form-field-label">CEP</label>
                                    <input type="text" class="form-field-input" name="cep" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-field">
                                    <label for="nome" class="form-field-label">Logradouro</label>
                                    <input type="text" class="form-field-input" name="nome" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="numero" class="form-field-label">Número</label>
                                    <input type="text" class="form-field-input" name="numero" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="bairro" class="form-field-label">Bairro</label>
                                    <input type="text" class="form-field-input" name="bairro" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="complemento" class="form-field-label">Complemento</label>
                                    <input type="text" class="form-field-input" name="complemento" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="tekefone" class="form-field-label">Telefone</label>
                                    <input type="tel" class="form-field-input" name="telefone" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="form-field">
                                    {{-- <label for="tipo_identificacao" class="form-field-label">Selecione CNPJ ou CPF</label> --}}
                                    <select name="cidade_id" class="form-field-select" required>
                                        <option value="" disabled selected>Selecione a Cidade</option>
                                        <option value="Teresina-PI">Teresina-PI</option>
                                        <option value="São Paulo-SP">São Paulo-SP</option>
                                    </select>
                                </div>
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
