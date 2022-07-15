<div class="ml-7 pt-5 pb-3 font-[Poppins] text-2xl font-bold text-white">
    Selamat Datang <p>Kembali</p>
    <p class="font-[Poppins] text-[15px] font-light text-white ">Tolong masukan Email
        dan Password</p>
</div>

<form action="/login" method="POST" class="mx-7 flex h-auto w-auto flex-col space-y-4 sm:mx-auto sm:block sm:w-[293px] ">
    @csrf

    <input name="email" autoComplete="off" type="text"
        class="h-1/2 w-full rounded-lg p-3 placeholder-[#008000] outline-none sm:w-full " placeholder="antonius@gmail.com"
        required />

    <input name="password" autoComplete="off" type="password"
        class="h-1/2 w-full rounded-lg p-3 placeholder-[#008000] outline-none sm:w-full " placeholder="******"
        required />

    <div class="flex w-[293px] items-center space-x-3 ">
        <button type="submit"
            class="w-2/5 rounded-md bg-[green] px-3 py-2 text-center text-[17px] font-semibold text-white sm:w-[164px] ">
            Masuk
        </button>
        <p class=" text-xs font-semibold text-white sm:text-[11px] ">Lupa Password?</p>
    </div>
    <span class="group flex justify-center text-center font-[Poppins] text-xs font-light sm:text-[14px] ">
        <p class="text-white">Tidak Mempunyai Akun?</p>
        <span
            class="mx-1 cursor-pointer font-bold text-[#00FFE0] group-hover:underline group-hover:underline-offset-2">Buat
            Akun</span>
    </span>
</form>
