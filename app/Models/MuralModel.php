<?php

namespace App\Models;

class MuralModel
{
    public static function all()
    {
      
        return [
            [
                'titulo' => 'Aviso importante',
                'descricao' => 'As aulas serão suspensas amanhã.',
            ],
            [
                'titulo' => 'Evento cultural',
                'descricao' => 'Participe da feira de talentos no auditório.',
            ],
        ];
    }
}
