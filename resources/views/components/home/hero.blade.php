<!-- ====== Hero Section Start -->
<div
    class="relative pt-[50px] lg:pt-[50px] pb-[85px] bg-gradient-to-br {{ Auth::check() ? "bg-[url('/img/slider/slider-fruit.webp')] xl:bg-contain xl:bg-repeat bg-no-repeat xl:bg-top bg-right " : 'from-login-primary via-login-primary to-black' }} dark:bg-slate-800">
    <div class="container">
        <div class="flex flex-wrap ">
            <div class="w-full lg:w-5/12 ">
                <div class="hero-content  {{ Auth::check() ? 'hidden' : '' }}">
                    <h1
                        class=" dark:text-white font-bold text-4xl sm:text-[40px] lg:text-[42px] xl:text-[45px] leading-snug mb-3 xl:mt-5 {{ Auth::check() ? 'text-[green]' : 'text-white' }}">
                        Membantu Temukan Sayuran dan Buah-Buahan <br />
                    </h1>
                    <p
                        class="text-base font-bold my-8 {{ Auth::check() ? 'text-[green]' : 'text-white' }} max-w-[480px]">
                        Petona hadir untuk temukan sayuran dan buah-buahan terbaik untukmu, untuk dijual dengan sumber
                        terpercaya.
                    </p>
                    @auth
                        {{--  --}}
                        <ul class="flex flex-wrap items-center">
                            <li>
                                <a href="#"
                                    class=" py-4 px-6 sm:px-10 lg:px-8 xl:px-10 inline-flex items-center justify-center text-center font-bold text-white text-base bg-[green] hover:bg-opacity-90  rounded-lg">
                                    Temukan Barang
                                </a>
                            </li>
                        </ul>
                        {{-- end button --}}
                    @endauth
                </div>
            </div>

            <div class="hidden lg:block lg:w-1/12 px-4"></div> {{-- spacer --}}

            {{-- Hero Pic --}}
            <div class="w-full lg:w-6/12">
                <div class="lg:text-left lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0 lg:pl-20">
                        @auth
                            <h1
                                class=" dark:text-white font-bold text-3xl sm:text-[40px] lg:text-[42px] xl:text-[45px] leading-snug mb-3 lg:mt-5 {{ Auth::check() ? 'text-[green]' : 'text-white' }}">
                                Membantu Temukan Sayuran dan Buah-Buahan <br />
                            </h1>
                            <p
                                class="text-base font-bold my-8 {{ Auth::check() ? 'text-[green]' : 'text-white' }} max-w-[480px]">
                                Petona hadir untuk temukan sayuran dan buah-buahan terbaik untukmu, untuk dijual dengan
                                sumber
                                terpercaya.
                            </p>
                            @auth
                                {{-- button --}}
                                <ul class="flex flex-wrap items-center">
                                    <li>
                                        <a href="#"
                                            class=" py-4 px-6 sm:px-10 lg:px-8 xl:px-10 inline-flex items-center justify-center text-center font-bold text-white text-base bg-[green] hover:bg-opacity-90  rounded-lg">
                                            Temukan Barang
                                        </a>
                                    </li>
                                </ul>
                                {{-- end button --}}
                            @endauth
                        @else
                            <div class="h-[400px] w-[350px] rounded-2xl bg-[rgba(255,255,255,.3)]">
                                @if ($credential === 'login')
                                    <x-home.login />
                                @else
                                    <x-home.register />
                                @endif
                            </div>
                        @endauth
                        {{-- <span class="absolute -left-8 -bottom-8 z-[-1]"></span> --}}
                    </div>
                </div>
            </div>
            {{-- End Hero Pic --}}

        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
