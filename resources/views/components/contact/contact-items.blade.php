@foreach ($contactItems as $item)
    <div class="m-[15px] w-full border border-login-primary/30 hover:border-login-primary/70 group rounded-md">
        <div class="p-[25px] flex flex-col">
            <div class="group-hover:bg-[orange] w-10 transition-all h-10 bg-[green] rounded-md">{!! $item['icon'] !!}
            </div>
            <div class="my-5 text-xl font-medium font-[Roboto Mono]">{{ $item['label'] }}</div>
            <div class="text-base">{{ $item['content'] }}</div>
        </div>
    </div>
@endforeach
