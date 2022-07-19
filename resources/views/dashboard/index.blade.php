<x-app-layout>
    <div class="w-full">
        <div class="mx-auto mt-5 w-1/2 p-10 bg-green-500">
            <h1 class="text-2xl">Tambah Produk</h1>

            <form action="/products" method="POST" class="flex flex-col w-1/2 space-y-2" enctype="multipart/form-data">
                @csrf

                <label for="">name</label>
                <input type="text" name="name">

                <label for="">category</label>
                <input type="text" name="category" value="1">

                <label for="">description</label>
                <input type="text" name="description">

                <label for="">amount</label>
                <input type="text" name="amount">

                <label for="">price</label>
                <input type="text" name="price">

                <label for="">image</label>
                <input type="file" name="image">

                <button class="bg-yellow-300 text-dark">submit</button>

            </form>

        </div>
    </div>
</x-app-layout>
