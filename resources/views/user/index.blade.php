<x-layout>
    <x-slot:title>
        User
    </x-slot:title>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mb-2">
            <form class="d-flex" role="search" method="get">
                <input class="form-control me-2" type="search" placeholder="Cari user" aria-label="Search" name="search"
                    value="{{ request()->search }}">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <a href="{{ route('users.create') }}" class="btn btn-success">Tambah</a>
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
                    <?php $i = 1; ?>
                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex justify-content-start gap-3">
                                    <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
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
