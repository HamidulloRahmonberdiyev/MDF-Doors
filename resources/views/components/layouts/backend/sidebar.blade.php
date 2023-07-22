<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('users.edit', auth()->user()->id) }}" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Qidiruv" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
        <li class="nav-item">
          <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Kategoriyalar
            </p>
          </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('colors.index') }}" class="nav-link">
              <i class="nav-icon fas fa-flask"></i>
              <p>
                Ranglar
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Eshiklar
              </p>
            </a>
        </li>  
        
        <li class="nav-header">Manager</li>
        <li class="nav-item">
          <a href="{{ route('roles.index') }}" class="nav-link">
            <i class="nav-icon fas fa-lock text-danger"></i>
            <p class="text">Rollar</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users text-success"></i>
            <p>Foydalanuvchilar</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>