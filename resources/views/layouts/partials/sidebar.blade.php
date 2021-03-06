<div
    class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl"
    id="sidebar"
>
    <div class="sidebar-brand d-none d-md-flex">
        <svg
            class="sidebar-brand-full"
            width="118"
            height="46"
            alt="CoreUI Logo"
        >
            <use xlink:href="{{ asset('icons/brand.svg#cib-coreui') }}"></use>
        </svg>
        <svg
            class="sidebar-brand-narrow"
            width="46"
            height="46"
            alt="CoreUI Logo"
        >
            <use xlink:href="{{ asset('icons/brand.svg#cib-coreui-c') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px">
                    <div
                        class="simplebar-content-wrapper"
                        style="height: 100%; overflow: hidden scroll"
                    >
                        <div class="simplebar-content" style="padding: 0px">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">
                                    <svg class="nav-icon">
                                        <use
                                            xlink:href="{{ asset('icons/free.svg#cil-speedometer') }}"
                                        ></use>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            @if (auth()->check() && auth()->user()->is_admin)

                                <li class="nav-title">Admin</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.pages.index') }}">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('icons/free.svg#cil-library') }}"
                                            ></use>
                                        </svg>
                                        Pages</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.checklist_groups.index') }}">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('icons/free.svg#cil-apps') }}"
                                            ></use>
                                        </svg>
                                        Checklists and Groups</a
                                    >
                                </li>

                                

                            @endif
                            <li class="nav-title">Components</li>
                            <li class="nav-group">
                                <a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use
                                            xlink:href="{{ asset('icons/free.svg#cil-puzzle') }}"
                                        ></use>
                                    </svg>
                                    Base</a
                                >
                                <ul class="nav-group-items">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="base/accordion.html"
                                            ><span class="nav-icon"></span>
                                            Accordion</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Account</li>
                            <li class="nav-group">
                                <a 
                                    href="{{ route('logout') }}" class="nav-link"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                    >
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                    <svg class="nav-icon">
                                        <use xlink:href="{{ asset('icons/free.svg#cil-account-logout') }}" ></use>
                                    </svg>
                                    Logout
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="simplebar-placeholder"
                style="width: auto; height: 1297px"
            ></div>
        </div>
        <div
            class="simplebar-track simplebar-horizontal"
            style="visibility: hidden"
        >
            <div
                class="simplebar-scrollbar"
                style="width: 0px; display: none"
            ></div>
        </div>
        <div
            class="simplebar-track simplebar-vertical"
            style="visibility: visible"
        >
            <div
                class="simplebar-scrollbar"
                style="
                    height: 338px;
                    transform: translate3d(0px, 0px, 0px);
                    display: block;
                "
            ></div>
        </div>
    </ul>
    <button
        class="sidebar-toggler"
        type="button"
        data-coreui-toggle="unfoldable"
    ></button>
</div>

