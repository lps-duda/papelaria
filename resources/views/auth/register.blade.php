<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro — PapelStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{box-sizing:border-box;margin:0;padding:0;font-family:'Segoe UI',sans-serif}
        body{background:#f5f5f5;display:flex;align-items:center;justify-content:center;min-height:100vh}
        .container{display:flex;width:100%;max-width:900px;min-height:520px;border-radius:16px;overflow:hidden;box-shadow:0 8px 40px rgba(0,0,0,0.10)}
        .left{background:#E74C3C;flex:1;display:flex;flex-direction:column;justify-content:center;padding:48px 40px}
        .left-title{font-size:32px;font-weight:800;color:#fff;line-height:1.2;margin-bottom:12px}
        .left-sub{font-size:13px;color:rgba(255,255,255,0.75);line-height:1.7;margin-bottom:32px}
        .info-card{background:rgba(255,255,255,0.15);border-radius:12px;padding:20px 24px;border:1px solid rgba(255,255,255,0.25)}
        .info-card h4{color:#fff;font-size:14px;font-weight:700;margin-bottom:10px}
        .info-card p{color:rgba(255,255,255,0.8);font-size:13px;line-height:1.8}

        .right{background:#fff;flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:48px 40px}
        .right-title{font-size:20px;font-weight:800;color:#1a1a1a;margin-bottom:6px;width:100%}
        .right-sub{font-size:13px;color:#aaa;margin-bottom:24px;width:100%}
        .form-group{width:100%;margin-bottom:14px}
        .form-group label{display:block;font-size:12px;font-weight:700;color:#555;margin-bottom:6px}
        .form-group input{width:100%;padding:11px 14px;border:1.5px solid #eee;border-radius:8px;font-size:13px;outline:none;transition:border 0.2s;background:#fafafa}
        .form-group input:focus{border-color:#E74C3C;background:#fff}
        .btn-register{width:100%;background:#E74C3C;color:#fff;border:none;padding:12px;border-radius:8px;font-size:14px;font-weight:700;cursor:pointer;margin-bottom:16px;margin-top:6px;transition:background 0.2s}
        .btn-register:hover{background:#C0392B}
        .login-link{font-size:12px;color:#aaa;text-align:center}
        .login-link a{color:#E74C3C;font-weight:700;text-decoration:none}
        .back-link{font-size:12px;color:#aaa;text-align:center;margin-top:10px}
        .back-link a{color:#E74C3C;text-decoration:none;font-weight:600}
    </style>
</head>
<body>
<div class="container">
    <div class="left">
        <h1 class="left-title">Crie sua conta na PapelStore</h1>
        <p class="left-sub">Cadastre-se gratuitamente e tenha acesso ao sistema completo de gestão da papelaria.</p>
        <div class="info-card">
            <h4>O que você pode fazer</h4>
            <p>✓ Cadastrar produtos<br>✓ Gerenciar estoque<br>✓ Fazer upload de imagens<br>✓ Editar e excluir registros</p>
        </div>
    </div>
    <div class="right">
        <div class="right-title">Criar conta</div>
        <div class="right-sub">Preencha os dados abaixo para se cadastrar</div>

        @if($errors->any())
            <div style="background:#fde8e8;border:1px solid #f5b7b1;border-radius:8px;padding:10px 14px;width:100%;margin-bottom:16px;font-size:12px;color:#C0392B">
                @foreach($errors->all() as $erro)
                    <div>{{ $erro }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" style="width:100%">
            @csrf
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="seu@email.com" required>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" placeholder="Mínimo 8 caracteres" required>
            </div>
            <div class="form-group">
                <label>Confirmar senha</label>
                <input type="password" name="password_confirmation" placeholder="Repita a senha" required>
            </div>
            <button type="submit" class="btn-register">Cadastrar</button>
        </form>

        <div class="login-link">
            Já tem conta? <a href="{{ route('login') }}">Entrar</a>
        </div>
        <div class="back-link">
            <a href="/"><i class="fas fa-arrow-left"></i> Voltar para a loja</a>
        </div>
    </div>
</div>
</body>
</html>