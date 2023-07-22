<x-layouts.backend.home>

    <x-slot:title>Ranglar</x-slot:title>

    <x-layouts.backend.header>Ranglar</x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ranglar</h3>

                    <div class="card-tools">
                        <a href="{{ route('colors.create') }}" type="submit" class="btn btn-default text-success">Rang yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Nomi</th>
                                <th>Rang</th>
                                <th>Qoshilgan sana:</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $color)
                            <tr>
                                <td>{{ $color->id }}</td>
                                <td><a href="{{ route('colors.edit', $color->id)}}" class="text-dark">{{ $color->name }}</a></td>
                                <td><img src="{{ asset('storage/' . $color->image) }}" alt="" style="width:60px"></td>
                                <td class="text-primary">{{ $color->created_at->format('d-m-Y') }}</td>
                                <td>
                                        <a class="nav-link" data-toggle="dropdown" href="/">
                                          <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                            <div class="text-center mb-3"><br>
                                                <a href="{{ route('colors.edit', $color->id) }}" class="h5 text-success"><span><i class="fa fa-pen"></i></span> Tahrirlash</a><br><br>
                                                <form action="{{ route('colors.destroy', $color->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn text-danger logout" style="font-size:20px"><i class="fa fa-trash"></i> O'chirish</button>
                                                </form>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center">
                {{ $colors->links() }}
            </div>
        </div>
    </div>

</x-layouts.backend.home>
