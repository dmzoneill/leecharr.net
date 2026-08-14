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

// Lightbox — Bootstrap modal
$(document).on('click', '.carousel-img', function() {
  var src = $(this).data('full') || this.src;
  $('#lightboxImg').attr('src', src).attr('alt', $(this).attr('alt') || '');
  $('#lightboxModal').modal('show');
});

// Clear src when modal closes (avoids flash of old image on next open)
$('#lightboxModal').on('hidden.bs.modal', function() {
  $('#lightboxImg').attr('src', '');
});
