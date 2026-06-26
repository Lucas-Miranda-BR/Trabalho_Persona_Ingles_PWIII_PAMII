<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuário - Solemn's Workshop</title>

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

            <a href="{{ route('dashboard.dashboard') }}"
               class="btn btn-info text-white btn-navbar">
                Dashboard
            </a>

            <a href="{{ route('usuario.logout') }}"
               class="btn btn-outline-danger btn-navbar">
                Sair
            </a>

        </div>

    </div>
</nav>

<!-- CONTEÚDO -->

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm">

                <div class="card-header bg-warning">

                    <h5 class="mb-0">
                        Editar Usuário
                    </h5>

                </div>

                <div class="card-body">

                    <form action="{{route('dashboard.usuario.save')}}" method="post">

                        @csrf

                        <input
                            type="hidden"
                            name="usuario_id"
                            value="{{ $usuario->usuario_id }}"
                            autocomplete="off"
                            required>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="nome">
                                    Nome
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="nome"
                                    id="nome"
                                    value="{{ $usuario->nome }}"
                                    autocomplete="off"
                                    required>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label" for="email">
                                    E-mail
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    value="{{ $usuario->email }}"
                                    autocomplete="off"
                                    required>

                            </div>

                        </div>

                        <div class="mb-4">

                            <label class="form-label" for="admin">
                                Tipo de Usuário
                            </label>

                            <select
                                class="form-select"
                                name="admin"
                                id="admin"
                                autocomplete="off"
                                required>

                                <option value="0">
                                    Cliente
                                </option>

                                <option value="1" selected>
                                    Administrador
                                </option>

                            </select>

                        </div>

                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-success">
                                Salvar Alterações
                            </button>

                            <a href="{{route('dashboard.dashboard')}}"
                               class="btn btn-secondary">
                                Cancelar
                            </a>

                        </div>

                    </form>

                </div>

            </div>

            @isset($success)

                <div class="alert alert-success mt-4">
                    {{$success}}
                </div>

            @endisset

            @if($errors->any())

                <div class="alert alert-danger mt-4">

                    <ul class="mb-0">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>