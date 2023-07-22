<x-layouts.backend.home>

    <x-slot:title> Eshiklar / {{ $product->name }}</x-slot:title>

    <x-layouts.backend.header>
        Eshiklar / {{ $product->name }} 
    </x-layouts.backend.header>

    <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none">{{ $product->name }}</h3>
          <div class="col-12">
            <img src="{{ asset('storage/' . $product->image) }}" class="product-image" alt="Product Image">
          </div>
          <div class="col-12 product-image-thumbs">
            @foreach ($product->images as $image)
                <div class="product-image-thumb"><img src="{{ asset('storage/' . $image->image) }}" alt="Product Image"></div>
            @endforeach
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{ $product->name }}</h3>
          <p>{{ $product->content }}</p>

          <hr>
          <h4>Mavjud ranglar</h4>
          <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
            @foreach ($product->colors as $color)
            <label class="btn btn-default text-center active">
              {{ $color->name }}
              <br>
              <img src="{{ asset('storage/' . $color->image) }}" width="50px">
            </label>
            @endforeach
          </div>

          <h4>Kategoriya</h4>
          <div class="bg-gray py-2 mb-4 px-3">
            <h3 class="mb-0">
                <img src="{{ asset('storage/' . $product->category->image) }}" width="70px" class="mr-3"> {{ $product->category->name }}
            </h3>
          </div>

          <h4>Narx</h4>
          <div class="bg-gray py-2 px-3">
            <h2 class="mb-0">
                {{ $product->price }}
            </h2>
          </div>    

          <div class="mt-4 product-share">
            <a href="#" class="text-gray">
              <i class="fab fa-facebook-square fa-2x"></i>
            </a>
            <a href="#" class="text-gray">
              <i class="fab fa-twitter-square fa-2x"></i>
            </a>
            <a href="#" class="text-gray">
              <i class="fas fa-envelope-square fa-2x"></i>
            </a>
            <a href="#" class="text-gray">
              <i class="fas fa-rss-square fa-2x"></i>
            </a>
          </div>

        </div>
      </div>

</x-layouts.backend.home>
