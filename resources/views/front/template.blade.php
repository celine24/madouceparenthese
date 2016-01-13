<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Douce Parenthèse</title>
    <link rel="stylesheet" href="{{ asset('css/front/knacss/knacss.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>
    <link href="{{ asset('css/front/fancybox/fancybox.css') }}" rel="stylesheet">

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

<script src="{{ asset('js/jquery-1.4.3.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>
<script src="{{ asset('js/fancybox/jquery.easing-1.3.pack.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".img_fancybox").fancybox();
    });
</script>
</body>
</html>