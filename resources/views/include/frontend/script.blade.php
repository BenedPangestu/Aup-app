    <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

    <!--
                Codebase JS
    
                Custom functionality including Blocks/Layout API as well as other vital and optional helpers
                webpack is putting everything together at assets/_es6/main/app.js
            -->
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/slick/slick.min.js')}}"></script>

    <!-- Page JS Helpers (Slick Slider plugin) -->
    <script>
        jQuery(function() {
            Codebase.helpers('slick');
        });
    </script>
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Page JS Helpers (Magnific Popup plugin) -->
    <script>
        jQuery(function() {
            Codebase.helpers('magnific-popup');
        });
    </script>
