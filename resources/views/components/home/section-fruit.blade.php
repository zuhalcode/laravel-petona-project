<div class="grid px-5 pb-10 w-full space-y-2 md:grid-cols-2 md:gap-3 md:space-y-5">
    @for ($i = 0; $i < 2; $i++)
        <div
            class=" mx-auto mt-5 grid h-[330px] w-[300px] grid-rows-2 items-center justify-center rounded-md
            bg-gradient-to-b md md:static md:z-0 md:mx-0 md:mt-5 md:flex md:h-auto md:w-full md:flex-row
            {{ $i === 0 ? 'from-[#4361ce] to-[#6be1ff]' : 'from-[#ff512f] to-[#dd2476]' }}  ">
            <div class="row-start-2 flex w-full flex-col overflow-hidden text-center md:w-1/2 md:text-left">
                <p class="text-md  font-normal text-white md:ml-10 md:text-[20px]">
                    {{ $i === 0 ? 'Sayuran berkualitas' : 'Buah - buahan berkualitas' }}</p>
                <p class="text-md font-[Poppins] text-white font-bold md:ml-10 md:text-[30px]">Berbagai Macam
                    {{ $i === 0 ? 'Sayuran' : 'Buah' }}</p>
                <button
                    class="mx-auto mt-5 w-2/3 rounded-xl bg-white text-dark hover:text-white hover:bg-black py-3 text-base font-bold md:ml-10 md:w-[180px] md:py-2">Belanja
                    Sekarang</button>
            </div>
            <span class="mx-auto mt-4 flex justify-center md:inline ">
                <img src="/img/{{ $i === 0 ? 'buahIjo' : 'buahPink' }}.png" alt="fruits" class="md:w-full w-2/3" />
            </span>
        </div>
    @endfor
</div>
