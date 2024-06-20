<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('admin') }}">
                {{-- <img src="{{ asset('backend/images/logo.png') }}" alt="Logo"> --}}
                CDC Dreams Program
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-image"></i>Banners</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('banner.index') }}">View Banners</a></li>
                        <li><a href="{{ route('banner.create') }}">Add Banner</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Girls</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('girls.index') }}">View Girls</a></li>
                        <li><a href="{{ route('girls.create') }}">Add Girl</a></li>
                    </ul>
                </li>


                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-building"></i>Events</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('events.index') }}">View Events</a></li>
                        <li><a href="{{ route('events.create') }}">Add Event</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Progresses</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('progresses.index') }}">View Progresses</a></li>
                        <li><a href="{{ route('progresses.create') }}">Add Progress</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Materials</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('materials.index') }}">View Materials</a></li>
                        <li><a href="{{ route('materials.create') }}">Add Material</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Skills</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('skills.index') }}">View Skills</a></li>
                        <li><a href="{{ route('skills.create') }}">Add Skill</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('reports') }}"> <i class="menu-icon fa fa-file"></i>Reports </a>
                </li>
                
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Settings</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="{{ route('users.index') }}">Manage Users</a></li>
                        <li><a href="{{ route('users.create') }}">Add User</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
