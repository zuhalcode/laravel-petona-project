<x-dashboard.app-layout>
    <div class="w-11/12 mx-12 mt-3">
        <h1 class="font-bold text-xl">Orders</h1>
        {{-- <h1 class="text-slate-500 font-semibold">Hello, Welcome back {{ auth()->user()->name }}</h1> --}}
    </div>
    <div class="m-2 mt-3">
        <div class="w-11/12 mx-auto">
            <div class="bg-dash-primary rounded-t-md">
                <div class="flex justify-between w-[820px] items-center text-center  text-white font-bold py-2 ">
                    <div class="ml-2">Order Id</div>
                    <div class="">Name</div>
                    <div class="">Email</div>
                    <div class="">Phone</div>
                    <div class="">Price</div>
                    <div class="">Status</div>
                </div>
            </div>
            <ul class="space-y-3">
                @foreach ($orders as $order)
                    @if ($order->order_code !== null)
                        <li>
                            <div
                                class="flex justify-between items-center px-2 py-3 mb-1 bg-white shadow-lg rounded-sm ">
                                <div class="">{{ $order->order_code }}</div>
                                <div class="">{{ $order->first_name }} {{ $order->last_name }}</div>
                                <div class="">{{ $order->email }}</div>
                                <div class="">{{ $order->phone }}</div>
                                <div class="">{{ 'Rp. ' . number_format($order->total_price, 2, ',', '.') }}</div>
                                <div>{{ $order->status->status }}</div>
                                <div class="cursor-pointer detail-arrow">
                                    <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="detail-content scale-y-0 origin-top transition-all duration-500 h-0">
                                <div
                                    class="text-start grid grid-flow-col grid-cols-5 px-2 py-1 mb-1 font-bold text-sm bg-white shadow-lg rounded-sm">
                                    <div>Image</div>
                                    <div>Name</div>
                                    <div>Quantity</div>
                                    <div>Product Price</div>
                                    <div>Total Price</div>

                                </div>
                                <ul class="space-y-[2px]">
                                    @foreach ($order->order_details as $detail)
                                        @foreach ($detail->product as $product)
                                            <li
                                                class="w-full rounded-sm bg-gray-400 grid-cols-5 text-start grid grid-flow-col font-bold text-white p-2 items-center">
                                                <img src="{{ '/storage/' . $product->image }}"
                                                    class="w-[70px] h-[50px] rounded-sm" alt="">
                                                <div>{{ ucwords($product->name) }}</div>
                                                <div>{{ $detail->quantity }}</div>
                                                <div>
                                                    {{ 'Rp. ' . number_format($product->price, 2, ',', '.') }}
                                                </div>
                                                <div>
                                                    {{ 'Rp.' . number_format($product->price * $detail->quantity, 2, ',', '.') }}
                                                </div>
                                            </li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</x-dashboard.app-layout>

<script>
    const detailArrow = document.querySelectorAll('.detail-arrow')
    const detailContent = document.querySelectorAll('.detail-content')
    detailArrow.forEach((arrow, index) => arrow.addEventListener('click', () => {
        arrow.classList.toggle('rotate-180')
        detailContent[index].classList.toggle('scale-y-100')
        detailContent[index].classList.toggle('h-0')
    }))
</script>
