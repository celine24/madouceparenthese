<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Douce Parenthèse</title>
    <link rel="stylesheet" href="{{ asset('css/front/knacss/knacss.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>

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
</body>
</html>