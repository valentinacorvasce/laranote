@extends('layout')

@section('content')
@include('partials._hero-home')

<div class="row">
    @unless (count($contents) == 0)

    @foreach ($contents as $content)
    <div class="col-md-4 col-sm-12">
        <div class="card m-5">
            <div class="card-body">
                <h5 class="card-title">{{$content->title}}</h5>
                <div>
                    <ul class="nav justify-content-center">
                        <li class="nav-item tags">
                            <a class="nav-link" href="à">react</a>
                        </li>
                        <li class="nav-item tags">
                            <a class="nav-link" href="à">node</a>
                        </li>
                    </ul>
                </div>
                <img src="images/default.jpeg" class="card-img-top rounded mx-auto d-block">
                <p class="card-text">{{$content->content}}</p>
                <p class="small">{{$content->author}}</p>
                <p><em>{{$content->created_format}}</em></p>
                <a href="/notes/{{$content->id}}" class="btn btn-success d-block my-btn"><i class="bi bi-book"></i>Leggi tutto </a>
            </div>
        </div>
    </div>
    <!-- <h5>{{$content['id']}}</h5>
    <h5><a href="/notes/{{$content['id']}}">{{$content['title']}}</a></h5>
    <h5>{{$content['content']}}</h5> -->
    @endforeach

    @else
    <h2>Nessun dato</h2>
    @endunless
</div>
@endsection
