<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - Solemn's Workshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar bg-white shadow-sm border-bottom">
    <div class="container-fluid navbar-custom">

        <div class="navbar-brand d-flex align-items-center m-0">

            <img src="{{ asset('imagens/pngtree-circle-technology-abstract-logo-vector-minimalist-png-image_1881155-removebg-preview.png') }}"
                 alt="Logo"
                 class="logo-navbar me-2">

            <span class="fw-bold titulo-navbar">
                Solemn's Workshop
            </span>

        </div>

        <div class="d-flex align-items-center gap-2">

            <a href="{{ route('principal') }}"
               class="btn btn-info text-white btn-navbar">
                Ver Loja
            </a>

            <a href="{{ route('logout') }}"
               class="btn btn-outline-danger btn-navbar">
                Sair
            </a>

        </div>

    </div>
</nav>

<!-- CONTEÚDO -->

<div class="container py-5">

    <!-- TÍTULO -->

    <div class="mb-5">
        <h1 class="fw-bold">
            Painel Administrativo
        </h1>

        <p class="text-muted">
            Gerencie produtos, usuários e informações da loja.
        </p>
    </div>

    <!-- BOTÕES DE ACESSO -->

<!-- MODAL EDITAR USUÁRIO -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>