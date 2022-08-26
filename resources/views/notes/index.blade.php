@extends('layout')

@section('content')
@include('partials._hero-home')

<div class="row">
    @unless (count($contents) == 0)

    @foreach ($contents as $content)
    <x-notes-card :content="$content" />
    <!-- <h5>{{$content['id']}}</h5>
    <h5><a href="/notes/{{$content['id']}}">{{$content['title']}}</a></h5>
    <h5>{{$content['content']}}</h5> -->
    @endforeach

    @else
    <h2>Nessun dato</h2>
    @endunless
</div>
@endsection
