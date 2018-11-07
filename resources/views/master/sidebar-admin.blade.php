<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li style="padding: 10px 0 0;">
                    <a href="{{route ('home')}}" class="waves-effect"><i class="fa fa-spin fa-gears fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a href="{{route ('instansi.index')}}" class="waves-effect"><i class="fa fa-info fa-fw" aria-hidden="true"></i><span class="hide-menu">Instansi</span></a>
                </li>
                <li>
                    <a href="{{route ('jenisinstansi.index')}}" class="waves-effect"><i class="fa fa-fort-awesome fa-fw" aria-hidden="true"></i><span class="hide-menu">Jenis Instansi</span></a>
                </li>
                <li>
                    <a href="{{route ('mou.index')}}" class="waves-effect"><i class="fa fa-building fa-fw" aria-hidden="true"></i><span class="hide-menu">Mou</span></a>
                </li>
                <hr>
                <li>
                
                        <a href="href="{{ route('logout') }} onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect">
                        <i class="fa fa-power-off fa-fw"></i><b>Logout</b></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                </li>
            </ul>
            {{-- <div class="center p-20">
                <span class="hide-menu"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span>
            </div> --}}
        </div>
    </div>