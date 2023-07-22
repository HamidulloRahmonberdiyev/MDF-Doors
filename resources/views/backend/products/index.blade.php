<x-layouts.backend.home>

    <x-slot:title>Eshiklar</x-slot:title>

    <x-layouts.backend.header>Eshiklar</x-layouts.backend.header>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Eshiklar</h3>

                    <div class="card-tools">
                        <a href="{{ route('products.create') }}" type="submit" class="btn btn-default text-success">Eshik qo'shish <i class="fas fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-primary">
                                <th>ID</th>
                                <th>Nomi</th>
                                <th>Kategoriya</th>
                                <th>Rasm</th>
                                <th>Narx</th>
                                <th>Amal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><a href="{{ route('products.edit', $product->id)}}" class="text-dark">{{ $product->name }}</a></td>
                                <td>{{ $product->category->name }}</td>
                                <td><img src="{{ asset('storage/' . $product->image) }}" alt="" style="width:60px"></td>
                                <td>{{ $product->price }}</td>
                                <td>
                                        <a class="nav-link" data-toggle="dropdown" href="/">
                                          <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-right" style="width:100px">
                                            <div class="text-center mb-3"><br>
                                                <a href="{{ route('products.show', $product->id) }}" class="h5 text-info"><span><i class="fa fa-eye"></i></span> Kuzatish</a><br><br>
                                                <a href="{{ route('products.edit', $product->id) }}" class="h5 text-success"><span><i class="fa fa-pen"></i></span> Tahrirlash</a><br><br>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
                {{ $products->links() }}
            </div>
        </div>
    </div>

</x-layouts.backend.home>
