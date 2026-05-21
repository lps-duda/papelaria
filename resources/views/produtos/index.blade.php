@extends('layouts.app')

@section('titulo', 'Produtos')

@section('conteudo')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Lista de Produtos</h3>
        <a href="{{ route('produtos.create') }}" class="btn btn-light btn-sm">
            <i class="fas fa-plus"></i> Novo Produto
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produtos as $produto)
                <tr>
                    <td>
                        @if($produto->imagem)
                            <img src="{{ asset('storage/' . $produto->imagem) }}"
                                 width="50" height="50"
                                 style="object-fit:cover; border-radius:8px;">
                        @else
                            <span class="badge badge-secondary">Sem imagem</span>
                        @endif
                    </td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->marca }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->estoque }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto) }}"
                           class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('produtos.edit', $produto) }}"
                           class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('produtos.destroy', $produto) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Tem certeza que deseja excluir?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Nenhum produto cadastrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection