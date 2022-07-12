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
                    <form data-show="startbox" data-show-delay="300">
                        <div class="row gy-40">
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" type="text" placeholder="Seu nome *"></div>
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" type="email" placeholder="Seu Email *"></div>
                            <div class="col-12 col-md-6"><input class="form-control form-control-white" type="tel" placeholder="Seu telefone *"></div>
                            <div class="col-12 col-md-6"><select class="form-control form-control-white">
                                    <option selected="">Estou interessado em...</option>
                                    <option>Web Site</option>
                                    <option>Identidade Visual</option>
                                    <option>Gestão de conteúdos</option>
                                    <option>Planejamento Estratégico em marketing</option>
                                    <option>Gerenciamento de anúncio / Trafego Pago</option>
                                    <option>Materiais off-line / Papelaria</option>
                                </select></div>
                            
                           
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