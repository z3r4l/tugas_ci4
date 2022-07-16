<div class="bg-transparent">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="/" />
            </svg>
            <span class="fs-4 text-light">Zery Aldi</span>
        </a>

        <ul class="nav nav-pills me-5">
            <li class="nav-item"><a href="/" class="nav-link <?= url_is('/') ? 'active' : ''; ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/pages/about" class="nav-link <?= url_is('/pages/about') ? 'active' : ''; ?> ">About Me</a></li>
            <li class="nav-item"><a href="/pages/contact" class="nav-link <?= url_is('/pages/contact') ? 'active' : ''; ?>">Contact</a></li>
            <li class="nav-item"><a href="/mahasiswa" class="nav-link <?= url_is('/mahasiswa') ? 'active' : ''; ?>">Mahasiswa</a></li>
            <li class="nav-item"><a href="/orang" class="nav-link <?= url_is('/orang') ? 'active' : ''; ?>">Orang</a></li>
        </ul>
    </header>
</div>