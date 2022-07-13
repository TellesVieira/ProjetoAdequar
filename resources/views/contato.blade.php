@extends('layouts.main')
@section('title', 'Adequar ')

@section('content')

    <div class="pt-120 pb-130 position-relative">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="assets/img/root/fundoparacontato.png" alt=""></div>
            <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
        </div>
        <div class="container">
            <div class="row gy-50">
                <div class="col-lg-12">
                    <!-- Form-->
                    <div>
                    <h4 class="fw-medium font-size-18 text-white mb-45">Preencha o formulário com seus dados e um de nossos consultores entrará em contato.</h4>
                    </div>
                    
                    <form  action="https://api.staticforms.xyz/submit" method="post" data-show="startbox" data-show-delay="300">
                        <input type="hidden" name="accessKey" value="12111a6b-17c2-4f3f-a21d-c9a8e71044a5"> 
                        <input type="hidden" name="redirectTo" value="https://grupoadequar.com.br/contato">
                        <input type="hidden" name="replyTo" value="@">
                        <div class="row gy-40">
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" name="name" type="text" placeholder="Seu nome *" required maxlengh="25"></div>
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" name="email" type="email" placeholder="Seu Email *" required maxlengh="25"></div>
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" name="phone" type="tel" placeholder="Seu telefone *" required maxlengh="25"></div>
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" name="message" type="message" placeholder="Digite sua mensagem *" required maxlengh="25"></div>
                                                    
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-check form-check-white"><input class="form-check-input" type="checkbox" value="" id="personalData"><label class="form-check-label" for="personalData">Concordo com o processamento de dados pessoais *</label></div>
                            </div>
                            <div class="col-12 col-lg-3 text-start text-lg-end">
                                <!-- Button--><button class="btn btn-accent-1">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    @endsection   