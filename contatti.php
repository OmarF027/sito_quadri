<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scopri le opere di Rachele WHX, artista che crea pezzi esclusivi ed eleganti, trasformando ogni spazio con arte contemporanea unica.">
    <meta property="og:title" content="Rachele WHX | Arte e Design">
    <meta property="og:description" content="Scopri le opere uniche di Rachele WHX, artista che fonde creatività e design per trasformare ogni spazio.">
    <meta property="og:image" content="img/quadro1.jpg">
    <meta property="og:url" content="https://www.rachelewhx.com">
    <title>Rachele WHX | Contatti</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/quadri.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" as="style">
</head>

<?php include('header.php'); ?>

<style>
  body {
    background-color: #2e1a47; /* Midnight Purple */
    color: #fff; /* Testo bianco */
    font-family: Arial, sans-serif;
  }

  @keyframes slideIn {
      0% {
          transform: translateX(-100%);
          opacity: 0;
      }
      100% {
          transform: translateX(0);
          opacity: 1;
      }
  }

  @keyframes zoomFade {
      0% {
          transform: scale(0.8);
          opacity: 0;
      }
      100% {
          transform: scale(1);
          opacity: 1;
      }
  }

  .map-card, .info-card {
      background: #3b1e5a; /* Un'ombra più scura di Midnight Purple */
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0,0,0,0.4);
      opacity: 0;
      transform: scale(0.8);
      animation: zoomFade 1s ease forwards;
      transition: all 0.4s ease;
  }

  .map-card { animation-delay: 0.8s; }
  .info-card { animation-delay: 1s; }

  .map-card:hover, .info-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(138,43,226,0.6), 0 0 60px rgba(138,43,226,0.2); /* Viola chiaro */
  }

  .map-responsive {
      position: relative;
      padding-bottom: 75%;
      border-radius: 10px;
      overflow: hidden;
  }

  .map-responsive iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
  }

  h1, h2, h3, p, a {
      color: #fff; /* Tutti i testi principali in bianco */
  }

  h1 {
      font-size: 3.5rem;
      margin: 0 auto;
      padding: 0 20px;
      animation: slideIn 1s ease forwards;
      animation-delay: 0.3s;
      transform: translateX(-100%);
      opacity: 0;
      width: fit-content;
      color: #fff; /* Imposta il colore del testo a bianco */
      text-shadow: none; /* Rimuove il glow dal testo */
  }

  h2 {
      font-size: 1.8rem;
      margin: 10px auto 0;
      padding: 0 20px;
      animation: slideIn 1s ease forwards;
      animation-delay: 0.6s;
      transform: translateX(-100%);
      opacity: 0;
      width: fit-content;
      color: #fff;
      text-shadow: none; /* Rimuove il glow dal testo */
  }

  h3 {
      margin-bottom: 25px;
      font-size: 1.5rem;
  }

  .contact-info a {
      color: #fff; /* Tutti i link in bianco */
      text-decoration: none;
  }

  .contact-info a:hover {
      text-decoration: underline;
  }

  .contact-section {
      padding: 80px 0;
      background-color: #1f1132;
  }

  .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: start;
  }

  .section-title {
      font-size: 2rem;
      color: #fff;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
  }

  .contact-header {
      text-align: center;
      margin-bottom: 40px;
      color: #fff;
      font-size: 2.5rem;
  }
</style>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        
        <div class="contact-header">
            <h1>Contatti</h1>
        </div>

        <div class="contact-grid">

            <!-- Mappa -->
            <div class="map-card">
                <h3 class="section-title">
                    <i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>Dove ci trovi
                </h3>
                <div class="map-responsive">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.899256376325!2d10.855862015721085!3d42.9862383327876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d574e0d0228e9f%3A0x99e1c9b94b72702!2s58023%20Bagno%20di%20Gavorrano%20GR!5e0!3m2!1sit!2sit!4v1683234670654!5m2!1sit!2sit" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Info -->
            <div class="info-card">
                <h3 class="section-title">
                    <i class="fas fa-info-circle" style="margin-right: 10px;"></i>Informazioni
                </h3>
                
                <div class="contact-info" style="margin-bottom: 25px;">
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-map-pin" style="color: #fff; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; font-size: 1.1rem;">
                            58023 Bagno di Gavorrano (GR)<br>
                            Toscana, Italia
                        </p>
                    </div>

                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-phone-alt" style="color: #fff; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; font-size: 1.1rem;">
                            <a href="tel:+391234567890" style="color: #fff; text-decoration: none;">
                                +39 123 456 7890
                            </a>
                        </p>
                    </div>

                    <div class="info-item" style="display: flex; align-items: center;">
                        <i class="fas fa-envelope" style="color: #fff; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; font-size: 1.1rem;">
                            <a href="mailto:rachelewhx@example.com" style="color: #fff; text-decoration: none;">
                                rachelewhx@example.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    // Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const menuLinks = document.getElementById('menuLinks');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        menuLinks.classList.toggle('active');
    });
</script>

<?php include('footer.php'); ?>
