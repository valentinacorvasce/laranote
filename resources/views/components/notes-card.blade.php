@props(['content'])
<div class="col-md-4 col-sm-12">
    <x-cards>
        <div class="card-body">
            <h5 class="card-title">{{$content->title}}</h5>
            <x-tags :tags="$content->tags" />
            <img src="images/default.jpeg" class="card-img-top rounded mx-auto d-block">
            <p class="card-text">{{$content->content}}</p>
            <p class="small">{{$content->author}}</p>
            <p><em>{{$content->created_format}}</em></p>
            <a href="/notes/{{$content->id}}" class="btn btn-success d-block my-btn"><i class="bi bi-book"></i>Leggi tutto </a>
        </div>
    </x-cards>
</div>
