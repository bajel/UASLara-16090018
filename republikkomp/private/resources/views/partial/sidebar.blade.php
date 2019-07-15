@section('sidebar')
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{asset('/list-product')}}">Product List</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="{{asset('/table-product')}}">Product Table</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{asset('/table-categorie')}}">Categories</a>
                    
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1"></a>
                                    <div id="submenu-1-1" class="collapse submenu" style="">
                                        {{-- <ul class="nav flex-column">
                                            
                                        </ul> --}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Features
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset('/login')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset('/home')}}">View Web</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
    
@endsection