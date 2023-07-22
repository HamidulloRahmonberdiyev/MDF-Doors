<x-layouts.frontend.main>

    <x-slot:title>Bosh sahifa</x-slot:title>

<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend') }}/img/78.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Eshiklar</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Istalgan turdagi eshik va romlar faqat bizda</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ko'rish</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend') }}/img/79.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Eshiklar</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Istalgan turdagi eshik va romlar faqat bizda</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ko'rish</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend') }}/img/80.webp" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Eshiklar</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Istalgan turdagi eshik va romlar faqat bizda</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ko'rish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('frontend') }}/img/81.webp" alt="">
                <div class="offer-text">
                    <h3 class="text-white mb-3">Eshiklar</h3>
                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ko'rish</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('frontend') }}/img/82.jpg" alt="">
                <div class="offer-text">
                    <h3 class="text-white mb-3">Romlar</h3>
                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ko'rish</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Sifatli Eshiklar</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Yetkazib berish</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-clock text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Muddati</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-wrench text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">O'rnatib berish</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Kategoriyalar</span></h2>
    <div class="row px-xl-5 pb-3">
        @foreach ($categories as $category)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('front.categories.show', $category->id) }}">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('storage/' . $category->image) }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{ $category->name }}</h6>
                        <small class="text-body">{{ $category->products->count() }}</small>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- Categories End -->


<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Eshiklar</span></h2>
    <div class="row px-xl-5">

        @foreach ($products as $product)        
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
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
                    <a class="h4 text-decoration-none text-truncate" href="">{{ $product->name }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h6>{{ $product->price }}</h6>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- Products End -->


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