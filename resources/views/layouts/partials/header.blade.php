<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button
            class="header-toggler px-md-0 me-md-3"
            type="button"
            onclick="document.getElementById('sidebar').toggle()"
        >
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('icons/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
        </a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>
        <nav class="header-nav ms-auto me-4">
            <div
                class="btn-group"
                role="group"
                aria-label="Basic checkbox toggle button group"
            >
                <input
                    class="btn-check"
                    id="btn-light-theme"
                    type="radio"
                    name="theme-switch"
                    autocomplete="off"
                    value="light"
                    onchange="handleThemeChange(this)"
                />
                <label class="btn btn-primary" for="btn-light-theme">
                    <svg class="icon">
                        <use
                            xlink:href="{{ asset('icons/free.svg#cil-sun') }}"
                        ></use>
                    </svg>
                </label>
                <input
                    class="btn-check"
                    id="btn-dark-theme"
                    type="radio"
                    name="theme-switch"
                    autocomplete="off"
                    value="dark"
                    onchange="handleThemeChange(this)"
                />
                <label class="btn btn-primary" for="btn-dark-theme">
                    <svg class="icon">
                        <use
                            xlink:href="{{ asset('icons/free.svg#cil-moon') }}"
                        ></use>
                    </svg>
                </label>
            </div>
        </nav>
        <span>{{ auth()->check() ? auth()->user()->name : '' }}</span>
    </div>
</header>
