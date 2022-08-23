<aside class="w-[250px] rounded-l-lg bg-white">
    <x-dashboard.logo />
    <div class=" space-y-2 px-3 pr-2 pb-5 scrollbar overflow-y-auto h-[400px] ">
        @foreach ($sidebarItem as $item)
            @can('admin')
                <a href="{{ $item['href'] }}"
                    class="px-6 py-3  rounded-lg flex cursor-pointer {{ Request::is('dashboard/' . $item['href']) ? ' text-white bg-dash-primary' : 'text-slate-400 hover:text-dash-primary' }} items-center ">
                    {!! $item['icon'] !!}
                    <span class="px-3 font-bold text-[13px] ">{{ $item['label'] }}</span>
                </a>
            @else
                @if ($item['type'] !== 'admin')
                    <a href="{{ $item['href'] }}"
                        class="px-6 py-3  rounded-lg flex cursor-pointer {{ Request::is('dashboard/' . $item['href']) ? ' text-white bg-dash-primary' : 'text-slate-400 hover:text-dash-primary' }} items-center ">
                        {!! $item['icon'] !!}
                        <span class="px-3 font-bold text-[13px] ">{{ $item['label'] }}</span>
                    </a>
                @endif
            @endcan
        @endforeach
    </div>

</aside>
