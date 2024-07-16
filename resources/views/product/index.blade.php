<x-layout>
    <x-slot:title>
        Product
    </x-slot:title>
    <div class="container">
        <div class="d-flex justify-content-end mb-2">
            <a href="/products/create" class="btn btn-success">Tambah</a>
        </div>
        <div class="card overflow-hidden">
            <table class="table table-striped m-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                    class="w-thumbnail img-thumbnail"></td>
                            <td>{{ $product->name }}</td>
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
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
