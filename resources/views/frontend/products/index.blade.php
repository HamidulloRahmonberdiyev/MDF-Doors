<x-layouts.frontend.main>

    <x-slot:title>Eshiklar</x-slot:title>

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Kategoriyalar</span></h5>      
                <div class="bg-light p-4 mb-30">
                    @foreach ($categories as $category)
                    <a class="text-decoration-none" href="{{ route('front.categories.show', $category->id) }}">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 90px;">
                                <img class="img-fluid" src="{{ asset('storage/' . $category->image) }}" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>{{ $category->name }}</h6>
                                <small class="text-body">{{ $category->products->count() }}</small>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @foreach ($products as $product) 
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $product->image) }}" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="{{ route('front.products.show', $product->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="{{ route('front.products.show', $product->id) }}"><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="{{ route('front.products.show', $product->id) }}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="{{ route('front.products.show', $product->id) }}"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h5 text-decoration-none text-truncate" href="{{ route('front.products.show', $product->id) }}">{{ $product->name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h6>{{ $product->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
</x-layouts.frontend.main>