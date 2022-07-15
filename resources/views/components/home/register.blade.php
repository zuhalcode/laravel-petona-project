<div>
    <span class="ml-7 grid pt-5 pb-3 font-[Poppins] text-[26px] font-bold text-white">
        <span class="font-[Poppins] text-[13px] font-light uppercase ">Start For
            free</span>
        Buat Akun Baru
    </span>
    <form action="/users" method="post"
        class="mx-auto h-auto w-[270px] gap-2 space-y-3 sm:grid sm:w-[293px] sm:space-y-0">
        @csrf
        {{-- {{ dd($registerInputs ?? 'zuhal') }} --}}
        {{-- @foreach ($registerInputs as $input)
            <div class="mx-3 grid w-4/5 rounded-xl bg-white sm:col-span-2 sm:mx-0 sm:w-full">
                <p class="px-3 pt-1 font-[Poppins] text-[14px] opacity-75 sm:pt-2">{{ $input['label'] }}</p>
                <input name="email" autoComplete="off" type="{{ $input['type'] }}"
                    class="sm:text-md h-5 w-full rounded-xl px-3 pb-2 text-sm placeholder-[#008000] outline-none  placeholder:font-[Poppins] placeholder:text-sm sm:h-8 sm:pb-2"
                    placeholder="{{ $input['placeholder'] }}" required />
            </div>
        @endforeach --}}
        <div class="mx-3 grid w-4/5 rounded-xl bg-white sm:col-span-2 sm:mx-0 sm:w-full">
            <p class="px-3 pt-1 font-[Poppins] text-[14px] opacity-75 sm:pt-2">Name</p>
            <input name="name" autoComplete="off" type="name"
                class="sm:text-md h-5 w-full rounded-xl px-3 pb-2 text-sm placeholder-[#008000] outline-none  placeholder:font-[Poppins] placeholder:text-sm sm:h-8 sm:pb-2"
                placeholder="Antonio Lumerius" required />
        </div>

        <div class="mx-3 grid w-4/5 rounded-xl bg-white sm:col-span-2 sm:mx-0 sm:w-full">
            <p class="px-3 pt-1 font-[Poppins] text-[14px] opacity-75 sm:pt-2">Email</p>
            <input name="email" autoComplete="off" type="text"
                class="sm:text-md h-5 w-full rounded-xl px-3 pb-2 text-sm placeholder-[#008000] outline-none  placeholder:font-[Poppins] placeholder:text-sm sm:h-8 sm:pb-2"
                placeholder="antonius@gmail.com" required />
        </div>

        <div class="mx-3 grid w-4/5 rounded-xl bg-white sm:col-span-2 sm:mx-0 sm:w-full">
            <p class="px-3 pt-1 font-[Poppins] text-[14px] opacity-75 sm:pt-2">Password</p>
            <input name="password" autoComplete="off" type="password"
                class="sm:text-md h-5 w-full rounded-xl px-3 pb-2 text-sm placeholder-[#008000] outline-none  placeholder:font-[Poppins] placeholder:text-sm sm:h-8 sm:pb-2"
                placeholder="********" required />
        </div>


        <button type="submit"
            class=" mx-3 w-4/5 cursor-pointer rounded-lg bg-[green] px-3 py-2 text-center text-[12px] font-bold tracking-wide text-white sm:col-span-2 sm:mx-0 sm:w-full ">
            Daftar
        </button>

    </form>

    <div class="mt-2 flex items-center justify-center font-[Poppins] text-[14px]">
        <p class="font-light text-white ">Sudah mempunyai akun?</p> <span
            class="mx-1 cursor-pointer font-bold text-[#00FFE0] hover:underline hover:underline-offset-2">Masuk</span>
    </div>
</div>
