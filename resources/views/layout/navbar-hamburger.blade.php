<button id="navbar-toggler"
    class=" block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-white px-3 py-[6px] rounded-lg">
    <span class="relative w-[30px] h-[2px] my-[6px] block {{ Auth::check() ? 'bg-[green]' : 'bg-white' }}"></span>
    <span class="relative w-[30px] h-[2px] my-[6px] block {{ Auth::check() ? 'bg-[green]' : 'bg-white' }}"></span>
    <span class="relative w-[30px] h-[2px] my-[6px] block {{ Auth::check() ? 'bg-[green]' : 'bg-white' }}"></span>
</button>

<script>
    document.getElementById('navbar-toggler').addEventListener('click', () => document.getElementById('navbar-toggler')
        .classList.toggle('navbarTogglerActive'))
</script>
