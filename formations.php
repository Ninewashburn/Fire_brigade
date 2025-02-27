<?php
  include_once 'includes/header.php';
?>

<div class="site-watermark">
  <img src="assets/images/sapeurs.avif" alt="UDSP 63 Logo" class="site-watermark__logo">
</div>

<main class="formations">
  <div class="container">
    <h1 class="formations__title">NOS FORMATIONS</h1>
    
    <div class="formations__intro">
      <p>L'UDSP 63 propose plusieurs formations aux gestes qui sauvent, accessibles à tous.</p>
      <p>Nos formateurs, sapeurs-pompiers professionnels ou volontaires, vous transmettent leur expertise pour vous permettre d'agir efficacement face à une situation d'urgence.</p>
    </div>

    <div class="formations-grid">
      <!-- Formation PSC1 -->
      <div class="formation-card">
        <div class="formation-card__header">
          <h2 class="formation-card__title">PSC1</h2>
          <span class="formation-card__duration">7 heures</span>
        </div>
        <div class="formation-card__content">
          <p class="formation-card__description">
            Prévention et Secours Civiques de niveau 1. Formation de base aux premiers secours.
          </p>
          <ul class="formation-card__details">
            <li><i class="fas fa-check"></i> Alerter les secours</li>
            <li><i class="fas fa-check"></i> Position latérale de sécurité</li>
            <li><i class="fas fa-check"></i> Réanimation cardio-pulmonaire</li>
            <li><i class="fas fa-check"></i> Utilisation du défibrillateur</li>
            <li><i class="fas fa-check"></i> Hémorragies, étouffements, malaises</li>
          </ul>
          <div class="formation-card__price">
            <span>60€</span> par personne
          </div>
        </div>
        <div class="formation-card__footer">
          <a href="#contact-form" class="btn-formation">S'inscrire</a>
        </div>
      </div>

      <!-- Formation SST -->
      <div class="formation-card">
        <div class="formation-card__header">
          <h2 class="formation-card__title">SST</h2>
          <span class="formation-card__duration">14 heures</span>
        </div>
        <div class="formation-card__content">
          <p class="formation-card__description">
            Sauveteur Secouriste du Travail. Formation aux premiers secours en milieu professionnel.
          </p>
          <ul class="formation-card__details">
            <li><i class="fas fa-check"></i> Prévention des risques professionnels</li>
            <li><i class="fas fa-check"></i> Protection et alerte</li>
            <li><i class="fas fa-check"></i> Secours aux victimes</li>
            <li><i class="fas fa-check"></i> Gestes d'urgence</li>
            <li><i class="fas fa-check"></i> Certification reconnue</li>
          </ul>
          <div class="formation-card__price">
            <span>180€</span> par personne
          </div>
        </div>
        <div class="formation-card__footer">
          <a href="#contact-form" class="btn-formation">S'inscrire</a>
        </div>
      </div>

      <!-- Formation Initiation -->
      <div class="formation-card">
        <div class="formation-card__header">
          <h2 class="formation-card__title">Initiation</h2>
          <span class="formation-card__duration">2 heures</span>
        </div>
        <div class="formation-card__content">
          <p class="formation-card__description">
            Sensibilisation aux gestes qui sauvent. Idéal pour une première approche.
          </p>
          <ul class="formation-card__details">
            <li><i class="fas fa-check"></i> Alerte et protection</li>
            <li><i class="fas fa-check"></i> Massage cardiaque</li>
            <li><i class="fas fa-check"></i> Défibrillateur</li>
            <li><i class="fas fa-check"></i> Hémorragies</li>
            <li><i class="fas fa-check"></i> Étouffements</li>
          </ul>
          <div class="formation-card__price">
            <span>25€</span> par personne
          </div>
        </div>
        <div class="formation-card__footer">
          <a href="#contact-form" class="btn-formation">S'inscrire</a>
        </div>
      </div>
    </div>

    <div class="formations-info">
      <div class="formations-info__block">
        <i class="fas fa-users fa-2x"></i>
        <h3>Formations de groupe</h3>
        <p>Nous proposons des tarifs adaptés pour les entreprises, associations et collectivités. Contactez-nous pour un devis personnalisé.</p>
      </div>
      <div class="formations-info__block">
        <i class="fas fa-calendar-alt fa-2x"></i>
        <h3>Calendrier</h3>
        <p>Consultez notre calendrier des formations pour connaître les prochaines sessions disponibles.</p>
        <a href="#" class="btn-calendar" id="open-calendar-modal">Voir le calendrier</a>
      </div>
    </div>

    <div class="formations-contact" id="contact-form">
      <h2 class="formations-contact__title">Demande d'information ou d'inscription</h2>
      <form class="formations-form" action="contact-form-handler.php" method="POST">
        <div class="form-row">
          <div class="form-group">
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom *</label>
            <input type="text" id="prenom" name="prenom" required>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone">
          </div>
        </div>
        
        <div class="form-group">
          <label for="formation">Formation souhaitée *</label>
          <select id="formation" name="formation" required>
            <option value="">Sélectionnez une formation</option>
            <option value="PSC1">PSC1 - Prévention et Secours Civiques niveau 1</option>
            <option value="SST">SST - Sauveteur Secouriste du Travail</option>
            <option value="Initiation">Initiation aux gestes qui sauvent</option>
            <option value="Autre">Autre (précisez dans le message)</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5"></textarea>
        </div>
        
        <button type="submit" class="btn-submit">Envoyer ma demande</button>
      </form>
    </div>

    <!-- Modal Calendrier -->
    <div class="modal" id="calendar-modal">
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2 class="modal-title">Calendrier des formations</h2>
        
        <div class="calendar-container">
          <div class="calendar-header">
            <p class="current-date-display">Aujourd'hui : <span id="current-date">Chargement...</span></p>
            
            <div class="calendar-filters">
              <div class="filter-group">
                <label for="formation-filter">Formation :</label>
                <select id="formation-filter">
                  <option value="all">Toutes les formations</option>
                  <option value="PSC1">PSC1</option>
                  <option value="SST">SST</option>
                  <option value="Initiation">Initiation</option>
                </select>
              </div>
              <div class="filter-group">
                <label for="month-filter">Mois :</label>
                <select id="month-filter">
                  <option value="all">Tous les mois</option>
                  <option value="01">Janvier</option>
                  <option value="02">Février</option>
                  <option value="03">Mars</option>
                  <option value="04">Avril</option>
                  <option value="05">Mai</option>
                  <option value="06">Juin</option>
                  <option value="07">Juillet</option>
                  <option value="08">Août</option>
                  <option value="09">Septembre</option>
                  <option value="10">Octobre</option>
                  <option value="11">Novembre</option>
                  <option value="12">Décembre</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class="calendar-grid">
            <div class="calendar-grid-header">
              <div class="grid-cell grid-cell-date">Date</div>
              <div class="grid-cell grid-cell-formation">Formation</div>
              <div class="grid-cell grid-cell-horaire">Horaires</div>
              <div class="grid-cell grid-cell-lieu">Lieu</div>
              <div class="grid-cell grid-cell-places">Places</div>
              <div class="grid-cell grid-cell-action">Action</div>
            </div>
            
            <div class="calendar-grid-body">
              <!-- Session 1 -->
              <div class="calendar-grid-row" data-formation="PSC1" data-month="06">
                <div class="grid-cell grid-cell-date">
                  <div class="date-box">
                    <span class="date-day">15</span>
                    <span class="date-month">Juin</span>
                    <span class="date-year">2025</span>
                  </div>
                </div>
                <div class="grid-cell grid-cell-formation">PSC1 - Prévention et Secours Civiques niveau 1</div>
                <div class="grid-cell grid-cell-horaire">8h30 - 17h30</div>
                <div class="grid-cell grid-cell-lieu">Centre de formation UDSP 63, Clermont-Ferrand</div>
                <div class="grid-cell grid-cell-places">
                  <span class="status-badge status-available">Places disponibles</span>
                </div>
                <div class="grid-cell grid-cell-action">
                  <a href="#contact-form" class="btn-session">S'inscrire</a>
                </div>
              </div>
              
              <!-- Session 2 -->
              <div class="calendar-grid-row" data-formation="SST" data-month="06">
                <div class="grid-cell grid-cell-date">
                  <div class="date-box">
                    <span class="date-day">22</span>
                    <span class="date-month">Juin</span>
                    <span class="date-year">2025</span>
                  </div>
                </div>
                <div class="grid-cell grid-cell-formation">SST - Sauveteur Secouriste du Travail</div>
                <div class="grid-cell grid-cell-horaire">9h00 - 17h00<br>(2 jours)</div>
                <div class="grid-cell grid-cell-lieu">Centre de formation UDSP 63, Clermont-Ferrand</div>
                <div class="grid-cell grid-cell-places">
                  <span class="status-badge status-limited">Places limitées</span>
                </div>
                <div class="grid-cell grid-cell-action">
                  <a href="#contact-form" class="btn-session">S'inscrire</a>
                </div>
              </div>
              
              <!-- Session 3 -->
              <div class="calendar-grid-row" data-formation="Initiation" data-month="07">
                <div class="grid-cell grid-cell-date">
                  <div class="date-box">
                    <span class="date-day">05</span>
                    <span class="date-month">Juillet</span>
                    <span class="date-year">2025</span>
                  </div>
                </div>
                <div class="grid-cell grid-cell-formation">Initiation aux gestes qui sauvent</div>
                <div class="grid-cell grid-cell-horaire">14h00 - 16h00</div>
                <div class="grid-cell grid-cell-lieu">Maison des associations, Riom</div>
                <div class="grid-cell grid-cell-places">
                  <span class="status-badge status-available">Places disponibles</span>
                </div>
                <div class="grid-cell grid-cell-action">
                  <a href="#contact-form" class="btn-session">S'inscrire</a>
                </div>
              </div>
              
              <!-- Session 4 -->
              <div class="calendar-grid-row" data-formation="PSC1" data-month="07">
                <div class="grid-cell grid-cell-date">
                  <div class="date-box">
                    <span class="date-day">18</span>
                    <span class="date-month">Juillet</span>
                    <span class="date-year">2025</span>
                  </div>
                </div>
                <div class="grid-cell grid-cell-formation">PSC1 - Prévention et Secours Civiques niveau 1</div>
                <div class="grid-cell grid-cell-horaire">8h30 - 17h30</div>
                <div class="grid-cell grid-cell-lieu">Centre de formation UDSP 63, Clermont-Ferrand</div>
                <div class="grid-cell grid-cell-places">
                  <span class="status-badge status-full">Complet</span>
                </div>
                <div class="grid-cell grid-cell-action">
                  <a href="#" class="btn-session disabled">Complet</a>
                </div>
              </div>
              
              <!-- Session 5 -->
              <div class="calendar-grid-row" data-formation="SST" data-month="09">
                <div class="grid-cell grid-cell-date">
                  <div class="date-box">
                    <span class="date-day">12</span>
                    <span class="date-month">Septembre</span>
                    <span class="date-year">2025</span>
                  </div>
                </div>
                <div class="grid-cell grid-cell-formation">SST - Sauveteur Secouriste du Travail</div>
                <div class="grid-cell grid-cell-horaire">9h00 - 17h00<br>(2 jours)</div>
                <div class="grid-cell grid-cell-lieu">Centre de formation UDSP 63, Clermont-Ferrand</div>
                <div class="grid-cell grid-cell-places">
                  <span class="status-badge status-available">Places disponibles</span>
                </div>
                <div class="grid-cell grid-cell-action">
                  <a href="#contact-form" class="btn-session">S'inscrire</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
  include_once 'includes/footer.php';
?> 