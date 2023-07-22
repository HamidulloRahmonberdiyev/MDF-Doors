<x-layouts.backend.home>

    <x-slot:title>Kategoriyalar</x-slot:title>

    <x-layouts.backend.header>Kategoriyalar</x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kategoriyalar</h3>

                    <div class="card-tools">
                        <a href="{{ route('categories.create') }}" type="submit" class="btn btn-default text-success">Kategoriya yaratish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Nomi</th>
                                <th>Rasm</th>
                                <th>Eshik soni</th>
                                <th>Qoshilgan sana:</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td><a href="{{ route('categories.edit', $category->id)}}" class="text-dark">{{ $category->name }}</a></td>
                                <td><img src="{{ asset('storage/' . $category->image) }}" alt="" style="width:60px"></td>
                                <td>{{ $category->products->count() }}</td>
                                <td class="text-primary">{{ $category->created_at->format('d-m-Y') }}</td>
                                <td>
                                        <a class="nav-link" data-toggle="dropdown" href="/">
                                          <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                            <div class="text-center mb-3"><br>
                                                <a href="{{ route('categories.edit', $category->id)}}" class="h5 text-success"><span><i class="fa fa-pen"></i></span> Tahrirlash</a><br><br>
                                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
                {{ $categories->links() }}
            </div>
        </div>
    </div>

</x-layouts.backend.home>
