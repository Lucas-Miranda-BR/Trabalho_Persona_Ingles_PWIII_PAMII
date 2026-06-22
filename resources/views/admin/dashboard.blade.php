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

            <button class="btn btn-outline-danger btn-navbar">
                Sair
            </button>
        </div>

    </div>
</nav>

<div class="container py-5">

    <div class="mb-5">
        <h1 class="fw-bold">Administração de Produtos</h1>
        <p class="text-muted">
            Gerencie os produtos exibidos na página principal.
        </p>
    </div>

    <!-- Cards -->

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
                    <h6>Sem Estoque</h6>
                    <h2>6</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm dashboard-card">
                <div class="card-body text-center">
                    <h6>Vendas Hoje</h6>
                    <h2>8</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Formulário -->

    <div class="card shadow-sm mb-5">

        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Adicionar Produto</h5>
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Preço</label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Estoque</label>
                        <input type="number" class="form-control">
                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <button class="btn btn-info text-white">
                    Adicionar Produto
                </button>

            </form>

        </div>

    </div>

    <!-- Tabela -->

    <div class="card shadow-sm">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Produtos Cadastrados</h5>
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
                            <th width="220">Ações</th>
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
                                <button class="btn btn-warning btn-sm">
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
                            <td>10</td>
                            <td>
                                <span class="badge bg-success">
                                    Disponível
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">
                                    Editar
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Arduino Mega 2560</td>
                            <td>R$ 149,90</td>
                            <td>0</td>
                            <td>
                                <span class="badge bg-danger">
                                    Sem Estoque
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">
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

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>