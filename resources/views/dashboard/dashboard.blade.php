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

    <!-- ESTATÍSTICAS -->

    <div class="row g-4 mb-5">

        <div class="col-md-3">
            <div class="card shadow-sm dashboard-card">
                <div class="card-body text-center">
                    <h6>Total Produtos</h6>
                    <h2>24</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm dashboard-card">
                <div class="card-body text-center">
                    <h6>Em Estoque</h6>
                    <h2>18</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm dashboard-card">
                <div class="card-body text-center">
                    <h6>Total Usuários</h6>
                    <h2>120</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm dashboard-card">
                <div class="card-body text-center">
                    <h6>Administradores</h6>
                    <h2>3</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- CRUD PRODUTOS -->

    <div class="card shadow-sm mb-5">

        <div class="card-header bg-info text-white">
            <h5 class="mb-0">
                Adicionar Produto
            </h5>
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Nome do Produto
                        </label>

                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">
                            Preço
                        </label>

                        <input type="number"
                               step="0.01"
                               class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">
                            Estoque
                        </label>

                        <input type="number"
                               class="form-control">
                    </div>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Descrição
                    </label>

                    <textarea class="form-control"
                              rows="3"></textarea>

                </div>

                <button class="btn btn-info text-white">
                    Adicionar Produto
                </button>

            </form>

        </div>

    </div>

    <!-- TABELA PRODUTOS -->

    <div class="card shadow-sm mb-5">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">
                Produtos Cadastrados
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Estoque</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Arduino Uno R3</td>
                            <td>R$ 89,90</td>
                            <td>15</td>

                            <td>
                                <span class="badge bg-success">
                                    Disponível
                                </span>
                            </td>

                            <td>
                                    <button
                                        class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editarProduto">
                                        Editar
                                    </button>

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>ESP32 Wi-Fi</td>
                            <td>R$ 59,90</td>
                            <td>8</td>

                            <td>
                                <span class="badge bg-success">
                                    Disponível
                                </span>
                            </td>

                            <td>
                                    <button
                                        class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editarProduto">
                                        Editar
                                    </button>

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- CRUD USUÁRIOS -->


    <!-- TABELA USUÁRIOS -->

    <div class="card shadow-sm">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">
                Usuários Cadastrados
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Perfil</th>
                            <th>Ações</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1</td>
                            <td>Administrador</td>
                            <td>admin@solemns.com</td>
                            <td>Tatuí</td>
                            <td>SP</td>

                            <td>
                                <span class="badge bg-danger">
                                    Admin
                                </span>
                            </td>

                            <td>

                                <button
                                    class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editarUsuario">
                                    Editar
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>2</td>
                            <td>João Silva</td>
                            <td>joao@email.com</td>
                            <td>Sorocaba</td>
                            <td>SP</td>

                            <td>
                                <span class="badge bg-info">
                                    Cliente
                                </span>
                            </td>

                            <td>

                                <button
                                    class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editarUsuario">
                                    Editar
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- MODAL EDITAR PRODUTO -->

<div class="modal fade" id="editarProduto" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">
                    Editar Produto
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body">

                <form>

                    <div class="mb-3">
                        <label class="form-label">
                            Nome
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="Arduino Uno R3">
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Preço
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                value="89.90">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Estoque
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                value="15">

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Descrição
                        </label>

                        <textarea
                            class="form-control"
                            rows="4">Arduino original para projetos eletrônicos.</textarea>

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button
                    type="button"
                    class="btn btn-success">
                    Salvar Alterações
                </button>

            </div>

        </div>

    </div>
</div>


<!-- MODAL EDITAR USUÁRIO -->

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

                <form>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Nome
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                value="Administrador">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                E-mail
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                value="admin@solemns.com">

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Cidade
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                value="Tatuí">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Estado
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                value="SP">

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Perfil
                        </label>

                        <select class="form-select">

                            <option>
                                Cliente
                            </option>

                            <option selected>
                                Administrador
                            </option>

                        </select>

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button
                    type="button"
                    class="btn btn-success">
                    Salvar Alterações
                </button>

            </div>

        </div>

    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>