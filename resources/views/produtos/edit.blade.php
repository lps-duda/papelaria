@extends('layouts.app')

@section('titulo', 'Editar Produto')

@section('conteudo')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Editar Produto</h3>
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

        <form action="{{ route('produtos.update', $produto) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" name="nome" class="form-control" value="{{ old('nome', $produto->nome) }}">
            </div>
            <div class="form-group">
                <label>Marca</label>
                <input type="text" name="marca" class="form-control" value="{{ old('marca', $produto->marca) }}">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                    <option value="">Selecione...</option>
                    @foreach(['Cadernos','Canetas','Lápis','Borrachas','Réguas','Pastas','Hidrocor','Outros'] as $cat)
                        <option value="{{ $cat }}" {{ $produto->categoria == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Preço (R$)</label>
                <input type="number" name="preco" step="0.01" class="form-control" value="{{ old('preco', $produto->preco) }}">
            </div>
            <div class="form-group">
                <label>Estoque</label>
                <input type="number" name="estoque" class="form-control" value="{{ old('estoque', $produto->estoque) }}">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" class="form-control" rows="3">{{ old('descricao', $produto->descricao) }}</textarea>
            </div>
            <div class="form-group">
                <label>Imagem do Produto</label>
                @if($produto->imagem)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $produto->imagem) }}"
                             width="100" height="100"
                             style="object-fit:cover; border-radius:8px;">
                        <small class="text-muted d-block">Imagem atual</small>
                    </div>
                @endif
                <input type="file" name="imagem" class="form-control-file">
                <small class="text-muted">Deixe em branco para manter a imagem atual</small>
            </div>
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-save"></i> Atualizar Produto
            </button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </form>
    </div>
</div>
@endsection