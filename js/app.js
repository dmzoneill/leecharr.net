hljs.highlightAll();

document.querySelectorAll('a[href^="#"]:not([data-toggle="tab"])').forEach(function(a) {
  a.addEventListener('click', function(e) {
    var target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      window.scrollTo({ top: target.offsetTop - 60, behavior: 'smooth' });
    }
  });
});

window.addEventListener('scroll', function() {
  var sections = ['hero', 'features', 'integration', 'download'];
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
