<x-app-layout>
    <div class="bg-slate-50 pl-2 pr-10 relative">
        <h1 class=" mx-5 text-xl font-bold pt-3 pb-2 text-center lg:text-start">Keranjang Saya</h1>
        <div
            class="flex flex-col justify-center bg-slate-50 rounded-md
            lg:items-center
            xl:space-x-3 xl:flex-row xl:items-start">

            {{-- products --}}
            <div
                class="mx-auto px-5 max-h-[500px] rounded-md overflow-y-auto
                sm:w-[500px]
                lg:w-full
                xl:w-2/3 xl:px-0">
                <ul>
                    @foreach ($carts as $cart)
                        <li
                            class="m-5 rounded-md bg-white flex flex-col items-center
                            lg:grid lg:grid-flow-row lg:grid-cols-9 lg:grid-rows-1 lg:justify-items-between lg:space-y-0 lg:pl-1 lg:py-1 
                            ">

                            {{-- picture --}}
                            <div class="flex flex-col items-center lg:flex-row lg:col-span-3 p-2 lg:p-0">
                                <div class="lg:px-2 p-3 flex items-center bg-slate-100 rounded-sm">
                                    <img src="{{ '/storage/' . $cart->product->image }}"
                                        class="lg:w-[80px] w-auto bg-cover rounded-sm">
                                </div>
                                <div class="lg:m-3 py-2 text-center lg:text-start">
                                    <p class="font-bold text-lg lg:text-sm">{{ ucfirst($cart->product->name) }}</p>
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
                            <form class="w-full lg:w-auto" method="POST" action="/cart/{{ $cart->id }}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button
                                    class="lg:w-[20px] w-full text-center rounded-b-md flex items-center justify-center cursor-pointer 
                                    sm:col-span-1 
                                    lg:bg-white
                                    bg-slate-300 mx-auto hover:bg-red-500 lg:hover:bg-white
                                    group">
                                    <svg class="w-6 h-6 text-slate-500 group-hover:text-red-500 cursor-pointer transition-all"
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
                class="w-full p-3 bg-white flex flex-col ml-2 rounded-md my-5 mx-auto min-w-max
                xl:w-5/12 xl:mt-5 xl:my-0 xl:ml-0 xl:h-max">
                <div
                    class="text-slate-400 flex justify-between pb-1 mb-2 font-bold border-slate-500 border-b border-dashed">
                    Kode Pembayaran <span class=" text-black">90471</span>
                </div>


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
                    <button id="pay-button"
                        class="mx-auto rounded-md bg-blue-500 hover:bg-blue-400 px-3 py-2 text-white w-2/3">
                        Checkout
                    </button>
                </li>
            </div>
        </div>

        {{-- Payment Form --}}
        <div id="payment-form"
            class="w-[600px] h-[auto] bg-blue-300 rounded-md hidden absolute top-[-10px] right-[30%] z-50">
            <x-payment-form></x-payment-form>
            <div id="x" class="absolute top-0 right-0 p-3 text-lg font-bold">
                <svg class="w-6 h-6 text-dark hover:text-red-500 cursor-pointer transition-all" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>



<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    let payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', (e) => {
        e.preventDefault()

        document.body.classList.toggle('screen')
        document.getElementById('payment-form').classList.toggle('hidden')
    });

    document.getElementById('x').addEventListener('click', () => {
        document.body.classList.toggle('screen')
        document.getElementById('payment-form').classList.toggle('hidden')
    })
</script>
