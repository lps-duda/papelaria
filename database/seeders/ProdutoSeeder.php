<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produtos')->insert([
            ['nome'=>'Caderno Universitário','marca'=>'Tilibra','categoria'=>'Cadernos','preco'=>18.90,'estoque'=>50,'descricao'=>'Caderno universitário com 200 folhas.','imagem'=>null,'created_at'=>now(),'updated_at'=>now()],
            ['nome'=>'Caneta Esferográfica Azul','marca'=>'BIC','categoria'=>'Canetas','preco'=>2.50,'estoque'=>200,'descricao'=>'Caneta esferográfica ponta média.','imagem'=>null,'created_at'=>now(),'updated_at'=>now()],
            ['nome'=>'Lápis Preto nº2','marca'=>'Faber-Castell','categoria'=>'Lápis','preco'=>1.50,'estoque'=>150,'descricao'=>'Lápis grafite número 2.','imagem'=>null,'created_at'=>now(),'updated_at'=>now()],
            ['nome'=>'Borracha Branca','marca'=>'Faber-Castell','categoria'=>'Borrachas','preco'=>1.20,'estoque'=>100,'descricao'=>'Borracha branca macia.','imagem'=>null,'created_at'=>now(),'updated_at'=>now()],
            ['nome'=>'Régua 30cm','marca'=>'Waleu','categoria'=>'Réguas','preco'=>3.00,'estoque'=>80,'descricao'=>'Régua transparente 30 centímetros.','imagem'=>null,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}