(function () {
  var loader = document.currentScript;
  if (!loader) {
    return;
  }
  var target = new URL("../wp-content/themes/leecharr/assets/js/app.js", loader.src);
  document.write('<script src="' + target.href + '"></' + "script>");
})();
