<x-layouts.backend.home>

    <x-slot:title>Bosh sahifa</x-slot:title>

    <x-layouts.backend.header>Bosh sahifa</x-layouts.backend.header>

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-th"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Kategoriyalar</span>
          <span class="info-box-number">
            {{ $categories->count() }}
          </span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-flask"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Ranglar</span>
          <span class="info-box-number">{{ $colors->count() }}</span>
        </div>
      </div>
    </div>

    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-door-open"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Eshiklar</span>
          <span class="info-box-number">{{ $products->count() }}</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Foydalanuvchilar</span>
          <span class="info-box-number">{{ $users->count() }}</span>
        </div>
      </div>
    </div>
  </div>

</x-layouts.backend.home>