<div class="grid px-5 pb-10 w-full space-y-2 sm:grid-cols-2 sm:gap-3 sm:space-y-5">

    @for ($i = 0; $i < 2; $i++)
        <div
            class=" mx-auto grid h-[330px] w-[300px] grid-rows-2 items-center justify-center rounded-md
            bg-gradient-to-b sm:static sm:z-0 sm:mx-0 sm:mt-5 sm:flex sm:h-auto sm:w-full sm:flex-row
            {{ $i === 0 ? 'from-[#4361ce] to-[#6be1ff]' : 'from-[#ff512f] to-[#dd2476]' }}  ">
            <div class="row-start-2 flex w-full flex-col overflow-hidden text-center sm:w-1/2 sm:text-left">
                <p class="text-md  font-normal text-white sm:ml-10 sm:text-[20px]">
                    {{ $i === 0 ? 'Sayuran berkualitas' : 'Buah - buahan berkualitas' }}</p>
                <p class="text-md font-[Poppins] text-white font-bold sm:ml-10 sm:text-[30px]">Berbagai Macam
                    {{ $i === 0 ? 'Sayuran' : 'Buah' }}</p>
                <button
                    class="mx-auto mt-5 w-2/3 rounded-xl bg-white text-dark hover:text-white hover:bg-black py-3 text-base font-bold sm:ml-10 sm:w-[180px] sm:py-2">Belanja
                    Sekarang</button>
            </div>
            <span class="mx-auto mt-4 hidden sm:inline ">
                <img src="/img/{{ $i === 0 ? 'buahIjo' : 'buahPink' }}.png" alt="fruits" class="w-full" />
            </span>
        </div>
    @endfor
</div>
