<nav class="navbar navbar-yourhabits navbar-expand-lg">
    <div class="container">

        <!-- KIRI: Brand -->
        <a class="navbar-brand" href="/home">
            <div class="brand-logo">YH</div>
            <span class="brand-text">Your<span>Habits</span></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <!-- TENGAH: Nav links -->
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'habits' ? 'active' : '' ?>" href="/habits">Habits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage ?? '') === 'progress' ? 'active' : '' ?>" href="/progress">Progress</a>
                </li>
            </ul>

            <div class="user-dropdown dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Hizbullah</span>
                    <span class="chevron-icon">▼</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="/profile">Profile</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item logout" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>