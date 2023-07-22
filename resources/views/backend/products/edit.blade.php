<x-layouts.backend.home>

    <x-slot:title>Eshiklar / {{ $product->name }}</x-slot:title>

    <x-layouts.backend.header>Eshiklar / {{ $product->name }}</x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-12">
            <div class="card col-lg-8 card-default">
                <div class="card-header">
                    <h2 class="card-title"> Tahrirlash / {{ $product->name }}</h2>
                </div>
                <div class="card-body p-0">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="bs-stepper-content">
                            <div id="logins-part" class="col-12" role="tabpanel" aria-labelledby="logins-part-trigger">
                                
                                <div class="form-group"><br><br>
                                    <label for="exampleInputEmail1">Mahsulot nomi</label>
                                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Mahsulot nomi">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategoriya</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)                      
                                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? ' selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mavjud ranglar</label>
                                    <select name="colors[]" multiple style="width:100%">
                                        @foreach ($colors as $color)                                         
                                            <option value="{{ $color->id }}" style="background-image: url({{ asset('storage/' . $color->image) }});height:30px;color:#111">{{ $color->name }}</option>
                                        @endforeach 
                                    </select>
                                    @error('colors')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Narx</label>
                                    <input type="text" name="price" class="form-control" value="{{ $product->price }}" placeholder="Narx">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ma'lumot</label>
                                    <textarea name="content" rows="4" class="form-control" placeholder="Ma'lumot">{{ $product->content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Asosiy Rasm</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image"
                                                class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Rasm kiriting</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group">
                                    <label for="exampleInputFile">Sleydshou Rasmlar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="images[]" multiple
                                                class="custom-file-input" id="exampleInputFile" required>
                                            <label class="custom-file-label" for="exampleInputFile">Rasmlarni kiriting</label>
                                        </div>
                                    </div>
                                    @error('images')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Saqlash</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-layouts.backend.admin>
