<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compra</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/compra.css') }}">

</head>
<body>

    <!-- Navbar -->

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


    <!-- Conteúdo -->

    <div class="container py-5">

        <div class="row g-4">

            <!-- Produto -->

            <div class="col-lg-8">

                <div class="produto-compra">

                    <h2 class="mb-4">Arduino Uno R3</h2>

                    <div class="row align-items-center">

                        <div class="col-md-7">

                            <p>
                                Arduino Uno R3 original para projetos de
                                automação, robótica e eletrônica.
                            </p>

                            <h3 class="preco">
                                R$ 89,90
                            </h3>

                            <label class="form-label mt-3">
                                Quantidade
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                value="1"
                                min="1">

                        </div>

                    </div>

                </div>

            </div>

            <!-- Resumo -->

            <div class="col-lg-4">

                <div class="resumo">

                    <h4>Resumo do Pedido</h4>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <span>Produto</span>
                        <span>R$ 89,90</span>
                    </div>

                    <div class="d-flex justify-content-between mt-2">
                        <span>Frete</span>
                        <span>Grátis</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between fw-bold">
                        <span>Total</span>
                        <span>R$ 89,90</span>
                    </div>

                    <button
                        class="btn btn-info text-white w-100 mt-4"
                        data-bs-toggle="modal"
                        data-bs-target="#compraFinalizada">
                        Finalizar Compra
                    </button>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="compraFinalizada" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h5 class="modal-title">
                        Compra Finalizada
                    </h5>
    
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>
                </div>
    
                <div class="modal-body text-center">
                    <h2>✅</h2>
                    <p>
                        Sua compra foi finalizada com sucesso!
                    </p>
                    <p>
                        Obrigado por comprar na TechnoBlog.
                    </p>
                </div>
    
                <div class="modal-footer">
                    <a href="{{ route('principal') }}" class="btn btn-info text-white">
                        Fechar
                    </a>
                </div>
    
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>