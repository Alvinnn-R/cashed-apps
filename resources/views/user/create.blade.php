<x-layout>
    <x-slot:title>Tambah Users</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <x-text-input label="Name" name="name" placeholder="Masukan nama user"
                                value="{{ old('name') }}"></x-text-input>
                            <x-text-input label="Email" name="email" placeholder="Masukan email user"
                                value="{{ old('email') }}" type="email"></x-text-input>
                            <x-text-input label="Password" name="password" placeholder="Masukan password user"
                                value="{{ old('password') }}" type="password"></x-text-input>
                            <x-text-input label="Confirm Password" name="password_confirmation"
                                placeholder="Konfirmasi password user" value="{{ old('password') }}"
                                type="password"></x-text-input>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
