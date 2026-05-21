@extends('layouts.app')

@section('titulo', 'Detalhes do Produto')

@section('conteudo')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">{{ $produto->nome }}</h3>
        <div>
            <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i> Editar
            </a>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                @if($produto->imagem)
                    <img src="{{ asset('storage/' . $produto->imagem) }}"
                         style="width:100%; max-width:250px; border-radius:12px; object-fit:cover;">
                @else
                    <div style="width:100%; max-width:250px; height:250px; background:#fde8e8; border-radius:12px; display:flex; align-items:center; justify-content:center; margin:0 auto;">
                        <i class="fas fa-image fa-4x" style="color:#E74C3C;"></i>
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th style="width:30%; background:#fde8e8;">Nome</th>
                        <td>{{ $produto->nome }}</td>
                    </tr>
                    <tr>
                        <th style="background:#fde8e8;">Marca</th>
                        <td>{{ $produto->marca }}</td>
                    </tr>
                    <tr>
                        <th style="background:#fde8e8;">Categoria</th>
                        <td>{{ $produto->categoria }}</td>
                    </tr>
                    <tr>
                        <th style="background:#fde8e8;">Preço</th>
                        <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th style="background:#fde8e8;">Estoque</th>
                        <td>{{ $produto->estoque }} unidades</td>
                    </tr>
                    <tr>
                        <th style="background:#fde8e8;">Descrição</th>
                        <td>{{ $produto->descricao ?? 'Sem descrição' }}</td>
                    </tr>
                </table>

                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir?')">
                        <i class="fas fa-trash"></i> Excluir Produto
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection