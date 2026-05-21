<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'      => 'required|min:3|max:100',
            'marca'     => 'required|min:2|max:60',
            'categoria' => 'required',
            'preco'     => 'required|numeric|min:0',
            'estoque'   => 'required|integer|min:0',
            'descricao' => 'nullable|max:500',
            'imagem'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'      => 'O nome do produto é obrigatório.',
            'nome.min'           => 'O nome deve ter pelo menos 3 caracteres.',
            'marca.required'     => 'A marca é obrigatória.',
            'categoria.required' => 'Selecione uma categoria.',
            'preco.required'     => 'O preço é obrigatório.',
            'preco.numeric'      => 'O preço deve ser um número válido.',
            'estoque.required'   => 'O estoque é obrigatório.',
            'estoque.integer'    => 'O estoque deve ser um número inteiro.',
            'imagem.image'       => 'O arquivo deve ser uma imagem.',
            'imagem.mimes'       => 'A imagem deve ser jpg, jpeg ou png.',
            'imagem.max'         => 'A imagem deve ter no máximo 2MB.',
        ];
    }
}
