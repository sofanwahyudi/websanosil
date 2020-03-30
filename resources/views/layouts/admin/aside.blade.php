<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="{{ asset('web_sanosil/images/Sanosil_Logo.png') }}" alt="logo" width="200" class="shadow-light mb-5 mt-2">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AS</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Main</li>
              <li class="nav-item dropdown">
                <li><a class="nav-link" href="{{route('dashboard')}}"> <i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li><a class="nav-link" href="{{route('news')}}"> <i class="fas fa-newspaper"></i><span>Post</span></a></li>
                <li><a class="nav-link" href="{{route('galeri')}}"> <i class="fas fa-images"></i><span>Galeri</span></a></li>
              </li>
              <li class="menu-header">Produk</li>
              <li class="nav-item dropdown">
                <!-- <li><a class="nav-link" href="{{route('product.create')}}"><i class="fas fa-plus"></i><span>Add Product</span></a></li> -->
                <li><a class="nav-link" href="{{route('product')}}"><i class="fas fa-cube"></i><span>Produk</span></a></li>
                <li><a class="nav-link" href="{{route('application')}}"><i class="fas fa-glass-martini"></i><span>Aplikasi Produk</span></a></li>
                <li><a class="nav-link" href="{{route('categories')}}"><i class="fas fa-filter"></i><span>Kategori Produk</span></a></li>
                <li><a class="nav-link" href="{{route('sub.cat')}}"><i class="fas fa-angle-double-right"></i><span>Sub Kategori Produk</span></a></li>
                <li><a class="nav-link" href="{{route('sub.prod')}}"><i class="fas fa-cubes"></i><span>Sub2 Kategori Produk</span></a></li>
              </li>
              <!-- <li class="menu-header">Setting</li> -->
              <!-- <li><a class="nav-link" href="layout-default.html"><i class="fa fa-cogs"></i><span>Setting</span></a></li> -->
                <!-- <li><a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt"></i><span>Logout</span></a></li> -->
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Support Team IT
              </a>
            </div>
        </aside>
