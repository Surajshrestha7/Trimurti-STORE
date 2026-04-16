// Sticky Header Logic moved to header.php for reliability
// ------------------------ timer
const targetDate = new Date("2026-12-31 23:59:59").getTime();

function updateCountdown() {
  const now = new Date().getTime();
  const diff = targetDate - now;

  if (diff <= 0) {
    document.querySelector(".timer").innerHTML = "EXPIRED";
    return;
  }

  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);

  document.getElementById("days").innerText = days;
  document.getElementById("hours").innerText = hours;
  document.getElementById("minutes").innerText = minutes;
  document.getElementById("seconds").innerText = seconds;
}

setInterval(updateCountdown, 1000);
updateCountdown();

// ------------------------limited offers timer
const loTargetDate = new Date("2026-06-30 23:59:59").getTime();

function updateLimitedOffersCountdown() {
  const loDays = document.getElementById("lo-days");
  const loHours = document.getElementById("lo-hours");
  const loMinutes = document.getElementById("lo-minutes");
  const loSeconds = document.getElementById("lo-seconds");
  if (!loDays) return;

  const now = new Date().getTime();
  const diff = loTargetDate - now;

  if (diff <= 0) {
    loDays.innerText = loHours.innerText = loMinutes.innerText = loSeconds.innerText = "00";
    return;
  }
  loDays.innerText = String(Math.floor(diff / (1000 * 60 * 60 * 24))).padStart(2, "0");
  loHours.innerText = String(Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, "0");
  loMinutes.innerText = String(Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, "0");
  loSeconds.innerText = String(Math.floor((diff % (1000 * 60)) / 1000)).padStart(2, "0");
}
setInterval(updateLimitedOffersCountdown, 1000);
updateLimitedOffersCountdown();



// ------------------------best seller

(function () {
  var tabBtns = document.querySelectorAll('.bs-tab-btn');
  var productCols = document.querySelectorAll('.bs-product-col');

  function showCategory(cat) {
    productCols.forEach(function (col) {
      if (col.getAttribute('data-category') === cat) {
        col.style.display = '';
      } else {
        col.style.display = 'none';
      }
    });
  }

  tabBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      tabBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      showCategory(btn.getAttribute('data-category'));
    });
  });

  var swatchGroups = document.querySelectorAll('.bs-color-swatches');

  swatchGroups.forEach(function (group) {
    var targetId = group.getAttribute('data-img-target');
    if (!targetId) return;

    var targetImg = document.getElementById(targetId);
    if (!targetImg) return;

    var colors = JSON.parse(targetImg.getAttribute('data-colors') || '[]');
    var swatches = group.querySelectorAll('.bs-swatch');

    swatches.forEach(function (swatch) {
      swatch.addEventListener('click', function () {
        swatches.forEach(function (s) { s.classList.remove('active'); });
        swatch.classList.add('active');

        var idx = parseInt(swatch.getAttribute('data-index'), 10);
        if (!isNaN(idx) && colors[idx]) {
          targetImg.classList.add('img-fade');
          setTimeout(function () {
            targetImg.src = colors[idx];
            targetImg.classList.remove('img-fade');
          }, 200);
        }
      });
    });
  });
})();

// ------------------------ Mobile Menu Logic
document.addEventListener('DOMContentLoaded', function() {
  const menuTrigger = document.getElementById('mobile-menu-trigger');
  const closeMenu = document.getElementById('close-menu');
  const sideMenu = document.getElementById('side-menu');
  const overlay = document.getElementById('mobile-overlay');
  const submenuToggles = document.querySelectorAll('.submenu-toggle');

  if (menuTrigger && sideMenu && overlay) {
    // Open Menu
    menuTrigger.addEventListener('click', function() {
      sideMenu.classList.add('active');
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden'; // Prevent scrolling
    });

    // Close Menu (via X button)
    if (closeMenu) {
      closeMenu.addEventListener('click', function() {
        sideMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      });
    }

    // Close Menu (via overlay click)
    overlay.addEventListener('click', function() {
      sideMenu.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  }

  // Handle Mobile Submenus
  submenuToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      e.preventDefault();
      const parent = this.parentElement;
      const submenu = parent.querySelector('.submenu');
      
      if (submenu) {
        const isOpen = parent.classList.contains('open');
        
        // Close other open submenus
        document.querySelectorAll('.has-submenu.open').forEach(openItem => {
          if (openItem !== parent) {
            openItem.classList.remove('open');
            const sub = openItem.querySelector('.submenu');
            if (sub) sub.style.display = 'none';
          }
        });

        // Toggle current submenu
        if (isOpen) {
          parent.classList.remove('open');
          submenu.style.display = 'none';
        } else {
          parent.classList.add('open');
          submenu.style.display = 'block';
        }
      }
    });
  });
});

// ------------------------ Sticky Header Logic moved to top of file for reliability






