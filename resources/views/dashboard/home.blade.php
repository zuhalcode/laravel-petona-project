<x-dashboard.app-layout>
    {{-- Topbar --}}
    <div class="bg-white rounded-md w-11/12 my-5 mx-auto flex justify-between items-center px-3 shadow-sm py-3">
        {{-- Search Component --}}
        <x-dashboard.home.search />
        {{-- End Search Component --}}

        {{-- Notification Component --}}
        <div class="flex space-x-3">
            <x-dashboard.home.notification />
        </div>
        {{-- End Notification Component --}}
    </div>
    {{-- End Topbar --}}

    <div class="w-11/12 mx-auto">
        <h1 class="font-bold text-xl">Creative Point</h1>
        <h1 class="text-slate-500 font-semibold">Hello, Welcome back {{ auth()->user()->name }}</h1>
    </div>

</x-dashboard.app-layout>
