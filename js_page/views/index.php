
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>Abstract Codify</title>

    <!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Core Meta Data -->
    <meta name="description" content="abstract codify code 2012-2013, Abstractcodify.com All Rights Reserved." />
    <meta name="keywords" content="abstract codify code " />
    <meta name="author" content="abstract codify code">

    <!-- Open Graph Meta Data -->
    <meta property="og:description" content="Abstractcodify.com All Rights Reserved.">
    <meta property="og:image" content="https://secure.gravatar.com/avatar/65139e11d1e6b263135e95310b593a95?s=80">
    <meta property="og:site_name" content="Abstract Codify">
    <meta property="og:title" content="Abstract Codify">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.abstractcodify.com">

    <!-- Humans -->
    <!-- <link rel="author" href="humans.txt" /> -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="modules/js_page/views/script/styles.css"/>


</head>
<body>

    <div id="fb-root"></div>

    <div id="container" class="wrapper">
        <ul id="scene" class="scene unselectable"
            data-friction-x="0.1"
            data-friction-y="0.1"
            data-scalar-x="25"
            data-scalar-y="15">
            <li class="layer" data-depth="0.00"></li>
            <li class="layer" data-depth="0.10"><div class="background"></div></li>
            <li class="layer" data-depth="0.10"><div class="light orange b phase-4"></div></li>
            <li class="layer" data-depth="0.10"><div class="light purple c phase-5"></div></li>
            <li class="layer" data-depth="0.10"><div class="light orange d phase-3"></div></li>
            <li class="layer" data-depth="0.15">
                <ul class="rope depth-10">
                    <li><img src="modules/js_page/views/script/rope.png" alt="Rope"></li>
                    <li class="hanger position-2">
                        <div class="board cloud-2 swing-1"></div>
                    </li>
                    <li class="hanger position-4">
                        <div class="board cloud-1 swing-3"></div>
                    </li>
                    <li class="hanger position-8">
                        <div class="board birds swing-5"></div>
                    </li>
                </ul>
            </li>
            <li class="layer" data-depth="0.20"><h1 class="title"><em>Ab</em>stract codify</h1></li>
            <li class="layer" data-depth="0.30">
                <ul class="rope depth-30">
                    <li><img src="modules/js_page/views/script/rope.png" alt="Rope"></li>
                    <li class="hanger position-1">
                        <div class="board cloud-1 swing-3"></div>
                    </li>
                    <li class="hanger position-5">
                        <div class="board cloud-4 swing-1"></div>
                    </li>
                </ul>
            </li>
            <li class="layer" data-depth="0.30"><div class="wave paint depth-30"></div></li>
            <li class="layer" data-depth="0.40"><div class="wave plain depth-40"></div></li>
            <li class="layer" data-depth="0.50"><div class="wave paint depth-50"></div></li>
            <li class="layer" data-depth="0.60"><div class="lighthouse depth-60"></div></li>
            <li class="layer" data-depth="0.60">
                <ul class="rope depth-60">
                    <li><img src="modules/js_page/views/script/rope.png" alt="Rope"></li>
                    <li class="hanger position-3">
                        <div class="board birds swing-5"></div>
                    </li>
                    <li class="hanger position-6">
                        <div class="board cloud-2 swing-2"></div>
                    </li>
                    <li class="hanger position-8">
                        <div class="board cloud-3 swing-4"></div>
                    </li>
                </ul>
            </li>
            <li class="layer" data-depth="0.60"><div class="wave plain depth-60"></div></li>
            <li class="layer" data-depth="0.80"><div class="wave plain depth-80"></div></li>
            <li class="layer" data-depth="1.00"><div class="wave paint depth-100"></div></li>
        </ul>




    </div>

    <!-- Scripts -->
    <script src="modules/js_page/views/script/libraries.min.js"></script>
    <script src="modules/js_page/views/script/jquery.parallax.js"></script>
    <script>

    // jQuery Selections
    var $html = $('html'),
            $container = $('#container'),
            $prompt = $('#prompt'),
            $toggle = $('#toggle'),
            $about = $('#about'),
            $scene = $('#scene');

    // Hide browser menu.
    (function() {
        setTimeout(function(){window.scrollTo(0,0);},0);
    })();

    // Setup FastClick.
    FastClick.attach(document.body);

    // Add touch functionality.
    if (Hammer.HAS_TOUCHEVENTS) {
        $container.hammer({drag_lock_to_axis: true});
        _.tap($html, 'a,button,[data-tap]');
    }

    // Add touch or mouse class to html element.
    $html.addClass(Hammer.HAS_TOUCHEVENTS ? 'touch' : 'mouse');

    // Resize handler.
    (resize = function() {
        $scene[0].style.width = window.innerWidth + 'px';
        $scene[0].style.height = window.innerHeight + 'px';
        if (!$prompt.hasClass('hide')) {
            if (window.innerWidth < 600) {
                $toggle.addClass('hide');
            } else {
                $toggle.removeClass('hide');
            }
        }
    })();

    // Attach window listeners.
    window.onresize = _.debounce(resize, 200);
    window.onscroll = _.debounce(resize, 200);

    function showDetails() {
        $about.removeClass('hide');
        $toggle.removeClass('i');
    }

    function hideDetails() {
        $about.addClass('hide');
        $toggle.addClass('i');
    }

    // Listen for toggle click event.
    $toggle.on('click', function(event) {
        $toggle.hasClass('i') ? showDetails() : hideDetails();
    });

    // Pretty simple huh?
    $scene.parallax();

    // Check for orientation support.
    setTimeout(function() {
        if ($scene.data('mode') === 'cursor') {
            $prompt.removeClass('hide');
            if (window.innerWidth < 600) $toggle.addClass('hide');
            $prompt.on('click', function(event) {
                $prompt.addClass('hide');
                if (window.innerWidth < 600) {
                    setTimeout(function() {
                        $toggle.removeClass('hide');
                    },1200);
                }
            });
        }
    },1000);


    </script>
<a href="https://plus.google.com/110954411429417189705" rel="publisher">Google+</a>
</body>
</html>
