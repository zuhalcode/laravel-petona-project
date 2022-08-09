<x-app-layout>
    <div class=" bg-slate-50 pl-2 pr-10">
        <h1 class=" mx-5 text-xl font-bold pt-3 pb-2 text-center sm:text-start">Keranjang Saya</h1>
        <div class="flex sm:space-x-3 sm:flex-row flex-col justify-center items-center bg-slate-50 rounded-md">

            {{-- products --}}
            <div class=" sm:w-2/3 w-full px-5 sm:px-0 max-h-[500px] rounded-md overflow-y-auto ">
                <ul>
                    @foreach ($carts as $cart)
                        <li
                            class="m-5 rounded-md bg-white sm:pl-1 sm:py-1 flex flex-col sm:grid sm:grid-flow-row sm:grid-cols-9 sm:grid-rows-1 sm:justify-items-between sm:space-y-0 items-center ">

                            {{-- picture --}}
                            <div class="flex flex-col sm:flex-row sm:col-span-3  sm:p-0">
                                <div class="sm:px-2 p-3 flex items-center bg-slate-100 rounded-sm">
                                    <img src="{{ '/storage/' . $cart->product->image }}"
                                        class="sm:w-[80px] w-auto bg-cover rounded-sm">
                                </div>
                                <div class=" sm:m-3 py-2 text-center sm:text-start">
                                    <p class="font-bold text-lg sm:text-sm">{{ ucfirst($cart->product->name) }}</p>
                                </div>
                            </div>

                            {{-- price --}}
                            <div class="font-bold sm:col-span-2 mx-auto text-slate-400 text-base sm:text-sm mb-3">
                                Rp. {{ number_format($cart->product->price, 2, ',', '.') }}
                            </div>

                            {{-- quantity --}}
                            <div class="font-bold sm:col-span-3 mx-auto text-slate-400 text-sm flex items-center mb-3">
                                <div
                                    class="w-[70px] mx-2 px-2 flex justify-between items-center rounded-md border border-slate-600">
                                    <input type="number" class="w-[20px] outline-none" value="{{ $cart->quantity }}"
                                        readonly />
                                    <div class="flex flex-col">
                                        {{-- arrow up --}}
                                        <form action="/cart/{{ $cart->product->id }}/update-product-up" method="post">
                                            @csrf
                                            <button>
                                                <svg class="w-5 h-5 q-arrow-up hover:text-yellow-400 cursor-pointer"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>

                                        {{-- arrow down --}}
                                        <form action="/cart/{{ $cart->product->id }}/update-product-down"
                                            method="post">
                                            <button>
                                                <svg class="w-5 h-5 q-arrow-down hover:text-yellow-400 cursor-pointer"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- delete --}}
                            <form class="w-full sm:w-auto" method="POST" action="/cart/{{ $cart->id }}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button
                                    class="sm:w-[20px] w-full text-center rounded-b-md flex items-center justify-center sm:bg-white bg-slate-300 sm:col-span-1 mx-auto hover:bg-red-500 cursor-pointer group">
                                    <svg class="w-6 h-6 text-slate-500 group-hover:text-white cursor-pointer transition-all"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </form>

                        </li>
                    @endforeach
                </ul>
            </div>

            <div class=" w-[50px]"></div> {{-- Spacer --}}

            {{-- checkout --}}
            <div
                class=" w-full sm:w-5/12 p-3 bg-white sm:mt-5 my-5 sm:my-0 flex flex-col ml-2 sm:ml-0 sm:h-max rounded-md">
                <div
                    class="text-slate-400 flex justify-between pb-1 mb-2 font-bold border-slate-500 border-b border-dashed">
                    Kode Pembayaran <span class=" text-black">90471</span>
                </div>

                <form method="post" action="/orders">
                    @csrf
                    <div class="border-slate-500 border-b border-dashed pb-2 mb-1 max-h-[200px] overflow-y-auto">
                        @foreach ($carts as $cart)
                            <li class="flex justify-between items-center pr-3 ">
                                <div class="flex items-center space-x-5">
                                    <p class="font-bold text-sm">{{ ucfirst($cart->product->name) }}</p>
                                </div>
                                <div id="price" class="font-bold text-slate-400 text-sm">
                                    Rp. {{ number_format($cart->product->price * $cart->quantity, 2, ',', '.') }}
                                </div>
                            </li>
                            @php $total += $cart->product->price * $cart->quantity @endphp
                        @endforeach
                    </div>
                    <div class="text-center my-2 font-bold text-red-500">
                        Total : Rp. {{ number_format($total, 2, ',', '.') }}
                    </div>
                    <li class="mt-3 flex justify-center">
                        <button class="mx-auto rounded-md bg-blue-500 hover:bg-blue-400 px-3 py-2 text-white w-2/3">
                            Checkout
                        </button>
                    </li>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
