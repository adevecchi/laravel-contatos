<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatosTableSeeder extends Seeder
{
    static $contatos = [
        ['nome'=>'Turanga Leela', 'email'=>'leela@email.com', 'fone'=>'11 92343-5633'],
        ['nome'=>'Philip J. Fry', 'email'=>'philip@email.com', 'fone'=>'11 95433-0984'],
        ['nome'=>'Amy Wong', 'email'=>'amy@email.com', 'fone'=>'19 98778-0064'],
        ['nome'=>'Hermes Conrad', 'email'=>'hermes@email.com', 'fone'=>'21 97654-0971'],
        ['nome'=>'Zapp Brannigan', 'email'=>'brannigan@email.com', 'fone'=>'12 97612-0678'],
        ['nome'=>'Kif Kroker', 'email'=>'kroker@email.com', 'fone'=>'11 95460-0342'],
        ['nome'=>'Hubert J. Farnsworth', 'email'=>'hubert@email.com', 'fone'=>'21 98765-0087'],
        ['nome'=>'Peter Griffin', 'email'=>'griffin@email.com', 'fone'=>'11 98863-3412'],
        ['nome'=>'Meg Griffin', 'email'=>'meg@email.com', 'fone'=>'19 93409-3244'],
        ['nome'=>'Adam West', 'email'=>'adam@email.com', 'fone'=>'21 96543-9087'],
        ['nome'=>'Joe Swanson', 'email'=>'joe@email.com', 'fone'=>'11 99876-0023'],
        ['nome'=>'Bonnie Swanson', 'email'=>'bonnie@email.com', 'fone'=>'11 92122-0987']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$contatos as $contato) {
            DB::table('contatos')->insert([
                'nome' => $contato['nome'],
                'email' => $contato['email'],
                'telefone' => $contato['fone'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
