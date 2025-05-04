<section class="sezione">
  <style>
    /* Impostazioni generali per il layout a piena pagina */
    html, body {
      height: 100%;
      margin: 0;
    }

    /* Aggiungi altezza minima alla sezione */
    .sezione {
      min-height: 100vh; /* Assicura che la sezione copra tutta l'altezza disponibile */
      display: flex;
      flex-direction: column;
      justify-content: space-between; /* Spinge footer in basso se necessario */
    }

    /* Media query per visualizzare le card in orizzontale a 768x460 */
    @media screen and (width: 768px) and (height: 460px) {
      .cards-container {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
      }

      .card-item {
        height: auto;
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

