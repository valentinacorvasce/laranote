@extends('layout')

@section('content')
@include('partials._hero-note')
<!-- <h5>{{$note['id']}}</h5>
<h5>{{$note['title']}}</h5>
<h5>{{$note['author']}}</h5>
<h5>{{$note['content']}}</h5> -->
<div class="d-md-inline-flex">
    <x-cards class="backG">
        <div class="card-body">
            <h5 class="card-title">{{$note->title}}</h5>
            <x-tags :tags="$note->tags" />
            <div><img src="{{asset('images/default.jpeg')}}" class="rounded float-start img-fluid mx-5"></div>
            <p class="small">{{$note->author}}</p>
            <p><em>{{$note->created_format}}</em></p>
            <p class="card-text">{{$note->content}}</p>
            <hr>
            <div class="row w-50">
                <div class="col"><a class="btn btn-success" href="edit.html">Modifica
                        <i class="bi bi-pencil-fill mx-3"></i></a></div>

                <div class="col">
                    <form method="" action="">

                        <button type="submit" class="btn btn-danger">Cancella<i class="bi bi-trash-fill"></i></button>
                    </form>
                </div>
            </div>
            </>
    </x-cards>
</div>
@endsection
