<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Register extends Component
{
    public array $registerInputs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->registerInputs = [
            ['label' => 'Name', 'placeholder' => 'Gagah Rizky Mulyawan', 'type' => 'text'],
            ['label' => 'Email', 'placeholder' => 'gagah@gmail.com', 'type' => 'text'],
            ['label' => 'Password', 'placeholder' => '********', 'type' => 'password'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.register');
    }
}
