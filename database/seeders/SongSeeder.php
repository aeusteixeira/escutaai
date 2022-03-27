<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'title' => 'Yoko',
            'image' => 'https://static.wixstatic.com/media/b6640b_a7bda27be5f546aba7c6ce4db14f5397~mv2.jpg/v1/fill/w_282,h_282,al_c,q_80,usm_0.66_1.00_0.01/thumbnail_terno%20rei%20violeta.webp',
            'description' => 'Yoko é a primeira música da banda Terno Rei, lançada em dezembro de 2016. A música conta com duas faixas, sendo a primeira a música "Yoko" e a segunda a música "Yoko (feat. Matheus Teixeira)".',
            'duration' => '3:00',
            'album_id' => 1,
        ]);

        Song::create([
            'title' => 'Dia Lindo',
            'image' => 'https://static.wixstatic.com/media/b6640b_a7bda27be5f546aba7c6ce4db14f5397~mv2.jpg/v1/fill/w_282,h_282,al_c,q_80,usm_0.66_1.00_0.01/thumbnail_terno%20rei%20violeta.webp',
            'description' => 'Dia Lindo é a segunda música da banda Terno Rei, lançada em dezembro de 2016. A música conta com duas faixas, sendo a primeira a música "Yoko" e a segunda a música "Yoko (feat. Matheus Teixeira)".',
            'duration' => '3:00',
            'album_id' => 1,
        ]);

        Song::create([
            'title' => 'Solidão de Volta',
            'image' => 'https://static.wixstatic.com/media/b6640b_a7bda27be5f546aba7c6ce4db14f5397~mv2.jpg/v1/fill/w_282,h_282,al_c,q_80,usm_0.66_1.00_0.01/thumbnail_terno%20rei%20violeta.webp',
            'description' => 'Solidão de Volta é a terceira música da banda Terno Rei, lançada em dezembro de 2016. A música conta com duas faixas, sendo a primeira a música "Yoko" e a segunda a música "Yoko (feat. Matheus Teixeira)".',
            'duration' => '3:00',
            'album_id' => 1,
        ]);

        Song::create([
            'title' => '93',
            'image' => 'https://static.wixstatic.com/media/b6640b_a7bda27be5f546aba7c6ce4db14f5397~mv2.jpg/v1/fill/w_282,h_282,al_c,q_80,usm_0.66_1.00_0.01/thumbnail_terno%20rei%20violeta.webp',
            'description' => '93 é a quarta música da banda Terno Rei, lançada em dezembro de 2016. A música conta com duas faixas, sendo a primeira a música "Yoko" e a segunda a música "Yoko (feat. Matheus Teixeira)".',
            'duration' => '3:00',
            'album_id' => 1,
        ]);
    }
}
