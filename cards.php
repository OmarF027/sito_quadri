<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perché scegliere Rachele WHX?</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #1a0526;
      color: white;
    }

    .sezione {
      background-color: #1a0526;
      padding: 60px 20px;
    }

    .section-inner {
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .section-inner h2 {
      font-size: 2.4em;
      margin-bottom: 40px;
      color: #e0d0ff;
    }

    .cards-container {
      display: grid;
      grid-template-columns: repeat(3, minmax(280px, 1fr));
      gap: 30px;
      padding: 20px 0;
    }

    .card-item {
      background: #2a0d3e;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(160, 0, 255, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #4a2375;
      display: flex;
      flex-direction: column;
    }

    .card-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(160, 0, 255, 0.5);
    }

    .card-image img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-bottom: 3px solid #c79aff;
    }

    .card-content {
      padding: 20px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .card-content h3 {
      color: #c79aff;
      margin-bottom: 15px;
      font-size: 1.3em;
    }

    .card-content p {
      color: #e0d0ff;
      font-size: 0.95em;
      line-height: 1.6;
      flex-grow: 1;
    }

    /* Tablet e dispositivi medi */
    @media (max-width: 768px) {
      .section-inner h2 {
        font-size: 2em;
      }

      .cards-container {
        grid-template-columns: repeat(3, minmax(220px, 1fr));
        gap: 20px;
        padding: 15px 0;
      }

      .card-image img {
        height: 180px;
      }

      .card-content {
        padding: 15px;
      }
    }

    /* Piccoli schermi */
    @media (max-width: 600px) {
      .cards-container {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* Mobile molto piccoli */
    @media (max-width: 480px) {
      .cards-container {
        grid-template-columns: 1fr;
        max-width: 400px;
        margin: 0 auto;
      }

      .card-image img {
        height: 200px;
      }
    }
  </style>
</head>
<body>

  <section class="sezione">
    <div class="section-inner">
      <h2>Perché scegliere Rachele WHX?</h2>
      <div class="cards-container">
        <div class="card-item">
          <div class="card-image">
          </div>
          <div class="card-content">
            <h3>Esperienza</h3>
            <p>Da anni nel mondo dell'arte, Rachele crea opere autentiche che uniscono tecnica, espressività e uno stile riconoscibile. Non semplici quadri: esperienze visive che restano.</p>
          </div>
        </div>

        <div class="card-item">
          <div class="card-image">
          </div>
          <div class="card-content">
            <h3>Spedizione rapida e protetta</h3>
            <p>Ogni acquisto viene imballato con attenzione, tracciato e spedito in modo sicuro. La tua opera arriva in tempi brevi e in perfette condizioni, pronta per essere esposta.</p>
          </div>
        </div>

        <div class="card-item">
          <div class="card-image">
          </div>
          <div class="card-content">
            <h3>Approccio personalizzato</h3>
            <p>Ascolto, dialogo e cura del cliente sono al centro di ogni progetto, per offrire soluzioni su misura e un'esperienza memorabile.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
