<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Merchandise resmi Aethelgard Project. Halaman katalog sedang dalam tahap pengembangan.">
    <meta name="theme-color" content="#0a0a0f">

    <title>Merchandise | Aethelgard Project</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
</head>
<body class="inner-page">
    <div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

    <header class="site-header" id="siteHeader">
        <div class="container nav-wrap">
            <a class="brand" href="{{ route('home') }}" aria-label="Aethelgard Project">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 64 64" role="img">
                        <path d="M32 3 56 16v25L32 61 8 41V16L32 3Z" fill="none" stroke="currentColor" stroke-width="2"/>
                        <path d="m32 12 14 36-14-8-14 8 14-36Z" fill="currentColor" opacity=".9"/>
                        <path d="m32 22 5 14-5-3-5 3 5-14Z" fill="#0b0b10"/>
                    </svg>
                </span>
                <span class="brand-copy">
                    <strong>AETHELGARD</strong>
                    <small>VTUBER PROJECT</small>
                </span>
            </a>

            <nav class="desktop-nav" aria-label="Navigasi utama">
                <a href="{{ route('home') }}#about">About</a>
                <a href="{{ route('home') }}#talents">Talents</a>
                <a href="{{ route('home') }}#services">Programs</a>
                <a href="{{ route('home') }}#news">News</a>
                <a class="is-active" href="{{ route('merchandise') }}">Merchandise</a>
                <a href="{{ route('audition') }}">Audition</a>
            </nav>

            <a class="nav-contact" href="{{ route('home') }}#contact">Contact <span>↗</span></a>

            <button class="menu-button" id="menuButton" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="mobileMenu">
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="mobile-menu" id="mobileMenu" aria-hidden="true">
            <nav aria-label="Navigasi mobile">
                <a href="{{ route('home') }}#about">About</a>
                <a href="{{ route('home') }}#talents">Talents</a>
                <a href="{{ route('home') }}#services">Programs</a>
                <a href="{{ route('home') }}#news">News</a>
                <a href="{{ route('merchandise') }}">Merchandise</a>
                <a href="{{ route('audition') }}">Audition</a>
                <a href="{{ route('home') }}#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="inner-hero merchandise-page-hero">
            <div class="inner-grid" aria-hidden="true"></div>
            <div class="inner-glow" aria-hidden="true"></div>

            <div class="container inner-hero-layout">
                <div class="inner-hero-copy reveal">
                    <p class="section-kicker light">OFFICIAL MERCHANDISE</p>
                    <span class="audition-badge">CATALOG IN DEVELOPMENT</span>
                    <h1>Artifacts from<br><span>the Aethelgard realm.</span></h1>
                    <p>
                        Halaman merchandise masih berupa kerangka awal. Produk, gambar, harga,
                        stok, dan tautan pembelian akan ditambahkan setelah katalog siap.
                    </p>
                    <div class="inner-actions">
                        <a class="button button-light" href="#catalog">View catalog skeleton <span>↓</span></a>
                        <a class="text-link text-link-light" href="{{ route('home') }}">Back to home <span>↗</span></a>
                    </div>
                </div>

                <div class="merch-crest reveal" data-delay="100" aria-hidden="true">
                    <div class="merch-box">
                        <span>AG</span>
                        <small>ROYAL SUPPLY</small>
                    </div>
                    <div class="merch-orbit"></div>
                </div>
            </div>
        </section>

        <section class="section merchandise-catalog" id="catalog">
            <div class="container">
                <div class="page-section-heading reveal">
                    <p class="section-kicker">01 — Catalog preview</p>
                    <h2>Merchandise<br>coming soon.</h2>
                    <p>
                        Kartu di bawah masih berupa bone atau skeleton sebagai penanda layout produk.
                    </p>
                </div>

                <div class="merch-toolbar reveal">
                    <div class="merch-filter-group">
                        <button type="button" class="merch-filter is-selected" disabled>All Items</button>
                        <button type="button" class="merch-filter" disabled>Apparel</button>
                        <button type="button" class="merch-filter" disabled>Accessories</button>
                        <button type="button" class="merch-filter" disabled>Digital</button>
                    </div>
                    <span class="merch-count">0 ITEMS AVAILABLE</span>
                </div>

                <div class="merch-grid" aria-label="Kerangka produk merchandise">
                    @for ($item = 1; $item <= 6; $item++)
                        <article class="merch-card merch-card-skeleton reveal" data-delay="{{ ($item - 1) * 40 }}">
                            <div class="merch-image-skeleton">
                                <span class="skeleton-emblem">A</span>
                                <span class="skeleton-badge">COMING SOON</span>
                            </div>
                            <div class="merch-card-body">
                                <div class="skeleton-line skeleton-line-small"></div>
                                <div class="skeleton-line skeleton-line-title"></div>
                                <div class="skeleton-line skeleton-line-medium"></div>
                                <div class="merch-card-footer">
                                    <div class="skeleton-line skeleton-line-price"></div>
                                    <span class="skeleton-button" aria-hidden="true"></span>
                                </div>
                            </div>
                        </article>
                    @endfor
                </div>
            </div>
        </section>

        <section class="section merch-information">
            <div class="container">
                <div class="merch-info-grid">
                    <article class="merch-info-card reveal">
                        <span>01</span>
                        <h3>Official Products</h3>
                        <p>Produk resmi talent dan Aethelgard Project akan ditempatkan di kategori ini.</p>
                    </article>
                    <article class="merch-info-card reveal" data-delay="70">
                        <span>02</span>
                        <h3>Limited Drops</h3>
                        <p>Produk terbatas untuk debut, ulang tahun, anniversary, dan event khusus.</p>
                    </article>
                    <article class="merch-info-card reveal" data-delay="140">
                        <span>03</span>
                        <h3>Shipping Info</h3>
                        <p>Informasi metode pembayaran, pengiriman, dan kebijakan pre-order akan ditambahkan.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inner-cta">
            <div class="container inner-cta-content reveal">
                <p class="section-kicker light">STORE STATUS</p>
                <h2>The royal store is being prepared.</h2>
                <p>Belum ada produk yang dijual. Ikuti kanal resmi untuk pembaruan katalog merchandise.</p>
                <a class="button button-gold" href="{{ route('home') }}#contact">Business inquiry <span>↗</span></a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-top">
            <a class="brand footer-brand" href="{{ route('home') }}">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 64 64">
                        <path d="M32 3 56 16v25L32 61 8 41V16L32 3Z" fill="none" stroke="currentColor" stroke-width="2"/>
                        <path d="m32 12 14 36-14-8-14 8 14-36Z" fill="currentColor" opacity=".9"/>
                        <path d="m32 22 5 14-5-3-5 3 5-14Z" fill="#0b0b10"/>
                    </svg>
                </span>
                <span class="brand-copy">
                    <strong>AETHELGARD</strong>
                    <small>VTUBER PROJECT</small>
                </span>
            </a>

            <div class="footer-links">
                <div>
                    <small>EXPLORE</small>
                    <a href="{{ route('home') }}#about">About</a>
                    <a href="{{ route('home') }}#talents">Talents</a>
                    <a href="{{ route('home') }}#services">Programs</a>
                </div>
                <div>
                    <small>INFORMATION</small>
                    <a href="{{ route('home') }}#news">News</a>
                    <a href="{{ route('merchandise') }}">Merchandise</a>
                    <a href="{{ route('audition') }}">Audition</a>
                    <a href="{{ route('home') }}#contact">Contact</a>
                </div>
                <div>
                    <small>SOCIAL</small>
                    <a href="#">X / Twitter ↗</a>
                    <a href="#">YouTube ↗</a>
                    <a href="#">Instagram ↗</a>
                </div>
            </div>
        </div>

        <div class="container footer-bottom">
            <p>© {{ date('Y') }} Aethelgard Project. All rights reserved.</p>
            <p class="footer-disclaimer">Aethelgard Project adalah project agensi VTuber independen.</p>
            <a href="#">Back to top ↑</a>
        </div>
    </footer>

    <script src="{{ asset('js/landing.js') }}" defer></script>
</body>
</html>
