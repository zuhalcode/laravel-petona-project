<?php

namespace App\View\Components\Layout;

use App\Models\Cart;
use Illuminate\View\Component;


class Navbar extends Component
{
    public array $navigationItems = [];
    public $itemCount = 0;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Keranjang', 'href' => 'cart', 'type' => 'auth'],
            ['label' => 'Beranda', 'href' => '/', 'type' => 'auth'],
            ['label' => 'Produk', 'href' => 'products', 'type' => 'auth'],
            ['label' => 'Kontak Kami', 'href' => 'contact', 'type' => 'auth'],
            ['label' => 'Masuk', 'href' => 'login', 'type' => 'guest'],
            ['label' => 'Daftar', 'href' => 'register' , 'type' => 'guest'],
        ];
        $this->itemCount = Cart::count();
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
