<x-layouts.backend.home>

    <x-slot:title>Yangi Rol</x-slot:title>

    <x-layouts.backend.header>Yangi Rol</x-layouts.backend.header>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Role yaratish</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.store') }}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"> Rol nomi</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control is-valid @error('name') is-invalid @else is-valid @enderror" id="inputSuccess" placeholder="Rol nomi">
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
