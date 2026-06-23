<div class="card shadow-sm mb-5">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">
                Usuarios Cadastrados
            </h5>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                
                <table class="table table-hover align-middle">
                    
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Admin</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @isset($usuarios)
                        @foreach($usuarios as $usuario)

                        <tr>
                            <td>$usuario->nome</td>
                            <td>$usuario->admin</td>

                            <td>
                                <form action="{{ route('usuario.update') }}" method="GET">
                                @csrf
                                    <button
                                        class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editarUsuario">
                                        Editar
                                    </button>
                                </form>
                                <form form action="{{ route('usuario.delete') }}" method="GET">
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