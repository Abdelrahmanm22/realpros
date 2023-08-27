  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{route('home')}}" class="brand-link">
          <img src="{{ URL::asset('back/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">REAL PROS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ URL::asset('back/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="{{route('home')}}" class="d-block">{{ Auth::user()->name }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          {{-- <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <span class="right badge badge-danger">Marketing</span>
                          <p>
                              Forms

                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('contact') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Contact</p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('pricing') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pricing Contact</p>
                            </a>
                        </li>
                          <li class="nav-item">
                              <a href="{{ route('popup') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>PopUp Contact</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  {{-- <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Tables
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/tables/simple.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Simple Tables</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/tables/data.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>DataTables</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/tables/jsgrid.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>jsGrid</p>
                              </a>
                          </li>
                      </ul>
                  </li> --}}


                  <li class="nav-header">SETTINGS</li>
                  <li class="nav-item">
                      <a href="{{route('addAdmin')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Admin</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="dropdown-item"
                          href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                              class="nav-icon far fa-circle text-info"></i>Logout </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>


              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
