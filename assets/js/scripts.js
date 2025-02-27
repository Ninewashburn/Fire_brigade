document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".burger");
  const menu = document.querySelector(".navbar-menu");
  const dropdowns = document.querySelectorAll(".dropdown");

  // Toggle menu on burger click
  burger?.addEventListener("click", () => {
    burger.classList.toggle("active");
    menu?.classList.toggle("active");
  });

  // Handle dropdowns on mobile
  dropdowns.forEach((dropdown) => {
    const link = dropdown.querySelector("a");

    // For mobile: toggle dropdown on click
    link?.addEventListener("click", (e) => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        dropdown.classList.toggle("active");

        // Close other dropdowns
        dropdowns.forEach((other) => {
          if (other !== dropdown) {
            other.classList.remove("active");
          }
        });
      }
    });
  });

  // Close menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!menu?.contains(e.target) && !burger?.contains(e.target)) {
      menu?.classList.remove("active");
      burger?.classList.remove("active");
      dropdowns.forEach((dropdown) => dropdown.classList.remove("active"));
    }
  });

  // Handle escape key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      menu?.classList.remove("active");
      burger?.classList.remove("active");
      dropdowns.forEach((dropdown) => dropdown.classList.remove("active"));
    }
  });

  // Fonctionnalités pour la modal du calendrier des formations
  function initCalendarModal() {
    // Vérifier si les éléments existent
    const openModalBtn = document.getElementById("open-calendar-modal");
    if (!openModalBtn) return;

    const modal = document.getElementById("calendar-modal");
    const closeModalBtn = modal.querySelector(".modal-close");
    const formationFilter = document.getElementById("formation-filter");
    const monthFilter = document.getElementById("month-filter");
    const sessions = document.querySelectorAll(".calendar-grid-row");
    const currentDateDisplay = document.getElementById("current-date");

    // Afficher la date du jour
    if (currentDateDisplay) {
      const now = new Date();
      const options = {
        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric",
      };
      currentDateDisplay.textContent = now.toLocaleDateString("fr-FR", options);
    }

    // Ouvrir la modal
    openModalBtn.addEventListener("click", function (e) {
      e.preventDefault();
      modal.style.display = "block";
      document.body.style.overflow = "hidden";
    });

    // Fermer la modal
    closeModalBtn.addEventListener("click", function () {
      modal.style.display = "none";
      document.body.style.overflow = "";
    });

    // Fermer la modal en cliquant en dehors du contenu
    window.addEventListener("click", function (e) {
      if (e.target === modal) {
        modal.style.display = "none";
        document.body.style.overflow = "";
      }
    });

    // Filtrer les sessions
    function filterSessions() {
      const formationValue = formationFilter.value;
      const monthValue = monthFilter.value;
      let visibleCount = 0;

      sessions.forEach((session) => {
        const sessionFormation = session.getAttribute("data-formation");
        const sessionMonth = session.getAttribute("data-month");

        const formationMatch =
          formationValue === "all" || sessionFormation === formationValue;
        const monthMatch = monthValue === "all" || sessionMonth === monthValue;

        if (formationMatch && monthMatch) {
          session.style.display = "";
          visibleCount++;
        } else {
          session.style.display = "none";
        }
      });

      // Afficher un message si aucune session ne correspond aux filtres
      const noResultsMessage = document.querySelector(".no-results-message");
      if (visibleCount === 0) {
        if (!noResultsMessage) {
          const message = document.createElement("div");
          message.className = "no-results-message";
          message.textContent =
            "Aucune session ne correspond à vos critères de recherche.";
          message.style.padding = "2rem";
          message.style.textAlign = "center";
          message.style.color = "#666";
          document.querySelector(".calendar-grid-body").appendChild(message);
        }
      } else if (noResultsMessage) {
        noResultsMessage.remove();
      }
    }

    // Événements de changement de filtre
    formationFilter.addEventListener("change", filterSessions);
    monthFilter.addEventListener("change", filterSessions);

    // Liens d'inscription dans la modal
    const inscriptionLinks = modal.querySelectorAll(
      ".btn-session:not(.disabled)"
    );
    inscriptionLinks.forEach((link) => {
      link.addEventListener("click", function () {
        modal.style.display = "none";
        document.body.style.overflow = "";

        // Récupérer le titre de la formation
        const formationTitle = this.closest(".calendar-grid-row").querySelector(
          ".grid-cell-formation"
        ).textContent;

        // Sélectionner automatiquement la formation dans le formulaire
        const formationSelect = document.getElementById("formation");

        for (let i = 0; i < formationSelect.options.length; i++) {
          if (
            formationSelect.options[i].text.includes(
              formationTitle.split(" - ")[0]
            )
          ) {
            formationSelect.selectedIndex = i;
            break;
          }
        }

        // Ajouter la date dans le message
        const sessionDay =
          this.closest(".calendar-grid-row").querySelector(
            ".date-day"
          ).textContent;
        const sessionMonth =
          this.closest(".calendar-grid-row").querySelector(
            ".date-month"
          ).textContent;

        const messageField = document.getElementById("message");
        messageField.value = `Je souhaite m'inscrire à la session du ${sessionDay} ${sessionMonth}.\n\n`;

        // Focus sur le formulaire
        document.getElementById("nom").focus();
      });
    });
  }

  // Fonctionnalité pour le menu mobile
  function initMobileMenu() {
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mainNav = document.getElementById("main-nav");

    if (!mobileMenuToggle || !mainNav) return;

    mobileMenuToggle.addEventListener("click", function () {
      mainNav.classList.toggle("active");
    });

    // Fermer le menu en cliquant en dehors
    document.addEventListener("click", function (event) {
      const isClickInsideNav = mainNav.contains(event.target);
      const isClickOnToggle = mobileMenuToggle.contains(event.target);

      if (
        !isClickInsideNav &&
        !isClickOnToggle &&
        mainNav.classList.contains("active")
      ) {
        mainNav.classList.remove("active");
      }
    });

    // Fermer le menu après avoir cliqué sur un lien
    const navLinks = mainNav.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", function () {
        mainNav.classList.remove("active");
      });
    });
  }

  // Gestion du mode sombre
  function initThemeToggle() {
    // Vérifier le thème initial
    if (localStorage.getItem("darkMode") === "enabled") {
      document.body.classList.add("dark-mode");
    }

    // Créer le bouton de thème
    const navbarMenu = document.querySelector(".navbar-menu");
    if (navbarMenu) {
      // Créer un élément li pour le bouton
      const themeToggle = document.createElement("li");
      themeToggle.className = "theme-toggle-item";

      // Créer le bouton lui-même
      const toggleButton = document.createElement("button");
      toggleButton.id = "theme-toggle";
      toggleButton.className = "theme-toggle-btn";
      toggleButton.setAttribute("aria-label", "Changer le thème");
      toggleButton.innerHTML =
        localStorage.getItem("darkMode") === "enabled" ? "☀️" : "🌙";

      // Ajouter le bouton au li
      themeToggle.appendChild(toggleButton);

      // Ajouter le li à la fin du menu
      navbarMenu.appendChild(themeToggle);

      // Gérer le basculement du thème
      toggleButton.addEventListener("click", function (e) {
        e.preventDefault();
        document.body.classList.toggle("dark-mode");
        const isDarkMode = document.body.classList.contains("dark-mode");
        localStorage.setItem("darkMode", isDarkMode ? "enabled" : "disabled");
        this.innerHTML = isDarkMode ? "☀️" : "🌙";
      });
    }
  }

  // Exécuter l'initialisation au chargement de la page
  initMobileMenu();
  initCalendarModal();
  initThemeToggle();

  // Code de débogage temporaire
  console.log("DOM chargé");
  console.log(
    "Bouton calendrier:",
    document.getElementById("open-calendar-modal")
  );
  console.log("Modal calendrier:", document.getElementById("calendar-modal"));
});
