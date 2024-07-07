<x-layout>
    <x-slot:title>
        Category
    </x-slot:title>
    <div class="container">
        <div class="d-flex justify-content-end mb-2">
            <a href="/categories/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card overflow-hidden">
            <table class="table table-striped m-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Snacks</td>
                        <td>Aktif</td>
                        <td>
                            <a href="/categories/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Sabun</td>
                        <td>Aktif</td>
                        <td>
                            <a href="/categories/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Minyak Goreng</td>
                        <td>Aktif</td>
                        <td>
                            <a href="/categories/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
