<x-layouts.frontend.main>

    <x-slot:title>Eshik</x-slot:title>

    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        @foreach ($product->images as $image => $item)
                        <div class="carousel-item {{ $image == 0 ? 'active' : '' }}">
                            <img class="w-100 h-100" src="{{ asset('storage/' . $item->image) }}" alt="Image">
                        </div>
                        @endforeach 
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{ $product->name }}</h3>
                    <h3 class="font-weight-semi-bold mb-5">{{ $product->price }}</h3>
                    <div class="col-lg-12 mb-4">
                        <strong class="text-dark mr-3">Ranglar:</strong>
                        @foreach ($product->colors as $color)
                        <a href="{{ asset('storage/' . $color->image) }}" target="blank">
                            <img class="mr-2 mb-2" src="{{ asset('storage/' . $color->image) }}" alt="Image" width="70">
                        </a>                    
                        @endforeach
                    </div>
                    <div class="d-flex mb-5 pt-2">
                        <strong class="text-dark mr-2">Ulashish:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-telegram"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Tavsif</h4>
                        <p>{{ $product->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ($categories as $category)
                <div class="bg-light p-4">
                    <a href="{{ route('front.categories.show', $category->id) }}">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
    
</x-layouts.frontend.main>