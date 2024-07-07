<x-layout>
    <x-slot:title>
        Product
    </x-slot:title>
    <div class="container">
        <div class="d-flex justify-content-end mb-2">
            <a href="/products/tambah" class="btn btn-success">Tambah</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="" alt=""></td>
                        <td>Roti Bakar</td>
                        <td>10.000</td>
                        <td>Aktif</td>
                        <td>
                            <a href="/products/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="" alt=""></td>
                        <td>Taro</td>
                        <td>2.000</td>
                        <td>Aktif</td>
                        <td>
                            <a href="/products/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="" alt=""></td>
                        <td>Bakso Bakar</td>
                        <td>8.000</td>
                        <td>Aktif</td>
                        <td>
                            <a href="/products/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
