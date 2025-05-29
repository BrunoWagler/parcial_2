<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mural;

class MuralSeeder extends Seeder
{
    public function run(): void
    {
        Mural::create([
            'titulo' => 'Planejamento Semanal',
            'descricao' => 'Quadro para organizar as tarefas da semana com a equipe.'
        ]);

        Mural::create([
            'titulo' => 'Ideias Criativas',
            'descricao' => 'Espaço para brainstorm e sugestões inovadoras.'
        ]);

        Mural::create([
            'titulo' => 'Projeto Final',
            'descricao' => 'Organização e acompanhamento do projeto de conclusão.'
        ]);
    }
}
