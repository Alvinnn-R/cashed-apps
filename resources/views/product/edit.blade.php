<x-layout>
    <x-slot:title>Edit Product</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}
                                        </option>
                                    @empty
                                        <option>Belum ada category</option>
                                    @endforelse
                                </select>
                            </div>

                            <x-text-input label="Nama" name="name" placeholder="Masukan nama product"
                                value="{{ old('name', $product->name) }}"></x-text-input>
                            <x-text-input label="Harga" name="price" type="number"
                                placeholder="Masukan harga product"
                                value="{{ old('price', $product->price) }}"></x-text-input>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    accept="image/jpeg, image/png">
                                <div class="form-text">Kosongi bila tidak ingin mengupdate!</div>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="active"
                                    name="active" @checked((!old() && $product->active) || old('active') == 'on')>
                                <label class="form-check-label" for="active">Aktif</label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('products.index') }}" class="btn btn-danger">Batal</a>
                                <button class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
