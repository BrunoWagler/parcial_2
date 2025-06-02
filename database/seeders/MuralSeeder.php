<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MuralModel;

class MuralSeeder extends Seeder
{
    public function run(): void
    {
        $murais = [
            [
                'titulo' => 'Planejamento Semanal',
                'descricao' => 'Quadro para organizar as tarefas da semana com a equipe.',
            ],
            [
                'titulo' => 'Ideias Criativas',
                'descricao' => 'Espaço para brainstorm e sugestões inovadoras.',
            ],
            [
                'titulo' => 'Projeto Final',
                'descricao' => 'Organização e acompanhamento do projeto de conclusão.',
            ],
        ];

        foreach ($murais as $mural) {
            MuralModel::updateOrCreate(
                ['titulo' => $mural['titulo']],  
                ['descricao' => $mural['descricao']]  
            );
        }
    }
}
