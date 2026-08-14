hljs.highlightAll();

// Smooth-scroll (exclude Bootstrap tab links and carousel controls)
document.querySelectorAll('a[href^="#"]:not([data-toggle="tab"]):not([data-slide])').forEach(function(a) {
  a.addEventListener('click', function(e) {
    var target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      window.scrollTo({ top: target.offsetTop - 60, behavior: 'smooth' });
    }
  });
});

// Active nav link on scroll
window.addEventListener('scroll', function() {
  var sections = ['hero', 'screenshots', 'features', 'integration', 'download'];
  var scrollY = window.scrollY + 80;
  sections.forEach(function(id) {
    var el = document.getElementById(id);
    if (!el) return;
    var link = document.querySelector('.navbar-nav a[href="#' + id + '"]');
    if (!link) return;
    if (scrollY >= el.offsetTop && scrollY < el.offsetTop + el.offsetHeight) {
      document.querySelectorAll('.navbar-nav li').forEach(function(li){ li.classList.remove('active'); });
      link.parentElement.classList.add('active');
    }
  });
});

// Lightbox
(function() {
  var overlay  = document.getElementById('lightbox');
  var lbImg    = document.getElementById('lightboxImg');
  var closeBtn = document.getElementById('lightboxClose');

  function openLightbox(src, alt) {
    lbImg.src = src;
    lbImg.alt = alt || '';
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    overlay.classList.remove('open');
    document.body.style.overflow = '';
    // clear src after transition so it doesn't flash on next open
    setTimeout(function() { lbImg.src = ''; }, 200);
  }

  // Open on carousel image click (jQuery delegation — reliable with Bootstrap 3)
  $(document).on('click', '.carousel-img', function() {
    openLightbox($(this).data('full') || this.src, this.alt);
  });

  // Close via button, overlay click, or Escape
  closeBtn.addEventListener('click', closeLightbox);
  overlay.addEventListener('click', function(e) {
    if (e.target === overlay) closeLightbox();
  });
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
  });

  // Stop click on the image itself from closing
  lbImg.addEventListener('click', function(e) { e.stopPropagation(); });
})();
