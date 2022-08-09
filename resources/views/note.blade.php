@extends('layout');

@section('content')
<h5>{{$note['id']}}</h5>
<h5>{{$note['title']}}</h5>
<h5>{{$note['author']}}</h5>
<h5>{{$note['content']}}</h5>
@endsection
