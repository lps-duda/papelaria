<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem & Papel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{box-sizing:border-box;margin:0;padding:0}
        body{background:#fff;font-family:'Georgia',serif}

        .nav{display:flex;align-items:center;justify-content:space-between;padding:18px 40px;background:#fff;border-bottom:3px solid #C0392B}
        .logo{display:flex;align-items:center;gap:14px;text-decoration:none}
        .logo-img{width:52px;height:52px;border-radius:50%;background:#C0392B;border:3px solid #8B0000;display:flex;align-items:center;justify-content:center;color:#fff;font-size:22px;font-weight:900;font-family:serif;overflow:hidden}
        .logo-text{display:flex;flex-direction:column}
        .logo-name{color:#8B0000;font-size:20px;font-weight:900;font-family:'Georgia',serif;letter-spacing:1px;line-height:1}
        .logo-tagline{color:#C0392B;font-size:10px;letter-spacing:2px;text-transform:uppercase;margin-top:2px;font-family:'Segoe UI',sans-serif}
        .nav-links{display:flex;gap:28px}
        .nav-links a{color:#555;font-size:13px;text-decoration:none;font-weight:600;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px}
        .nav-links a.active{color:#C0392B;border-bottom:2px solid #C0392B;padding-bottom:2px}
        .nav-btns{display:flex;gap:10px}
        .btn-out{border:1.5px solid #C0392B;color:#C0392B;background:#fff;padding:7px 18px;border-radius:4px;font-size:12px;font-weight:700;cursor:pointer;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s}
        .btn-out:hover{background:#8B0000;color:#fff;border-color:#8B0000}
        .btn-in{background:#fff;color:#C0392B;border:1.5px solid #C0392B;padding:7px 18px;border-radius:4px;font-size:12px;font-weight:700;cursor:pointer;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s}
        .btn-in:hover{background:#8B0000;color:#fff;border-color:#8B0000}

        .hero{background:#fff;padding:60px 40px;text-align:center;border-bottom:1px solid #f0dada;position:relative;overflow:hidden}
        .hero-badge{display:inline-flex;align-items:center;gap:6px;background:#fde8e8;border:1px solid #f5b7b1;color:#8B0000;font-size:11px;font-weight:700;padding:5px 16px;border-radius:2px;margin-bottom:20px;letter-spacing:1px;font-family:'Segoe UI',sans-serif;text-transform:uppercase}
        .hero-title{font-size:42px;font-weight:900;color:#1a1a1a;line-height:1.15;margin-bottom:8px;font-family:'Georgia',serif}
        .hero-title span{color:#C0392B;font-style:italic}
        .hero-quote{font-size:17px;color:#8B0000;font-style:italic;font-family:'Georgia',serif;margin-bottom:6px;letter-spacing:0.5px;max-width:560px;margin:0 auto 6px;line-height:1.6}
        .hero-quote-author{font-size:12px;color:#aaa;font-family:'Segoe UI',sans-serif;letter-spacing:1px;margin-bottom:28px}
        .hero-sub{color:#777;font-size:14px;max-width:500px;margin:0 auto 28px;line-height:1.8;font-family:'Segoe UI',sans-serif}
        .hero-actions{display:flex;gap:12px;justify-content:center;margin-bottom:44px}
        .btn-hero{background:#C0392B;color:#fff;border:2px solid #8B0000;padding:12px 28px;border-radius:4px;font-size:13px;font-weight:700;cursor:pointer;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s}
        .btn-hero:hover{background:#8B0000}
        .btn-hero2{background:#fff;color:#C0392B;border:2px solid #C0392B;padding:12px 28px;border-radius:4px;font-size:13px;font-weight:600;cursor:pointer;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s}
        .btn-hero2:hover{background:#8B0000;color:#fff;border-color:#8B0000}

        .stats-row{display:flex;justify-content:center;gap:60px}
        .stat-item{text-align:center}
        .stat-divider{width:1px;background:#fde8e8}
        .stat-num{color:#C0392B;font-size:28px;font-weight:900;font-family:'Georgia',serif}
        .stat-lbl{color:#bbb;font-size:11px;margin-top:3px;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;text-transform:uppercase}

        .manifesto{background:#C0392B;padding:20px 40px;text-align:center}
        .manifesto p{color:rgba(255,255,255,0.9);font-size:13px;font-style:italic;font-family:'Georgia',serif;letter-spacing:0.5px}
        .manifesto strong{color:#fff;font-style:normal}

        .section{padding:44px 40px;background:#fff}
        .section-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px}
        .section-head h2{font-size:22px;font-weight:900;color:#1a1a1a;font-family:'Georgia',serif}
        .section-head h2 span{color:#C0392B;font-style:italic}
        .section-ornament{width:40px;height:3px;background:#C0392B;margin-top:6px}
        .section-head a{font-size:12px;color:#C0392B;text-decoration:none;font-weight:700;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px}

        .glass-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
        .glass-card{background:#fff;border:1px solid #f0dada;border-top:3px solid #C0392B;border-radius:4px;padding:18px 14px;text-align:center;cursor:pointer;transition:all 0.2s;box-shadow:0 2px 8px rgba(192,57,43,0.05)}
        .glass-card:hover{box-shadow:0 6px 20px rgba(192,57,43,0.12);transform:translateY(-3px)}
        .glass-img{width:72px;height:72px;background:#fde8e8;border-radius:4px;margin:0 auto 12px;display:flex;align-items:center;justify-content:center;font-size:30px}
        .glass-name{font-size:13px;font-weight:700;color:#222;margin-bottom:4px;font-family:'Georgia',serif}
        .glass-brand{font-size:11px;color:#aaa;margin-bottom:10px;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px;text-transform:uppercase}
        .glass-price{font-size:16px;font-weight:900;color:#C0392B;font-family:'Georgia',serif}
        .glass-badge{display:inline-block;background:#C0392B;color:#fff;font-size:9px;font-weight:700;padding:2px 8px;border-radius:2px;margin-bottom:8px;font-family:'Segoe UI',sans-serif;letter-spacing:1px;text-transform:uppercase}

        .divider{height:1px;background:#f0dada;margin:0 40px}

        .promo-section{padding:44px 40px;background:#fdf5f5}
        .promo-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:12px}
        .promo-card{border-radius:4px;overflow:hidden;cursor:pointer;position:relative;transition:transform 0.2s;background:#fff;border:1px solid #f0dada;border-top:3px solid #C0392B}
        .promo-card:hover{transform:scale(1.03)}
        .promo-img{width:100%;height:100px;object-fit:cover}
        .promo-img-placeholder{width:100%;height:100px;display:flex;align-items:center;justify-content:center;font-size:36px;background:#fde8e8}
        .promo-tag{position:absolute;top:8px;left:8px;background:#C0392B;color:#fff;font-size:9px;font-weight:800;padding:3px 7px;border-radius:2px;font-family:'Segoe UI',sans-serif;letter-spacing:1px}
        .promo-info{padding:10px 8px}
        .promo-name{font-size:12px;font-weight:700;color:#333;font-family:'Georgia',serif}
        .promo-price{font-size:13px;font-weight:900;color:#C0392B;margin-top:2px;font-family:'Georgia',serif}

        .cta{padding:40px;background:#8B0000;display:flex;align-items:center;justify-content:space-between;border-top:4px solid #C0392B}
        .cta-text h3{color:#fff;font-size:20px;font-weight:900;margin-bottom:6px;font-family:'Georgia',serif}
        .cta-text p{color:rgba(255,255,255,0.65);font-size:13px;font-family:'Segoe UI',sans-serif;font-style:italic}
        .cta-form{display:flex;gap:8px}
        .cta-input{background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.3);border-radius:4px;padding:9px 14px;color:#fff;font-size:12px;outline:none;width:160px;font-family:'Segoe UI',sans-serif}
        .cta-input::placeholder{color:rgba(255,255,255,0.5)}
        .btn-cta{background:#fff;color:#8B0000;border:none;padding:9px 20px;border-radius:4px;font-size:12px;font-weight:800;cursor:pointer;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px}

        .footer{text-align:center;padding:18px;color:#ccc;font-size:11px;border-top:1px solid #fde8e8;font-family:'Segoe UI',sans-serif;letter-spacing:0.5px}
        .footer span{color:#C0392B;font-style:italic;font-family:'Georgia',serif}
    </style>
</head>
<body>

<nav class="nav">
    <a href="/" class="logo">
        <div class="logo-img">
    <img src="{{ asset('images/lenin.jpg') }}" style="width:100%;height:100%;object-fit:cover;object-position:center top;">
         </div>
        <div class="logo-text">
            <span class="logo-name">Ordem & Papel</span>
            <span class="logo-tagline">Revolucion ☭ · Papelaria</span>
        </div>
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
    <div class="hero-badge">Novidades da Semana</div>
    <h1 class="hero-title">Estudantes do mundo,<br><span>uni-vos!</span></h1>
    <div class="hero-quote">"A educação é a arma mais poderosa que você pode usar para mudar o mundo."</div>
    <div class="hero-quote-author">— Nelson Mandela</div>
    <p class="hero-sub">Cadernos, canetas, lápis e muito mais. Tudo que você precisa para estudar e criar com qualidade.</p>
    <div class="hero-actions">
        <a href="{{ route('produtos.index') }}" class="btn-hero">Ver Produtos</a>
        <a href="#promocoes" class="btn-hero2">Promoções</a>
    </div>
    <div class="stats-row">
        <div class="stat-item"><div class="stat-num">200+</div><div class="stat-lbl">Produtos</div></div>
        <div class="stat-divider"></div>
        <div class="stat-item"><div class="stat-num">15+</div><div class="stat-lbl">Categorias</div></div>
        <div class="stat-divider"></div>
        <div class="stat-item"><div class="stat-num">4.9</div><div class="stat-lbl">Avaliação</div></div>
    </div>
</div>

<div class="manifesto">
    <p><strong>"O analfabeto político é o pior de todos os analfabetos."</strong> — Bertolt Brecht · Estude, organize-se, transforme.</p>
</div>

<div class="section">
    <div class="section-head">
        <div>
            <h2>Mais <span>buscados</span></h2>
            <div class="section-ornament"></div>
        </div>
        <a href="{{ route('produtos.index') }}">Ver todos →</a>
    </div>
    <div class="glass-grid">
        @foreach($mais_buscados as $index => $produto)
        <div class="glass-card" onclick="abrirModal('{{ addslashes($produto->nome) }}', '{{ addslashes($produto->marca) }}', '{{ addslashes($produto->categoria) }}', '{{ number_format($produto->preco, 2, ',', '.') }}', '{{ $produto->estoque }}', '{{ addslashes($produto->descricao) }}', '{{ $produto->imagem }}')">
            @if($index === 0)
                <div class="glass-badge">Mais Vendido</div>
            @elseif($index === 1)
                <div class="glass-badge">Popular</div>
            @else
                <div style="height:22px"></div>
            @endif
            @if($produto->imagem)
                <img src="{{ asset('storage/' . $produto->imagem) }}" style="width:72px;height:72px;border-radius:4px;object-fit:cover;margin:0 auto 12px;display:block">
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
        <div>
            <h2>Promoções <span>especiais</span></h2>
            <div class="section-ornament"></div>
        </div>
        <a href="{{ route('produtos.index') }}">Ver todas →</a>
    </div>
    <div class="promo-grid">
        @forelse($promocoes as $produto)
        <div class="promo-card" onclick="abrirModal('{{ addslashes($produto->nome) }}', '{{ addslashes($produto->marca) }}', '{{ addslashes($produto->categoria) }}', '{{ number_format($produto->preco, 2, ',', '.') }}', '{{ $produto->estoque }}', '{{ addslashes($produto->descricao) }}', '{{ $produto->imagem }}')">
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
            <p style="color:#aaa;font-size:13px;font-family:'Segoe UI',sans-serif">Nenhuma promoção disponível.</p>
        @endforelse
    </div>
</div>

<div class="cta">
    <div class="cta-text">
        <h3>Acesse o sistema completo</h3>
        <p>Faça login e gerencie os produtos da papelaria do povo.</p>
    </div>
    <div class="cta-form">
        <input class="cta-input" type="text" placeholder="Seu e-mail" />
        <input class="cta-input" type="password" placeholder="Senha" />
        <button class="btn-cta">Entrar →</button>
    </div>
</div>

<div class="footer">© 2026 <span>Ordem & Papel</span> · Todos os direitos reservados · Feito com tinta vermelha</div>

<!-- Modal -->
<div id="modal-overlay" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:999;align-items:center;justify-content:center;">
    <div style="background:#fff;border-radius:4px;width:100%;max-width:500px;margin:20px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.3);border-top:4px solid #C0392B">
        <div style="background:#8B0000;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;">
            <h3 id="modal-nome" style="color:#fff;font-size:17px;font-weight:900;margin:0;font-family:'Georgia',serif"></h3>
            <button onclick="fecharModal()" style="background:rgba(255,255,255,0.15);border:none;color:#fff;width:30px;height:30px;border-radius:50%;font-size:16px;cursor:pointer;font-weight:700">×</button>
        </div>
        <div style="display:flex;gap:20px;padding:24px;">
            <div style="flex-shrink:0">
                <img id="modal-img" src="" style="width:120px;height:120px;object-fit:cover;border-radius:4px;display:none;">
                <div id="modal-img-placeholder" style="width:120px;height:120px;background:#fde8e8;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:40px;">🛍️</div>
            </div>
            <div style="flex:1">
                <div style="margin-bottom:10px">
                    <span style="font-size:10px;color:#aaa;text-transform:uppercase;letter-spacing:1px;font-family:'Segoe UI',sans-serif">Marca</span>
                    <p id="modal-marca" style="font-size:14px;font-weight:700;color:#333;margin:2px 0;font-family:'Georgia',serif"></p>
                </div>
                <div style="margin-bottom:10px">
                    <span style="font-size:10px;color:#aaa;text-transform:uppercase;letter-spacing:1px;font-family:'Segoe UI',sans-serif">Categoria</span>
                    <p id="modal-categoria" style="font-size:14px;font-weight:700;color:#333;margin:2px 0;font-family:'Georgia',serif"></p>
                </div>
                <div style="margin-bottom:10px">
                    <span style="font-size:10px;color:#aaa;text-transform:uppercase;letter-spacing:1px;font-family:'Segoe UI',sans-serif">Estoque</span>
                    <p id="modal-estoque" style="font-size:14px;font-weight:700;color:#333;margin:2px 0;font-family:'Georgia',serif"></p>
                </div>
                <div>
                    <span style="font-size:10px;color:#aaa;text-transform:uppercase;letter-spacing:1px;font-family:'Segoe UI',sans-serif">Preço</span>
                    <p id="modal-preco" style="font-size:24px;font-weight:900;color:#C0392B;margin:2px 0;font-family:'Georgia',serif"></p>
                </div>
            </div>
        </div>
        <div style="padding:0 24px 24px;border-top:1px solid #fde8e8;margin-top:4px;padding-top:16px">
            <span style="font-size:10px;color:#aaa;text-transform:uppercase;letter-spacing:1px;font-family:'Segoe UI',sans-serif">Descrição</span>
            <p id="modal-descricao" style="font-size:13px;color:#555;margin:6px 0 0;line-height:1.8;font-family:'Georgia',serif;font-style:italic"></p>
        </div>
    </div>
</div>

<script>
function abrirModal(nome, marca, categoria, preco, estoque, descricao, imagem) {
    document.getElementById('modal-nome').innerText = nome;
    document.getElementById('modal-marca').innerText = marca;
    document.getElementById('modal-categoria').innerText = categoria;
    document.getElementById('modal-preco').innerText = 'R$ ' + preco;
    document.getElementById('modal-estoque').innerText = estoque + ' unidades';
    document.getElementById('modal-descricao').innerText = descricao || 'Sem descrição disponível.';
    const img = document.getElementById('modal-img');
    const placeholder = document.getElementById('modal-img-placeholder');
    if (imagem) {
        img.src = '/storage/' + imagem;
        img.style.display = 'block';
        placeholder.style.display = 'none';
    } else {
        img.style.display = 'none';
        placeholder.style.display = 'flex';
    }
    document.getElementById('modal-overlay').style.display = 'flex';
}
function fecharModal() {
    document.getElementById('modal-overlay').style.display = 'none';
}
document.getElementById('modal-overlay').addEventListener('click', function(e) {
    if (e.target === this) fecharModal();
});
</script>

</body>
</html>