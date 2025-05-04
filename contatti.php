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
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
    <style>
        /* RESPONSIVE FIXES */
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr !important;
                gap: 20px !important;
            }
            
            .map-responsive {
                padding-bottom: 100% !important;
            }
            
            .contact-header h1 {
                font-size: 1.8rem !important;
                margin: 20px 0 !important;
            }
            
            .info-item {
                flex-direction: column !important;
                align-items: flex-start !important;
                gap: 8px !important;
            }
            
            .map-card, 
            .info-card {
                margin: 0 10px !important;
                padding: 20px !important;
            }
        }

        @media (max-width: 480px) {
            .contact-header h1 {
                font-size: 1.6rem !important;
            }
            
            .section-title {
                font-size: 1.2rem !important;
            }
            
            .info-item i {
                font-size: 1.4rem !important;
                margin-bottom: 5px;
            }
            
            .map-responsive {
                padding-bottom: 130% !important;
            }
            
            .map-card,
            .info-card {
                padding: 15px !important;
                border-radius: 12px !important;
            }
        }
    </style>
</head>

<body class="contact-page">
    <?php include('header.php'); ?>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-header">
                <h1>Contatti</h1>
            </div>

            <div class="contact-grid">
                <!-- Mappa -->
                <div class="map-card">
                    <h3 class="section-title">
                        <i class="fas fa-map-marker-alt"></i>Dove ci trovi
                    </h3>
                    <div class="map-responsive">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.899256376325!2d10.855862015721085!3d42.9862383327876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d574e0d0228e9f%3A0x99e1c9b94b72702!2s58023%20Bagno%20di%20Gavorrano%20GR!5e0!3m2!1sit!2sit!4v1683234670654!5m2!1sit!2sit" 
                            allowfullscreen="" 
                            loading="lazy"
                            aria-label="Mappa della posizione dello studio">
                        </iframe>
                    </div>
                </div>

                <!-- Info -->
                <div class="info-card">
                    <h3 class="section-title">
                        <i class="fas fa-info-circle"></i>Informazioni
                    </h3>
                    
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="fas fa-map-pin"></i>
                            <p>
                                58023 Bagno di Gavorrano (GR)<br>
                                Toscana, Italia
                            </p>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-phone-alt"></i>
                            <p>
                                <a href="tel:+391234567890">
                                    +39 123 456 7890
                                </a>
                            </p>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <p>
                                <a href="mailto:rachelewhx@example.com">
                                    rachelewhx@example.com
                                </a>
                            </p>
                        </div>
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

        // Chiudi menu al click su item
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                menuLinks.classList.remove('active');
            });
        });
    </script>
</body>
</html>