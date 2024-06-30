
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>



    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-900 medium">
                @if(empty(Auth::user()->name))
                {{''}}
                @else
                {{Auth::user()->name}}
                @endif
            </span>
            <img class="img-profile rounded-circle"

            <!-- @empty($user->foto)
            <img class="img-profile rounded-circle" src="{{url('admin/img/user.png')}}" alt="Photo Profil">
            @else
            <img class="img-profile rounded-circle"
            src="{{ asset('storage/fotos/' . Auth::user()->foto) }}" alt="Profile Picture">
            @endempty -->
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{url('admin/profile')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-600"></i>
                Profil
            </a>
            <a class="dropdown-item" href="{{url('admin/reset')}}">
                <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-600"></i>
                Reset Password
            </a>
            <div class="dropdown-divider"></div>
                
                        
                </a>
                    
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->
