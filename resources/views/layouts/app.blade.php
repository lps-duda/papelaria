<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PapelStore</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .main-sidebar { background: linear-gradient(180deg, #7B0000 0%, #4a0000 100%) !important; }
        .brand-link { background: #5a0000 !important; border-bottom: 1px solid rgba(255,255,255,0.1) !important; }
        .brand-link .brand-text { color: #fff !important; font-weight: 800 !important; }
        .nav-sidebar .nav-link { color: rgba(255,255,255,0.75) !important; }
        .nav-sidebar .nav-link:hover { background: rgba(255,255,255,0.1) !important; color: #fff !important; }
        .nav-sidebar .nav-link.active { background: rgba(255,255,255,0.15) !important; color: #fff !important; border-left: 3px solid #E74C3C !important; }
        .nav-sidebar .nav-header { color: rgba(255,255,255,0.4) !important; }
        .main-header { border-bottom: 2px solid #E74C3C !important; }
        .content-wrapper { background: #fdf5f5 !important; }
        .btn-danger { background: #E74C3C !important; border-color: #C0392B !important; }
        .card-header { background: #E74C3C !important; color: #fff !important; }
        .table thead th { background: #C0392B !important; color: #fff !important; }
        .alert-success { background: #e8f8e8 !important; border-color: #2ecc71 !important; color: #1a7a40 !important; }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link">
            <span class="brand-text">✏️ PapelStore</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
                    <li class="nav-header">PRINCIPAL</li>
                    <li class="nav-item">
                        <a href="{{ route('produtos.index') }}" class="nav-link {{ request()->routeIs('produtos.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Produtos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('produtos.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>Cadastrar Produto</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color:#C0392B;">@yield('titulo')</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                @if(session('sucesso'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ session('sucesso') }}
                    </div>
                @endif
                @yield('conteudo')
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <strong>© 2026 PapelStore</strong> — Todos os direitos reservados.
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>