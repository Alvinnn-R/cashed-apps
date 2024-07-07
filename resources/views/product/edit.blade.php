<x-layout>
    <x-slot:title>Edit Product</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukan nama category">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="price"
                                placeholder="Masukan harga product">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Aktif</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
