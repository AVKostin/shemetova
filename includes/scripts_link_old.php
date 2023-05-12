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
<!-- <link rel="stylesheet" id="context-menu-css" href="css/ep-context-menu.css" media="all"> -->

<link rel="stylesheet" id="elementor-post-100-css" href="css/post-100.css" media="all">
<link rel="stylesheet" id="elementor-post-233-css" href="css/post-233.css" media="all">
<link rel="stylesheet" id="ep-font-css" href="css/ep-font.css" media="all">
<link rel="stylesheet" id="ep-helpdesk-css" href="css/ep-helpdesk.css" media="all">
<!-- <link rel="stylesheet" id="tippy-css" href="css/tippy.css" media="all"> -->
<link rel="stylesheet" id="ep-advanced-heading-css" href="css/ep-advanced-heading.css" media="all">
<link rel="stylesheet" id="elementor-post-369-css" href="css/post-369.css" media="all">
<link rel="stylesheet" id="ep-fancy-list-css" href="css/ep-fancy-list.css" media="all">
<link rel="stylesheet" id="elementor-post-261-css" href="css/post-261.css" media="all">
<!-- <link rel="stylesheet" id="elementor-post-264-css" href="css/post-264.css" media="all"> -->
<!-- <link rel="stylesheet" id="elementor-post-263-css" href="css/post-263.css" media="all"> -->
<!-- <link rel="stylesheet" id="elementor-post-262-css" href="css/post-262.css" media="all"> -->
<link rel="stylesheet" id="ep-tabs-css" href="css/ep-tabs.css" media="all">
<link rel="stylesheet" id="ep-accordion-css" href="css/ep-accordion.css" media="all">
<link rel="stylesheet" id="ep-advanced-image-gallery-css" href="css/ep-advanced-image-gallery.css" media="all">
<link rel="stylesheet" id="elementor-post-304-css" href="css/post-304.css" media="all">
<!-- <link rel="stylesheet" id="ep-custom-carousel-css" href="css/ep-custom-carousel.css" media="all"> -->
<!-- <link rel="stylesheet" id="ep-marker-css" href="css/ep-marker.css" media="all"> -->
<link rel="stylesheet" id="e-animations-css" href="css/animations.min.css" media="all">
<script async  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<!-- <script async  src="js/fep-frontend.js" id="fep-frontend-js"></script> -->
<!-- <script async  src="js/hello-frontend.min.js" id="hello-theme-frontend-js"></script> -->
<!-- <script id="bdt-uikit-js-extra">
var element_pack_ajax_login_config = {
  "ajaxurl": "https:\/\/shemetova.studio\/wp-admin\/admin-ajax.php",
  "language": "ru",
  "loadingmessage": "Sending user info, please wait...",
  "unknownerror": "Unknown error, make sure access is correct!"
};
var ElementPackConfig = {
  "ajaxurl": "https:\/\/shemetova.studio\/wp-admin\/admin-ajax.php",
  "nonce": "c2b612c4d1",
  "data_table": {
    "language": {
      "lengthMenu": "Show _MENU_ Entries",
      "info": "Showing _START_ to _END_ of _TOTAL_ entries",
      "search": "Search :",
      "sZeroRecords": "No matching records found",
      "paginate": {
        "previous": "Previous",
        "next": "Next"
      }
    }
  },
  "contact_form": {
    "sending_msg": "Sending message please wait...",
    "captcha_nd": "Invisible captcha not defined!",
    "captcha_nr": "Could not get invisible captcha response!"
  },
  "mailchimp": {
    "subscribing": "Subscribing you please wait..."
  },
  "search": {
    "more_result": "More Results",
    "search_result": "SEARCH RESULT",
    "not_found": "not found"
  },
  "elements_data": {
    "sections": [],
    "columns": [],
    "widgets": []
  }
};
</script> -->
<script async  src="js/bdt-uikit.min.js" id="bdt-uikit-js"></script>
<script  async src="js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
<!-- <script async  src="js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script> -->
<!-- <script  async src="js/waypoints.min.js" id="elementor-waypoints-js"></script> -->
<!-- <script  async src="js/core.min.js" id="jquery-ui-core-js"></script> -->
<!-- <script id="elementor-frontend-js-before">
var elementorFrontendConfig = {
  "environmentMode": {
    "edit": false,
    "wpPreview": false,
    "isScriptDebug": false
  },
  "i18n": {
    "shareOnFacebook": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Facebook",
    "shareOnTwitter": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Twitter",
    "pinIt": "\u0417\u0430\u043f\u0438\u043d\u0438\u0442\u044c",
    "download": "\u0421\u043a\u0430\u0447\u0430\u0442\u044c",
    "downloadImage": "\u0421\u043a\u0430\u0447\u0430\u0442\u044c \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435",
    "fullscreen": "\u0412\u043e \u0432\u0435\u0441\u044c \u044d\u043a\u0440\u0430\u043d",
    "zoom": "\u0423\u0432\u0435\u043b\u0438\u0447\u0435\u043d\u0438\u0435",
    "share": "\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f",
    "playVideo": "\u041f\u0440\u043e\u0438\u0433\u0440\u0430\u0442\u044c \u0432\u0438\u0434\u0435\u043e",
    "previous": "\u041d\u0430\u0437\u0430\u0434",
    "next": "\u0414\u0430\u043b\u0435\u0435",
    "close": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c"
  },
  "is_rtl": false,
  "breakpoints": {
    "xs": 0,
    "sm": 480,
    "md": 768,
    "lg": 1025,
    "xl": 1440,
    "xxl": 1600
  },
  "responsive": {
    "breakpoints": {
      "mobile": {
        "label": "\u0422\u0435\u043b\u0435\u0444\u043e\u043d",
        "value": 767,
        "default_value": 767,
        "direction": "max",
        "is_enabled": true
      },
      "mobile_extra": {
        "label": "\u0422\u0435\u043b\u0435\u0444\u043e\u043d \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435",
        "value": 880,
        "default_value": 880,
        "direction": "max",
        "is_enabled": false
      },
      "tablet": {
        "label": "\u041f\u043b\u0430\u043d\u0448\u0435\u0442",
        "value": 1024,
        "default_value": 1024,
        "direction": "max",
        "is_enabled": true
      },
      "tablet_extra": {
        "label": "\u041f\u043b\u0430\u043d\u0448\u0435\u0442 \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435",
        "value": 1200,
        "default_value": 1200,
        "direction": "max",
        "is_enabled": false
      },
      "laptop": {
        "label": "\u041d\u043e\u0443\u0442\u0431\u0443\u043a",
        "value": 1366,
        "default_value": 1366,
        "direction": "max",
        "is_enabled": false
      },
      "widescreen": {
        "label": "\u0428\u0438\u0440\u043e\u043a\u043e\u0444\u043e\u0440\u043c\u0430\u0442\u043d\u044b\u0435",
        "value": 2400,
        "default_value": 2400,
        "direction": "min",
        "is_enabled": false
      }
    }
  },
  "version": "3.11.5",
  "is_static": false,
  "experimentalFeatures": {
    "e_dom_optimization": true,
    "e_optimized_assets_loading": true,
    "e_optimized_css_loading": true,
    "e_font_icon_svg": true,
    "a11y_improvements": true,
    "additional_custom_breakpoints": true,
    "container": true,
    "e_swiper_latest": true,
    "theme_builder_v2": true,
    "hello-theme-header-footer": true,
    "landing-pages": true,
    "nested-elements": true,
    "e_lazyload": true,
    "kit-elements-defaults": true,
    "page-transitions": true,
    "notes": true,
    "loop": true,
    "form-submissions": true,
    "e_scroll_snap": true
  },
  "urls": {
    "assets": "http:\/\/shemetova.studio\/wp-content\/plugins\/elementor\/assets\/"
  },
  "swiperClass": "swiper",
  "settings": {
    "page": [],
    "editorPreferences": []
  },
  "kit": {
    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
    "global_image_lightbox": "yes",
    "lightbox_enable_counter": "yes",
    "lightbox_enable_fullscreen": "yes",
    "lightbox_enable_zoom": "yes",
    "lightbox_enable_share": "yes",
    "lightbox_title_src": "title",
    "lightbox_description_src": "description",
    "hello_header_logo_type": "logo",
    "hello_header_menu_layout": "horizontal",
    "hello_footer_logo_type": "logo"
  },
  "post": {
    "id": 12,
    "title": "%D0%A1%D0%B0%D0%BB%D0%BE%D0%BD%20%D0%9A%D1%80%D0%B0%D1%81%D0%B8%20%22%D0%A8%D0%B5%D0%BC%D0%B5%D1%82%D0%BE%D0%B2%D0%B0%20%D0%A1%D1%82%D1%83%D0%B4%D0%B8%D0%BE%22%20%D0%BD%D0%B0%20%D0%A2%D1%80%D0%BE%D1%94%D1%89%D0%B8%D0%BD%D1%96%20%7C%20Shemetova%20Studio%20%E2%80%94%20%D0%A1%D1%82%D1%83%D0%B4%D1%96%D1%8F%20%D0%9A%D1%80%D0%B0%D1%81%D0%B8%20%7C%20%D0%A2%D1%80%D0%BE%D1%94%D1%89%D0%B8%D0%BD%D0%B0%20%7C%20%D0%9F%D1%80%D0%B0%D1%86%D1%8E%D1%94%D0%BC%D0%BE%20%D0%9D%D0%B0%D0%B2%D1%96%D1%82%D1%8C%20%D0%B1%D0%B5%D0%B7%20%D0%A1%D0%B2%D1%96%D1%82%D0%BB%D0%B0",
    "excerpt": "",
    "featuredImage": false
  }
};
</script> -->
<script async  src="js/frontend.min_1.js" id="elementor-frontend-js"></script>
<!-- <script async  src="js/ep-sound-effects.min.js" id="ep-sound-effects-js"></script> -->
<script async  src="js/popper.min.js" id="popper-js"></script>
<script async  src="js/tippy.all.min.js" id="tippyjs-js"></script>
<!-- <script async  src="js/ep-helpdesk.min.js" id="ep-helpdesk-js"></script> -->
<!-- <script async  src="js/ep-advanced-heading.min.js" id="ep-advanced-heading-js"></script> -->
<!-- <script async  src="js/ep-tabs.min.js" id="ep-tabs-js"></script> -->
<!-- <script async  src="js/ep-accordion.min.js" id="ep-accordion-js"></script> -->
<script async  src="js/imagesloaded.min.js" id="imagesloaded-js"></script>
<script async  src="js/jquery.justifiedGallery.min.js" id="ep-justified-gallery-js"></script>
<script async  src="js/vanilla-tilt.min.js" id="tilt-js"></script>
<!-- <script async  src="js/ep-advanced-image-gallery.min.js" id="ep-advanced-image-gallery-js"></script> -->
<!-- <script async  src="js/ep-custom-carousel.min.js" id="ep-custom-carousel-js"></script> -->
<!-- <script async  src="js/ep-marker.min.js" id="ep-marker-js"></script> -->
<!-- <script async  src="js/helper.min.js" id="element-pack-helper-js"></script> -->
<script async  src="js/webpack-pro.runtime.min.js" id="elementor-pro-webpack-runtime-js"></script>
<script async  src="js/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
<script async  src="js/wp-polyfill.min.js" id="wp-polyfill-js"></script>
<script async  src="js/hooks.min.js" id="wp-hooks-js"></script>
<script async  src="js/i18n.min.js" id="wp-i18n-js"></script>
<!-- <script async  id="wp-i18n-js-after">
wp.i18n.setLocaleData({
  'text direction\u0004ltr': ['ltr']
});
</script> -->
<!-- <script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {
  "ajaxurl": "https:\/\/shemetova.studio\/wp-admin\/admin-ajax.php",
  "nonce": "e0a63505cc",
  "urls": {
    "assets": "http:\/\/shemetova.studio\/wp-content\/plugins\/elementor-pro\/assets\/",
    "rest": "https:\/\/shemetova.studio\/wp-json\/"
  },
  "shareButtonsNetworks": {
    "facebook": {
      "title": "Facebook",
      "has_counter": true
    },
    "twitter": {
      "title": "Twitter"
    },
    "linkedin": {
      "title": "LinkedIn",
      "has_counter": true
    },
    "pinterest": {
      "title": "Pinterest",
      "has_counter": true
    },
    "reddit": {
      "title": "Reddit",
      "has_counter": true
    },
    "vk": {
      "title": "VK",
      "has_counter": true
    },
    "odnoklassniki": {
      "title": "OK",
      "has_counter": true
    },
    "tumblr": {
      "title": "Tumblr"
    },
    "digg": {
      "title": "Digg"
    },
    "skype": {
      "title": "Skype"
    },
    "stumbleupon": {
      "title": "StumbleUpon",
      "has_counter": true
    },
    "mix": {
      "title": "Mix"
    },
    "telegram": {
      "title": "Telegram"
    },
    "pocket": {
      "title": "Pocket",
      "has_counter": true
    },
    "xing": {
      "title": "XING",
      "has_counter": true
    },
    "whatsapp": {
      "title": "WhatsApp"
    },
    "email": {
      "title": "Email"
    },
    "print": {
      "title": "Print"
    }
  },
  "facebook_sdk": {
    "lang": "ru_RU",
    "app_id": ""
  },
  "lottie": {
    "defaultAnimationUrl": "http:\/\/shemetova.studio\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
  }
};
</script> -->
<!-- <script async src="js/frontend.min.js" id="elementor-pro-frontend-js"></script> -->
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
