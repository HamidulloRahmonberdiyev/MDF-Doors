<x-layouts.backend.home>

    <x-slot:title>Foydalanuvchilar / {{ $user->name }}</x-slot:title>

    <x-layouts.backend.header>Foydalanuvchilar / {{ $user->name }}</x-layouts.backend.header>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tahrirlash / {{ $user->name }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.update', $user->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                
                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess">Ism</label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Ism">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess">Email</label>
                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control is-valid @error('email') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess">Parol</label>
                                    <input type="password" name="password" class="form-control is-valid @error('password') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Parol">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess">Parolni tasdiqlang</label>
                                    <input type="password" name="confirm_password" class="form-control is-valid @error('confirm_password') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Parolni tasdiqlang">
                                    @error('confirm_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess">Rol</label>
                                    <select name="role_id" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? ' selected' : '' }}>{{ $role->name }}</option>    
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success">Saqlash</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.backend.home>
