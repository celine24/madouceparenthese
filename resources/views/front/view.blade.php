@extends('front.template')

@section('content')


    @foreach ($posts as $post)
    <article>
        <h1>{{$post->title}}</h1>

        {!! $post->content !!}
    </article>
    @endforeach
@stop
