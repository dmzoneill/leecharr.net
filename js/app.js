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

// Lightbox — DEBUG VERSION
$(function() {
  console.log('[lightbox] DOM ready');
  console.log('[lightbox] overlay el:', document.getElementById('lightboxOverlay'));
  console.log('[lightbox] img el:', document.getElementById('lightboxImg'));
  console.log('[lightbox] .carousel-img count:', $('.carousel-img').length);

  var $overlay = $('#lightboxOverlay');
  var $img     = $('#lightboxImg');

  function openLightbox(src, alt) {
    console.log('[lightbox] openLightbox called, src:', src);
    $img.attr('src', src).attr('alt', alt || '');
    $overlay.fadeIn(180);
    $('body').css('overflow', 'hidden');
  }

  function closeLightbox() {
    $overlay.fadeOut(150, function() { $img.attr('src', ''); });
    $('body').css('overflow', '');
  }

  // Catch ALL clicks on document and log target info
  $(document).on('click', function(e) {
    var $t = $(e.target);
    console.log('[click] tag:', e.target.tagName,
                '| id:', e.target.id || '(none)',
                '| classes:', e.target.className || '(none)',
                '| is .carousel-img:', $t.is('.carousel-img'));
  });

  $(document).on('click', '.carousel-img', function(e) {
    console.log('[lightbox] carousel-img click matched');
    e.stopPropagation();
    var src = $(this).attr('data-full') || this.src;
    console.log('[lightbox] src to load:', src);
    openLightbox(src, $(this).attr('alt'));
  });

  $('#lightboxClose').on('click', closeLightbox);
  $overlay.on('click', function(e) { if (e.target === this) closeLightbox(); });
  $(document).on('keydown', function(e) { if (e.key === 'Escape') closeLightbox(); });
  $img.on('click', function(e) { e.stopPropagation(); });
});
