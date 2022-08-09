@extends('layout')

@section('content')
<!--SECTION 1-->
<div class="hero py-5">
    <h1 class="display-2 text-center my-5">SCRIVI LA TUA NOTA</h1>
    <h2 class="text-center">Vuoi lasciare una nota epica per il futuro?</h2>
    <div class="d-flex justify-content-center  my-5">
        <button type="button" class="btn btn-warning register btn-lg">Registrati</button>
    </div>
</div>

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
                <p><em>{{$content->updated_at}}</em></p>
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
