<x-layout>
    <x-slot:title>
        User
    </x-slot:title>
    <div class="container">
        <div class="row mb-2">
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                  </form>
            </div>
            <div class="col-8">
                <div class="d-flex justify-content-end mb-2">
                    <a href="/users/tambah" class="btn btn-success">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card overflow-hidden">
            <table class="table table-striped m-0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Alvin</td>
                        <td>alvinramas@gmail.com</td>
                        <td>
                            <a href="/users/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Riky</td>
                        <td>riky@example.com</td>
                        <td>
                            <a href="/users/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>H. Azmi umur 2 bulan</td>
                        <td>azmi@example.com</td>
                        <td>
                            <a href="/users/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
