<div class="w-full">
    <div class="{{ Auth::check() ? 'bg-[green]' : 'bg-login-primary' }} text-white text-xl p-2 mb-3 rounded-md">
        Category</div>
    <ul>
        <li class=" border-b pr-2 flex justify-between items-center">
            Fruits <span class="font-bold text-xl cursor-pointer">+</span>
        </li>
        <li class=" border-b pr-2 flex justify-between items-center">
            Vegetables <span class="font-bold text-xl">+</span>
        </li>
        <li class=" border-b pr-2 flex justify-between items-center">
            Cucumber <span class="font-bold text-xl">+</span>
        </li>
    </ul>
</div>
