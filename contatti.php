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
    <link rel="stylesheet" href="css/contatti.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" as="style">
</head>

<?php include('header.php'); ?>

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
