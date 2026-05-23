<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PapelStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{box-sizing:border-box;margin:0;padding:0;font-family:'Segoe UI',sans-serif}
        body{background:#fff}

        .nav{display:flex;align-items:center;justify-content:space-between;padding:14px 36px;background:#fff;border-bottom:2px solid #E74C3C}
        .logo{display:flex;align-items:center;gap:10px;color:#C0392B;font-size:18px;font-weight:800;text-decoration:none}
        .logo-icon{width:34px;height:34px;background:#E74C3C;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:16px}
        .nav-links{display:flex;gap:24px}
        .nav-links a{color:#555;font-size:13px;text-decoration:none;font-weight:500}
        .nav-links a:hover{color:#E74C3C}
        .nav-links a.active{color:#E74C3C;font-weight:700;border-bottom:2px solid #E74C3C;padding-bottom:2px}
        .nav-btns{display:flex;gap:8px}
        .btn-out{border:1.5px solid #E74C3C;color:#E74C3C;background:#fff;padding:6px 16px;border-radius:6px;font-size:12px;font-weight:700;cursor:pointer}
        .btn-in{background:#E74C3C;color:#fff;border:none;padding:6px 16px;border-radius:6px;font-size:12px;font-weight:700;cursor:pointer}

        .hero{display:flex;align-items:center;justify-content:space-between;padding:48px 36px;background:#fff;border-bottom:1px solid #fde8e8}
        .hero-left{max-width:420px}
        .hero-tag{display:inline-block;background:#fde8e8;color:#C0392B;font-size:11px;font-weight:700;padding:4px 12px;border-radius:4px;margin-bottom:16px;letter-spacing:0.5px}
        .hero-title{font-size:34px;font-weight:800;color:#1a1a1a;line-height:1.2;margin-bottom:12px}
        .hero-title span{color:#E74C3C}
        .hero-sub{color:#888;font-size:14px;line-height:1.7;margin-bottom:24px}
        .hero-actions{display:flex;gap:10px}
        .btn-hero{background:#E74C3C;color:#fff;border:none;padding:11px 24px;border-radius:8px;font-size:13px;font-weight:700;cursor:pointer;text-decoration:none}
        .btn-hero2{background:#fff;color:#C0392B;border:1.5px solid #E74C3C;padding:11px 24px;border-radius:8px;font-size:13px;font-weight:600;cursor:pointer;text-decoration:none}
        .hero-right{display:flex;gap:10px;align-items:center}
        .hero-card{background:#fdf5f5;border-radius:14px;padding:16px;text-align:center;width:110px}
        .hero-card-img{width:70px;height:70px;object-fit:cover;border-radius:10px;margin-bottom:8px}
        .hero-card-icon{font-size:28px;margin-bottom:8px}
        .hero-card-name{font-size:11px;font-weight:700;color:#333}
        .hero-card-price{font-size:12px;color:#E74C3C;font-weight:800;margin-top:4px}

        .section{padding:40px 36px}
        .section-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:24px}
        .section-head h2{font-size:20px;font-weight:800;color:#1a1a1a}
        .section-head h2 span{color:#E74C3C}
        .section-head a{font-size:12px;color:#E74C3C;text-decoration:none;font-weight:600}

        .glass-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
        .glass-card{background:rgba(255,255,255,0.7);border:1px solid rgba(231,76,60,0.15);border-radius:14px;padding:16px;text-align:center;backdrop-filter:blur(8px);transition:all 0.2s;cursor:pointer;box-shadow:0 2px 12px rgba(231,76,60,0.06)}
        .glass-card:hover{border-color:#E74C3C;transform:translateY(-3px);box-shadow:0 6px 20px rgba(231,76,60,0.12)}
        .glass-img{width:70px;height:70px;background:#fde8e8;border-radius:10px;margin:0 auto 10px;display:flex;align-items:center;justify-content:center;font-size:30px;object-fit:cover}
        .glass-name{font-size:13px;font-weight:700;color:#222;margin-bottom:4px}
        .glass-brand{font-size:11px;color:#aaa;margin-bottom:8px}
        .glass-price{font-size:15px;font-weight:800;color:#E74C3C}
        .glass-badge{display:inline-block;background:#fde8e8;color:#C0392B;font-size:10px;font-weight:700;padding:2px 8px;border-radius:4px;margin-bottom:6px}

        .divider{height:1px;background:#fde8e8;margin:0 36px}

        .promo-section{padding:40px 36px;background:#fdf5f5}
        .promo-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:12px}
        .promo-card{border-radius:12px;overflow:hidden;cursor:pointer;position:relative;transition:transform 0.2s;background:#fff;border:1px solid #fde8e8}
        .promo-card:hover{transform:scale(1.03)}
        .promo-img{width:100%;height:100px;object-fit:cover}
        .promo-img-placeholder{width:100%;height:100px;display:flex;align-items:center;justify-content:center;font-size:36px;background:#fde8e8}
        .promo-tag{position:absolute;top:8px;right:8px;background:#E74C3C;color:#fff;font-size:9px;font-weight:800;padding:3px 7px;border-radius:4px}
        .promo-info{padding:8px}
        .promo-name{font-size:12px;font-weight:700;color:#333}
        .promo-price{font-size:13px;font-weight:800;color:#E74C3C;margin-top:2px}

        .cta{padding:36px;background:#E74C3C;display:flex;align-items:center;justify-content:space-between}
        .cta-text h3{color:#fff;font-size:18px;font-weight:800;margin-bottom:4px}
        .cta-text p{color:rgba(255,255,255,0.7);font-size:13px}
        .cta-form{display:flex;gap:8px}
        .cta-input{background:rgba(255,255,255,0.2);border:1px solid rgba(255,255,255,0.35);border-radius:6px;padding:9px 14px;color:#fff;font-size:12px;outline:none;width:160px}
        .cta-input::placeholder{color:rgba(255,255,255,0.55)}
        .btn-cta{background:#fff;color:#C0392B;border:none;padding:9px 20px;border-radius:6px;font-size:12px;font-weight:800;cursor:pointer}

        .footer{text-align:center;padding:16px;color:#ccc;font-size:11px;border-top:1px solid #fde8e8}
    </style>
</head>
<body>

<nav class="nav">
    <a href="/" class="logo">
        <div class="logo-icon">✏️</div> PapelStore
    </a>

    <div class="nav-links">
        <a href="#" class="active">Início</a>
        <a href="{{ route('produtos.index') }}">Produtos</a>
        <a href="#promocoes">Promoções</a>
    </div>

    <div class="nav-btns">
    <a href="{{ route('login') }}" class="btn-out">Login</a>
    <a href="{{ route('register') }}" class="btn-in">Cadastrar</a>
    </div>
    
</nav>

<div class="hero">
    <div class="hero-left">
        <div class="hero-tag">NOVIDADES DA SEMANA</div>
        <h1 class="hero-title">A papelaria que<br><span>você sempre quis</span></h1>
        <p class="hero-sub">Cadernos, canetas, lápis e muito mais. Tudo que você precisa para estudar e criar com qualidade.</p>
        <div class="hero-actions">
            <a href="{{ route('produtos.index') }}" class="btn-hero">Ver produtos</a>
            <a href="#promocoes" class="btn-hero2">Promoções</a>
        </div>
    </div>
    <div class="hero-right">
        @foreach($mais_buscados->take(3) as $produto)
        <div class="hero-card" @if(!$loop->odd) style="margin-top:20px" @endif>
            @if($produto->imagem)
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="hero-card-img">
            @else
                <div class="hero-card-icon">🛍️</div>
            @endif
            <div class="hero-card-name">{{ Str::limit($produto->nome, 15) }}</div>
            <div class="hero-card-price">R$ {{ number_format($produto->preco, 2, ',', '.') }}</div>
        </div>
        @endforeach
    </div>
</div>

<div class="section">
    <div class="section-head">
        <h2>Mais <span>buscados</span></h2>
        <a href="{{ route('produtos.index') }}">Ver todos →</a>
    </div>
    <div class="glass-grid">
        @foreach($mais_buscados as $index => $produto)
        <div class="glass-card">
            @if($index === 0)
                <div class="glass-badge">MAIS VENDIDO</div>
            @elseif($index === 1)
                <div class="glass-badge">POPULAR</div>
            @else
                <div style="height:22px"></div>
            @endif
            @if($produto->imagem)
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="glass-img" style="width:70px;height:70px;border-radius:10px;object-fit:cover;margin:0 auto 10px;display:block">
            @else
                <div class="glass-img">🛍️</div>
            @endif
            <div class="glass-name">{{ Str::limit($produto->nome, 20) }}</div>
            <div class="glass-brand">{{ $produto->marca }}</div>
            <div class="glass-price">R$ {{ number_format($produto->preco, 2, ',', '.') }}</div>
        </div>
        @endforeach
    </div>
</div>

<div class="divider"></div>

<div class="promo-section" id="promocoes">
    <div class="section-head">
        <h2>Promoções <span>especiais</span></h2>
        <a href="{{ route('produtos.index') }}">Ver todas →</a>
    </div>
    <div class="promo-grid">
        @forelse($promocoes as $produto)
        <div class="promo-card">
            @if($produto->imagem)
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="promo-img">
            @else
                <div class="promo-img-placeholder">🛍️</div>
            @endif
            <div class="promo-tag">OFERTA</div>
            <div class="promo-info">
                <div class="promo-name">{{ Str::limit($produto->nome, 18) }}</div>
                <div class="promo-price">R$ {{ number_format($produto->preco, 2, ',', '.') }}</div>
            </div>
        </div>
        @empty
            <p style="color:#aaa;font-size:13px">Nenhuma promoção disponível.</p>
        @endforelse
    </div>
</div>

<div class="cta">
    <div class="cta-text">
        <h3>Acesse o sistema completo</h3>
        <p>Faça login para gerenciar todos os produtos da papelaria.</p>
    </div>
    <div class="cta-form">
        <input class="cta-input" type="text" placeholder="Seu e-mail" />
        <input class="cta-input" type="password" placeholder="Senha" />
        <button class="btn-cta">Entrar →</button>
    </div>
</div>

<div class="footer">© 2026 PapelStore — Todos os direitos reservados</div>

</body>
</html>