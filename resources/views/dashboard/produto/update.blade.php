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

                    @csrf

                    <input type="hidden" name="id" value="{{ $produto->id }}">

                    <div class="mb-3">
                        <label class="form-label">
                            Nome
                        </label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}">
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Preço
                            </label>

                            <input type="number" class="form-control" name="preco" id="preco" value="{{ $produto->preco }}">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Estoque
                            </label>

                            <input type="number" class="form-control" name="estoque" id="estoque" value="{{ $produto->estoque }}">

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Descrição
                        </label>

                        <textarea class="form-control" rows="4" name="descricao" id="descricao" value="{{ $produto->descricao }}"></textarea>

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