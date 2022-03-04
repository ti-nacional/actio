@extends('layouts.default')


@section('content')
    <!--hero section start-->
    <section class="hero-equal-height gradient-overlay pt-100 pb-5"
        style="background: url('/assets/img/lp/banner_initial.png') no-repeat bottom center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left position-relative z-index text-white my-lg-0 my-md-5 my-sm-5 my-5">
                        <h1 class="text-white font-weight-bold">A força que atua
                            em você.</h1>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="offer-tag-wrap position-relative z-index">
                        <img src="{{ asset('assets/img/lp/smartphones.png') }}" alt="app" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--features section start-->
    <div id="features" class="feature-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-9 mb-5">
                    <div class="section-heading text-center mb-5">
                        <h2 class="text-uppercase">Conheça a Actio</h2>
                        <p class="text-center text-theme-blue">Conectamos pessoas que desejam melhorar o condicionamento
                            físico a profissionais altamente
                            qualificados por meio de um aplicativo simples e prático. Conheça algumas vantagens e otimize
                            sua rotina!</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between border-bottom-gradient mb-3">
                <h3 class="mb-2">Usuários</h3>
                <h3 class="mb-2">Profissional</h3>
            </div>

            <!--feature new style start-->
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="icon icon-rotine icon-sm color-bg-icon rounded"></span>
                                <div class="icon-text">
                                    <h5 class="mb-2">Rotina de treinos</h5>
                                    <p>Treinos específicos para sua
                                        necessidade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="icon icon-persons icon-sm color-bg-icon rounded"></span>
                                <div class="icon-text">
                                    <h5 class="mb-2">Profissionais qualificados</h5>
                                    <p>Personal Trainers, Nutricionistas e
                                        Endocrinologistas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="icon icon-phone icon-sm color-bg-icon rounded"></span>
                                <div class="icon-text">
                                    <h5 class="mb-2">Prático e acessível</h5>
                                    <p>Faça seus treinos na hora e de onde
                                        você quiser.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 d-none d-sm-none d-md-block d-lg-block mt-n-5">
                    <div class="position-relative pb-md-5 py-lg-0">
                        <img alt="Image placeholder" src="{{ asset('assets/img/lp/cel_about.png') }}"
                            class="img-center img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="icon icon-calendar icon-sm color-bg-icon rounded"></span>
                                <div class="icon-text">
                                    <h5 class="mb-2">Controle de tarefas</h5>
                                    <p>Personalize sua agenda de forma
                                        funcional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="icon icon-rating icon-sm color-bg-icon rounded"></span>
                                <div class="icon-text">
                                    <h5 class="mb-2">Ranking de avaliação</h5>
                                    <p>Seja bem avaliado e apareça nas
                                        primeiras posições.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="icon icon-graphic color-bg-icon rounded"></span>
                                <div class="icon-text">
                                    <h5 class="mb-2">Base de clientes</h5>
                                    <p>Seja encontrado e atraia mais clientes
                                        interessados nos seus serviços.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--feature new style end-->
        </div>
    </div>
    <!--features section end-->


    {{-- <!--how it work start-->
    <section id="how-it-work" class="work-process-new gray-light-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading">
                        <h2 class="text-uppercase">Comece hoje mesmo</h2>
                        <p>Queremos ajudar você a conquistar seus objetivos com mais autonomia e facilidade. 
                            Faça parte deste movimento que promove o bem-estar e um estilo de vida mais saudável. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap">
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-vector icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">1</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Generate Ideas</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-layout-list-thumb icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">2</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Collect Contents</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-palette icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">3</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Create Design</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-cup icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">4</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Launch Project</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work end--> --}}

    <!--pricing section start-->
    <section id="startNow" class="pricing ptb-100 gray-light-bg">
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <div class="col-8 mb-5">
                <h5 class="text-center text-uppercase text-white">Comece hoje mesmo</h5>
                <p class="text-center text-white">Queremos ajudar você a conquistar seus objetivos com mais autonomia e
                    facilidade.
                    Faça parte deste movimento que promove o bem-estar e um estilo de vida mais saudável. </p>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card text-center card-start-now">
                        <img class="card-img-top" src="{{ asset('assets/img/lp/card01.png') }}" alt="Card image cap">
                        <div class="card-header py-4 border-0 pricing-header">
                            <h5 class="text-theme-blue">APOIO PROFISSIONAL</h5>
                            <p class="text-theme-blue text-left">Aproveite ao máximo sua rotina de atividades contando com o
                                apoio de profissionais próximos a você, além de recursos personalizados que vão auxiliar em
                                todo o seu progresso.
                            </p>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn solid-white-btn" id="btnContactUs">
                                Iniciar experiência
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card text-center card-start-now">
                        <img class="card-img-top" src="{{ asset('assets/img/lp/card02.png') }}" alt="Card image cap">
                        <div class="card-header py-4 border-0 pricing-header">
                            <h5 class="text-theme-blue">TREINOS PERSONALIZADOS</h5>
                            <p class="text-theme-blue text-left">Gere valor ao seu trabalho e fortaleça sua relação com os
                                alunos. Conte com um banco de exercícios em vídeo para auxiliá-lo na indicação de treinos,
                                podendo também criá-los e personalizá-los.
                            </p>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn solid-white-btn" id="btnContactUs">
                                Iniciar como
                                personal trainer
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card text-center card-start-now">
                        <img class="card-img-top" src="{{ asset('assets/img/lp/card03.png') }}" alt="Card image cap">
                        <div class="card-header py-4 border-0 pricing-header">
                            <h5 class="text-theme-blue">PRESCRIÇÃO NUTRICIONAL</h5>
                            <p class="text-theme-blue text-left">Reúna todas as informações dos seus pacientes, desde a
                                avaliação física até orientações de atendimento. O app oferece ainda informações
                                nutricionais de alimentos e a opção de incluir suas receitas.
                            </p>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn solid-white-btn" id="btnContactUs">
                                Iniciar como
                                nutricionista
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card text-center card-start-now">
                        <img class="card-img-top" src="{{ asset('assets/img/lp/card04.png') }}" alt="Card image cap">
                        <div class="card-header py-4 border-0 pricing-header">
                            <h5 class="text-theme-blue">CLAREZA NO ATENDIMENTO</h5>
                            <p class="text-theme-blue text-left">Passe recomendações, solicite exames e receite medicamentos
                                em tempo real. Além disso, tenha à disposição dados médicos e nutricionais dos seus
                                pacientes para aprimorar o atendimento.
                            </p>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn solid-white-btn" id="btnContactUs">
                                Iniciar como
                                endocrinologista
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing section end-->

    <!--screenshots section start-->
    <section id="screenshots" class="screenshots-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2 class="text-uppercase">O app</h2>
                        <p class="text-center text-theme-blue">Um app pensado para atender suas necessidades e trazer
                            resultados reais.
                            Criar e manter hábitos saudáveis ficou muito mais fácil com a Actio!</p>
                    </div>
                </div>
            </div>
            <!--start app screen carousel-->
            <div class="screen-slider-content">
                <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                    <img src="{{ asset('assets/img/lp/carousel/cell1.png') }}" class="img-fluid"
                        alt="screenshots" />
                    <img src="{{ asset('assets/img/lp/carousel/cell2.png') }}" class="img-fluid"
                        alt="screenshots" />
                    <img src="{{ asset('assets/img/lp/carousel/cell3.png') }}" class="img-fluid"
                        alt="screenshots" />
                    <img src="{{ asset('assets/img/lp/carousel/cell4.png') }}" class="img-fluid"
                        alt="screenshots" />
                    <img src="{{ asset('assets/img/lp/carousel/cell5.png') }}" class="img-fluid"
                        alt="screenshots" />
                </div>
            </div>
            <!--end app screen carousel-->

        </div>
    </section>
    <!--screenshots section end-->

    <!--video background section start-->
    <section class="background-video-section">
        <div class="video-section-wrap">
            <div class="gradient-overlay ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-8">
                            <div class="section-heading text-center">
                                <h2 class="text-white">Inicie uma nova rotina de saúde</h2>
                                <p class="text-white">Baixe o app e desenvolva seu potencial através de soluções
                                    integradas. Uma abordagem descomplicada para realizar treinos, acompanhamento médico e
                                    nutricional. </p>
                                <div class="action-btns download-btn mt-4">
                                    <a href="#download" class="btn solid-white-btn mr-3 page-scroll"> Download na App
                                        Store</a>
                                    <a href="#contact" class="btn solid-white-btn page-scroll"> Download na Google Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--video background section end-->

    {{-- <!--testimonial section start-->
    <section id="reviews" class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials what clients say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item mx-3"><img src="{{ asset('assets/img/clients-logo-01.png') }}"
                                    width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="{{ asset('assets/img/clients-logo-02.png') }}"
                                    width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="{{ asset('assets/img/clients-logo-03.png') }}"
                                    width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="{{ asset('assets/img/clients-logo-06.png') }}"
                                    width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="{{ asset('assets/img/clients-logo-05.png') }}"
                                    width="85" alt="client" class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            Assertively procrastinate distributed relationships whereas equity invested intellectual capital
                            everything energistically underwhelm proactive.
                        </blockquote>
                        <div class="client-ratting mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                            </ul>
                            <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="{{ asset('assets/img/client-1.jpg') }}" alt="client" width="60"
                                class="img-fluid rounded-circle shadow-sm" />
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Austin Cesar</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            Intrinsicly facilitate functional imperatives without next-generation meta-services.
                            Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                        </blockquote>
                        <div class="client-ratting mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                            </ul>
                            <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="{{ asset('assets/img/client-2.jpg') }}" alt="client" width="60"
                                class="img-fluid rounded-circle shadow-sm" />
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Pirtle Karol</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            Interactively grow backend scenarios through one paradigms. Distinctively and communicate
                            efficient information without effective meta-services.
                        </blockquote>
                        <div class="client-ratting mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                            </ul>
                            <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="{{ asset('assets/img/client-3.jpg') }}" alt="client" width="60"
                                class="img-fluid rounded-circle shadow-sm" />
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Aminul Islam</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--testimonial section end--> --}}

    <!--pricing section start-->
    <section id="pricing" class="pricing ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-12 col-lg-4">
                    <div class="section-heading mb-5">
                        <h2>Nossos planos</h2>
                        <p class="lead">Assine e use todas as ferramentas e benefícios pelo melhor preço.</p>
                    </div>
                    <ul class="nav nav-tabs feature-tab pricing-tab border-bottom-0 mb-md-5 mb-lg-0" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active h6 d-flex align-items-center" href="#monthly" data-toggle="tab">
                                Por mês
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h6 d-flex align-items-center" href="#yearly" data-toggle="tab">
                                Por ano
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="tab-content feature-tab-content">
                        <div class="tab-pane active" id="monthly">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4">
                                            <h5>Básico</h5>
                                        </div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">
                                                    00,00</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                            </ul>
                                            {{-- <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="card popular-price text-center single-pricing-pack">
                                        <div class="pt-4">
                                            <h5>Padrão</h5>
                                        </div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">
                                                    00,00</span></div>

                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                            </ul>
                                            {{-- <a href="#" class="btn solid-btn mb-3" target="_blank">Purchase now</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="yearly">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4">
                                            <h5>Básico</h5>
                                        </div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">
                                                    11,11</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                            </ul>
                                            {{-- <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="card popular-price text-center single-pricing-pack">
                                        <div class="pt-4">
                                            <h5>Padrão</h5>
                                        </div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">R$<span class="price font-weight-bolder">
                                                    11,11</span></div>

                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                                <li>Transferência de dados</li>
                                                <li>Notificações via push</li>
                                            </ul>
                                            {{-- <a href="#" class="btn solid-btn mb-3" target="_blank">Purchase now</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing section end-->

    <!--faq section start-->
    <div id="faq" class="faq-section pt-100">
        <div class="container">
            <div class="row justify-content-around align-items-end">
                <div class="col-md-6 col-lg-6">
                    <div class="faq-content-wrap pb-100">
                        <div class="section-heading mb-5">
                            <h2>Perguntas frequentes</h2>
                            <p>Precisando de ajuda? Confira algumas dúvidas respondidas pela Actio.</p>
                        </div>
                        <div id="accordion" class="accordion">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block">Quais as vantagens em ser um membro Actio?</h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block">Como sei que os profissionais são qualificados?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block"> Consigo fazer transações bancárias dentro da
                                        plataforma?</h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">Vou ter meus dados protegidos pelo app?</h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="d-flex align-items-end">
                        <img class="img-fluid" src="{{ asset('assets/img/lp/faq-img.png') }}" alt="download">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faq section end-->

    {{-- <!--client section start-->
    <section class="client-section ptb-100 gray-light-bg">
        <div class="container">
            <!--clients logo start-->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Trusted by companies</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-01.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-02.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-03.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-04.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-05.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-06.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-07.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ asset('assets/img/clients-logo-08.png') }}" alt="client logo"
                                class="img-fluid client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </section>
    <!--client section start--> --}}

    <!--contact us section start-->
    <section id="contact" class="contact-us-section contact-us ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="contact-us-form contact-us-div p-5">
                        <h4 class="text-theme-blue">Fale Conosco</h4>
                        <form action="{{ route('contact') }}" method="POST" class="contact-us-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter email" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" class="form-control" id="phone"
                                            placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="company" value="" size="40" class="form-control"
                                            id="company" placeholder="Your Company">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="userMessage" id="message" class="form-control" rows="7" cols="25"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn solid-white-btn" id="btnContactUs">
                                        Enviar mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2 class="text-theme-blue font-weight-bold fs-33">Ainda tem alguma dúvida?</h2>
                        <p class="lead mb-0">Preencha os campos ao lado e entre em contato.
                        </p>

                        <hr class="my-3">

                        <div class="contact-download-app">
                            <p>Baixe agora</p>
                            <div class="ml-2 store-btn bg-theme-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="102.075" height="26"
                                    viewBox="0 0 102.075 26">
                                    <path id="App_Store" data-name="App Store"
                                        d="M50.4,26H48.521V13.5h1.821v1.562h.035A3.248,3.248,0,0,1,53.19,13.4l.105,0A3.479,3.479,0,0,1,56.1,14.7a5.488,5.488,0,0,1,1.058,3.49,5.52,5.52,0,0,1-1.05,3.493,3.436,3.436,0,0,1-2.775,1.3c-.053,0-.108,0-.161,0a3.1,3.1,0,0,1-2.723-1.649H50.4V26Zm2.4-10.958c-1.438,0-2.4,1.267-2.4,3.153s.966,3.161,2.4,3.161c1.471,0,2.422-1.241,2.422-3.161a3.729,3.729,0,0,0-.662-2.289A2.144,2.144,0,0,0,52.8,15.042ZM40.313,26H38.431V13.5h1.822v1.562h.034A3.248,3.248,0,0,1,43.1,13.4l.105,0a3.48,3.48,0,0,1,2.8,1.306,5.488,5.488,0,0,1,1.058,3.49,5.519,5.519,0,0,1-1.05,3.493,3.437,3.437,0,0,1-2.776,1.3c-.053,0-.108,0-.161,0a3.1,3.1,0,0,1-2.723-1.649h-.043V26Zm2.4-10.958c-1.438,0-2.4,1.267-2.4,3.153s.966,3.161,2.4,3.161c1.472,0,2.423-1.241,2.423-3.161A3.727,3.727,0,0,0,44.47,15.9,2.145,2.145,0,0,0,42.71,15.042ZM6.407,24.7c-1.624,0-2.89-1.806-3.815-3.125A15.713,15.713,0,0,1,.2,15.624a9.743,9.743,0,0,1,.841-6.5A6.076,6.076,0,0,1,6.131,6.032H6.2a6.83,6.83,0,0,1,2.49.641,4.672,4.672,0,0,0,1.543.446,4.8,4.8,0,0,0,1.484-.437,7.981,7.981,0,0,1,2.855-.722,3.827,3.827,0,0,1,.4.02,5.793,5.793,0,0,1,4.54,2.447,5.579,5.579,0,0,0-2.68,4.71,5.413,5.413,0,0,0,3.32,4.99,12.4,12.4,0,0,1-1.727,3.508c-1.1,1.641-2.143,3-3.776,3.028h-.09a4.3,4.3,0,0,1-1.825-.454,5.023,5.023,0,0,0-2.169-.513,5.333,5.333,0,0,0-2.285.53A4.794,4.794,0,0,1,6.49,24.7ZM66.69,23.107c-2.791,0-4.672-1.494-4.793-3.805h1.926c.138,1.266,1.346,2.117,3.006,2.117,1.58,0,2.727-.838,2.727-1.992,0-1-.693-1.6-2.318-2.01l-1.629-.4c-2.307-.571-3.381-1.675-3.381-3.474,0-2.208,1.882-3.75,4.576-3.75,2.654,0,4.478,1.507,4.54,3.75h-1.9c-.112-1.272-1.134-2.062-2.667-2.062-1.5,0-2.553.793-2.553,1.929,0,.909.662,1.447,2.283,1.858l1.385.348c2.56.621,3.652,1.689,3.652,3.572a3.546,3.546,0,0,1-1.31,2.865A5.583,5.583,0,0,1,66.69,23.107Zm31.332-.1c-2.666,0-4.322-1.827-4.322-4.769s1.665-4.858,4.243-4.858a3.906,3.906,0,0,1,3.017,1.249,4.988,4.988,0,0,1,1.115,3.385v.661H95.6v.117a2.484,2.484,0,0,0,.647,1.9,2.371,2.371,0,0,0,1.733.762l.086,0c.064.006.129.009.194.009a2.066,2.066,0,0,0,1.923-1.331h1.787C101.718,21.826,100.094,23.008,98.022,23.008Zm-.092-8.065a2.277,2.277,0,0,0-1.639.694,2.421,2.421,0,0,0-.682,1.69h4.583a2.3,2.3,0,0,0-.616-1.7,2.188,2.188,0,0,0-1.584-.689H97.93ZM82.706,23.008a4.136,4.136,0,0,1-3.173-1.3,5.139,5.139,0,0,1-1.174-3.519,5.126,5.126,0,0,1,1.18-3.515,4.517,4.517,0,0,1,6.338,0,5.13,5.13,0,0,1,1.177,3.515,5.137,5.137,0,0,1-1.174,3.519A4.139,4.139,0,0,1,82.706,23.008Zm0-8.039c-1.522,0-2.43,1.205-2.43,3.225s.908,3.224,2.43,3.224,2.432-1.205,2.432-3.224S84.228,14.97,82.706,14.97Zm-6.319,7.977h-.092c-1.857,0-2.58-.711-2.58-2.536V15.024H72.382V13.5h1.333V11.273h1.891V13.5h1.743v1.527H75.606V20.2c0,.8.354,1.18,1.115,1.18a5.714,5.714,0,0,0,.619-.045v1.518A5.1,5.1,0,0,1,76.387,22.946ZM28.1,22.892h-2.03l4.54-12.886h2.11L37.262,22.89H35.2l-1.149-3.483H29.256L28.1,22.892Zm3.521-10.744L29.751,17.8h3.8l-1.873-5.653ZM90.488,22.892H88.606V13.5H90.4v1.6h.043a2.194,2.194,0,0,1,2.121-1.7l.084,0h.012a2.834,2.834,0,0,1,.634.072v1.8a2.587,2.587,0,0,0-.773-.118h-.073l-.075,0a1.882,1.882,0,0,0-1.39.621,1.97,1.97,0,0,0-.5,1.543V22.89ZM95.514,6.6a1.828,1.828,0,0,1-.2-.011h-.054a2.048,2.048,0,0,1-1.543-.707,2.155,2.155,0,0,1-.508-1.706,2.189,2.189,0,0,1,.508-1.712,2.08,2.08,0,0,1,1.577-.729h.018c1.274,0,2.034.88,2.034,2.355v.322h-3.22v.051a1.262,1.262,0,0,0,.319.945,1.2,1.2,0,0,0,.884.394h.013a1.07,1.07,0,0,0,.13.008,1.09,1.09,0,0,0,.954-.575h.866A1.867,1.867,0,0,1,95.514,6.6Zm-.226-4.079a1.158,1.158,0,0,0-.823.35,1.219,1.219,0,0,0-.342.86h2.3a1.143,1.143,0,0,0-.3-.86,1.091,1.091,0,0,0-.8-.35h-.041Zm-21.7,4.069a2.121,2.121,0,0,1-1.14-.333,2.249,2.249,0,0,1-1.01-2.1,2.219,2.219,0,0,1,1.012-2.092,2.115,2.115,0,0,1,2.278,0,2.219,2.219,0,0,1,1.011,2.092,2.246,2.246,0,0,1-1.01,2.1A2.121,2.121,0,0,1,73.588,6.588Zm0-4.034c-.777,0-1.222.585-1.222,1.606s.445,1.608,1.222,1.608,1.223-.586,1.223-1.608S74.367,2.553,73.59,2.553ZM55.35,6.588a2.12,2.12,0,0,1-1.14-.333,2.249,2.249,0,0,1-1.01-2.1,2.219,2.219,0,0,1,1.012-2.092,2.115,2.115,0,0,1,2.278,0A2.221,2.221,0,0,1,57.5,4.159a2.219,2.219,0,0,1-1.011,2.1A2.121,2.121,0,0,1,55.35,6.588Zm0-4.034c-.777,0-1.222.585-1.222,1.606s.445,1.608,1.222,1.608,1.223-.586,1.223-1.608S56.129,2.553,55.352,2.553ZM35.568,6.588a2.117,2.117,0,0,1-1.14-.333,2.219,2.219,0,0,1-1.011-2.1A2.221,2.221,0,0,1,34.43,2.066a2.115,2.115,0,0,1,2.278,0,2.219,2.219,0,0,1,1.011,2.092,2.246,2.246,0,0,1-1.01,2.1A2.12,2.12,0,0,1,35.568,6.588Zm0-4.034c-.777,0-1.222.585-1.222,1.606s.445,1.608,1.222,1.608,1.223-.586,1.223-1.608S36.347,2.553,35.57,2.553ZM59.827,6.582a1.36,1.36,0,0,1-.922-.361,1.43,1.43,0,0,1-.457-1.045c0-.831.6-1.326,1.7-1.395l1.236-.073V3.3c0-.5-.332-.772-.934-.772-.5,0-.85.19-.95.52h-.871c.092-.8.823-1.318,1.863-1.318,1.136,0,1.787.572,1.787,1.57V6.5h-.867V5.84h-.071a1.516,1.516,0,0,1-1.3.736l-.071,0A1.359,1.359,0,0,1,59.827,6.582Zm1.552-2.2-1.114.073c-.623.043-.913.257-.913.674s.332.665.846.665a1.057,1.057,0,0,0,.8-.254,1.117,1.117,0,0,0,.38-.768Zm4.028,2.19H65.35c-1.167,0-1.893-.926-1.893-2.416,0-1.465.743-2.412,1.893-2.412l.07,0a1.493,1.493,0,0,1,1.327.822h.068V0h.9V6.5h-.862V5.759h-.071A1.583,1.583,0,0,1,65.407,6.576Zm.2-4c-.751,0-1.218.607-1.218,1.584,0,.994.455,1.588,1.218,1.588s1.228-.607,1.228-1.584S66.362,2.575,65.6,2.575ZM86.4,6.523c-.994,0-1.4-.366-1.4-1.262V2.623h-.724V1.845H85V.661h.9V1.846h.988v.777H85.9v2.4c0,.487.2.7.644.7a2.942,2.942,0,0,0,.344-.021v.768a2.9,2.9,0,0,1-.49.048ZM89.018,6.5h-.9V0h.892V2.575h.071a1.407,1.407,0,0,1,1.277-.842c.038,0,.076,0,.113,0l.082,0a1.492,1.492,0,0,1,1.1.495,1.564,1.564,0,0,1,.385,1.25V6.5h-.9V3.708c0-.736-.337-1.125-.975-1.125-.029,0-.058,0-.086,0a1.063,1.063,0,0,0-.757.322,1.106,1.106,0,0,0-.305.867V6.5Zm-11.174,0h-.9V1.824h.866v.743h.067a1.362,1.362,0,0,1,1.248-.837c.037,0,.075,0,.112,0s.075,0,.113,0a1.468,1.468,0,0,1,1.084.484,1.54,1.54,0,0,1,.382,1.258V6.5h-.9V3.7c0-.756-.322-1.124-.984-1.124h-.048a1.04,1.04,0,0,0-.762.337,1.089,1.089,0,0,0-.279.849V6.5Zm-31.2,0h-.9V1.824h.867v.743h.067a1.364,1.364,0,0,1,1.249-.837c.037,0,.075,0,.112,0s.075,0,.113,0a1.468,1.468,0,0,1,1.084.484,1.536,1.536,0,0,1,.381,1.258V6.5h-.9V3.7c0-.756-.322-1.124-.985-1.124h-.048a1.036,1.036,0,0,0-.761.337,1.086,1.086,0,0,0-.279.849V6.5Zm-6.094,0h-.924L38.368,1.824h.913L40.1,5.39h.068L41.1,1.824h.863L42.9,5.39h.071l.813-3.566h.9L43.435,6.5H42.5l-.942-3.442h-.071L40.55,6.5Zm11.4,0h-.9V0h.9V6.5Zm-22.433,0H27.333V.305h2.183c.063,0,.128-.007.191-.007a2.655,2.655,0,0,1,1.941.856,2.772,2.772,0,0,1,.711,2.228C32.359,5.362,31.323,6.5,29.516,6.5ZM28.272,1.18V5.621h1.139c.038,0,.076,0,.114,0a1.881,1.881,0,0,0,1.4-.631,1.97,1.97,0,0,0,.479-1.6,1.981,1.981,0,0,0-.486-1.589,1.89,1.89,0,0,0-1.4-.629q-.053,0-.106,0ZM10.088,5.7h-.047a5.213,5.213,0,0,1,1.3-3.812A5.624,5.624,0,0,1,14.99,0a5.487,5.487,0,0,1-1.267,3.959A4.647,4.647,0,0,1,10.088,5.7Z"
                                        fill="#f5f9fc" />
                                </svg>
                            </div>
                            <div class="ml-1 store-btn bg-theme-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="113.1" height="28" viewBox="0 0 113.1 28">
                                    <path id="Google_Play" data-name="Google Play"
                                        d="M63.944,28a4.087,4.087,0,0,1-3.793-2.589l1.651-.7a2.373,2.373,0,0,0,2.166,1.558c1.461,0,2.3-.94,2.3-2.579v-.629h-.061a2.91,2.91,0,0,1-2.217,1.032h-.051a4.4,4.4,0,0,1,0-8.778,3.021,3.021,0,0,1,2.268,1.031h.071v-.722h1.742v7.808a4.771,4.771,0,0,1-1.193,3.5A3.922,3.922,0,0,1,63.968,28Zm.166-10.914h0a2.676,2.676,0,0,0,0,5.321l-.007,0,.011,0a2.4,2.4,0,0,0,1.7-.827,2.5,2.5,0,0,0,.595-1.833,2.515,2.515,0,0,0-.6-1.824,2.426,2.426,0,0,0-1.7-.837Zm43.806,10.7h-1.974l1.923-4.343-3.371-7.818h2.025l2.247,5.591h.061l2.166-5.591H113.1l-5.184,12.16ZM.874,25.7v0L12.307,14.641,15.366,17.6l-4.371,2.524ZM0,25.421v0L.011,2.754,11.73,14.082,0,25.42Zm76.4-1.289a4.2,4.2,0,0,1-2.988-1.268,4.353,4.353,0,0,1-1.222-3.116,4.189,4.189,0,0,1,1.093-3.086,4.03,4.03,0,0,1,2.948-1.3h.01a4.08,4.08,0,0,1,3.685,2.8l.212.463-5.76,2.425a2.185,2.185,0,0,0,2,1.332l.084,0h.005a2.464,2.464,0,0,0,2.111-1.217l1.468,1.031a4.253,4.253,0,0,1-3.56,1.939H76.4Zm.011-7.069c-.037,0-.074,0-.111,0a2.357,2.357,0,0,0-1.651.8,2.45,2.45,0,0,0-.6,1.76l3.847-1.63A1.659,1.659,0,0,0,76.41,17.063ZM54.732,24.132h-.007a4.384,4.384,0,0,1-.02-8.767h.082a4.178,4.178,0,0,1,2.993,1.258,4.394,4.394,0,0,1,1.249,3.127A4.35,4.35,0,0,1,54.732,24.132Zm-.209-7.039h0a2.6,2.6,0,0,0-1.913.849,2.685,2.685,0,0,0-.445,2.959,2.62,2.62,0,0,0,2.355,1.514c.061,0,.123,0,.184-.007A2.48,2.48,0,0,0,56.47,21.6a2.576,2.576,0,0,0,.664-1.852,2.647,2.647,0,0,0-1.659-2.471,2.559,2.559,0,0,0-.953-.184Zm-9.23,7.039h0a4.384,4.384,0,0,1-.01-8.767h.071a4.178,4.178,0,0,1,2.993,1.258,4.394,4.394,0,0,1,1.249,3.127A4.349,4.349,0,0,1,45.293,24.132Zm-.2-7.038a2.6,2.6,0,0,0-1.917.853,2.685,2.685,0,0,0-.437,2.963,2.62,2.62,0,0,0,2.352,1.507c.064,0,.13,0,.194-.007h-.011a2.479,2.479,0,0,0,1.766-.808,2.576,2.576,0,0,0,.664-1.852,2.646,2.646,0,0,0-1.661-2.472A2.557,2.557,0,0,0,45.088,17.094Zm-10.761,7c-.091,0-.184,0-.275-.006s-.175.005-.261.005a6.7,6.7,0,0,1-5.751-3.332,6.924,6.924,0,0,1,0-6.97,6.7,6.7,0,0,1,5.751-3.332c.087,0,.175,0,.261.005h.056a6.347,6.347,0,0,1,4.53,1.929L37.353,13.7a4.588,4.588,0,0,0-3.234-1.332h-.077a4.952,4.952,0,0,0,0,9.9c.059,0,.119,0,.179,0a4.46,4.46,0,0,0,3.193-1.364,3.939,3.939,0,0,0,1.013-2.342H34.052V16.716l6.145-.051a6.184,6.184,0,0,1,.1,1.166,6.223,6.223,0,0,1-1.579,4.352A6.044,6.044,0,0,1,34.328,24.1Zm65.5-.008a2.892,2.892,0,0,1-1.941-.751,3.021,3.021,0,0,1-.981-2.094,2.585,2.585,0,0,1,1.143-2.149,4.372,4.372,0,0,1,2.5-.749h.016a4.145,4.145,0,0,1,1.958.5v-.134a1.88,1.88,0,0,0-.671-1.263,1.8,1.8,0,0,0-1.354-.4c-.049,0-.1-.006-.147-.006a1.784,1.784,0,0,0-1.573.955l-1.681-.712a3.522,3.522,0,0,1,3.16-1.977c.07,0,.141,0,.212.006l.05.031a3.512,3.512,0,0,1,3.838,3.568v4.962h-1.822V22.843h-.061a2.638,2.638,0,0,1-2.238,1.245c-.064,0-.128,0-.191-.007S99.9,24.089,99.825,24.089Zm1.039-4.176h-.084c-.979,0-2.025.36-2.025,1.372,0,.8.906,1.094,1.478,1.094l.051.031a2.314,2.314,0,0,0,2.217-2.063A3.319,3.319,0,0,0,100.863,19.912Zm-4.994,3.962H93.976V10.981h1.893V23.873Zm-9.708,0H84.267V10.981H88.8c.094-.007.19-.01.284-.01a3.946,3.946,0,0,1,3.361,1.924,4.06,4.06,0,0,1,0,4.177A3.945,3.945,0,0,1,89.086,19c-.094,0-.19,0-.284-.01H86.161v4.889Zm-.011-11.1v4.394h2.642l.04.031a2.213,2.213,0,0,0,0-4.425Zm-14.882,11.1H69.375V10.981h1.893V23.873ZM16.089,17.18h0l-3.2-3.1,3.506-3.389,4.263,2.46a.8.8,0,0,1,0,1.392L16.09,17.18Zm-3.782-3.656h0L.7,2.3,10.977,7.568l4.691,2.708-3.36,3.247ZM30.844,6.476l-.1,0a3.185,3.185,0,0,1-2.924-2.012A3.29,3.29,0,0,1,28.5.934a3.028,3.028,0,0,1,2.17-.929h.08a3.074,3.074,0,0,1,1.233.257,2.525,2.525,0,0,1,.951.691L32.4,1.5a2,2,0,0,0-1.55-.736q-.055,0-.11,0h-.013a2.34,2.34,0,0,0-1.684.726,2.433,2.433,0,0,0-.662,1.749,2.431,2.431,0,0,0,1.441,2.269,2.354,2.354,0,0,0,2.609-.484,1.965,1.965,0,0,0,.506-1.258h-2.2V3.029h2.947a2.677,2.677,0,0,1,.041.464,2.841,2.841,0,0,1-.76,2.063A2.939,2.939,0,0,1,30.844,6.476Zm27.171,0a3.109,3.109,0,0,1-2.227-.936,3.39,3.39,0,0,1,0-4.59A3.089,3.089,0,0,1,58.016,0a3.127,3.127,0,0,1,2.227.945,3.375,3.375,0,0,1,0,4.59A3.109,3.109,0,0,1,58.015,6.471Zm0-5.695a2.3,2.3,0,0,0-1.65.694,2.669,2.669,0,0,0,0,3.549,2.309,2.309,0,0,0,3.3,0,2.669,2.669,0,0,0,0-3.549A2.3,2.3,0,0,0,58.015.777Zm5.012,5.564h-.789V.15h.951l2.956,4.817V.15h.779V6.339h-.81L63.027,1.3V6.34Zm-12.381,0h-.78V.914h-1.7V.15h4.171V.914h-1.69V6.339Zm-3.463,0H46.4V.15h.779V6.339Zm-5.5,0h-.779V.914H39.2V.15h4.222V.914H41.685V6.339Zm-3.32,0H34.822V.15h3.543V.914H35.632v1.96h2.49v.743h-2.49v1.96h2.733v.762Z"
                                        fill="#f5f9fc" />
                                </svg>
                            </div>
                        </div>

                        <br>
                        <h5 class="text-theme-blue">Contato</h5>
                        <span class="text-dark">Telefone: <a href="tel:+1234567890123"
                                class="text-dark">+1234567890123</a></span> <br>
                        <span class="text-dark">E-mail: <a href="mailto:email@seudominio.com"
                                class="text-dark">email@seudominio.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->
@endsection
