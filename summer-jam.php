<?php
$pageTitle = 'Summer Jam | De Pasto — 4 september 2026';
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="Summer Jam bij De Pasto op 4 september 2026 van 20:00 tot 00:00. 16+. Presale tickets zijn nu beschikbaar voor €20.">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <link rel="canonical" href="https://www.de-pasto.be/summer-jam.php">
  <meta name="theme-color" content="#70a840">
  <link rel="icon" type="image/x-icon" href="/favicon.ico?v=2">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=2">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=2">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=2">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=2">
  <meta property="og:title" content="Summer Jam | De Pasto — 4 september 2026">
  <meta property="og:description" content="Afsluiting van de zomer in De Pasto. 4 september · 20:00–00:00 · 16+ · Presale tickets nu voor €20.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.de-pasto.be/summer-jam.php">
  <meta property="og:image" content="https://www.de-pasto.be/assets/img/summer-jam/dj-frank.webp">
  <meta property="og:locale" content="nl_BE">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/summer-jam.css?v=20260826-4">
  <style>
    .sj-artist-photo{margin:0;position:relative;overflow:hidden;box-shadow:10px 10px 0 rgba(23,63,46,.18)}
    .sj-artist-photo img{display:block;width:100%;aspect-ratio:4/5;object-fit:cover;object-position:center}
    .sj-artist--headliner .sj-artist-photo{box-shadow:10px 10px 0 rgba(243,214,64,.35)}
    .sj-artist-copy h3{margin-bottom:18px}
    .sj-artist-copy .sj-artist-tag{margin-top:0}
    .sj-age-badge{display:inline-flex;align-items:center;justify-content:center;margin-top:24px;padding:10px 16px;border:3px solid currentColor;font-family:'Archivo Black',sans-serif;font-size:1.25rem;line-height:1;transform:rotate(-2deg)}

    /* Presale ticket popup */
    .sj-earlybird{position:fixed;inset:0;z-index:9999;display:grid;place-items:center;padding:20px;background:rgba(10,35,25,.68);backdrop-filter:blur(7px);-webkit-backdrop-filter:blur(7px);opacity:0;visibility:hidden;transition:opacity .28s ease,visibility .28s ease}
    .sj-earlybird.is-visible{opacity:1;visibility:visible}
    .sj-earlybird-card{position:relative;width:min(620px,100%);overflow:hidden;background:linear-gradient(145deg,#e3e833 0%,#90c63d 40%,#367642 100%);color:#173f2e;padding:clamp(28px,5vw,52px);box-shadow:18px 18px 0 rgba(20,60,49,.55);transform:translateY(24px) scale(.97);transition:transform .32s cubic-bezier(.2,.75,.3,1)}
    .sj-earlybird.is-visible .sj-earlybird-card{transform:translateY(0) scale(1)}
    .sj-earlybird-card:before{content:'SUMMER JAM';position:absolute;right:-.08em;top:.12em;writing-mode:vertical-rl;font-family:'Archivo Black',sans-serif;font-size:clamp(4.5rem,13vw,8rem);line-height:.7;color:transparent;-webkit-text-stroke:2px rgba(23,63,46,.13);pointer-events:none}
    .sj-earlybird-close{position:absolute;z-index:2;top:14px;right:14px;width:42px;height:42px;border:2px solid #173f2e;background:rgba(247,243,232,.18);color:#173f2e;font-size:1.55rem;line-height:1;cursor:pointer;font-family:Arial,sans-serif}
    .sj-earlybird-kicker{position:relative;z-index:1;margin:0 0 14px;font-size:.72rem;font-weight:900;letter-spacing:.18em}
    .sj-earlybird h2{position:relative;z-index:1;margin:0;font-family:'Archivo Black',sans-serif;font-size:clamp(3.5rem,10vw,7.2rem);line-height:.76;letter-spacing:-.065em;text-transform:uppercase}
    .sj-earlybird h2 span{display:block;color:#f7f3e8;-webkit-text-stroke:1px #173f2e;text-shadow:5px 5px 0 rgba(23,63,46,.16)}
    .sj-earlybird-copy{position:relative;z-index:1;max-width:430px;margin:26px 0 0;font-size:clamp(1rem,2vw,1.15rem);line-height:1.55;font-weight:600}
    .sj-earlybird-meta{position:relative;z-index:1;display:flex;gap:10px;flex-wrap:wrap;margin:20px 0 28px}
    .sj-earlybird-meta span{border:2px solid #173f2e;padding:7px 10px;font-size:.72rem;font-weight:900;letter-spacing:.1em}
    .sj-earlybird-actions{position:relative;z-index:1;display:flex;align-items:center;gap:18px;flex-wrap:wrap}
    .sj-earlybird-btn{display:inline-block;background:#173f2e;color:#f7f3e8;text-decoration:none;padding:16px 22px;font-weight:900;letter-spacing:.07em;box-shadow:7px 7px 0 #f3d640;transition:transform .18s ease,box-shadow .18s ease}
    .sj-earlybird-btn:hover{transform:translate(3px,3px);box-shadow:4px 4px 0 #f3d640}
    .sj-earlybird-later{border:0;background:transparent;color:#173f2e;text-decoration:underline;text-underline-offset:4px;font-weight:800;cursor:pointer;padding:8px 0}
    .sj-earlybird-note{position:relative;z-index:1;margin:22px 0 0;font-size:.7rem;line-height:1.4;font-weight:700;opacity:.78}
    body.sj-popup-open{overflow:hidden}

    @media(max-width:900px){
      .sj-artist{grid-template-columns:120px minmax(180px,.65fr) 1fr}
    }
    @media(max-width:720px){
      .sj-artist,.sj-artist--headliner{grid-template-columns:1fr!important;gap:22px}
      .sj-artist-photo{max-width:520px}
      .sj-artist-role{padding-top:0}
    }
    @media(max-width:520px){
      .sj-earlybird{padding:12px}
      .sj-earlybird-card{padding:34px 24px 28px;box-shadow:9px 9px 0 rgba(20,60,49,.55)}
      .sj-earlybird-card:before{opacity:.55}
      .sj-earlybird-actions{align-items:stretch;flex-direction:column}
      .sj-earlybird-btn{text-align:center;width:100%}
      .sj-earlybird-later{text-align:center}
    }
  </style>
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Event",
    "name":"De Pasto Summer Jam",
    "startDate":"2026-09-04T20:00:00+02:00",
    "endDate":"2026-09-05T00:00:00+02:00",
    "eventAttendanceMode":"https://schema.org/OfflineEventAttendanceMode",
    "eventStatus":"https://schema.org/EventScheduled",
    "location":{"@type":"Place","name":"De Pasto","address":{"@type":"PostalAddress","streetAddress":"Dorpsstraat 45","postalCode":"2950","addressLocality":"Kapellen","addressCountry":"BE"}},
    "image":["https://www.de-pasto.be/assets/img/summer-jam/dj-frank.webp","https://www.de-pasto.be/assets/img/summer-jam/sydney-ayven.webp","https://www.de-pasto.be/assets/img/summer-jam/dj-lauwers.webp"],
    "description":"Afsluiting van de zomer in De Pasto met DJ Lauwers, DJ F.R.A.N.K. en Sydney Ayven. Toegang vanaf 16 jaar. Presale tickets zijn nu beschikbaar voor €20.",
    "typicalAgeRange":"16-",
    "organizer":{"@type":"Organization","name":"De Pasto","url":"https://www.de-pasto.be/"}
  }
  </script>
</head>
<body>
  <div class="sj-earlybird" id="earlybird-popup" role="dialog" aria-modal="true" aria-labelledby="earlybird-title" aria-hidden="true">
    <div class="sj-earlybird-card">
      <button class="sj-earlybird-close" type="button" aria-label="Pop-up sluiten" data-close-earlybird>×</button>
      <p class="sj-earlybird-kicker">PRESALE · SUMMER JAM</p>
      <h2 id="earlybird-title">PRE<br><span>SALE €20.</span></h2>
      <p class="sj-earlybird-copy">De zomer afsluiten met DJ Lauwers, DJ F.R.A.N.K. en Sydney Ayven? <strong>Scoor nu je presale ticket voor €20</strong> zolang de presale beschikbaar is.</p>
      <div class="sj-earlybird-meta">
        <span>€20 PRESALE</span>
        <span>04.09.26</span>
        <span>20:00—00:00</span>
        <span>16+</span>
      </div>
      <div class="sj-earlybird-actions">
        <a class="sj-earlybird-btn" href="#tickets" data-earlybird-ticket>KOOP PRESALE €20 →</a>
        <button class="sj-earlybird-later" type="button" data-close-earlybird>Ik kijk nog even rond</button>
      </div>
      <p class="sj-earlybird-note">Presale aan €20 is tijdelijk beschikbaar en kan stoppen zodra de beschikbare voorraad is bereikt.</p>
    </div>
  </div>

  <header class="sj-nav">
    <a class="sj-brand" href="index.php" aria-label="Terug naar De Pasto">DE PASTO</a>
    <div class="sj-nav-actions">
      <span>04.09.26 · 16+</span>
      <a href="#line-up">LINE-UP</a>
      <a href="#tickets">TICKETS</a>
    </div>
  </header>

  <main>
    <section class="sj-hero" aria-labelledby="sj-title">
      <div class="grain" aria-hidden="true"></div>
      <div class="sj-hero-copy">
        <p class="sj-kicker">DE PASTO PRESENTEERT</p>
        <h1 id="sj-title"><span class="date">4 SEP</span><span class="outline">SUMMER JAM</span></h1>
        <p class="sj-intro">We sluiten de zomer af zoals het hoort: samen in De Pasto. Met DJ Lauwers als opener, DJ F.R.A.N.K. als hoofdartiest en Sydney Ayven als afsluiter. Tickets zijn nu te koop.</p>
        <div class="sj-age-badge">16+</div>
        <div class="sj-actions">
          <a class="sj-button" href="#tickets">KOOP TICKETS</a>
          <a class="sj-text-link" href="index.php">NAAR DE PASTO →</a>
        </div>
      </div>
      <div class="sj-sideword" aria-hidden="true">SUMMER JAM</div>
      <div class="sj-event-meta">
        <div><small>DATUM</small><strong>4 SEPTEMBER</strong></div>
        <div><small>UREN</small><strong>20:00—00:00</strong></div>
        <div><small>LEEFTIJD</small><strong>16+</strong></div>
        <div><small>LOCATIE</small><strong>DORPSSTRAAT 45<br>2950 KAPELLEN</strong></div>
      </div>
    </section>

    <section class="sj-info">
      <div class="sj-info-title">
        <p>AFSLUITING VAN DE ZOMER</p>
        <h2>SUMMER<br>JAM.</h2>
      </div>
      <div class="sj-info-copy">
        <p class="big">Eén laatste zomeravond in De Pasto.</p>
        <p>Op vrijdag 4 september sluiten we samen de zomer af met Summer Jam. Van 20:00 tot 00:00 maken we van De Pasto een zomerse ontmoetingsplek met muziek, sfeer en een volle avond in het hart van Kapellen.</p>
        <p>Van de eerste plaat tot de laatste: drie DJ’s bouwen de avond op van 20:00 tot 00:00. DJ Lauwers opent, DJ F.R.A.N.K. neemt de hoofdset voor zijn rekening en Sydney Ayven sluit Summer Jam af.</p>
        <p><strong>Summer Jam is toegankelijk vanaf 16 jaar.</strong></p>
        <div class="sj-stamp">04 / 09 / 26<br><span>KAPELLEN · 16+</span></div>
      </div>
    </section>

    <section class="sj-lineup" id="line-up" aria-labelledby="lineup-title">
      <div class="sj-lineup-heading">
        <p>DE LINE-UP</p>
        <h2 id="lineup-title">THREE DJS.<br>ONE LAST<br>SUMMER NIGHT.</h2>
        <p class="sj-lineup-intro">Van lokaal talent tot een Belgische dancelegende. Summer Jam bouwt de avond in drie hoofdstukken op.</p>
      </div>
      <div class="sj-artist-list">
        <article class="sj-artist">
          <div class="sj-artist-role">20:00 · OPENER</div>
          <figure class="sj-artist-photo">
            <img src="assets/img/summer-jam/dj-lauwers.webp" alt="DJ Lauwers — opener van Summer Jam" loading="lazy" width="360" height="450">
          </figure>
          <div class="sj-artist-copy">
            <h3>DJ<br>LAUWERS</h3>
            <p class="sj-artist-tag">BEKEND VAN TURBO</p>
            <p>DJ Lauwers trapt Summer Jam af. Bekend van discotheek <strong>Turbo</strong> zet hij vanaf 20:00 de eerste lijnen uit voor een avond die alleen maar groter wordt.</p>
          </div>
        </article>

        <article class="sj-artist sj-artist--headliner">
          <div class="sj-artist-role">HEADLINER</div>
          <figure class="sj-artist-photo">
            <img src="assets/img/summer-jam/dj-frank.webp" alt="DJ F.R.A.N.K. — headliner van Summer Jam" loading="lazy" width="360" height="450">
          </figure>
          <div class="sj-artist-copy">
            <h3>DJ<br>F.R.A.N.K.</h3>
            <p class="sj-artist-tag">BELGIAN DANCE ICON</p>
            <p>Frank Van Herwegen draait al sinds 1986 en groeide uit tot een vaste waarde in het Belgische nachtleven. Hij was jarenlang resident in onder meer Carré, Dixies en Highstreet, stond op grote festivals en events en is ook bekend van Qmusic.</p>
            <p>En er is een perfecte link met deze avond: DJ F.R.A.N.K. was als remixer verbonden aan <strong>The Underdog Project</strong> en dus aan de klassieker <strong>“Summer Jam”</strong>. Daarnaast ken je hem van hits als <strong>“Discotex! (Yah!)”</strong> en <strong>“From the Left to the Right”</strong>.</p>
          </div>
        </article>

        <article class="sj-artist">
          <div class="sj-artist-role">CLOSING SET</div>
          <figure class="sj-artist-photo">
            <img src="assets/img/summer-jam/sydney-ayven.webp" alt="Sydney Ayven — closing set van Summer Jam" loading="lazy" width="360" height="450">
          </figure>
          <div class="sj-artist-copy">
            <h3>SYDNEY<br>AYVEN</h3>
            <p class="sj-artist-tag">ENERGETIC OPEN FORMAT</p>
            <p>De afsluiter van Summer Jam is Sydney Ayven: een Belgische open-format DJ met een energieke, dynamische stijl en sterke crowd interaction.</p>
            <p>Hij stond onder meer op <strong>Tomorrowland</strong>, The Day Before Tomorrow, Sunrise Festival en Sunset Festival, speelde in clubs als IKON, The Villa en Ampere en was te horen op Qmusic en TOPradio. Een set gebouwd om de laatste zomeravond helemaal af te maken.</p>
          </div>
        </article>
      </div>
    </section>

    <section class="sj-details" aria-labelledby="details-title">
      <div class="sj-details-heading">
        <p>PRAKTISCH</p>
        <h2 id="details-title">ALLES WAT<br>JE MOET WETEN.</h2>
      </div>
      <div class="sj-detail-grid">
        <article class="sj-detail-card sj-detail-card--accent">
          <span class="sj-card-number">01</span>
          <h3>WANNEER?</h3>
          <p><strong>Vrijdag 4 september 2026</strong><br>20:00 — 00:00</p>
          <p>Om middernacht stopt de muziek en sluit de buitentoog.</p>
        </article>
        <article class="sj-detail-card">
          <span class="sj-card-number">02</span>
          <h3>WAAR?</h3>
          <p><strong>De Pasto</strong><br>Dorpsstraat 45<br>2950 Kapellen</p>
          <p>Midden in het centrum van Kapellen, aan De Oude Pastorij.</p>
        </article>
        <article class="sj-detail-card">
          <span class="sj-card-number">03</span>
          <h3>LEEFTIJD</h3>
          <p><strong>16+</strong></p>
          <p>Summer Jam is toegankelijk vanaf 16 jaar.</p>
        </article>
        <article class="sj-detail-card">
          <span class="sj-card-number">04</span>
          <h3>KOM SLIM</h3>
          <p>De parkeermogelijkheden rond het evenement zijn beperkt.</p>
          <p>Kom daarom bij voorkeur <strong>te voet, met de fiets, deelfiets of het openbaar vervoer</strong>.</p>
        </article>
      </div>
    </section>

    <section class="sj-faq" aria-labelledby="faq-title">
      <div class="sj-faq-heading">
        <p>NOG VRAGEN?</p>
        <h2 id="faq-title">FAQ.</h2>
      </div>
      <div class="sj-faq-list">
        <details>
          <summary>Wanneer is Summer Jam?</summary>
          <p>Vrijdag 4 september 2026 van 20:00 tot 00:00.</p>
        </details>
        <details>
          <summary>Vanaf welke leeftijd mag ik binnen?</summary>
          <p>Summer Jam is 16+. Je moet dus minstens 16 jaar oud zijn om toegang te krijgen.</p>
        </details>
        <details>
          <summary>Waar gaat Summer Jam door?</summary>
          <p>Bij De Pasto, Dorpsstraat 45 in 2950 Kapellen.</p>
        </details>
        <details>
          <summary>Waar koop ik tickets?</summary>
          <p>Tickets koop je rechtstreeks via de officiële Weezevent-ticketshop op deze pagina.</p>
        </details>
        <details>
          <summary>Is er parking?</summary>
          <p>De parkeermogelijkheden in de omgeving zijn beperkt. We raden aan om te voet, met de fiets, deelfiets of het openbaar vervoer te komen.</p>
        </details>
        <details>
          <summary>Wie staat er op de line-up?</summary>
          <p>DJ Lauwers opent de avond, DJ F.R.A.N.K. is de hoofdartiest en Sydney Ayven sluit Summer Jam af.</p>
        </details>
      </div>
    </section>

    <section class="sj-tickets" id="tickets" aria-labelledby="ticket-title">
      <div class="sj-ticket-heading">
        <p>PRESALE €20 · 16+</p>
        <h2 id="ticket-title">ZIEN WE<br>JOU DAAR?</h2>
        <p class="ticket-note">Scoor hieronder je presale ticket voor €20 via Weezevent en verzeker je plek voor DJ Lauwers, DJ F.R.A.N.K. en Sydney Ayven. Toegang vanaf 16 jaar.</p>
      </div>
      <div class="sj-ticket-widget">
        <a title="Logiciel billetterie en ligne"
           href="https://weezevent.com/?c=sys_widget"
           class="weezevent-widget-integration"
           data-src="https://widget.weezevent.com/ticket/E2381885/?code=78586&locale=nl-NL&width_auto=1&color_primary=384510"
           data-width="650"
           data-height="600"
           data-id="2381885"
           data-resize="1"
           data-width_auto="1"
           data-noscroll="0"
           data-use-container="yes"
           data-type="neo"
           target="_blank">Billetterie Weezevent</a>
      </div>
    </section>
  </main>

  <footer class="sj-footer">
    <strong>DE PASTO</strong>
    <span>DORPSSTRAAT 45 · 2950 KAPELLEN · SUMMER JAM 16+</span>
    <a href="index.php">DE-PASTO.BE</a>
  </footer>

  <script type="text/javascript" src="https://widget.weezevent.com/weez.js"></script>
  <script>
    (function(){
      const popup = document.getElementById('earlybird-popup');
      if (!popup) return;

      const storageKey = 'dePastoSummerJamPresaleClosed';

      function openPopup(){
        if (sessionStorage.getItem(storageKey) === '1') return;
        popup.classList.add('is-visible');
        popup.setAttribute('aria-hidden','false');
        document.body.classList.add('sj-popup-open');
      }

      function closePopup(){
        popup.classList.remove('is-visible');
        popup.setAttribute('aria-hidden','true');
        document.body.classList.remove('sj-popup-open');
        sessionStorage.setItem(storageKey,'1');
      }
      popup.querySelectorAll('[data-close-earlybird]').forEach(function(button){
        button.addEventListener('click', closePopup);
      });

      const ticketButton = popup.querySelector('[data-earlybird-ticket]');
      if (ticketButton){
        ticketButton.addEventListener('click', function(){
          closePopup();
          window.setTimeout(function(){
            const tickets = document.getElementById('tickets');
            if (tickets) tickets.scrollIntoView({behavior:'smooth', block:'start'});
          }, 80);
        });
      }

      popup.addEventListener('click', function(event){
        if (event.target === popup) closePopup();
      });

      document.addEventListener('keydown', function(event){
        if (event.key === 'Escape' && popup.classList.contains('is-visible')) closePopup();
      });

      window.setTimeout(openPopup, 1400);
    })();
  </script>
</body>
</html>