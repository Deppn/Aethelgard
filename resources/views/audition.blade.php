<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Audisi talent Aethelgard Project. Temukan informasi persyaratan dan proses audisi VTuber Aethelgard.">
    <meta name="theme-color" content="#0a0a0f">

    <title>Audition | Aethelgard Project</title>

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
                <a href="{{ route('merchandise') }}">Merchandise</a>
                <a class="is-active" href="{{ route('audition') }}">Audition</a>
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
        <section class="inner-hero audition-page-hero">
            <div class="inner-grid" aria-hidden="true"></div>
            <div class="inner-glow" aria-hidden="true"></div>

            <div class="container inner-hero-layout">
                <div class="inner-hero-copy reveal">
                    <p class="section-kicker light">AUDITION — NEXT CHAPTER</p>
                    <span class="audition-badge">COMING SOON</span>
                    <h1>Your voice could<br><span>shape the next realm.</span></h1>
                    <p>
                        Aethelgard Project mencari calon virtual entertainer yang memiliki karakter kuat,
                        konsisten, komunikatif, dan terbuka untuk berkembang bersama tim.
                    </p>
                    <div class="inner-actions">
                        <a class="button button-light" href="#requirements">View requirements <span>↓</span></a>
                        <a class="text-link text-link-light" href="{{ route('home') }}">Back to home <span>↗</span></a>
                    </div>
                </div>

                <div class="audition-seal reveal" data-delay="100" aria-hidden="true">
                    <div class="seal-ring seal-ring-one"></div>
                    <div class="seal-ring seal-ring-two"></div>
                    <div class="seal-letter">A</div>
                    <small>NEXT CHAPTER</small>
                </div>
            </div>
        </section>

        <section class="section audition audition-standalone" id="requirements">
            <div class="audition-glow" aria-hidden="true"></div>
            <div class="container audition-layout">
                <div class="audition-copy reveal">
                    <p class="section-kicker light">01 — Basic requirements</p>
                    <h2>Before entering<br>the selection.</h2>
                    <p>
                        Persyaratan ini masih berupa rancangan awal dan dapat berubah sebelum periode audisi resmi dibuka.
                    </p>
                    <a class="button button-light" href="{{ route('home') }}#contact">Get audition updates <span>↗</span></a>
                </div>

                <div class="audition-requirements reveal" data-delay="100">
                    <h3>Basic requirements</h3>
                    <ul>
                        <li><span>01</span> Berusia minimal 18 tahun saat mendaftar.</li>
                        <li><span>02</span> Memiliki perangkat dan koneksi yang memadai untuk streaming.</li>
                        <li><span>03</span> Bersedia mengikuti jadwal, training, dan evaluasi.</li>
                        <li><span>04</span> Mampu menjaga etika, komunikasi, dan reputasi agensi.</li>
                        <li><span>05</span> Memiliki keunikan atau arah konten yang ingin dikembangkan.</li>
                    </ul>
                    <p class="audition-note">Formulir pendaftaran akan ditampilkan saat periode audisi dibuka.</p>
                </div>
            </div>
        </section>

        <section class="section audition-process">
            <div class="container">
                <div class="page-section-heading reveal">
                    <p class="section-kicker">02 — Selection flow</p>
                    <h2>How the gate<br>will be opened.</h2>
                    <p>Alur berikut masih berupa rancangan awal proses audisi Aethelgard Project.</p>
                </div>

                <div class="process-grid">
                    <article class="process-card reveal">
                        <span>01</span>
                        <h3>Registration</h3>
                        <p>Mengisi formulir, data diri, pengalaman, perangkat, dan arah konten yang ingin dikembangkan.</p>
                    </article>
                    <article class="process-card reveal" data-delay="70">
                        <span>02</span>
                        <h3>Document Review</h3>
                        <p>Tim meninjau kelengkapan data, portofolio, rekaman suara, dan kesesuaian dengan kebutuhan generasi.</p>
                    </article>
                    <article class="process-card reveal" data-delay="140">
                        <span>03</span>
                        <h3>Interview</h3>
                        <p>Diskusi mengenai motivasi, komunikasi, komitmen jadwal, serta kesiapan bekerja bersama tim.</p>
                    </article>
                    <article class="process-card reveal" data-delay="210">
                        <span>04</span>
                        <h3>Final Selection</h3>
                        <p>Peserta terpilih memasuki tahap persiapan karakter, training, dan perencanaan debut.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="inner-cta">
            <div class="container inner-cta-content reveal">
                <p class="section-kicker light">AUDITION STATUS</p>
                <h2>The gate is not open yet.</h2>
                <p>Pantau kanal resmi Aethelgard Project untuk mengetahui jadwal audisi berikutnya.</p>
                <a class="button button-gold" href="{{ route('home') }}#contact">Contact Aethelgard <span>↗</span></a>
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
