<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
{{--    <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--        <div class="image">--}}
{{--            <img src="{{asset('assets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--        </div>--}}
{{--        <div class="info">--}}
{{--            <a href="#" class="d-block">Alexander Pierce</a>--}}
{{--        </div>--}}
{{--    </div>--}}

<!-- SidebarSearch Form -->
{{--   <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
           <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
           <div class="input-group-append">
               <button class="btn btn-sidebar">
                   <i class="fas fa-search fa-fw"></i>
               </button>
           </div>
       </div>
   </div>--}}

<!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{route('dash')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Admin
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-align-left	"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('pages.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Pages
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('projects.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-project-diagram"></i>
                    <p>
                        Manage Projects
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('settings.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-cogs	"></i>
                    <p>
                        Manage Setting
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('services.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-align-justify	"></i>
                    <p>
                        Manage Services
                    </p>
                </a>
            </li><li class="nav-item">
                <a href="{{route('blogs.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-blog"></i>
                    <p>
                        Manage Blogs
                    </p>
                </a>
            </li>
        </ul>
    </nav>

</div>
