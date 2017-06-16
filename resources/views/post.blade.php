@extends('layouts.default')
@section('content')
    <h1>{{ $posts->title }}</h1><br>
    <p>{{ $posts->body }}</p>
@stop