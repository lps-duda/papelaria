<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro — Ordem & Papel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{box-sizing:border-box;margin:0;padding:0;font-family:'Segoe UI',sans-serif}
        body{background:#f5f0f0;display:flex;align-items:center;justify-content:center;min-height:100vh;padding:20px}
        .card{background:#fff;border-radius:4px;width:100%;max-width:420px;overflow:hidden;box-shadow:0 8px 32px rgba(139,0,0,0.12);border-top:4px solid #C0392B}
        .card-left-panel{background:#8B0000;padding:24px 28px;display:flex;align-items:center;gap:16px}
        .card-logo{width:56px;height:56px;border-radius:50%;border:3px solid rgba(255,255,255,0.3);overflow:hidden;flex-shrink:0;background:#C0392B}
        .card-logo img{width:100%;height:100%;object-fit:cover;object-position:center top}
        .card-quote p{color:rgba(255,255,255,0.85);font-size:11px;font-style:italic;font-family:'Georgia',serif;line-height:1.6}
        .card-quote span{color:rgba(255,255,255,0.55);font-size:10px;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;display:block;margin-top:4px}
        .card-body{padding:28px}
        .tag{font-size:9px;background:#fde8e8;color:#8B0000;padding:2px 8px;border-radius:2px;font-weight:700;letter-spacing:1px;text-transform:uppercase;display:inline-block;margin-bottom:16px}
        .card-title{font-size:26px;font-weight:900;color:#8B0000;font-family:'Georgia',serif;letter-spacing:0.5px;margin-bottom:4px}
        .card-subtitle{font-size:12px;color:#aaa;margin-bottom:24px;letter-spacing:0.3px}
        .form-group{margin-bottom:16px}
        .form-group label{display:block;font-size:11px;font-weight:700;color:#555;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.8px}
        .form-group input{width:100%;padding:10px 14px;border:1.5px solid #f0dada;border-radius:4px;font-size:13px;outline:none;background:#fafafa;transition:border 0.2s}
        .form-group input:focus{border-color:#C0392B;background:#fff}
        .form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
        .divider-line{height:1px;background:#f0dada;margin:16px 0}
        .btn-submit{width:100%;background:#C0392B;color:#fff;border:none;padding:12px;border-radius:4px;font-size:13px;font-weight:700;cursor:pointer;font-family:'Georgia',serif;letter-spacing:1px;margin-bottom:16px;transition:background 0.2s}
        .btn-submit:hover{background:#8B0000}
        .card-footer{text-align:center;font-size:12px;color:#aaa}
        .card-footer a{color:#C0392B;font-weight:700;text-decoration:none}
        .back{text-align:center;margin-top:10px;font-size:12px}
        .back a{color:#C0392B;text-decoration:none;font-weight:600}
        .alert-danger{background:#fde8e8;border:1px solid #f5b7b1;border-radius:4px;padding:10px 14px;margin-bottom:16px;font-size:12px;color:#C0392B}
    </style>
</head>
<body>
<div class="card">
    <div class="card-left-panel">
        <div class="card-logo">
            <img src="{{ asset('images/lenin.jpg') }}" alt="Logo">
        </div>
        <div class="card-quote">
            <p>"A educação é a arma mais poderosa que você pode usar para mudar o mundo."</p>
            <span>— Nelson Mandela</span>
        </div>
    </div>
    <div class="card-body">
        <div class="tag">Novo por aqui?</div>
        <div class="card-title">Ordem & Papel</div>
        <div class="card-subtitle">Crie sua conta e acesse o sistema completo</div>

        @if($errors->any())
            <div class="alert-danger">
                @foreach($errors->all() as $erro)
                    <div>{{ $erro }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="seu@email.com" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
                <div class="form-group">
                    <label>Confirmar</label>
                    <input type="password" name="password_confirmation" placeholder="••••••••" required>
                </div>
            </div>
            <div class="divider-line"></div>
            <button type="submit" class="btn-submit">Criar minha conta</button>
        </form>

        <div class="card-footer">Já tem conta? <a href="{{ route('login') }}">Entrar</a></div>
        <div class="back"><a href="/"><i class="fas fa-arrow-left"></i> Voltar para a loja</a></div>
    </div>
</div>
</body>
</html>