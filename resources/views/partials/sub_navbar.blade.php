<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
            <ul>
                <a class="btn-book-a-table {{ $title === 'Home' ? 'active' : '' }}" href="/">Beranda</a>
                <li class="dropdown"><a href="#"><span>Pofil</span></a>
                    <ul>
                        <li><a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/tentang">Visi &
                                Misi</a>
                        </li>
                        <li><a class="nav-link {{ $title === 'daftardosen' ? 'active' : '' }}"
                                href="/daftardosen">Daftar Dosen</a></li>
                        <li><a class="nav-link {{ $title === 'contact' ? 'active' : '' }}" href="/contact">Lokasi
                                Gedung</a></li>
                        <li><a href="/notfont">Staf</a></li>
                        <li><a href="/strukturorgan">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Akademik</span></a>
                    <ul>
                        <li><a href="https://elearning.unimal.ac.id/login/index.php" target="_balck">E-learning</a></li>
                        <li><a href="/kurikulum">Struktur Kurikulum</a></li>
                        <li><a href="/kelakademik">Kalender Akademik</a></li>
                        <li><a href="/notfont">Panduan Akademik</a></li>
                        <li><a href="/akreditas">Akreditasi</a></li>
                        <li><a href="/berita">Berita</a></li>
                        <li><a href="/notfont">Agenda</a></li>
                        <li><a href="/galery">Galeri</a></li>
                        <li><a href="http://portal.unimal.ac.id/" target="_black">Portal</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kemahasiswaan</span></a>
                    <ul>
                        <li><a href="/notfont">Drop Down 1</a></li>
                        <li><a href="/notfont">Drop Down 2</a></li>
                        <li><a href="/notfont">Drop Down 3</a></li>
                        <li><a href="/notfont">Drop Down 4</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Penelitian dan Publikasi</span></a>
                    <ul>
                        <li><a href="/daftardosen">Dosen</a></li>
                        <li><a href="/notfont">Penelitian</a></li>
                        <li><a href="/notfont">Pengabdian</a></li>
                        <li><a href="/notfont">Jurnal SISFO</a></li>
                        <li><a href="/notfont">Karya Ilmiah</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Fasilitas</span></a>
                    <ul>
                        <li><a href="/notfont">Drop Down 1</a></li>
                        <li><a href="/notfont">Drop Down 2</a></li>
                        <li><a href="/notfont">Drop Down 3</a></li>
                    </ul>
                </li>
                <li><a href="/berita">Berita</a></li>
                <li class="dropdown"><a href="#"><span>Kuesioner</span></a>
                    <ul>
                        <li><a href="/notfont">Umpan Balik</a></li>
                        <li><a href="/notfont">Penelusuran Alumni</a></li>
                        <li><a href="/notfont">Evaluasi Pengumuman Lulusan</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .navbar -->
        <form class="d-flex" role="search" action="/berita/search" method="GET">
            {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
            <div class="search-box">
                <input type="search" name="search" placeholder="cari Berita...">
                <a class="icon" type="submit" href="#"><i class="bi bi-search"></i></a>
            </div>
            {{-- <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button> --}}
        </form>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
