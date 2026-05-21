cat > resources/views/produtos/create.blade.php << 'EOF'
@extends('layouts.app')

@section('titulo', 'Cadastrar Produto')

@section('conteudo')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Novo Produto</h3>
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" name="nome" class="form-control" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label>Marca</label>
                <input type="text" name="marca" class="form-control" value="{{ old('marca') }}">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                    <option value="">Selecione...</option>
                    <option value="Cadernos">Cadernos</option>
                    <option value="Canetas">Canetas</option>
                    <option value="Lápis">Lápis</option>
                    <option value="Borrachas">Borrachas</option>
                    <option value="Réguas">Réguas</option>
                    <option value="Pastas">Pastas</option>
                    <option value="Hidrocor">Hidrocor</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <div class="form-group">
                <label>Preço (R$)</label>
                <input type="number" name="preco" step="0.01" class="form-control" value="{{ old('preco') }}">
            </div>
            <div class="form-group">
                <label>Estoque</label>
                <input type="number" name="estoque" class="form-control" value="{{ old('estoque') }}">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" class="form-control" rows="3">{{ old('descricao') }}</textarea>
            </div>
            <div class="form-group">
                <label>Imagem do Produto</label>
                <input type="file" name="imagem" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-save"></i> Salvar Produto
            </button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </form>
    </div>
</div>
@endsection
EOF