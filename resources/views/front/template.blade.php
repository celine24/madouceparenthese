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

@yield('content')

</div>

@include('front.components.footer')
</body>
</html>