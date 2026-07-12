<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aethelgard Project adalah agensi VTuber independen yang membangun talent, cerita, dan komunitas virtual.">
    <meta name="theme-color" content="#0a0a0f">

    <title>Aethelgard Project | VTuber Agency</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
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
        <section class="hero" id="home">
            <div class="hero-grid" aria-hidden="true"></div>
            <div class="hero-glow hero-glow-one" aria-hidden="true"></div>
            <div class="hero-glow hero-glow-two" aria-hidden="true"></div>

            <div class="container hero-layout">
                <div class="hero-copy reveal">
                    <p class="eyebrow"><span></span> Independent VTuber Agency</p>
                    <h1>
                        Where Talents<br>
                        <span>Become Legends.</span>
                    </h1>
                    <p class="hero-description">
                        Aethelgard Project adalah agensi VTuber independen yang mendampingi talent untuk membangun karakter, konten, dan komunitas yang dapat tumbuh bersama.
                    </p>
                    <div class="hero-actions">
                        <a class="button button-gold" href="#talents">Meet our talents <span>↗</span></a>
                        <a class="text-link" href="{{ route('audition') }}">Join the realm <span>↗</span></a>
                    </div>

                    <div class="hero-stat-list" aria-label="Informasi agensi">
                        <div>
                            <strong>2026</strong>
                            <span>Established</span>
                        </div>
                        <div>
                            <strong>IND</strong>
                            <span>Based in Indonesia</span>
                        </div>
                        <div>
                            <strong>∞</strong>
                            <span>Stories to create</span>
                        </div>
                    </div>
                </div>

                <div class="hero-art reveal" data-delay="120">
                    <div class="art-label art-label-top">AETHELGARD / FIRST CHAPTER</div>
                    <div class="crest-card">
                        <svg class="crest-visual" viewBox="0 0 760 900" role="img" aria-label="Lambang fantasi Aethelgard Project">
                            <defs>
                                <radialGradient id="realmGlow" cx="50%" cy="45%" r="58%">
                                    <stop offset="0" stop-color="#f2d38a" stop-opacity=".95"/>
                                    <stop offset=".32" stop-color="#b9924e" stop-opacity=".42"/>
                                    <stop offset="1" stop-color="#15131d" stop-opacity="0"/>
                                </radialGradient>
                                <linearGradient id="goldLine" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0" stop-color="#fff0bc"/>
                                    <stop offset=".5" stop-color="#c69b52"/>
                                    <stop offset="1" stop-color="#74502b"/>
                                </linearGradient>
                                <filter id="softGlow">
                                    <feGaussianBlur stdDeviation="18"/>
                                </filter>
                            </defs>
                            <rect width="760" height="900" rx="34" fill="#0d0c13"/>
                            <circle cx="380" cy="410" r="310" fill="url(#realmGlow)" opacity=".34" filter="url(#softGlow)"/>
                            <circle cx="380" cy="410" r="250" fill="none" stroke="#d1a95f" stroke-width="2" opacity=".55"/>
                            <circle cx="380" cy="410" r="194" fill="none" stroke="#d1a95f" stroke-width="1" opacity=".3"/>
                            <path d="M380 128 585 245v242L380 682 175 487V245L380 128Z" fill="none" stroke="url(#goldLine)" stroke-width="4"/>
                            <path d="m380 190 126 321-126-73-126 73 126-321Z" fill="url(#goldLine)" opacity=".95"/>
                            <path d="m380 282 43 111-43-25-43 25 43-111Z" fill="#101019"/>
                            <path d="M232 260 108 185M528 260l124-75M232 530 100 655M528 530l132 125" stroke="#d1a95f" stroke-width="2" opacity=".45"/>
                            <path d="M380 96V42M380 778v74M110 410H42M718 410h-68" stroke="#d1a95f" stroke-width="2" opacity=".55"/>
                            <text x="380" y="760" text-anchor="middle" fill="#ead59e" font-size="38" font-family="Cinzel" letter-spacing="8">AETHELGARD</text>
                            <text x="380" y="802" text-anchor="middle" fill="#8f8779" font-size="14" font-family="Manrope" letter-spacing="7">VIRTUAL TALENT PROJECT</text>
                        </svg>
                    </div>

                    <div class="floating-card floating-card-one">
                        <small>ACTIVE TALENT</small>
                        <strong>Nathan Gray</strong>
                    </div>
                    <div class="floating-card floating-card-two">
                        <span class="live-dot"></span>
                        <small>THE REALM IS LIVE</small>
                    </div>
                    <div class="art-label art-label-bottom">SCROLL TO ENTER THE REALM <span>↓</span></div>
                </div>
            </div>

            <div class="marquee" aria-label="Fokus Aethelgard Project">
                <div class="marquee-track">
                    <span>VTUBER MANAGEMENT</span><i>✦</i>
                    <span>LIVE ENTERTAINMENT</span><i>✦</i>
                    <span>CHARACTER DEVELOPMENT</span><i>✦</i>
                    <span>COMMUNITY BUILDING</span><i>✦</i>
                    <span>VTUBER MANAGEMENT</span><i>✦</i>
                    <span>LIVE ENTERTAINMENT</span><i>✦</i>
                    <span>CHARACTER DEVELOPMENT</span><i>✦</i>
                    <span>COMMUNITY BUILDING</span><i>✦</i>
                </div>
            </div>
        </section>

        <section class="section about" id="about">
            <div class="container">
                <div class="section-heading reveal">
                    <div>
                        <p class="section-kicker">01 — About the realm</p>
                        <h2>A stage for every<br>unwritten legend.</h2>
                    </div>
                    <p class="section-lead">
                        Kami percaya talent terbaik tumbuh ketika memiliki identitas yang kuat, ruang aman untuk berkembang, serta komunitas yang menghargai prosesnya.
                    </p>
                </div>

                <div class="about-grid">
                    <article class="about-visual reveal">
                        <div class="visual-grid" aria-hidden="true"></div>
                        <div class="visual-rune" aria-hidden="true">A</div>
                        <p>Every voice deserves a world of its own.</p>
                        <span>INDEPENDENT / TALENT-FIRST / COMMUNITY-DRIVEN</span>
                    </article>

                    <div class="about-copy reveal" data-delay="100">
                        <p>
                            Aethelgard Project hadir sebagai rumah kreatif bagi VTuber untuk mengembangkan karakter, kemampuan siaran, identitas visual, dan hubungan jangka panjang dengan komunitas.
                        </p>
                        <p>
                            Kami menangani proses kreatif dan operasional di balik layar agar talent dapat lebih fokus menghadirkan hiburan yang autentik, konsisten, dan berkesan.
                        </p>
                        <a class="arrow-link" href="#services">Explore our programs <span>↗</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section values">
            <div class="container">
                <div class="values-title reveal">
                    <p class="section-kicker light">02 — Our principles</p>
                    <h2>Built around talent.<br>Strengthened by community.</h2>
                </div>

                <div class="value-list">
                    <article class="value-item reveal">
                        <span>01</span>
                        <div>
                            <p class="value-label">TALENT FIRST</p>
                            <h3>Grow without losing who you are.</h3>
                            <p>Pengembangan dilakukan berdasarkan karakter, kemampuan, dan tujuan setiap talent—bukan dengan memaksakan satu formula untuk semua.</p>
                        </div>
                    </article>

                    <article class="value-item reveal" data-delay="70">
                        <span>02</span>
                        <div>
                            <p class="value-label">CREATE WITH PURPOSE</p>
                            <h3>Every stream should leave a story.</h3>
                            <p>Konten dibangun dengan arah yang jelas agar setiap siaran, video, dan event memperkuat identitas talent.</p>
                        </div>
                    </article>

                    <article class="value-item reveal" data-delay="140">
                        <span>03</span>
                        <div>
                            <p class="value-label">COMMUNITY MATTERS</p>
                            <h3>A legend is never built alone.</h3>
                            <p>Kami menumbuhkan komunitas yang sehat, aktif, dan terlibat sebagai bagian penting dari perjalanan setiap talent.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section talents" id="talents">
            <div class="container">
                <div class="talents-head reveal">
                    <div>
                        <p class="section-kicker">03 — Our talents</p>
                        <h2>Meet the voices<br>of Aethelgard.</h2>
                    </div>
                    <p>
                        Setiap talent membawa dunia, cerita, dan gaya hiburan yang berbeda. Kenali mereka dan ikuti perjalanan legendanya.
                    </p>
                </div>

                <div class="talent-grid">
                    <article class="talent-card talent-card-purple reveal">
                        <div class="talent-visual">
                            <div class="talent-halo" aria-hidden="true"></div>
                            <div class="talent-emblem" aria-hidden="true">N</div>
                            <span class="talent-generation">FIRST CHAPTER</span>
                            <span class="talent-status"><i></i> ACTIVE</span>
                        </div>
                        <div class="talent-info">
                            <p class="talent-role">CHATTING · ENTERTAINMENT</p>
                            <h3>Reyna Porphyra</h3>
                            <p>Pengendali mimpi yang mampu menyembuhkan luka batin, namun kini menggunakan kekuatannya untuk menghancurkan kerajaan yang mengkhianatinya.</p>
                            <div class="talent-links">
                                <a href="https://www.youtube.com/@reynaporphyra" aria-label="YouTube Reyna Porphyra">YouTube ↗</a>
                                <a href="https://x.com/Reyna_Porphyra" aria-label="X Reyna Porphyra">X / Twitter ↗</a>
                            </div>
                        </div>
                    </article>

                    <article class="talent-card talent-card-gold reveal" data-delay="100">
                        <div class="talent-visual">
                            <div class="talent-halo" aria-hidden="true"></div>
                            <div class="talent-emblem" aria-hidden="true">Z</div>
                            <span class="talent-generation">FIRST CHAPTER</span>
                            <span class="talent-status"><i></i> ACTIVE</span>
                        </div>
                        <div class="talent-info">
                            <p class="talent-role">VARIETY · ESPORTS · GAME</p>
                            <h3>Nathan Gray</h3>
                            <p>Mantan ksatria elit kerajaan yang meninggalkan mahkota setelah mengetahui kebenaran, lalu berbalik melawan sistem yang membentuknya.</p>
                            <div class="talent-links">
                                <a href="https://www.youtube.com/@NathanGrayCh" aria-label="YouTube Nathan Gray">YouTube ↗</a>
                                <a href="https://x.com/NathanGrayCh" aria-label="X Nathan Gray">X / Twitter ↗</a>
                            </div>
                        </div>
                    </article>

                    <article class="talent-card talent-card-open reveal" data-delay="180">
                        <div class="talent-visual">
                            <div class="open-rings" aria-hidden="true"></div>
                            <div class="talent-emblem" aria-hidden="true">?</div>
                            <span class="talent-generation">NEXT CHAPTER</span>
                            <span class="talent-status status-soon">COMING SOON</span>
                        </div>
                        <div class="talent-info">
                            <p class="talent-role">VARIETY · CHATTING · ENTERTAINMENT</p>
                            <h3>Alvin Miles</h3>
                            <p>Penyintas perang yang tumbuh sebagai pengembara, lalu menjadi prajurit untuk mencari kebenaran dan melindungi mereka yang bernasib sama.</p>
                            <div class="talent-links">
                                <a href="#" aria-label="YouTube Nathan Gray">YouTube ↗</a>
                                <a href="#" aria-label="X Nathan Gray">X / Twitter ↗</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section services" id="services">
            <div class="container">
                <div class="services-head reveal">
                    <p class="section-kicker">04 — Agency programs</p>
                    <h2>Everything behind<br>a memorable broadcast.</h2>
                </div>

                <div class="service-grid">
                    <article class="service-card reveal">
                        <div class="service-number">01</div>
                        <div class="service-icon" aria-hidden="true">♜</div>
                        <h3>Talent<br>Management</h3>
                        <p>Pendampingan jadwal, evaluasi performa, pengembangan skill, target konten, dan koordinasi operasional talent.</p>
                    </article>

                    <article class="service-card featured reveal" data-delay="70">
                        <div class="service-number">02</div>
                        <div class="service-icon" aria-hidden="true">✦</div>
                        <h3>Creative<br>Direction</h3>
                        <p>Pengembangan lore, identitas karakter, desain campaign, konten promosi, konsep event, dan komunikasi visual.</p>
                    </article>

                    <article class="service-card reveal" data-delay="140">
                        <div class="service-number">03</div>
                        <div class="service-icon" aria-hidden="true">◉</div>
                        <h3>Live & Event<br>Production</h3>
                        <p>Dukungan teknis streaming, rundown, overlay, moderasi, kolaborasi, hingga produksi acara komunitas.</p>
                    </article>

                    <article class="service-card reveal" data-delay="210">
                        <div class="service-number">04</div>
                        <div class="service-icon" aria-hidden="true">◇</div>
                        <h3>Brand<br>Partnership</h3>
                        <p>Kolaborasi kampanye, sponsor, event, media partnership, dan aktivasi kreatif bersama talent Aethelgard.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section news" id="news">
            <div class="container">
                <div class="news-layout">
                    <div class="news-intro reveal">
                        <p class="section-kicker light">05 — Latest news</p>
                        <h2>Messages from<br>the royal archive.</h2>
                        <p>Pengumuman talent, jadwal event, kolaborasi, serta perkembangan terbaru Aethelgard Project.</p>
                    </div>

                    <div class="news-list">
                        <a class="news-item reveal" href="#">
                            <time datetime="2026-07-12">2026.07.12</time>
                            <span class="news-tag">AGENCY</span>
                            <h3>Website resmi Aethelgard Project memasuki tahap pengembangan.</h3>
                            <span class="news-arrow">↗</span>
                        </a>
                        <a class="news-item reveal" href="#">
                            <time datetime="2026-07-10">2026.07.10</time>
                            <span class="news-tag">TALENT</span>
                            <h3>Program evaluasi dan training streaming untuk talent dimulai.</h3>
                            <span class="news-arrow">↗</span>
                        </a>
                        <a class="news-item reveal" href="#">
                            <time datetime="2026-07-01">2026.07.01</time>
                            <span class="news-tag">EVENT</span>
                            <h3>Aethelgard Project mempersiapkan produksi konten dan event esports.</h3>
                            <span class="news-arrow">↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section company" id="company">
            <div class="container">
                <div class="company-head reveal">
                    <p class="section-kicker">06 — Company</p>
                    <h2>A small team building<br>a larger virtual world.</h2>
                </div>

                <div class="company-table reveal">
                    <div><span>Name</span><strong>Aethelgard Project</strong></div>
                    <div><span>Category</span><strong>Independent VTuber Agency</strong></div>
                    <div><span>Established</span><strong>2026</strong></div>
                    <div><span>Base</span><strong>Indonesia</strong></div>
                    <div><span>Focus</span><strong>Talent Management, Content, Events & Partnership</strong></div>
                    <div><span>Business Inquiry</span><strong>hello@aethelgardproject.com</strong></div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-glow" aria-hidden="true"></div>
            <div class="container contact-content reveal">
                <p class="section-kicker light">07 — Contact</p>
                <h2>Open the gate.<br>Start a new story.</h2>
                <p>Untuk kerja sama brand, event, media, kolaborasi talent, atau informasi audisi.</p>
                <a class="contact-email" href="mailto:hello@aethelgardproject.com">
                    <span>hello@aethelgardproject.com</span>
                    <i>↗</i>
                </a>

                <div class="contact-socials">
                    <a href="#">X / Twitter ↗</a>
                    <a href="#">YouTube ↗</a>
                    <a href="#">Instagram ↗</a>
                    <a href="#">Discord ↗</a>
                </div>
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
            <a href="{{ route('home') }}">Back to top ↑</a>
        </div>
    </footer>

    <script src="{{ asset('js/landing.js') }}" defer></script>
</body>
</html>
