<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'title' => 'Violeta',
            'slug' => 'violeta',
            'description' => 'Violeta é o segundo álbum da banda Terno Rei, lançado em dezembro de 2016. O álbum conta com duas faixas, sendo a primeira a música "Violeta" e a segunda a música "Violeta (feat. Matheus Teixeira)".',
            'image' => 'https://static.wixstatic.com/media/b6640b_a7bda27be5f546aba7c6ce4db14f5397~mv2.jpg/v1/fill/w_282,h_282,al_c,q_80,usm_0.66_1.00_0.01/thumbnail_terno%20rei%20violeta.webp',
            'year' => '2016',
            'artist_id' => 1,
        ]);
    }
}
