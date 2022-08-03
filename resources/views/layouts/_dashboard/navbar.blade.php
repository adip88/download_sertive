<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <br>
            <a href="{{ route('login') }}" class="logo logo-light">

            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="mdi mdi-menu"></i>
        </button>
    </div>

    <div class="d-flex">


        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}
                <img class="rounded-circle header-profile-user" src="{{ asset('vendor/assets/images/users/1.png') }}"
                    alt="Header Avatar">
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i>
                    {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
</div>
