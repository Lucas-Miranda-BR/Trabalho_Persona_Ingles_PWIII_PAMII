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
                        @isset($produtos)
                        @foreach($produtos as $produto)

                        <tr>
                            <td>$produto->nome</td>
                            <td>$produto->preco</td>
                            <td>$produto->estoque</td>

                            <td>
                                <span class="badge bg-success">
                                    $produto->status
                                </span>
                            </td>

                            <td>
                            <form action="{{ route('produto.update') }}" method="GET">
                            @csrf
                                    <button
                                        class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editarProduto">
                                        Editar
                                    </button>
                                </form>
                                <form form action="{{ route('produto.delete') }}" method="GET">
                            @csrf
                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>
                                </form>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>