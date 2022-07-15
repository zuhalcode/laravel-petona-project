@auth
    <li>
        <a href="{{ $href }}"
            class=" hover:text-yellow-500 text-base font-bold py-1 flex dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12 {{ Request::is($href) ? 'text-yellow-400' : 'text-[green]' }}">
            {{ $slot }}
        </a>
    </li>
@else
    <li>
        <a href="{{ $href }}"
            class=" hover:text-yellow-300 font-bold text-base py-1 flex dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12  {{ Request::is($href) ? 'text-yellow-400' : 'text-white' }}  ">
            {{ $slot }}
        </a>
    </li>
@endauth
