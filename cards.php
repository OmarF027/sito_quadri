<section class="sezione">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .sezione {
      /* rimosso min-height e cambiato justify-content */
      display: flex;
      flex-direction: column;
      justify-content: flex-start; /* allinea tutto in alto */
      padding: 0 20px 60px;
    }

    .cards-container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 0;
    }

    .card-item {
      flex: 1 1 calc(33.333% - 1rem);
      box-sizing: border-box;
      margin-bottom: 0;
      max-width: calc(33.333% - 1rem);
    }

    /* Media query per schermi piccoli (768px e 460px di altezza) */
    @media screen and (max-width: 768px) and (max-height: 460px) {
      .cards-container {
        flex-direction: row; /* Mantieni la direzione orizzontale */
        justify-content: space-between; /* Allinea le card orizzontalmente */
        gap: 1rem;
      }
      .card-item {
        flex: 1 1 calc(33.333% - 1rem); /* Le card restano orizzontali */
        max-width: calc(33.333% - 1rem); /* 3 card per riga */
      }
    }

    /* Media query per schermi più piccoli di 768px (ma con altezza superiore a 460px) */
    @media screen and (max-width: 768px) {
      .cards-container {
        flex-direction: row; /* Mantieni le card orizzontali */
        justify-content: space-between;
      }

      .card-item {
        flex: 1 1 calc(33.333% - 1rem); /* Le card restano orizzontali */
        max-width: calc(33.333% - 1rem); /* 3 card per riga */
      }
    }
  </style>

  <div class="section-inner">
    <h2>Perché scegliere Rachele WHX?</h2>
    <div class="cards-container">
      <div class="card-item">
        <div class="card-content">
          <h3>Esperienza</h3>
          <p>Da anni nel mondo dell’arte, Rachele crea opere autentiche che uniscono tecnica, espressività e uno stile riconoscibile. Non semplici quadri: esperienze visive che restano.</p>
        </div>
      </div>
      
      <div class="card-item">
        <div class="card-content">
          <h3>Spedizione rapida e protetta</h3>
          <p>Ogni acquisto viene imballato con attenzione, tracciato e spedito in modo sicuro. La tua opera arriva in tempi brevi e in perfette condizioni, pronta per essere esposta.</p>
        </div>
      </div>
      
      <div class="card-item">
        <div class="card-content">
          <h3>Approccio personalizzato</h3>
          <p>Ascolto, dialogo e cura del cliente sono al centro di ogni progetto, per offrire soluzioni su misura e un’esperienza memorabile.</p>
        </div>
      </div>
    </div>
  </div>
</section>

