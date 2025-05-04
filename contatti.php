<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta name="description" content="Contatta Rachele WHX, artista specializzata in opere d'arte contemporanea e design unico. Visita il nostro studio in Toscana.">
    <meta property="og:title" content="Contatti | Rachele WHX Arte e Design">
    <meta property="og:description" content="Contatta l'artista Rachele WHX per informazioni su opere, collaborazioni e mostre. Studio situato in Toscana, Italia.">
    <meta property="og:image" content="img/quadro1.jpg">
    <meta property="og:url" content="https://www.rachelewhx.com/contatti">
    <title>Rachele WHX | Contatti</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/quadri.css">
    <link rel="stylesheet" href="css/contatti.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
      /* pagine midnight purple */
      body.contact-page {
        background-color: #2e1a47; /* midnight purple */
        color: #fff;
      }

      /* rimuoviamo hero, usiamo solo contact-section */
      .contact-section {
        padding: 80px 0;
      }

      .contact-header h1 {
        font-size: 3rem;
        color: #fff; /* titolo bianco */
        text-align: center;
        margin-bottom: 40px;
        opacity: 0;
        animation: fadeIn 1s ease-out forwards;
        animation-delay: 0.2s;
      }

      .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
      }

      .map-card,
      .info-card {
        background: #3b1e5a;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0,0,0,0.4);
        transition: transform .3s ease, box-shadow .3s ease;
        opacity: 0;
        animation: fadeIn 1s ease-out forwards;
      }

      .map-card:hover,
      .info-card:hover {
        transform: translateY(-10px) scale(1.05); /* Ingrandimento maggiore */
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.2), 0 0 30px rgba(180, 140, 255, 0.8), 0 0 40px rgba(180, 140, 255, 0.6);
      }

      .map-card {
        animation-delay: 0.4s;
      }

      .info-card {
        animation-delay: 0.6s;
      }

      .section-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        color: #fff;
      }

      .section-title i {
        margin-right: 10px;
        color: #fff;
      }

      .map-responsive {
        position: relative;
        padding-bottom: 56.25%;
        border-radius: 10px;
        overflow: hidden;
      }

      .map-responsive iframe {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        border: 0;
      }

      .contact-info {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }

      .info-item {
        display: grid;
        grid-template-columns: 40px 1fr;
        align-items: start;
        gap: 15px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeIn 1s ease-out forwards;
      }

      .info-item i {
        font-size: 1.4rem;
        justify-self: center;
        color: #b38cff;
      }

      .info-item p,
      .info-item a {
        margin: 0;
        color: #fff;
        font-size: 1.1rem;
      }

      .info-item a {
        text-decoration: none;
        transition: color .3s, text-decoration .3s;
      }

      .info-item a:hover {
        color: #b38cff;
        text-decoration: underline;
      }

      /* Ritardi animazione per le info */
      .info-item:nth-child(1) {
        animation-delay: 0.7s;
      }

      .info-item:nth-child(2) {
        animation-delay: 0.9s;
      }

      .info-item:nth-child(3) {
        animation-delay: 1.1s;
      }

      /* Animazione di fade-in */
      @keyframes fadeIn {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @media (max-width: 767px) {
        .contact-grid {
          grid-template-columns: 1fr;
          gap: 30px;
        }
      }
    </style>
</head>
<body class="contact-page">
  <?php include('header.php'); ?>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="contact-header">
      <h1>Contatti</h1>
    </div>
    <div class="contact-grid">
      <!-- Mappa -->
      <div class="map-card">
        <h3 class="section-title">
          <i class="fas fa-map-marker-alt"></i>
          Dove ci trovi
        </h3>
        <div class="map-responsive">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.899256376325!2d10.855862015721085!3d42.9862383327876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d574e0d0228e9f%3A0x99e1c9b94b72702!2s58023%20Bagno%20di%20Gavorrano%20GR!5e0!3m2!1sit!2sit!4v1683234670654!5m2!1sit!2sit"
            allowfullscreen loading="lazy"
          ></iframe>
        </div>
      </div>

      <!-- Info -->
      <div class="info-card">
        <h3 class="section-title">
          <i class="fas fa-info-circle"></i>
          Informazioni
        </h3>
        <div class="contact-info">
          <div class="info-item">
            <i class="fas fa-map-pin"></i>
            <p>58023 Bagno di Gavorrano (GR)<br>Toscana, Italia</p>
          </div>
          <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <p><a href="tel:+391234567890">+39 123 456 7890</a></p>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p><a href="mailto:rachelewhx@example.com">rachelewhx@example.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <script>
    // Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const menuLinks = document.getElementById('menuLinks');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        menuLinks.classList.toggle('active');
    });

    // Aggiungere animazione quando gli elementi entrano nella vista
    document.addEventListener('scroll', () => {
      const elements = document.querySelectorAll('.contact-header h1, .map-card, .info-card, .info-item');

      elements.forEach(el => {
        if (el.getBoundingClientRect().top < window.innerHeight) {
          el.classList.add('in-view');
        }
      });
    });

    // Aggiungere la classe 'in-view' quando l'elemento è visibile
    const style = document.createElement('style');
    style.innerHTML = `
      .in-view {
        opacity: 1 !important;
        transform: translateY(0) !important;
      }
    `;
    document.head.appendChild(style);
  </script>
</body>
</html>
