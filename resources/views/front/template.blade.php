<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Douce Parenthèse</title>
    <link rel="stylesheet" href="{{ asset('css/front/knacss/knacss.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>

    <!-- fancybox -->
    <link rel="stylesheet" href="{{ asset('css/front/fancybox/jquery.fancybox-buttons.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/front/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/front/fancybox/jquery.fancybox-thumbs.css')}}" type="text/css" media="screen" />

</head>
<body>
@include('front.components.header')

<div id="container">

    <div id="wrapper">

        <ul id="ariane">
            <li>Ma douce parenthèse ></li>
            <li><a href="index.htm">Accueil</a></li>
        </ul>

        <section>

            @yield('content')

        </section>

        @if ($sidebar->published === 1)
        <aside class="sidebar">

            {!! $sidebar->content !!}

        </aside>
        @endif
    </div>

</div>

@include('front.components.footer')

<!-- jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- mousewheel plugin (optional) -->
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>

<!-- Add fancyBox -->
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox-buttons.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox-media.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox-thumbs.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
    $(".fancybox").fancybox({
        helpers : {
            overlay : {
                css : {
                    'background' : 'rgba(58, 42, 45, 0.95)'
                }
            }
        }
    });
</script>
</body>
</html>