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

                <a href="{{ route('usuario.login') }}"
                class="text-decoration-none text-dark nav-link-custom">
                    Login
                </a>

                <a href="{{ route('usuario.cadastrar') }}"
                class="text-decoration-none text-dark nav-link-custom">
                    Sign Up
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

                    <h2 class="mb-4">{{$produto->nome}}</h2>

                    <div class="row align-items-center">

                        <div class="col-md-7">

                            <p>
                                {{$produto->descricao}}
                            </p>

                            <h3 class="preco">
                            R$ {{ number_format($produto->valor, 2, ',', '.') }}
                            </h3>


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
                        <span>Valor</span>
                        <span>R$ {{ number_format($produto->valor, 2, ',', '.') }}</span>
                    </div>

                    <div class="d-flex justify-content-between mt-2">
                        <span>Quantidade</span>
                        <span>1</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between fw-bold">
                        <span>Total</span>
                        <span>R$ {{ number_format($produto->valor, 2, ',', '.') }}</span>
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