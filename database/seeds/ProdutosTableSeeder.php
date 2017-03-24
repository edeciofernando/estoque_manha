<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('produtos')->insert([
            'nome' => 'Bolacha',
            'marca' => 'Zezé',
            'quant' => 30,
            'preco' => 3.80
        ]);

       DB::table('produtos')->insert([
            'nome' => 'Guaraná 2lt',
            'marca' => 'Antartica',
            'quant' => 42,
            'preco' => 4.50
        ]);

       DB::table('produtos')->insert([
            'nome' => 'Sabonete',
            'marca' => 'Lux',
            'quant' => 18,
            'preco' => 1.90
        ]);       
    }
}
