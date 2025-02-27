<?php
  include_once 'includes/header.php';
?>

<div class="background-logo">
  <img src="assets/images/sapeurs.avif" alt="UDSP 63 Logo" class="logo-watermark">
</div>

<main class="contact-page container">
  <div class="contact-grid">
    <!-- Carte Google Maps -->
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.1!2d3.1276!3d45.7892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f71bf43a996e67%3A0x7f1e57373dd6c95f!2sUDSP%2063!5e0!3m2!1sfr!2sfr!4v1234567890"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <!-- Informations de contact -->
    <div class="contact-info">
      <h1>UDSP 63 <span>contact</span></h1>
      
      <div class="opening-hours">
        <h2>Ouverture du bureau:</h2>
        <p>du lundi au vendredi de</p>
        <p>10h00 à 12h00 et</p>
        <p>de 14h00 à 16h00</p>
      </div>

      <address>
        <p>UDSP 63</p>
        <p>Chemin de Beaulieu et de Gandaillat</p>
        <p>63000 CLERMONT-FERRAND</p>
      </address>

      <div class="contact-details">
        <p>email: <a href="mailto:udsp63@wanadoo.fr">udsp63@wanadoo.fr</a></p>
        <p>Tel: <a href="tel:+33473981656">04 73 98 16 56</a></p>
      </div>

      <div class="social-links">
        <a href="#" class="facebook" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="twitter" aria-label="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </div>

    <!-- Formulaire de contact -->
    <form class="contact-form" action="contact-form-handler.php" method="POST">
      <div class="form-group">
        <input type="text" id="nom" name="nom" required placeholder="Nom *">
      </div>
      
      <div class="form-group">
        <input type="email" id="email" name="email" required placeholder="Email *">
      </div>
      
      <div class="form-group">
        <input type="text" id="sujet" name="sujet" required placeholder="Sujet">
      </div>
      
      <div class="form-group">
        <textarea id="message" name="message" rows="6" placeholder="Message"></textarea>
      </div>
      
      <button type="submit" class="btn-submit">Envoyer</button>
    </form>
  </div>
</main>

<?php
  include_once 'includes/footer.php';
?>