<x-layout>
    <x-slot:title>
        Product
    </x-slot:title>
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <form class="d-flex" role="search" method="get">
                <input class="form-control me-2" type="search" placeholder="Cari product" aria-label="Search" name="search"
                    value="{{ request()->search }}">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <a href="/products/create" class="btn btn-success">Tambah</a>
        </div>
        <div class="card overflow-hidden">
            <table class="table table-striped m-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Category</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @forelse ($products as $product)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td><img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                    class="w-thumbnail img-thumbnail"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                @if ($product->active)
                                    <span class="badge text-bg-primary">Aktif</span>
                            </td>
                        @else
                            <span class="badge text-bg-danger">Tidak Aktif</span>
                    @endif
                    <td>
                        <div class="d-flex justify-content-start gap-3">
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada category</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
