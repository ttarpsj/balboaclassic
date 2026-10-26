<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FF2D8D">
    <title>Balboa Track Classic</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=archivo:400,500,600,700,800,900" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#top" aria-label="Balboa Track Classic home">BALBOA<span>TC</span></a>
        <nav aria-label="Main navigation"><a class="active" href="#meet">Meet</a><a href="#schedule">Schedule</a><a href="#athletes">Athletes</a><a href="#visit">Visit</a></nav>
        <a class="header-action" href="#schedule">Watch live <span aria-hidden="true">↗</span></a>
    </header>
    <main id="top">
        <section class="hero" id="meet">
            <div class="hero-meta"><p>Newport Beach, California</p><p>June 21–22 · 2025</p></div>
            <div class="hero-title" aria-label="Balboa Track Classic"><span>BALBOA</span><span>TRACK</span><span>CLASSIC</span></div>
            <div class="hero-bottom"><p>Where speed meets the coast.<br>Two days of world-class athletics.</p><a class="button button-dark" href="#schedule">See the meet <span aria-hidden="true">↓</span></a></div>
            <div class="sun-mark" aria-hidden="true"></div>
        </section>
        <section class="marquee" aria-label="Event highlights"><div>WORLD CLASS ATHLETICS <i>✦</i> PACIFIC SPEED <i>✦</i> BALBOA TRACK CLASSIC <i>✦</i> WORLD CLASS ATHLETICS <i>✦</i></div></section>
        <section class="intro section-pad">
            <div class="section-kicker">01 / The meet</div>
            <div class="intro-copy"><p class="eyebrow">AT THE EDGE OF THE PACIFIC</p><h1>A NEW<br>STANDARD<br>OF <em>SPEED.</em></h1><p class="lede">The Balboa Track Classic brings the world’s fastest athletes to the coast for a weekend built around electric competition, sun-soaked energy, and the pure joy of the sport.</p></div>
        </section>
        <section class="feature-image" aria-label="Athlete sprinting on a track"><img src="https://images.unsplash.com/photo-1530137073520-7e650d0f0882?auto=format&fit=crop&w=1800&q=85" alt="Athlete poised at the start of a track race"><div class="image-caption">BALBOA PENINSULA / 33°36' N, 117°55' W</div></section>
        <section class="schedule section-pad" id="schedule">
            <div class="schedule-heading"><div class="section-kicker">02 / On the track</div><h2>THE<br>PROGRAM</h2><p>Every session is one you’ll want to be there for.</p></div>
            <div class="event-list"><div class="event-row event-row-head"><span>Time</span><span>Event</span><span>Round</span></div><div class="event-row"><time>4:30 PM</time><strong>Women’s 100m</strong><span>Heats</span></div><div class="event-row"><time>5:10 PM</time><strong>Men’s 1500m</strong><span>Final</span></div><div class="event-row featured"><time>6:00 PM</time><strong>Women’s 400m</strong><span>Final <b>Featured</b></span></div><div class="event-row"><time>6:35 PM</time><strong>Men’s 100m</strong><span>Final</span></div><div class="event-row"><time>7:15 PM</time><strong>Women’s 800m</strong><span>Final</span></div><div class="event-row"><time>7:50 PM</time><strong>Men’s 4 × 100m</strong><span>Final</span></div></div>
            <a class="button button-dark program-link" href="#full-schedule">Full schedule <span aria-hidden="true">↗</span></a>
        </section>
        <section class="athletes section-pad" id="athletes">
            <div class="athletes-head"><div class="section-kicker">03 / In the lanes</div><h2>THE<br>ATHLETES</h2><p>Global names. Local legends. One extraordinary start line.</p></div>
            <div class="athlete-grid"><article class="athlete-card tall"><img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?auto=format&fit=crop&w=1000&q=85" alt="Runner training on a track"><div class="athlete-info"><span>USA / 400m</span><h3>AVA<br>REED</h3></div></article><article class="athlete-card"><img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?auto=format&fit=crop&w=1000&q=85" alt="Athlete in running gear"><div class="athlete-info"><span>JAM / 100m</span><h3>MICAH<br>JAMES</h3></div></article><article class="athlete-card"><img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?auto=format&fit=crop&w=1000&q=85" alt="Runner preparing for competition"><div class="athlete-info"><span>USA / 1500m</span><h3>NOAH<br>KIM</h3></div></article></div>
        </section>
        <section class="visit section-pad" id="visit"><div class="visit-copy"><div class="section-kicker">04 / Make a weekend of it</div><h2>TRACK<br>SIDE,<br>BEACH<br>SIDE.</h2><p>From first gun to golden hour, the action lives right here. Bring your people, find your place in the stands, and stay for the coast.</p><a class="button button-yellow" href="#tickets">Get tickets <span aria-hidden="true">↗</span></a></div><div class="visit-image"><img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=85" alt="Sunlit Southern California coastline"></div></section>
    </main>
    <footer><div class="footer-top"><p>June 21–22, 2025</p><a href="#top">Back to top ↑</a><p>Newport Beach, CA</p></div><div class="footer-wordmark">BALBOA<br>TRACK CLASSIC</div><div class="footer-bottom"><span>© 2025 Balboa Track Classic</span><span>Instagram &nbsp; / &nbsp; YouTube &nbsp; / &nbsp; Contact</span></div></footer>
</body>
</html>
