<x-layout>
    <x-slot:title>
        Category
    </x-slot:title>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between mb-2">
            <form class="d-flex" role="search" method="get">
                <input class="form-control me-2" type="search" placeholder="Cari category" aria-label="Search"
                    name="search" value="{{ request()->search }}">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <a href="/categories/create" class="btn btn-success">Tambah</a>
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
                    <?php $i = 1; ?>
                    @forelse ($categories as $category)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if ($category->active)
                                    <span class="badge text-bg-primary">Aktif</span>
                            </td>
                        @else
                            <span class="badge text-bg-danger">Tidak Aktif</span>
                    @endif
                    <td class="d-flex justify-content-start gap-3">
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                            class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada category</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
