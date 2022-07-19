<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;


class Navbar extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Beranda', 'href' => '/', 'type' => 'auth'],
            ['label' => 'Produk', 'href' => 'products', 'type' => 'auth'],
            ['label' => 'Keranjang', 'href' => 'cart', 'type' => 'auth'],
            ['label' => 'Kontak Kami', 'href' => 'contact', 'type' => 'auth'],
            ['label' => 'Masuk', 'href' => 'login', 'type' => 'guest'],
            ['label' => 'Daftar', 'href' => 'register' , 'type' => 'guest'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
