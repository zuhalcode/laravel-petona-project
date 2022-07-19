<x-app-layout>
    <div class="container flex mt-5">
        <div class="flex-auto lg:flex w-[400px] hidden">
            <x-products.category />
        </div>
        <div class="flex-auto w-full">
            <x-products.list-product :products="$products" />
        </div>
    </div>
</x-app-layout>
