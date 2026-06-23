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

@if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif