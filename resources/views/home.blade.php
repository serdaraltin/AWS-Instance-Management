<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Instance Managment</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/vendor/baguetteBox.min.css" />
</head>
<body>
<div id="app">
    <nav style="font-size: large;" class="rainbow-header header-default header-transparent header-center-align header-sticky navbar navbar-expand-md navbar-light bg-white shadow-lg">
        <div class="container" >
            <a style="font-size: large;" class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

                        <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
             {{--           <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
--}}
                                <a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                    @endguest


        </div>
    </nav>

    <main class="page-wrapper">

        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->
        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Portfolio Area  -->
        <div class="rainbow-portfolio-area rainbow-section-gap masonary-wrapper-activation" id="projects">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                             data-sal-delay="100">
                            <h2 class="title w-600 mb--20">Projects</h2>
                            <!-- <p class="description b1">Join to an immersive journey now!</p>-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="rainbow-portfolio-filter filter-button-default messonry-button text-center mb--30">
                            <button data-filter="*" class="is-checked">
                                <span class="filter-text">
                                    All
                                </span>
                            </button>
                            <button data-filter=".cat--unreal">
                                <span class="filter-text">
                                    Unreal Engine
                                </span>
                            </button>
                            <button data-filter=".cat--unity">
                                <span class="filter-text">
                                    Unity
                                </span>
                            </button>
                            <button data-filter=".cat--web">
                                <span class="filter-text">
                                    Web
                                </span>
                            </button>
                        </div>

                        <div class="portfolio-items grid-metro3 mesonry-list">
                            <div class="resizer"></div>

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unreal">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="http://a101.digitales.com.tr" target="_blank">
                                                    <img src="assets/images/instance/a101.png" alt="A101">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">A101</h4>
                                            <span class="subtitle b2">Metaverse</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-0421f0be72c94747e" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-0421f0be72c94747e')"
                                                    class="btn-default btn-large" style="
                                                                                font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-0421f0be72c94747e')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unreal">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="http://office.digitales.com.tr" target="_blank">
                                                    <img src="assets/images/instance/office.png" alt="Office">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Office</h4>
                                            <span class="subtitle b2">Metaverse</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-049705c2bc24af955" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-049705c2bc24af955')"
                                                    class="btn-default btn-large" style=" font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','	i-049705c2bc24af955')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unreal">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="http://cybercity.digitales.com.tr" target="_blank">
                                                    <img src="assets/images/instance/cybercity.png" alt="CyberCity">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Cyber City</h4>
                                            <span class="subtitle b2">Metaverse</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-07b62966944cdc84c" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-07b62966944cdc84c')"
                                                    class="btn-default btn-large" style="
                                                        font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-07b62966944cdc84c')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unreal">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="http://hotel.digitales.com.tr" target="_blank">
                                                    <img src="assets/images/instance/hotel.png" alt="Hotel">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Hotel</h4>
                                            <span class="subtitle b2">Metaverse</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-046a3f830586e8dd7" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-046a3f830586e8dd7')"
                                                    class="btn-default btn-large" style="
                                                font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-046a3f830586e8dd7')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unreal">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="http://museum.digitales.com.tr" target="_blank">
                                                    <img src="assets/images/instance/museum.png" alt="MetaClass">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Museum</h4>
                                            <span class="subtitle b2">Metaverse</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-0548025ddebe1cbf9" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-0548025ddebe1cbf9')"
                                                    class="btn-default btn-large" style="
                                                                                font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-0548025ddebe1cbf9')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unreal">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="http://unreal.digitales.com.tr" target="_blank">
                                                    <img src="assets/images/instance/unreal.png" alt="MetaClass">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Unreal Base</h4>
                                            <span class="subtitle b2">Server</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-07a5be2b5180a2ba6" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-07a5be2b5180a2ba6')"
                                                    class="btn-default btn-large"
                                                    style="
                                                                                                            font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-07a5be2b5180a2ba6')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--unity">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="https://scopsfun.digitales.com.tr/" target="_blank">
                                                    <img src="assets/images/instance/scops.png" alt="MetaClass">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Scops</h4>
                                            <span class="subtitle b2">Metaverse</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-0ae2686767f0ad82c" style="color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-0ae2686767f0ad82c')"
                                                    class="btn-default btn-large"
                                                    style="
                                                                                                            font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-0ae2686767f0ad82c')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-3 cat--web">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="https://digitales.com.tr/" target="_blank">
                                                    <img src="assets/images/instance/web.png" alt="MetaClass">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="content">
                                            <h4 class="title mb--10">Web</h4>
                                            <span class="subtitle b2">Server</span>
                                            <h5 class="title mb--10">
                                                <span>Status:</span>
                                                <span id="i-0922a51b56e325304"" style=" color: gray;">unkown</span>
                                            </h5>
                                        </div>

                                        <div class="text-center" style="padding-bottom: 3rem; ">
                                            <button onclick="powerInstance('start','i-0922a51b56e325304')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Start
                                                </span>
                                            </button>
                                            <button onclick="powerInstance('stop','i-0922a51b56e325304')"
                                                    class="btn-default btn-large" style="font-weight: bold;">
                                                <span style="padding-left: 3rem; padding-right: 3rem;">
                                                    Stop
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Portfolio Area  -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="copyright-right text-center text-lg-end">
                        <p class="copyright-text">Serdar ALTIN 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->
    </main>

