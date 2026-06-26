<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Solemn's Workshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="auth-container">

    <div class="auth-card">

        <div class="text-center">

            <img
                src="{{ asset('imagens/pngtree-circle-technology-abstract-logo-vector-minimalist-png-image_1881155-removebg-preview.png') }}"
                alt="Logo"
                class="logo-auth">

            <h2 class="titulo-auth">
                Solemn's Workshop
            </h2>

            <p class="subtitulo-auth">
                Faça login para continuar
            </p>

        </div>

            <form method="POST" action="{{ route('usuario.autenticar') }}">

                @csrf

                <div class="mb-3">

                    <label class="form-label" for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        class="form-control input-auth"
                        name="email"
                        id="email"
                        placeholder="Digite seu e-mail"
                        value="{{ old('email') }}"
                        autocomplete="off"
                        required>

                </div>

                <div class="mb-4">

                    <label class="form-label" for="senha">
                        Senha
                    </label>

                    <input
                        type="password"
                        class="form-control input-auth"
                        name="senha"
                        id="senha"
                        placeholder="Digite sua senha"
                        autocomplete="off"
                        required>

                </div>

                @if(session('erro'))
                    <div class="alert alert-danger">
                        {{ session('erro') }}
                    </div>
                @endif

                <button type="submit" class="btn btn-auth w-100">
                    Entrar
                </button>

            </form>

        <div class="text-center mt-4">
            Não possui conta?

            <a href="{{ route('usuario.cadastrar') }}" class="link-auth">
                Cadastre-se
            </a>
        </div>

    </div>

</div>

</body>
</html>