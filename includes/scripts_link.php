<script>
var pseudo_links = document.querySelectorAll(".pseudo-clearfy-link");
for (var i = 0; i < pseudo_links.length; i++) {
  pseudo_links[i].addEventListener("click", function(e) {
    window.open(e.target.getAttribute("data-uri"));
  });
}
</script>
<script type="text/javascript">
const lazyloadRunObserver = () => {
  const dataAttribute = 'data-e-bg-lazyload';
  const lazyloadBackgrounds = document.querySelectorAll(`[${dataAttribute}]:not(.lazyloaded)`);
  const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        let lazyloadBackground = entry.target;
        const lazyloadSelector = lazyloadBackground.getAttribute(dataAttribute);
        if (lazyloadSelector) {
          lazyloadBackground = entry.target.querySelector(lazyloadSelector);
        }
        lazyloadBackground.classList.add('lazyloaded');
        lazyloadBackgroundObserver.unobserve(entry.target);
      }
    });
  }, {
    rootMargin: '100px 0px 100px 0px'
  });
  lazyloadBackgrounds.forEach((lazyloadBackground) => {
    lazyloadBackgroundObserver.observe(lazyloadBackground);
  });
};
const events = [
  'DOMContentLoaded',
  'elementor/lazyload/observe',
];
events.forEach((event) => {
  document.addEventListener(event, lazyloadRunObserver);
});
</script>
<link rel="stylesheet" id="elementor-post-100-css" href="css/post-100.css" media="all">
<link rel="stylesheet" id="elementor-post-233-css" href="css/post-233.css" media="all">
<link rel="stylesheet" id="ep-font-css" href="css/ep-font.css" media="all">
<link rel="stylesheet" id="ep-helpdesk-css" href="css/ep-helpdesk.css" media="all">
<!-- <link rel="stylesheet" id="tippy-css" href="css/tippy.css" media="all"> -->
<link rel="stylesheet" id="ep-advanced-heading-css" href="css/ep-advanced-heading.css" media="all">
<link rel="stylesheet" id="elementor-post-369-css" href="css/post-369.css" media="all">
<link rel="stylesheet" id="ep-fancy-list-css" href="css/ep-fancy-list.css" media="all">
<link rel="stylesheet" id="elementor-post-261-css" href="css/post-261.css" media="all">
<link rel="stylesheet" id="ep-tabs-css" href="css/ep-tabs.css" media="all">
<link rel="stylesheet" id="ep-accordion-css" href="css/ep-accordion.css" media="all">
<link rel="stylesheet" id="ep-advanced-image-gallery-css" href="css/ep-advanced-image-gallery.css" media="all">
<link rel="stylesheet" id="elementor-post-304-css" href="css/post-304.css" media="all">
<link rel="stylesheet" id="e-animations-css" href="css/animations.min.css" media="all">
<script async  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script async  src="js/bdt-uikit.min.js" id="bdt-uikit-js"></script>
<script src="js/to-top.js"></script>
<script  async src="js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
<script async  src="js/frontend.min_1.js" id="elementor-frontend-js"></script>
<script async  src="js/popper.min.js" id="popper-js"></script>
<script async  src="js/tippy.all.min.js" id="tippyjs-js"></script>
<script async  src="js/imagesloaded.min.js" id="imagesloaded-js"></script>
<script async  src="js/jquery.justifiedGallery.min.js" id="ep-justified-gallery-js"></script>
<script async  src="js/vanilla-tilt.min.js" id="tilt-js"></script>
<script async  src="js/webpack-pro.runtime.min.js" id="elementor-pro-webpack-runtime-js"></script>
<script async  src="js/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
<script async  src="js/wp-polyfill.min.js" id="wp-polyfill-js"></script>
<script async  src="js/hooks.min.js" id="wp-hooks-js"></script>
<!-- <script async  src="js/i18n.min.js" id="wp-i18n-js"></script> -->
<script  async src="js/elements-handlers.min.js" id="pro-elements-handlers-js"></script>
<script>
! function() {
  var t = !1;
  try {
    var e = Object.defineProperty({}, "passive", {
      get: function() {
        t = !0
      }
    });
    window.addEventListener("test", null, e)
  } catch (t) {}
  return t
}() || function(i) {
  var o = !0,
    s = !1;
  EventTarget.prototype.addEventListener = function(t, e, n) {
    var r = "object" == typeof n,
      a = r ? n.capture : n;
    n = r ? n : {}, "touchstart" != t && "scroll" != t && "wheel" != t || (n.passive = void 0 !== n.passive ? n
      .passive : o), n.capture = void 0 !== a ? a : s, i.call(this, t, e, n)
  }
}(EventTarget.prototype.addEventListener);
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVHFSFM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
