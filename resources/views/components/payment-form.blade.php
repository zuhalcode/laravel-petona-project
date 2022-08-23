<form class="flex flex-col p-3 space-y-3" action="/orders" method="POST">
    @csrf
    <div class="flex flex-col space-y-2">
        <label for="email">Email</label>
        <input type="text" class="rounded-sm py-2 px-3 outline-none" id="email" name="email" autocomplete="off"
            placeholder="Email">
    </div>

    <div class="flex flex-col space-y-2">
        <label for="first-name">Nama Depan</label>
        <input type="text" class="rounded-sm py-2 px-3 outline-none" id="first-name" name="first-name"
            autocomplete="off" placeholder="Nama Depan">
    </div>

    <div class="flex flex-col space-y-2">
        <label for="last-name">Nama Belakang</label>
        <input type="text" class="rounded-sm py-2 px-3 outline-none" id="last-name" name="last-name"
            autocomplete="off" placeholder="Nama Belakang">
    </div>

    <div class="flex flex-col space-y-2">
        <label for="phone">No. Telepon</label>
        <input type="text" class="rounded-sm py-2 px-3 outline-none" id="phone" name="phone" autocomplete="off"
            placeholder="Telepon">
    </div>

    <button class="w-1/2 px-3 py-2 rounded-sm hover:bg-slate-400 bg-slate-500 mx-auto text-white font-bold">
        Submit
    </button>

</form>
