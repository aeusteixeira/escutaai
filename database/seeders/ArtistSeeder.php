<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'name' => 'Terno Rei',
            'resume' => 'Em meados de 2011, surge o Terno Rei, formado por Bruno Rodrigues (Guitarra), Gregui Vinha (Guitarra), Luis Cardoso (Bateria), Victor Souza (Percussão) e Ale (Voz e Baixo).',
            'history' => 'Em meados de 2011, surge o Terno Rei, formado por Bruno Rodrigues (Guitarra), Gregui Vinha (Guitarra), Luis Cardoso (Bateria), Victor Souza (Percussão) e Ale (Voz e Baixo). A banda paulistana aposta no desenvolvimento de um estilo próprio conjugando sonoridades que passeiam pelo rock alternativo e a música brasileira. As letras procuram retratar temas recorrentes e conflituosos do cotidiano contempôraneo, sendo acompanhadas por arranjos autênticos e detalhistas.',
            'has_logo' => false,
            'logo_path' => '',
            'type' => 'band',
            'number_of_members' => 4,
            'account' => 'terno-rei',
        ]);
    }
}
