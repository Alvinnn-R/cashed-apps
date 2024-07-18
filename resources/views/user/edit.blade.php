<x-layout>
    <x-slot:title>Edit Users</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <x-text-input label="Name" name="name" placeholder="Masukan nama user"
                                value="{{ old('name', $user->name) }}"></x-text-input>
                            <x-text-input label="Email" name="email" placeholder="Masukan email user"
                                value="{{ old('email', $user->email) }}" type="email"></x-text-input>
                            <div class="mb-3">
                                <x-text-input label="Password" name="password" placeholder="Masukan password user"
                                    value="{{ old('password'), $user->password }}" type="password"></x-text-input>
                                <x-text-input label="Confirm Password" name="password_confirmation"
                                    placeholder="Konfirmasi password user" value="{{ old('password') }}"
                                    type="password"></x-text-input>
                                <div class="form-text">Kosongi password bila tidak ingin mengupdate!</div>
                            </div>
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
