<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <input type="search" class="form-control" placeholder="Rechercher" aria-label="Search Dashboard">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                            class="mdi mdi-magnify"></i></span>
                </div>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">

                <li class="icons dropdown">
                    <li class="icons dropdown">

                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="../images/user/1.png" height="40" width="40" alt="">
                        </div>

                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard') }}"><i class="icon-user"></i> <span>{{ Auth::user()->name }}</span></a>
                                    </li>
                                    <!-- déconnecter -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    <li>
                                        <a href="{{ route('logout') }}"onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="icon-key"></i> <span>{{ __('Se déconnecter') }}</span>
                                        </a>
                                    </li>
                                </form>
                                </ul>
                            </div>
                        </div>
                    </li>

                </li>
            </ul>
        </div>
    </div>
</div>
