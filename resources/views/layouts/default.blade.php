<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')

    <!--body content wrap start-->
    <div class="main">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"></span>
    </button>
    <!--bottom to top button end-->

    <!-- Modal -->
    <div class="modal fade" id="cookieModal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex flex-row align-items-center">
                        <svg id="Grupo_6381" data-name="Grupo 6381" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="95.127" height="95.127"
                            viewBox="0 0 95.127 95.127">
                            <defs>
                                <clipPath id="clip-path">
                                    <path id="Caminho_3538" data-name="Caminho 3538"
                                        d="M30.763,36.712a17.376,17.376,0,0,0,33.6,0,25.029,25.029,0,0,0-33.6,0m-8.2,18.534a25,25,0,0,1,8.2-18.534,17.605,17.605,0,0,1-.58-4.452,17.38,17.38,0,0,1,34.76,0,16.742,16.742,0,0,1-.581,4.452,25,25,0,1,1-41.8,18.534M18.251,0A18.241,18.241,0,0,0,0,18.233v58.66A18.242,18.242,0,0,0,18.251,95.127H76.894A18.238,18.238,0,0,0,95.127,76.893V18.233A18.237,18.237,0,0,0,76.894,0Z"
                                        fill="#fff" />
                                </clipPath>
                            </defs>
                            <g id="Grupo_6380" data-name="Grupo 6380" clip-path="url(#clip-path)">
                                <rect id="Retângulo_2150" data-name="Retângulo 2150" width="95.127" height="95.127"
                                    transform="translate(0 0)" fill="#fff" />
                            </g>
                        </svg>

                        <div class="mx-3">
                            <h4 class="text-white">Cookies</h4>
                            <p class="text-white">Nós usamos cookies. Eles são usados para melhorar a sua experiência. Ao acessar a página,
                                você concorda com a nossa <a href="/politics">Política de Privacidade.</a></p>
                        </div>

                        <button type="button" class="btn btn-modal-neg" data-dismiss="modal">Negar</button>
                        <button type="button" class="btn btn-modal-acc ml-2" data-dismiss="modal">Aceitar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('scripts')
</body>

</html>
