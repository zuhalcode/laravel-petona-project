<div class="mx-2">
    <div class=" bg-gray-100 flex justify-between p-3 mb-3 items-center ">
        <div>
            <svg class="w-8 h-8 {{ Auth::check() ? 'bg-[green]' : 'bg-login-primary' }} text-white rounded p-1"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
            </svg>
        </div>

    </div>
    <div class="w-full mb-10">
        <div class="flex flex-wrap justify-center gap-2 xl:justify-between lg:gap-y-5 ">
            @foreach ($listProducts as $product)
                <div class="sm:w-[300px] lg:max-w-[250px] rounded overflow-hidden border border-slate-300 ">
                    <img class="bg-auto w-full h-[200px] px-3 pt-3" src="{{ '/storage/' . $product->image }}">
                    <form class="p-3 text-center space-y-4" method="POST" action="/cart/{{ $product->id }}">
                        @csrf
                        <div class="font-bold text-xl">{{ $product['name'] }}</div>
                        <p class="text-gray-700 text-lg font-bold">
                            Rp. {{ number_format($product['price'], 2, ',', '.') }}
                        </p>
                        @auth
                            <button
                                class="px-3 py-2 cursor-pointer {{ Auth::check() ? 'bg-[green]' : 'bg-login-primary' }}  hover:bg-yellow-400 rounded-md text-white  transition-all hover:outline-login-primary">
                                Masukkan Keranjang
                            </button>
                        @else
                            <button
                                class="px-3 py-2 cursor-pointer {{ Auth::check() ? 'bg-[green]' : 'bg-login-primary' }}  hover:bg-yellow-400 rounded-md text-white  transition-all hover:outline-login-primary"
                                disabled>
                                Masukkan Keranjang
                            </button>
                        @endauth
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