</div>
<script>
    const apiUrl = ""
    const instances = [
        "i-046a3f830586e8dd7",
        "i-0548025ddebe1cbf9",
        "i-0ae2686767f0ad82c",
        "i-07a5be2b5180a2ba6",
        "i-07b62966944cdc84c",
        "i-0922a51b56e325304",
        "i-0421f0be72c94747e",
        "i-049705c2bc24af955"
    ]

    function setState(instanceId, stateCode, state) {
        const stateInfo = document.getElementById(instanceId);
        stateInfo.innerHTML = state;

        if (stateCode == 16)
            stateInfo.style.color = "#00ce00";
        else if (stateCode == 64)
            stateInfo.style.color = "#ff2a00";
        else if (stateCode == 80)
            stateInfo.style.color = "gray";
        else if (stateCode == 0)
            stateInfo.style.color = "#00aaff";
    }

    setInterval(
        async function () {
            requestUrl = apiUrl + "?operation=state&instanceId="
            instances.forEach(instanceId => {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", requestUrl + instanceId, true);
                xhr.onload = function (e) {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            //console.log(xhr.responseText);

                            var response = JSON.parse(xhr.responseText);
                            var operation = response.operation;
                            var state = response.state.Name;
                            var stateCode = response.state.Code;

                            setState(instanceId, stateCode, state);

                        } else {
                            console.error(xhr.statusText);
                        }
                    }
                };
                xhr.onerror = function (e) {
                    console.error(xhr.statusText);
                };
                xhr.send(null);

            });
        }, 2000
    );

    async function powerInstance(operation, instanceId) {
        requestUrl = apiUrl + "?operation=" + operation + "&instanceId=" + instanceId
        var xhr = new XMLHttpRequest();
        xhr.open("GET", requestUrl, true);
        xhr.onload = function (e) {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    //console.log(xhr.responseText);

                    var response = JSON.parse(xhr.responseText);
                    var operation = response.operation;
                    var state = response.state.Name;
                    var stateCode = response.state.Code;

                    setState(instanceId, stateCode, state);

                } else {
                    console.error(xhr.statusText);
                }
            }
        };
        xhr.onerror = function (e) {
            console.error(xhr.statusText);
        };
        xhr.send(null);
    }

</script>
<script src="assets/js/vendor/modernizr.min.js"></script>
<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/waypoint.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/counterup.min.js"></script>
<script src="assets/js/vendor/feather.min.js"></script>
<script src="assets/js/vendor/sal.min.js"></script>
<script src="assets/js/vendor/masonry.js"></script>
<script src="assets/js/vendor/imageloaded.js"></script>
<script src="assets/js/vendor/magnify.min.js"></script>
<script src="assets/js/vendor/lightbox.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/easypie.js"></script>
<script src="assets/js/vendor/text-type.js"></script>
<script src="assets/js/vendor/jquery.style.swicher.js"></script>
<script src="assets/js/vendor/js.cookie.js"></script>
<script src="assets/js/vendor/jquery-one-page-nav.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<!--<script defer src="/assets/icons/js/brands.js"></script>
<script defer src="/assets/icons/js/solid.js"></script>
<script defer src="/assets/icons/js/fontawesome.js"></script>-->
<script src="/assets/js/vendor/baguetteBox.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="assets/js/custom.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/assets/js/login.js"></script>
</body>
</html>
