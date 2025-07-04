<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $Inicio;
    public $Registro;
    public $Login;
    public $Voltar;
    public $vermural;

    public $labelInicio;
    public $labelRegistro;
    public $labelLogin;
    public $labelVoltar;
    public $labelvermural;

    public function __construct(
        $Inicio = '#',
        $Registro = '#',
        $Login = '#',
        $Voltar = '#',
        $vermural = '#',
        $labelInicio = 'Início',
        $labelRegistro = 'Registrar',
        $labelLogin = 'Login',
        $labelVoltar = 'Voltar',
        $labelvermural = 'Ver Mural'
    ) {
        $this->Inicio = $Inicio;
        $this->Registro = $Registro;
        $this->Login = $Login;
        $this->Voltar = $Voltar;
        $this->vermural = $vermural;

        $this->labelInicio = $labelInicio;
        $this->labelRegistro = $labelRegistro;
        $this->labelLogin = $labelLogin;
        $this->labelVoltar = $labelVoltar;
        $this->labelvermural = $labelvermural;
    }

    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
