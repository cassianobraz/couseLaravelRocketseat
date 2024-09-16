<?php

namespace App\View\Components;

use Illuminate\View\Component;

class titulo extends Component
{
    public $name = "Cassiano";
    public $age = 26;
    public $subtitulo = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subtitulo)
    {
       $this->subtitulo = $subtitulo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.titulo');
    }
}
