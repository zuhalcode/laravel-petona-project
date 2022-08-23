<!-- ====== Navbar Section Start -->
<header
    class="fixed left-0 top-0 z-40 {{ Auth::check() ? 'bg-white' : 'bg-login-primary' }} w-full flex items-center shadow-md dark:bg-slate-900 h-20">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <a class="flex outline-none" href="/">
                <span class="flex -mt-2 ml-2">
                    <div
                        class="relative w-9 h-9 sm:h-12 sm:w-12 mt-2 overflow-hidden rounded-md {{ Auth::check() ? 'bg-[green]' : 'bg-white' }} ">
                        <span
                            class="absolute right-[.5px] sm:-top-[16px] -top-[7px] font-[Sahitya] text-[40px] sm:text-[60px] {{ Auth::check() ? 'text-white' : 'text-login-primary' }}">P</span>
                    </div>
                    <span
                        class=" font-[Sahitya] sm:-mt-3 mt-[.5px] text-2xl sm:text-4xl {{ Auth::check() ? 'text-[green]' : 'text-white' }}">etona</span>
                </span>
            </a>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <div id="nav-burger" data-toggle="true">
                        <x-layout.navbar-hamburger></x-layout.navbar-hamburger>
                    </div>

                    <nav id="nav-content"
                        class=" absolute right-0 top-[50px] hidden {{ Auth::check() ? 'bg-white' : 'bg-login-primary' }}  py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:max-w-full lg:w-full lg:px-0 lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                @auth
                                    @if ($item['label'] === 'Beranda' || $item['label'] === 'Produk' || $item['label'] === 'Kontak Kami')
                                        <x-layout.navbar-item : href="{{ $item['href'] }}"> {{ $item['label'] }}
                                        </x-layout.navbar-item>
                                    @elseif($item['label'] === 'Keranjang')
                                        <li class="flex space-x-3">
                                            <a href="/cart"
                                                class="  hover:text-yellow-300 text-base font-bold py-2 flex dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12 {{ Request::is('cart') ? 'text-white bg-[#00c300] px-2 rounded-full' : 'text-[green]' }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </a>
                                            <div>
                                                <p class="text-[13px] font-bold ">Keranjang</p>
                                                <p class="text-xs">{{ $itemCount }} items</p>
                                            </div>
                                        </li>
                                    @endif
                                @else
                                    @if ($item['label'] !== 'Keranjang')
                                        <x-layout.navbar-item : href="{{ $item['href'] }}"> {{ $item['label'] }}
                                        </x-layout.navbar-item>
                                    @endif
                                @endauth
                            @endforeach

                            @auth
                                <li class="sm:relative">
                                    <button id="menu-btn"
                                        class="text-base py-1 flex hover:text-yellow-500 dark:text-gray-200  lg:inline-flex lg:ml-6 xl:ml-12 text-[green] font-bold">
                                        {{ ucwords(auth()->user()->name) }}
                                        <span id="arrow-icon">
                                            <svg class="-mr-1 mt-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="sm:bg-[green] text-[green] sm:text-white sm:absolute w-28 top-[37px] right-0 hidden flex-col rounded"
                                        id="dropdown">
                                        <a href="/dashboard/home"
                                            class="px-2 py-1 rounded hover:bg-yellow-500">Dashboard</a>
                                        <form action="/logout" class="px-2 py-1 cursor-pointer rounded hover:bg-yellow-500"
                                            method="post">
                                            @csrf
                                            <button type="submit">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('nav-burger').addEventListener('click', (e) => {
            let parentId = e.target.parentNode.id
            if (parentId === 'nav-burger' || parentId === 'navbar-toggler') {
                document.getElementById('nav-content').classList.toggle('hidden')
            }
        })
    </script>

    <script>
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        const arrowIcon = document.querySelector('#arrow-icon')
        const arrowUp = `<svg class="-mr-1 mt-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"      
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>`
        const arrowDown = `<svg class="-mr-1 mt-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>`

        menuBtn && menuBtn.addEventListener('click', (e) => {
            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
            if (dropdown.classList.contains('hidden')) arrowIcon.innerHTML = arrowDown
            else arrowIcon.innerHTML = arrowUp
        })
    </script>
</header>
<!-- ====== Navbar Section End -->
