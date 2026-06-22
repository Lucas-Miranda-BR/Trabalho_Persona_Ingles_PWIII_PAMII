<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solemn's Workshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-light border-bottom shadow-sm">
        <div class="container-fluid">

            <!-- Logo e Nome -->
            <div class="navbar-brand d-flex align-items-center">

                <img src="{{ asset('imagens/pngtree-circle-technology-abstract-logo-vector-minimalist-png-image_1881155-removebg-preview.png') }}"
                    alt="Logo"
                    class="logo-navbar me-2">

                <span class="titulo-navbar fw-bold">
                    Solemn's Workshop
                </span>

            </div>

            <!-- Itens da Direita -->
            <div class="d-flex align-items-center justify-content-center gap-2 ms-auto">

                <a href="{{ route('login') }}"
                class="text-decoration-none text-dark nav-link-custom">
                    Login
                </a>

                <a href="{{ route('cadastrar') }}"
                class="text-decoration-none text-dark nav-link-custom">
                    Sign Up
                </a>

                <a href="{{ route('usuario') }}">
                    <img src="{{ asset('imagens/ícone de conta/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396-removebg-preview.png') }}"
                        alt="Perfil"
                        class="icon_avatar">
                </a>

                <a href="{{ route('config') }}">
                    <img src="{{ asset('imagens/engrenagem-removebg-preview.png') }}"
                        alt="Configurações"
                        class="icon_config">
                </a>

            </div>

        </div>
    </nav>


    <!-- banner -->

    <div class="banner container-fluid py-4">
        <div class="row">

            <div class="col-3 col-md-3 col-lg-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('imagens/página1/xnapper-2025-10-09-13-45-21-removebg-preview.png') }}"
                    alt="Arduino"
                    class="img-fluid arduino-img">
            </div>

            <div class="col-8 col-md-9 col-lg-9 d-flex justify-content-center align-items-center">
                <h1 class="banner-title">
                    Confira nossa nova coleção de Arduinos!
                </h1>
            </div>

        </div>
    </div>

    <!-- texto -->

    <div class="container py-4">
        <div class="d-flex align-items-center justify-content-center gap-3 titulo-produtos">
    
            <img src="{{ asset('imagens/channels4_profile-removebg-preview.png') }}"
                alt="Ícone Arduino"
                class="icone-produtos">
    
            <h2 class="m-0 texto-produtos">
                Confira nossos produtos!
            </h2>
    
        </div>
    </div>

    <!-- produtos -->

    @isset($produtos)
    @foreach($produtos as $produto)
        <div class="container py-5">
            <div class="row justify-content-center g-4">
                <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                    <div class="card produto-card">

                        <div class="card-body text-center">
                            <h5 class="card-title">{{$produto->nome}}</h5>
                            <p class="card-text">
                                {{$produto->descricao}}
                            </p>
                            <h4 class="preco">R$ {{$produto->valor}}</h4>
                            <form action="{{ route('produto.compra', ['id' => $produto->id]) }}" method="GET">
                                <button class="btn btn-info text-white" type="submit">Compra</button>
                            </form>
                        </div>
                    </div>
                </div>
    @endforeach
    @endisset
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

