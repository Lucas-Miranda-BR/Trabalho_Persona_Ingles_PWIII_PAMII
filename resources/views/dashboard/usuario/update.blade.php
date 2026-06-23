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

            <a href="{{ route('usuario.logout') }}"
               class="btn btn-outline-danger btn-navbar">
                Sair
            </a>

        </div>

    </div>
</nav>

<div class="modal fade" id="editarUsuario" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">
                    Editar Usuário
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body">

                <form action="dashboard.usuario.save" method="post">

                <input type="hidden" name="id" value="{{ $usuario->id }}">

                @csrf
                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label" for="nome">
                                Nome
                            </label>

                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $usuario->nome }}">


                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label" for="email">
                                E-mail
                            </label>

                            <input type="email" class="form-control" name="email" id="email" value="{{ $usuario->email }}">

                        </div>

                    </div>

                    <div class="row">

                    <div class="mb-3">

                        <label class="form-label" for="admin">
                            Tipo
                        </label>

                        <select class="form-select" name="admin" id="admin" value="{{ $usuario->admin }}">

                            <option>
                                Cliente
                            </option>

                            <option selected>
                                Administrador
                            </option>

                        </select>

                    </div>
    
                    <button
                        type="submit"
                        class="btn btn-success">
                        Salvar Alterações
                    </button>

                </form>

            </div>

            <div class="modal-footer">

            <a href="{{route('dashboard.dashboard')}}"><button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancelar
                </button>
            </a>

            </div>

        </div>

    </div>
</div>

@isset($success)
                            <div class="mb-3">
                            <p>{{$success}}</p>
                            </div>
                        @endisset

@if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
</body>
</html>